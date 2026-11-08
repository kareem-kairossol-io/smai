<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Inquiry;
use App\Models\Location;
use App\Models\MediaReel;
use App\Models\Service;
use App\Models\Specialist;
use Illuminate\View\View;

class AdminDashboardController extends Controller
{
    public function index(): View
    {
        $counts = [
            'specialists' => Specialist::count(),
            'locations' => Location::count(),
            'reels' => MediaReel::count(),
            'services' => Service::count(),
            'faqs' => Faq::count(),
            'inquiries' => Inquiry::count(),
            'new_inquiries' => Inquiry::where('status', 'new')->count(),
        ];

        $recentInquiries = Inquiry::latest()->take(6)->get();

        return view('admin.dashboard', compact('counts', 'recentInquiries'));
    }
}
