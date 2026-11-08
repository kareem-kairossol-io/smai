<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MediaReel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminReelController extends Controller
{
    public function index(): View
    {
        $reels = MediaReel::orderBy('order')->get();
        return view('admin.reels.index', compact('reels'));
    }

    public function create(): View
    {
        return view('admin.reels.form', [
            'reel' => new MediaReel([
                'order' => MediaReel::max('order') + 1,
                'sub_en' => 'SMAI Wellness',
                'sub_ar' => 'SMAI Wellness',
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
            'sub_en' => 'nullable|string|max:100',
            'sub_ar' => 'nullable|string|max:100',
            'url' => 'required|url',
            'embed_url' => 'nullable|url',
            'cover_gradient' => 'nullable|string|max:100',
            'order' => 'required|integer',
            'is_active' => 'sometimes|boolean',
        ]);

        if (empty($data['cover_gradient'])) {
            $data['cover_gradient'] = 'linear-gradient(155deg,#1C544B 0%,#0B2422 62%,#143B36 100%)';
        }

        $data['is_active'] = $request->boolean('is_active', true);

        MediaReel::create($data);

        return redirect()->route('admin.reels.index')->with('success', 'Media Reel created successfully.');
    }

    public function edit(MediaReel $reel): View
    {
        return view('admin.reels.form', [
            'reel' => $reel,
            'isEdit' => true,
        ]);
    }

    public function update(Request $request, MediaReel $reel): RedirectResponse
    {
        $data = $request->validate([
            'title_en' => 'required|string|max:150',
            'title_ar' => 'required|string|max:150',
            'sub_en' => 'nullable|string|max:100',
            'sub_ar' => 'nullable|string|max:100',
            'url' => 'required|url',
            'embed_url' => 'nullable|url',
            'cover_gradient' => 'nullable|string|max:100',
            'order' => 'required|integer',
            'is_active' => 'sometimes|boolean',
        ]);

        $data['is_active'] = $request->boolean('is_active');

        $reel->update($data);

        return redirect()->route('admin.reels.index')->with('success', 'Media Reel updated successfully.');
    }

    public function destroy(MediaReel $reel): RedirectResponse
    {
        $reel->delete();
        return redirect()->route('admin.reels.index')->with('success', 'Media Reel deleted successfully.');
    }
}
