@extends('admin.layout')

@section('title', $isEdit ? 'Edit Location' : 'New Location')
@section('page_title', $isEdit ? 'Edit Location: ' . $location->name_en : 'Add New Clinic Branch')

@section('content')
<div style="margin-bottom: 20px;">
    <a href="{{ route('admin.locations.index') }}" style="color: var(--gold); text-decoration: none; font-size: 13px;">
        ← Back to Locations List
    </a>
</div>

<div class="admin-card">
    <div class="admin-card-header">
        <h2 class="admin-card-title">{{ $isEdit ? 'Update Branch Details' : 'Branch Information' }}</h2>
    </div>
    <div class="admin-card-body">
        <form action="{{ $isEdit ? route('admin.locations.update', $location) : route('admin.locations.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if($isEdit)
                @method('PUT')
            @endif

            <div class="form-grid-3">
                <div class="form-group">
                    <label class="form-label">Location Key (Identifier) *</label>
                    <input type="text" name="key" class="form-control" value="{{ old('key', $location->key) }}" placeholder="e.g. nasr, gezira, zayed" required />
                    <div class="form-hint">Unique short slug for the branch.</div>
                </div>
                <div class="form-group">
                    <label class="form-label">Branch Tag (EN) *</label>
                    <input type="text" name="tag_en" class="form-control" value="{{ old('tag_en', $location->tag_en) }}" placeholder="e.g. Al Ahly Club" required />
                </div>
                <div class="form-group">
                    <label class="form-label">Branch Tag (AR) *</label>
                    <input type="text" name="tag_ar" class="form-control" value="{{ old('tag_ar', $location->tag_ar) }}" dir="rtl" placeholder="مثلاً: النادي الأهلي" required />
                </div>
            </div>

            <div class="form-grid-2">
                <div class="form-group">
                    <label class="form-label">Branch Full Name (English) *</label>
                    <input type="text" name="name_en" class="form-control" value="{{ old('name_en', $location->name_en) }}" placeholder="e.g. SMAI — Al Ahly Club (Nasr City)" required />
                </div>
                <div class="form-group">
                    <label class="form-label">Branch Full Name (Arabic) *</label>
                    <input type="text" name="name_ar" class="form-control" value="{{ old('name_ar', $location->name_ar) }}" dir="rtl" placeholder="مثلاً: عيادات SMAI — النادي الأهلي (مدينة نصر)" required />
                </div>
            </div>

            <div class="form-grid-2">
                <div class="form-group">
                    <label class="form-label">Area (English) *</label>
                    <input type="text" name="area_en" class="form-control" value="{{ old('area_en', $location->area_en) }}" placeholder="e.g. Nasr City" required />
                </div>
                <div class="form-group">
                    <label class="form-label">Area (Arabic) *</label>
                    <input type="text" name="area_ar" class="form-control" value="{{ old('area_ar', $location->area_ar) }}" dir="rtl" placeholder="مثلاً: مدينة نصر" required />
                </div>
            </div>

            <div class="form-grid-2">
                <div class="form-group">
                    <label class="form-label">Meta Description (English) *</label>
                    <input type="text" name="meta_en" class="form-control" value="{{ old('meta_en', $location->meta_en) }}" placeholder="e.g. Clinical nutrition · Body contouring · Wellness assessment" required />
                </div>
                <div class="form-group">
                    <label class="form-label">Meta Description (Arabic) *</label>
                    <input type="text" name="meta_ar" class="form-control" value="{{ old('meta_ar', $location->meta_ar) }}" dir="rtl" placeholder="مثلاً: التغذية العلاجية · تنسيق القوام · تقييم العافية" required />
                </div>
            </div>

            <div class="form-grid-2">
                <div class="form-group">
                    <label class="form-label">Video Tour Path or Upload</label>
                    <input type="text" name="video_path" class="form-control" value="{{ old('video_path', $location->video_path) }}" placeholder="assets/videos/nasir-city.mp4" />
                    <input type="file" name="video_file" class="form-control" accept="video/mp4,video/webm" style="margin-top: 6px;" />
                    <div class="form-hint">Upload MP4 video for the popup branch view player.</div>
                </div>
                <div class="form-group">
                    <label class="form-label">Google Maps Search Query</label>
                    <input type="text" name="map_query" class="form-control" value="{{ old('map_query', $location->map_query) }}" placeholder="SMAI Wellness Clinics Al Ahly Club Nasr City" />
                    <div class="form-hint">Used when user clicks "Get Directions"</div>
                </div>
            </div>

            <div class="form-grid-3">
                <div class="form-group">
                    <label class="form-label">Branch Phone</label>
                    <input type="text" name="phone" class="form-control" value="{{ old('phone', $location->phone) }}" placeholder="012 22772729" />
                </div>
                <div class="form-group">
                    <label class="form-label">Branch WhatsApp</label>
                    <input type="text" name="whatsapp" class="form-control" value="{{ old('whatsapp', $location->whatsapp) }}" placeholder="201222772729" />
                </div>
                <div class="form-group">
                    <label class="form-label">Branch Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email', $location->email) }}" placeholder="info@smai.com.eg" />
                </div>
            </div>

            <div class="form-grid-2">
                <div class="form-group">
                    <label class="form-label">Physical Address (English)</label>
                    <textarea name="address_en" class="form-control" rows="2">{{ old('address_en', $location->address_en) }}</textarea>
                </div>
                <div class="form-group">
                    <label class="form-label">Physical Address (Arabic)</label>
                    <textarea name="address_ar" class="form-control" rows="2" dir="rtl">{{ old('address_ar', $location->address_ar) }}</textarea>
                </div>
            </div>

            <div class="form-grid-2">
                <div class="form-group">
                    <label class="form-label">Display Order</label>
                    <input type="number" name="order" class="form-control" value="{{ old('order', $location->order ?? 0) }}" required />
                </div>
                <div class="form-group" style="display: flex; align-items: center; gap: 10px; margin-top: 28px;">
                    <input type="hidden" name="is_active" value="0">
                    <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', $location->is_active ?? true) ? 'checked' : '' }} style="width: 18px; height: 18px;">
                    <label for="is_active" style="cursor: pointer; font-weight: 500;">Visible on website (Active)</label>
                </div>
            </div>

            <div style="margin-top: 24px; display: flex; gap: 12px;">
                <button type="submit" class="btn-admin btn-primary">
                    {{ $isEdit ? 'Save Changes' : 'Create Branch' }}
                </button>
                <a href="{{ route('admin.locations.index') }}" class="btn-admin btn-secondary">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
