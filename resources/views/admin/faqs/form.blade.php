@extends('admin.layout')

@section('title', $isEdit ? 'Edit FAQ' : 'Add New FAQ')
@section('page_title', $isEdit ? 'Edit FAQ' : 'Add New FAQ')

@section('content')
<div style="max-width: 850px;">
    <div style="margin-bottom: 20px;">
        <a href="{{ route('admin.faqs.index') }}" style="color: var(--gold); text-decoration: none; font-size: 13px;">
            &larr; Back to FAQ List
        </a>
    </div>

    <div class="admin-card">
        <div class="admin-card-header">
            <h3>{{ $isEdit ? 'Edit FAQ Details' : 'Create New FAQ' }}</h3>
        </div>
        <div class="admin-card-body">
            <form action="{{ $isEdit ? route('admin.faqs.update', $faq) : route('admin.faqs.store') }}" method="POST">
                @csrf
                @if($isEdit)
                    @method('PUT')
                @endif

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="category_slug">Category Slug *</label>
                        <select id="category_slug" name="category_slug" class="form-control" onchange="updateCategoryLabels(this.value)" required>
                            <option value="general" {{ old('category_slug', $faq->category_slug) === 'general' ? 'selected' : '' }}>general (General Questions)</option>
                            <option value="services" {{ old('category_slug', $faq->category_slug) === 'services' ? 'selected' : '' }}>services (Services & Treatments)</option>
                            <option value="consultations" {{ old('category_slug', $faq->category_slug) === 'consultations' ? 'selected' : '' }}>consultations (Appointments & Booking)</option>
                            <option value="branches" {{ old('category_slug', $faq->category_slug) === 'branches' ? 'selected' : '' }}>branches (Locations & Visiting)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="order">Display Order *</label>
                        <input type="number" id="order" name="order" class="form-control" value="{{ old('order', $faq->order) }}" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="category_en">Category Label (English) *</label>
                        <input type="text" id="category_en" name="category_en" class="form-control" value="{{ old('category_en', $faq->category_en) }}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="category_ar">Category Label (Arabic) *</label>
                        <input type="text" id="category_ar" name="category_ar" class="form-control" dir="rtl" value="{{ old('category_ar', $faq->category_ar) }}" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="question_en">Question (English) *</label>
                        <input type="text" id="question_en" name="question_en" class="form-control" value="{{ old('question_en', $faq->question_en) }}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="question_ar">Question (Arabic) *</label>
                        <input type="text" id="question_ar" name="question_ar" class="form-control" dir="rtl" value="{{ old('question_ar', $faq->question_ar) }}" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="answer_en">Answer (English) *</label>
                        <textarea id="answer_en" name="answer_en" class="form-control" rows="4" required>{{ old('answer_en', $faq->answer_en) }}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="answer_ar">Answer (Arabic) *</label>
                        <textarea id="answer_ar" name="answer_ar" class="form-control" dir="rtl" rows="4" required>{{ old('answer_ar', $faq->answer_ar) }}</textarea>
                    </div>
                </div>

                <div class="form-group" style="margin-top: 10px;">
                    <label style="display: flex; align-items: center; gap: 8px; cursor: pointer; color: var(--text-main);">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', $faq->is_active) ? 'checked' : '' }} style="accent-color: var(--teal-light);">
                        <span>Publish on website (Active)</span>
                    </label>
                </div>

                <div style="margin-top: 24px; display: flex; gap: 12px;">
                    <button type="submit" class="btn-admin btn-primary">
                        {{ $isEdit ? 'Save Changes' : 'Create FAQ' }}
                    </button>
                    <a href="{{ route('admin.faqs.index') }}" class="btn-admin btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function updateCategoryLabels(val) {
    var enMap = {
        'general': 'General Questions',
        'services': 'Services & Treatments',
        'consultations': 'Appointments & Booking',
        'branches': 'Locations & Visiting'
    };
    var arMap = {
        'general': 'أسئلة عامة',
        'services': 'الخدمات والعلاجات',
        'consultations': 'المواعيد والحجز',
        'branches': 'الفروع والزيارة'
    };
    if (enMap[val]) {
        document.getElementById('category_en').value = enMap[val];
        document.getElementById('category_ar').value = arMap[val];
    }
}
</script>
@endsection
