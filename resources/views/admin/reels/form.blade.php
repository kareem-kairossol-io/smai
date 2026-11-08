@extends('admin.layout')

@section('title', $isEdit ? 'Edit Reel' : 'Add New Reel')
@section('page_title', $isEdit ? 'Edit Media Reel: ' . $reel->title_en : 'Add New Media Reel')

@section('content')
<div style="max-width: 800px;">
    <div style="margin-bottom: 20px;">
        <a href="{{ route('admin.reels.index') }}" style="color: var(--gold); text-decoration: none; font-size: 13px;">
            &larr; Back to Reels List
        </a>
    </div>

    <div class="admin-card">
        <div class="admin-card-header">
            <h3>{{ $isEdit ? 'Edit Reel Details' : 'Create New Reel' }}</h3>
        </div>
        <div class="admin-card-body">
            <form action="{{ $isEdit ? route('admin.reels.update', $reel) : route('admin.reels.store') }}" method="POST">
                @csrf
                @if($isEdit)
                    @method('PUT')
                @endif

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="title_en">Title (English) *</label>
                        <input type="text" id="title_en" name="title_en" class="form-control" value="{{ old('title_en', $reel->title_en) }}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="title_ar">Title (Arabic) *</label>
                        <input type="text" id="title_ar" name="title_ar" class="form-control" dir="rtl" value="{{ old('title_ar', $reel->title_ar) }}" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="sub_en">Subtitle / Tag (English)</label>
                        <input type="text" id="sub_en" name="sub_en" class="form-control" value="{{ old('sub_en', $reel->sub_en) }}" placeholder="e.g. SMAI Wellness">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="sub_ar">Subtitle / Tag (Arabic)</label>
                        <input type="text" id="sub_ar" name="sub_ar" class="form-control" dir="rtl" value="{{ old('sub_ar', $reel->sub_ar) }}" placeholder="e.g. SMAI Wellness">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="url">Reel Web URL (Facebook / Instagram) *</label>
                    <input type="url" id="url" name="url" class="form-control" value="{{ old('url', $reel->url) }}" placeholder="https://www.facebook.com/reel/..." required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="embed_url">Embed Video URL (Optional iframe source)</label>
                    <input type="url" id="embed_url" name="embed_url" class="form-control" value="{{ old('embed_url', $reel->embed_url) }}" placeholder="https://www.facebook.com/plugins/video.php?href=...">
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="cover_gradient">Card Background Gradient</label>
                        <input type="text" id="cover_gradient" name="cover_gradient" class="form-control" value="{{ old('cover_gradient', $reel->cover_gradient ?? 'linear-gradient(155deg,#1C544B 0%,#0B2422 62%,#143B36 100%)') }}">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="order">Display Order *</label>
                        <input type="number" id="order" name="order" class="form-control" value="{{ old('order', $reel->order) }}" required>
                    </div>
                </div>

                <div class="form-group" style="margin-top: 10px;">
                    <label style="display: flex; align-items: center; gap: 8px; cursor: pointer; color: var(--text-main);">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', $reel->is_active) ? 'checked' : '' }} style="accent-color: var(--teal-light);">
                        <span>Publish on website (Active)</span>
                    </label>
                </div>

                <div style="margin-top: 24px; display: flex; gap: 12px;">
                    <button type="submit" class="btn-admin btn-primary">
                        {{ $isEdit ? 'Save Changes' : 'Create Reel' }}
                    </button>
                    <a href="{{ route('admin.reels.index') }}" class="btn-admin btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
