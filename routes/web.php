<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminFaqController;
use App\Http\Controllers\Admin\AdminInquiryController;
use App\Http\Controllers\Admin\AdminLocationController;
use App\Http\Controllers\Admin\AdminReelController;
use App\Http\Controllers\Admin\AdminServiceController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Admin\AdminSpecialistController;
use App\Http\Controllers\ClinicController;
use Illuminate\Support\Facades\Route;

// Language Switcher
Route::get('/locale/{locale}', [ClinicController::class, 'switchLocale'])->name('locale.switch');

// Appointment & Inquiry Form Submission
Route::post('/inquiry', [ClinicController::class, 'storeInquiry'])->name('inquiry.store');

// ==========================================
// ADMIN CONTROL PANEL ROUTES
// ==========================================
Route::prefix('admin')->name('admin.')->group(function () {
    // Guest Admin Auth
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('login');
        Route::post('/login', [AdminAuthController::class, 'login']);
    });

    // Authenticated Admin Dashboard & CRUD
    Route::middleware('auth')->group(function () {
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');
        Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');
        Route::get('/dashboard', [AdminDashboardController::class, 'index']);

        // Content Management CRUDs
        Route::resource('specialists', AdminSpecialistController::class)->except(['show']);
        Route::resource('locations', AdminLocationController::class)->except(['show']);
        Route::resource('reels', AdminReelController::class)->except(['show']);
        Route::resource('services', AdminServiceController::class)->except(['show']);
        Route::resource('faqs', AdminFaqController::class)->except(['show']);

        // Inquiries & Appointments
        Route::get('/inquiries', [AdminInquiryController::class, 'index'])->name('inquiries.index');
        Route::get('/inquiries/{inquiry}', [AdminInquiryController::class, 'show'])->name('inquiries.show');
        Route::patch('/inquiries/{inquiry}/status', [AdminInquiryController::class, 'updateStatus'])->name('inquiries.status');
        Route::delete('/inquiries/{inquiry}', [AdminInquiryController::class, 'destroy'])->name('inquiries.destroy');

        // Site Settings
        Route::get('/settings', [AdminSettingController::class, 'index'])->name('settings.index');
        Route::post('/settings', [AdminSettingController::class, 'update'])->name('settings.update');
    });
});

// Provide standard 'login' route alias for Laravel auth redirect
Route::get('/login', fn () => redirect()->route('admin.login'))->name('login');

// ==========================================
// PUBLIC FRONTEND CLINIC ROUTES
// ==========================================
$registerClinicRoutes = function ($prefix = '') {
    $group = $prefix ? Route::prefix($prefix) : Route::middleware([]);

    $group->group(function () use ($prefix) {
        $namePrefix = $prefix ? "{$prefix}." : '';

        Route::get('/', [ClinicController::class, 'home'])->name("{$namePrefix}home");
        Route::get('/about', [ClinicController::class, 'about'])->name("{$namePrefix}about");
        Route::get('/services', [ClinicController::class, 'services'])->name("{$namePrefix}services");
        Route::get('/services/{slug}', [ClinicController::class, 'serviceDetail'])->name("{$namePrefix}service.detail");
        
        // Direct Service shortcuts
        Route::get('/clinical-nutrition', fn () => redirect()->route("{$namePrefix}service.detail", 'clinical-nutrition'));
        Route::get('/iv-drips', fn () => redirect()->route("{$namePrefix}service.detail", 'iv-drips'));
        Route::get('/recovery-physiotherapy', fn () => redirect()->route("{$namePrefix}service.detail", 'recovery-physiotherapy'));
        Route::get('/cosmetic-services', fn () => redirect()->route("{$namePrefix}service.detail", 'cosmetic-services'));
        Route::get('/laser-hair-removal', fn () => redirect()->route("{$namePrefix}service.detail", 'laser-hair-removal'));

        Route::get('/specialists', [ClinicController::class, 'specialists'])->name("{$namePrefix}specialists");
        Route::get('/locations', [ClinicController::class, 'locations'])->name("{$namePrefix}locations");
        Route::get('/media', [ClinicController::class, 'media'])->name("{$namePrefix}media");
        Route::get('/faq', [ClinicController::class, 'faq'])->name("{$namePrefix}faq");
        Route::get('/contact', [ClinicController::class, 'contact'])->name("{$namePrefix}contact");
    });
};

// Register English/Default Routes
$registerClinicRoutes();

// Register Arabic Routes
$registerClinicRoutes('ar');
