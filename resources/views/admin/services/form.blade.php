@extends('admin.layout')

@section('title', $isEdit ? 'Edit Service' : 'Add New Service')
@section('page_title', $isEdit ? 'Edit Service: ' . $service->title_en : 'Add New Service')

@section('content')
<div style="max-width: 900px;">
    <div style="margin-bottom: 20px;">
        <a href="{{ route('admin.services.index') }}" style="color: var(--gold); text-decoration: none; font-size: 13px;">
            &larr; Back to Services List
        </a>
    </div>

    <div class="admin-card">
        <div class="admin-card-header">
            <h3>{{ $isEdit ? 'Edit Service Details' : 'Create New Service' }}</h3>
        </div>
        <div class="admin-card-body">
            <form action="{{ $isEdit ? route('admin.services.update', $service) : route('admin.services.store') }}" method="POST">
                @csrf
                @if($isEdit)
                    @method('PUT')
                @endif

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="title_en">Title (English) *</label>
                        <input type="text" id="title_en" name="title_en" class="form-control" value="{{ old('title_en', $service->title_en) }}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="title_ar">Title (Arabic) *</label>
                        <input type="text" id="title_ar" name="title_ar" class="form-control" dir="rtl" value="{{ old('title_ar', $service->title_ar) }}" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="slug">URL Slug (leave empty to auto-generate) *</label>
                        <input type="text" id="slug" name="slug" class="form-control" value="{{ old('slug', $service->slug) }}" placeholder="e.g. clinical-nutrition">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="order">Display Order *</label>
                        <input type="number" id="order" name="order" class="form-control" value="{{ old('order', $service->order) }}" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="badge_en">Badge / Tag (English)</label>
                        <input type="text" id="badge_en" name="badge_en" class="form-control" value="{{ old('badge_en', $service->badge_en) }}" placeholder="e.g. Metabolic Health">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="badge_ar">Badge / Tag (Arabic)</label>
                        <input type="text" id="badge_ar" name="badge_ar" class="form-control" dir="rtl" value="{{ old('badge_ar', $service->badge_ar) }}" placeholder="e.g. الصحة الأيضية">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="hero_subtitle_en">Hero Subtitle (English)</label>
                        <input type="text" id="hero_subtitle_en" name="hero_subtitle_en" class="form-control" value="{{ old('hero_subtitle_en', $service->hero_subtitle_en) }}">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="hero_subtitle_ar">Hero Subtitle (Arabic)</label>
                        <input type="text" id="hero_subtitle_ar" name="hero_subtitle_ar" class="form-control" dir="rtl" value="{{ old('hero_subtitle_ar', $service->hero_subtitle_ar) }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="short_desc_en">Short Summary (English)</label>
                        <textarea id="short_desc_en" name="short_desc_en" class="form-control" rows="3">{{ old('short_desc_en', $service->short_desc_en) }}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="short_desc_ar">Short Summary (Arabic)</label>
                        <textarea id="short_desc_ar" name="short_desc_ar" class="form-control" dir="rtl" rows="3">{{ old('short_desc_ar', $service->short_desc_ar) }}</textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="full_desc_en">Full Description / Detail Content (English)</label>
                        <textarea id="full_desc_en" name="full_desc_en" class="form-control" rows="5">{{ old('full_desc_en', $service->full_desc_en) }}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="full_desc_ar">Full Description / Detail Content (Arabic)</label>
                        <textarea id="full_desc_ar" name="full_desc_ar" class="form-control" dir="rtl" rows="5">{{ old('full_desc_ar', $service->full_desc_ar) }}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="image">Featured Image Path</label>
                    <input type="text" id="image" name="image" class="form-control" value="{{ old('image', $service->image) }}" placeholder="assets/images/services/nutrition.webp">
                </div>

                <div class="form-group" style="margin-top: 10px;">
                    <label style="display: flex; align-items: center; gap: 8px; cursor: pointer; color: var(--text-main);">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', $service->is_active) ? 'checked' : '' }} style="accent-color: var(--teal-light);">
                        <span>Publish on website (Active)</span>
                    </label>
                </div>

                <div style="margin-top: 24px; display: flex; gap: 12px;">
                    <button type="submit" class="btn-admin btn-primary">
                        {{ $isEdit ? 'Save Changes' : 'Create Service' }}
                    </button>
                    <a href="{{ route('admin.services.index') }}" class="btn-admin btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
