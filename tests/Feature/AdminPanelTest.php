<?php

namespace Tests\Feature;

use App\Models\Specialist;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminPanelTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    public function test_guest_is_redirected_to_admin_login(): void
    {
        $response = $this->get('/admin');
        $response->assertRedirect('/admin/login');
    }

    public function test_admin_login_screen_can_be_rendered(): void
    {
        $response = $this->get('/admin/login');
        $response->assertStatus(200);
        $response->assertSee('Control Panel');
        $response->assertSee('SMAI Wellness Clinics');
    }

    public function test_admin_can_authenticate_with_valid_credentials(): void
    {
        $response = $this->post('/admin/login', [
            'email' => 'admin@smai.com.eg',
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect('/admin');
    }

    public function test_admin_cannot_authenticate_with_invalid_password(): void
    {
        $this->post('/admin/login', [
            'email' => 'admin@smai.com.eg',
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
    }

    public function test_authenticated_admin_can_access_all_panel_sections(): void
    {
        $admin = User::where('email', 'admin@smai.com.eg')->first();

        $sections = [
            '/admin',
            '/admin/specialists',
            '/admin/specialists/create',
            '/admin/locations',
            '/admin/locations/create',
            '/admin/reels',
            '/admin/reels/create',
            '/admin/services',
            '/admin/services/create',
            '/admin/faqs',
            '/admin/faqs/create',
            '/admin/inquiries',
            '/admin/settings',
        ];

        foreach ($sections as $uri) {
            $response = $this->actingAs($admin)->get($uri);
            $response->assertStatus(200);
        }
    }

    public function test_admin_can_create_and_delete_specialist(): void
    {
        $admin = User::where('email', 'admin@smai.com.eg')->first();

        $response = $this->actingAs($admin)->post('/admin/specialists', [
            'name_en' => 'Dr. Test Specialist',
            'name_ar' => 'د. طبيب تجريبي',
            'role_en' => 'Consultant of Health',
            'role_ar' => 'استشاري الصحة',
            'quals_en' => 'MD, PhD',
            'quals_ar' => 'دكتوراه الطب',
            'image_id' => '1',
            'order' => 99,
            'is_active' => '1',
            'branches' => ['Zamalek', 'Sheikh Zayed'],
        ]);

        $response->assertRedirect('/admin/specialists');
        $this->assertDatabaseHas('specialists', [
            'name_en' => 'Dr. Test Specialist',
            'order' => 99,
        ]);

        $created = Specialist::where('name_en', 'Dr. Test Specialist')->first();
        $delResponse = $this->actingAs($admin)->delete('/admin/specialists/' . $created->id);
        $delResponse->assertRedirect('/admin/specialists');
        $this->assertDatabaseMissing('specialists', [
            'id' => $created->id,
        ]);
    }

    public function test_admin_can_update_site_settings(): void
    {
        $admin = User::where('email', 'admin@smai.com.eg')->first();

        $response = $this->actingAs($admin)->post('/admin/settings', [
            'phone' => '012 99999999',
            'email' => 'newadmin@smai.com.eg',
        ]);

        $response->assertSessionHas('success');
        $this->assertDatabaseHas('site_settings', [
            'key' => 'phone',
            'value' => '012 99999999',
        ]);
    }

    public function test_admin_can_logout(): void
    {
        $admin = User::where('email', 'admin@smai.com.eg')->first();

        $response = $this->actingAs($admin)->post('/admin/logout');
        $this->assertGuest();
        $response->assertRedirect('/admin/login');
    }
}
