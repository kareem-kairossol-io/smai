<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Specialist;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class AdminSpecialistController extends Controller
{
    public function index(): View
    {
        $specialists = Specialist::orderBy('order')->get();
        return view('admin.specialists.index', compact('specialists'));
    }

    public function create(): View
    {
        return view('admin.specialists.form', [
            'specialist' => new Specialist([
                'order' => Specialist::max('order') + 1,
                'is_active' => true,
            ]),
            'isEdit' => false,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name_en' => 'required|string|max:150',
            'name_ar' => 'required|string|max:150',
            'role_en' => 'required|string|max:255',
            'role_ar' => 'required|string|max:255',
            'img' => 'nullable|string|max:100',
            'image_file' => 'nullable|image|max:4096',
            'quals_en' => 'nullable|string',
            'quals_ar' => 'nullable|string',
            'branches_en' => 'nullable|string',
            'branches_ar' => 'nullable|string',
            'order' => 'required|integer',
            'is_active' => 'sometimes|boolean',
        ]);

        $data['slug'] = Str::slug($data['name_en']);

        // Check if slug exists
        if (Specialist::where('slug', $data['slug'])->exists()) {
            $data['slug'] .= '-' . time();
        }

        // Process image upload if provided
        if ($request->hasFile('image_file')) {
            $file = $request->file('image_file');
            $imgName = Str::slug($data['name_en']);
            $file->move(public_path('assets/images/specialists-exact'), $imgName . '.jpg');
            $data['img'] = $imgName;
        } elseif (empty($data['img'])) {
            $data['img'] = Str::slug($data['name_en']);
        }

        // Split text lines to arrays
        $data['quals_en'] = array_filter(array_map('trim', explode("\n", $request->input('quals_en', ''))));
        $data['quals_ar'] = array_filter(array_map('trim', explode("\n", $request->input('quals_ar', ''))));
        $data['branches_en'] = array_filter(array_map('trim', explode("\n", $request->input('branches_en', ''))));
        $data['branches_ar'] = array_filter(array_map('trim', explode("\n", $request->input('branches_ar', ''))));
        $data['is_active'] = $request->boolean('is_active', true);

        Specialist::create($data);

        return redirect()->route('admin.specialists.index')->with('success', 'Specialist doctor created successfully.');
    }

    public function edit(Specialist $specialist): View
    {
        return view('admin.specialists.form', [
            'specialist' => $specialist,
            'isEdit' => true,
        ]);
    }

    public function update(Request $request, Specialist $specialist): RedirectResponse
    {
        $data = $request->validate([
            'name_en' => 'required|string|max:150',
            'name_ar' => 'required|string|max:150',
            'role_en' => 'required|string|max:255',
            'role_ar' => 'required|string|max:255',
            'img' => 'nullable|string|max:100',
            'image_file' => 'nullable|image|max:4096',
            'quals_en' => 'nullable|string',
            'quals_ar' => 'nullable|string',
            'branches_en' => 'nullable|string',
            'branches_ar' => 'nullable|string',
            'order' => 'required|integer',
            'is_active' => 'sometimes|boolean',
        ]);

        if ($request->hasFile('image_file')) {
            $file = $request->file('image_file');
            $imgName = $specialist->img ?: Str::slug($data['name_en']);
            $file->move(public_path('assets/images/specialists-exact'), $imgName . '.jpg');
            $data['img'] = $imgName;
        }

        $data['quals_en'] = array_filter(array_map('trim', explode("\n", $request->input('quals_en', ''))));
        $data['quals_ar'] = array_filter(array_map('trim', explode("\n", $request->input('quals_ar', ''))));
        $data['branches_en'] = array_filter(array_map('trim', explode("\n", $request->input('branches_en', ''))));
        $data['branches_ar'] = array_filter(array_map('trim', explode("\n", $request->input('branches_ar', ''))));
        $data['is_active'] = $request->boolean('is_active');

        $specialist->update($data);

        return redirect()->route('admin.specialists.index')->with('success', 'Specialist updated successfully.');
    }

    public function destroy(Specialist $specialist): RedirectResponse
    {
        $specialist->delete();
        return redirect()->route('admin.specialists.index')->with('success', 'Specialist removed successfully.');
    }
}
