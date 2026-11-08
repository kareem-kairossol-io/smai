<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class AdminLocationController extends Controller
{
    public function index(): View
    {
        $locations = Location::orderBy('order')->get();
        return view('admin.locations.index', compact('locations'));
    }

    public function create(): View
    {
        return view('admin.locations.form', [
            'location' => new Location([
                'order' => Location::max('order') + 1,
                'is_active' => true,
            ]),
            'isEdit' => false,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'key' => 'required|string|max:50|unique:locations,key',
            'name_en' => 'required|string|max:150',
            'name_ar' => 'required|string|max:150',
            'tag_en' => 'required|string|max:100',
            'tag_ar' => 'required|string|max:100',
            'area_en' => 'required|string|max:100',
            'area_ar' => 'required|string|max:100',
            'meta_en' => 'required|string|max:255',
            'meta_ar' => 'required|string|max:255',
            'video_path' => 'nullable|string|max:255',
            'video_file' => 'nullable|mimes:mp4,webm,mov|max:51200',
            'video_title_en' => 'nullable|string|max:150',
            'video_title_ar' => 'nullable|string|max:150',
            'map_query' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:50',
            'whatsapp' => 'nullable|string|max:50',
            'email' => 'nullable|email|max:100',
            'address_en' => 'nullable|string|max:255',
            'address_ar' => 'nullable|string|max:255',
            'order' => 'required|integer',
            'is_active' => 'sometimes|boolean',
        ]);

        if ($request->hasFile('video_file')) {
            $file = $request->file('video_file');
            $vName = 'branch-' . Str::slug($data['key']) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/videos'), $vName);
            $data['video_path'] = 'assets/videos/' . $vName;
        }

        $data['is_active'] = $request->boolean('is_active', true);

        Location::create($data);

        return redirect()->route('admin.locations.index')->with('success', 'Location created successfully.');
    }

    public function edit(Location $location): View
    {
        return view('admin.locations.form', [
            'location' => $location,
            'isEdit' => true,
        ]);
    }

    public function update(Request $request, Location $location): RedirectResponse
    {
        $data = $request->validate([
            'key' => 'required|string|max:50|unique:locations,key,' . $location->id,
            'name_en' => 'required|string|max:150',
            'name_ar' => 'required|string|max:150',
            'tag_en' => 'required|string|max:100',
            'tag_ar' => 'required|string|max:100',
            'area_en' => 'required|string|max:100',
            'area_ar' => 'required|string|max:100',
            'meta_en' => 'required|string|max:255',
            'meta_ar' => 'required|string|max:255',
            'video_path' => 'nullable|string|max:255',
            'video_file' => 'nullable|mimes:mp4,webm,mov|max:51200',
            'video_title_en' => 'nullable|string|max:150',
            'video_title_ar' => 'nullable|string|max:150',
            'map_query' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:50',
            'whatsapp' => 'nullable|string|max:50',
            'email' => 'nullable|email|max:100',
            'address_en' => 'nullable|string|max:255',
            'address_ar' => 'nullable|string|max:255',
            'order' => 'required|integer',
            'is_active' => 'sometimes|boolean',
        ]);

        if ($request->hasFile('video_file')) {
            $file = $request->file('video_file');
            $vName = 'branch-' . Str::slug($data['key']) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/videos'), $vName);
            $data['video_path'] = 'assets/videos/' . $vName;
        }

        $data['is_active'] = $request->boolean('is_active');

        $location->update($data);

        return redirect()->route('admin.locations.index')->with('success', 'Location updated successfully.');
    }

    public function destroy(Location $location): RedirectResponse
    {
        $location->delete();
        return redirect()->route('admin.locations.index')->with('success', 'Location removed successfully.');
    }
}
