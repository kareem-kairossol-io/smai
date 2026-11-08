@extends('admin.layout')

@section('title', $isEdit ? 'Edit Specialist' : 'New Specialist')
@section('page_title', $isEdit ? 'Edit Specialist: ' . $specialist->name_en : 'Add New Specialist Doctor')

@section('content')
<div style="margin-bottom: 20px;">
    <a href="{{ route('admin.specialists.index') }}" style="color: var(--gold); text-decoration: none; font-size: 13px;">
        ← Back to Specialists List
    </a>
</div>

<div class="admin-card">
    <div class="admin-card-header">
        <h2 class="admin-card-title">{{ $isEdit ? 'Update Doctor Profile' : 'Doctor Details' }}</h2>
    </div>
    <div class="admin-card-body">
        <form action="{{ $isEdit ? route('admin.specialists.update', $specialist) : route('admin.specialists.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if($isEdit)
                @method('PUT')
            @endif

            <div class="form-grid-2">
                <div class="form-group">
                    <label class="form-label">Doctor Name (English) *</label>
                    <input type="text" name="name_en" class="form-control" value="{{ old('name_en', $specialist->name_en) }}" required />
                </div>
                <div class="form-group">
                    <label class="form-label">Doctor Name (Arabic) *</label>
                    <input type="text" name="name_ar" class="form-control" value="{{ old('name_ar', $specialist->name_ar) }}" dir="rtl" required />
                </div>
            </div>

            <div class="form-grid-2">
                <div class="form-group">
                    <label class="form-label">Specialty / Role (English) *</label>
                    <input type="text" name="role_en" class="form-control" value="{{ old('role_en', $specialist->role_en) }}" placeholder="e.g. Consultant in Clinical Nutrition" required />
                </div>
                <div class="form-group">
                    <label class="form-label">Specialty / Role (Arabic) *</label>
                    <input type="text" name="role_ar" class="form-control" value="{{ old('role_ar', $specialist->role_ar) }}" dir="rtl" placeholder="مثلاً: استشاري التغذية العلاجية" required />
                </div>
            </div>

            <div class="form-grid-2">
                <div class="form-group">
                    <label class="form-label">Photo Upload (JPG / PNG)</label>
                    <input type="file" name="image_file" class="form-control" accept="image/*" />
                    <div class="form-hint">Upload a portrait photo for the swiper card & directory.</div>
                </div>
                <div class="form-group">
                    <label class="form-label">Or Image Identifier Key</label>
                    <input type="text" name="img" class="form-control" value="{{ old('img', $specialist->img) }}" placeholder="e.g. hesham-el-amry" />
                    <div class="form-hint">Matches image filename in assets/images/specialists-exact/</div>
                </div>
            </div>

            @if($specialist->img)
                <div class="form-group">
                    <label class="form-label">Current Photo Preview</label>
                    <img src="{{ $specialist->image_url }}" alt="" style="height: 100px; border-radius: 8px; border: 1px solid var(--border-light);" />
                </div>
            @endif

            <div class="form-grid-2">
                <div class="form-group">
                    <label class="form-label">Qualifications (English) — One per line</label>
                    <textarea name="quals_en" class="form-control" rows="4">{{ old('quals_en', implode("\n", $specialist->quals_en ?? [])) }}</textarea>
                </div>
                <div class="form-group">
                    <label class="form-label">Qualifications (Arabic) — One per line</label>
                    <textarea name="quals_ar" class="form-control" rows="4" dir="rtl">{{ old('quals_ar', implode("\n", $specialist->quals_ar ?? [])) }}</textarea>
                </div>
            </div>

            <div class="form-grid-2">
                <div class="form-group">
                    <label class="form-label">Clinic Branches (English) — One per line</label>
                    <textarea name="branches_en" class="form-control" rows="3">{{ old('branches_en', implode("\n", $specialist->branches_en ?? [])) }}</textarea>
                    <div class="form-hint">e.g. Al Ahly Club — Nasr City</div>
                </div>
                <div class="form-group">
                    <label class="form-label">Clinic Branches (Arabic) — One per line</label>
                    <textarea name="branches_ar" class="form-control" rows="3" dir="rtl">{{ old('branches_ar', implode("\n", $specialist->branches_ar ?? [])) }}</textarea>
                    <div class="form-hint">مثلاً: النادي الأهلي — مدينة نصر</div>
                </div>
            </div>

            <div class="form-grid-2">
                <div class="form-group">
                    <label class="form-label">Display Order</label>
                    <input type="number" name="order" class="form-control" value="{{ old('order', $specialist->order ?? 0) }}" required />
                </div>
                <div class="form-group" style="display: flex; align-items: center; gap: 10px; margin-top: 28px;">
                    <input type="hidden" name="is_active" value="0">
                    <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', $specialist->is_active ?? true) ? 'checked' : '' }} style="width: 18px; height: 18px;">
                    <label for="is_active" style="cursor: pointer; font-weight: 500;">Visible on website (Active)</label>
                </div>
            </div>

            <div style="margin-top: 24px; display: flex; gap: 12px;">
                <button type="submit" class="btn-admin btn-primary">
                    {{ $isEdit ? 'Save Changes' : 'Create Specialist' }}
                </button>
                <a href="{{ route('admin.specialists.index') }}" class="btn-admin btn-secondary">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
