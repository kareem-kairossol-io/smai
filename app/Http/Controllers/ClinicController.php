<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Inquiry;
use App\Models\Location;
use App\Models\MediaReel;
use App\Models\Service;
use App\Models\SiteSetting;
use App\Models\Specialist;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClinicController extends Controller
{
    /**
     * Get shared settings across pages
     */
    protected function getSettings(): array
    {
        return SiteSetting::all()->pluck('value', 'key')->toArray();
    }

    /**
     * Homepage
     */
    public function home(): View
    {
        $specialists = Specialist::where('is_active', true)->orderBy('order')->get();
        $locations = Location::where('is_active', true)->orderBy('order')->get();
        $reels = MediaReel::where('is_active', true)->orderBy('order')->get();
        $services = Service::where('is_active', true)->orderBy('order')->get();
        $settings = $this->getSettings();

        return view('pages.home', compact('specialists', 'locations', 'reels', 'services', 'settings'));
    }

    /**
     * About page
     */
    public function about(): View
    {
        $specialists = Specialist::where('is_active', true)->orderBy('order')->get();
        $settings = $this->getSettings();

        return view('pages.about', compact('specialists', 'settings'));
    }

    /**
     * Services Overview page
     */
    public function services(): View
    {
        $services = Service::where('is_active', true)->orderBy('order')->get();
        $settings = $this->getSettings();

        return view('pages.services.index', compact('services', 'settings'));
    }

    /**
     * Service Detail page
     */
    public function serviceDetail(string $slug): View
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        $allServices = Service::where('is_active', true)->orderBy('order')->get();
        $settings = $this->getSettings();

        // Check if there is a customized template for this service
        $viewName = 'pages.services.' . str_replace('-', '_', $slug);
        if (view()->exists($viewName)) {
            return view($viewName, compact('service', 'allServices', 'settings'));
        }

        return view('pages.services.show', compact('service', 'allServices', 'settings'));
    }

    /**
     * Specialists / Doctors directory
     */
    public function specialists(): View
    {
        $specialists = Specialist::where('is_active', true)->orderBy('order')->get();
        $locations = Location::where('is_active', true)->orderBy('order')->get();
        $settings = $this->getSettings();

        return view('pages.specialists', compact('specialists', 'locations', 'settings'));
    }

    /**
     * Locations page
     */
    public function locations(): View
    {
        $locations = Location::where('is_active', true)->orderBy('order')->get();
        $settings = $this->getSettings();

        return view('pages.locations', compact('locations', 'settings'));
    }

    /**
     * Media & News page
     */
    public function media(): View
    {
        $reels = MediaReel::where('is_active', true)->orderBy('order')->get();
        $settings = $this->getSettings();

        return view('pages.media', compact('reels', 'settings'));
    }

    /**
     * FAQ page
     */
    public function faq(): View
    {
        $faqs = Faq::where('is_active', true)->orderBy('order')->get()->groupBy('category_slug');
        $settings = $this->getSettings();

        return view('pages.faq', compact('faqs', 'settings'));
    }

    /**
     * Contact & Booking page
     */
    public function contact(): View
    {
        $locations = Location::where('is_active', true)->orderBy('order')->get();
        $services = Service::where('is_active', true)->orderBy('order')->get();
        $settings = $this->getSettings();

        return view('pages.contact', compact('locations', 'services', 'settings'));
    }

    /**
     * Store appointment booking / contact inquiry
     */
    public function storeInquiry(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'phone' => 'required|string|max:50',
            'email' => 'nullable|email|max:100',
            'service' => 'nullable|string|max:100',
            'branch' => 'nullable|string|max:100',
            'preferred_date' => 'nullable|string|max:50',
            'message' => 'nullable|string|max:2000',
        ]);

        Inquiry::create($validated);

        $isAr = app()->getLocale() === 'ar';
        $message = $isAr
            ? 'شكراً لتواصلك معنا! تم استلام طلبك وسيتواصل معك فريق عيادات SMAI في أقرب وقت لتأكيد الموعد.'
            : 'Thank you for reaching out! Your inquiry has been received. Our medical coordination team will contact you shortly.';

        return back()->with('success', $message);
    }

    /**
     * Language switch route
     */
    public function switchLocale(string $locale): RedirectResponse
    {
        if (in_array($locale, ['en', 'ar'])) {
            session(['locale' => $locale]);
            app()->setLocale($locale);
        }

        $previousUrl = url()->previous();
        // Replace /ar/ or /en/ in path if present
        $parsed = parse_url($previousUrl, PHP_URL_PATH) ?? '/';
        
        if ($locale === 'ar') {
            if (!str_starts_with($parsed, '/ar')) {
                $newPath = '/ar' . ($parsed === '/' ? '' : $parsed);
                return redirect($newPath);
            }
        } else {
            if (str_starts_with($parsed, '/ar')) {
                $newPath = substr($parsed, 3);
                return redirect($newPath === '' ? '/' : $newPath);
            }
        }

        return redirect()->back();
    }
}
