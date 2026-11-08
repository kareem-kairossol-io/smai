<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminInquiryController extends Controller
{
    public function index(Request $request): View
    {
        $status = $request->query('status');
        $query = Inquiry::latest();

        if ($status) {
            $query->where('status', $status);
        }

        $inquiries = $query->paginate(15);

        return view('admin.inquiries.index', compact('inquiries', 'status'));
    }

    public function show(Inquiry $inquiry): View
    {
        return view('admin.inquiries.show', compact('inquiry'));
    }

    public function updateStatus(Request $request, Inquiry $inquiry): RedirectResponse
    {
        $request->validate([
            'status' => 'required|in:new,contacted,booked,cancelled',
        ]);

        $inquiry->update(['status' => $request->input('status')]);

        return back()->with('success', 'Inquiry status updated successfully.');
    }

    public function destroy(Inquiry $inquiry): RedirectResponse
    {
        $inquiry->delete();
        return redirect()->route('admin.inquiries.index')->with('success', 'Inquiry deleted successfully.');
    }
}
