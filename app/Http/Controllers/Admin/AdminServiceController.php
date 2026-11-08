<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class AdminServiceController extends Controller
{
    public function index(): View
    {
        $services = Service::orderBy('order')->get();
        return view('admin.services.index', compact('services'));
    }

    public function create(): View
    {
        return view('admin.services.form', [
            'service' => new Service([
                'order' => Service::max('order') + 1,
                'is_active' => true,
            ]),
            'isEdit' => false,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'title_en' => 'required|string|max:150',
            'title_ar' => 'required|string|max:150',
            'slug' => 'nullable|string|max:100|unique:services,slug',
            'badge_en' => 'nullable|string|max:100',
            'badge_ar' => 'nullable|string|max:100',
            'hero_subtitle_en' => 'nullable|string|max:255',
            'hero_subtitle_ar' => 'nullable|string|max:255',
            'short_desc_en' => 'nullable|string',
            'short_desc_ar' => 'nullable|string',
            'full_desc_en' => 'nullable|string',
            'full_desc_ar' => 'nullable|string',
            'image' => 'nullable|string|max:255',
            'order' => 'required|integer',
            'is_active' => 'sometimes|boolean',
        ]);

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title_en']);
        }

        $data['is_active'] = $request->boolean('is_active', true);

        Service::create($data);

        return redirect()->route('admin.services.index')->with('success', 'Service created successfully.');
    }

    public function edit(Service $service): View
    {
        return view('admin.services.form', [
            'service' => $service,
            'isEdit' => true,
        ]);
    }

    public function update(Request $request, Service $service): RedirectResponse
    {
        $data = $request->validate([
            'title_en' => 'required|string|max:150',
            'title_ar' => 'required|string|max:150',
            'slug' => 'required|string|max:100|unique:services,slug,' . $service->id,
            'badge_en' => 'nullable|string|max:100',
            'badge_ar' => 'nullable|string|max:100',
            'hero_subtitle_en' => 'nullable|string|max:255',
            'hero_subtitle_ar' => 'nullable|string|max:255',
            'short_desc_en' => 'nullable|string',
            'short_desc_ar' => 'nullable|string',
            'full_desc_en' => 'nullable|string',
            'full_desc_ar' => 'nullable|string',
            'image' => 'nullable|string|max:255',
            'order' => 'required|integer',
            'is_active' => 'sometimes|boolean',
        ]);

        $data['is_active'] = $request->boolean('is_active');

        $service->update($data);

        return redirect()->route('admin.services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service): RedirectResponse
    {
        $service->delete();
        return redirect()->route('admin.services.index')->with('success', 'Service deleted successfully.');
    }
}
