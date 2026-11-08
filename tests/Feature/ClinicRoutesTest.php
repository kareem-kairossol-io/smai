<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ClinicRoutesTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    public function test_all_english_routes_return_ok(): void
    {
        $routes = [
            '/',
            '/about',
            '/services',
            '/services/clinical-nutrition',
            '/services/iv-drips',
            '/services/recovery-physiotherapy',
            '/services/cosmetic-services',
            '/services/laser-hair-removal',
            '/specialists',
            '/locations',
            '/media',
            '/faq',
            '/contact',
        ];

        foreach ($routes as $route) {
            $response = $this->get($route);
            $response->assertStatus(200);
        }
    }

    public function test_all_arabic_routes_return_ok(): void
    {
        $routes = [
            '/ar',
            '/ar/about',
            '/ar/services',
            '/ar/services/clinical-nutrition',
            '/ar/services/iv-drips',
            '/ar/services/recovery-physiotherapy',
            '/ar/services/cosmetic-services',
            '/ar/services/laser-hair-removal',
            '/ar/specialists',
            '/ar/locations',
            '/ar/media',
            '/ar/faq',
            '/ar/contact',
        ];

        foreach ($routes as $route) {
            $response = $this->get($route);
            $response->assertStatus(200);
        }
    }

    public function test_inquiry_form_submission(): void
    {
        $response = $this->post('/inquiry', [
            'name' => 'Ahmed Test',
            'phone' => '01234567890',
            'email' => 'ahmed@example.com',
            'service' => 'Clinical Nutrition',
            'branch' => 'Al Ahly Club — Nasr City',
            'message' => 'Test booking appointment',
        ]);

        $response->assertSessionHas('success');
        $this->assertDatabaseHas('inquiries', [
            'name' => 'Ahmed Test',
            'phone' => '01234567890',
        ]);
    }
}
