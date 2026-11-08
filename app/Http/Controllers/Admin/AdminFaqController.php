<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminFaqController extends Controller
{
    public function index(): View
    {
        $faqs = Faq::orderBy('order')->get();
        return view('admin.faqs.index', compact('faqs'));
    }

    public function create(): View
    {
        return view('admin.faqs.form', [
            'faq' => new Faq([
                'category_slug' => 'general',
                'category_en' => 'General Questions',
                'category_ar' => 'أسئلة عامة',
                'order' => Faq::max('order') + 1,
                'is_active' => true,
            ]),
            'isEdit' => false,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'category_slug' => 'required|string|max:50',
            'category_en' => 'required|string|max:100',
            'category_ar' => 'required|string|max:100',
            'question_en' => 'required|string',
            'question_ar' => 'required|string',
            'answer_en' => 'required|string',
            'answer_ar' => 'required|string',
            'order' => 'required|integer',
            'is_active' => 'sometimes|boolean',
        ]);

        $data['is_active'] = $request->boolean('is_active', true);

        Faq::create($data);

        return redirect()->route('admin.faqs.index')->with('success', 'FAQ created successfully.');
    }

    public function edit(Faq $faq): View
    {
        return view('admin.faqs.form', [
            'faq' => $faq,
            'isEdit' => true,
        ]);
    }

    public function update(Request $request, Faq $faq): RedirectResponse
    {
        $data = $request->validate([
            'category_slug' => 'required|string|max:50',
            'category_en' => 'required|string|max:100',
            'category_ar' => 'required|string|max:100',
            'question_en' => 'required|string',
            'question_ar' => 'required|string',
            'answer_en' => 'required|string',
            'answer_ar' => 'required|string',
            'order' => 'required|integer',
            'is_active' => 'sometimes|boolean',
        ]);

        $data['is_active'] = $request->boolean('is_active');

        $faq->update($data);

        return redirect()->route('admin.faqs.index')->with('success', 'FAQ updated successfully.');
    }

    public function destroy(Faq $faq): RedirectResponse
    {
        $faq->delete();
        return redirect()->route('admin.faqs.index')->with('success', 'FAQ removed successfully.');
    }
}
