@extends('admin.layout')

@section('title', 'Media Reels')
@section('page_title', 'Media & Reels (News / Video Updates)')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
    <p style="color: var(--text-muted); margin: 0;">Manage Facebook video reels and latest clinical news highlights shown on homepage & media section.</p>
    <a href="{{ route('admin.reels.create') }}" class="btn-admin btn-primary">
        + Add New Reel
    </a>
</div>

<div class="admin-card">
    <div class="admin-card-body" style="padding: 0;">
        <table class="admin-table">
            <thead>
                <tr>
                    <th style="width: 50px;">#</th>
                    <th>Title (EN / AR)</th>
                    <th>Sub / Category</th>
                    <th>Video URL</th>
                    <th style="width: 80px;">Order</th>
                    <th style="width: 90px;">Status</th>
                    <th style="text-align: right; width: 140px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($reels as $reel)
                    <tr>
                        <td>{{ $reel->id }}</td>
                        <td>
                            <div style="font-weight: 600;">{{ $reel->title_en }}</div>
                            <div style="font-size: 12px; color: var(--gold);">{{ $reel->title_ar }}</div>
                        </td>
                        <td>
                            <span style="font-size: 12px; color: var(--text-muted);">{{ $reel->sub_en }}</span>
                        </td>
                        <td>
                            <a href="{{ $reel->url }}" target="_blank" rel="noopener" style="color: var(--gold); font-size: 12px; text-decoration: underline; word-break: break-all;">
                                View Reel &nearr;
                            </a>
                        </td>
                        <td>{{ $reel->order }}</td>
                        <td>
                            <span class="tag-status {{ $reel->is_active ? 'active' : 'inactive' }}">
                                {{ $reel->is_active ? 'Active' : 'Hidden' }}
                            </span>
                        </td>
                        <td style="text-align: right;">
                            <div style="display: flex; gap: 6px; justify-content: flex-end;">
                                <a href="{{ route('admin.reels.edit', $reel) }}" class="btn-admin btn-secondary btn-sm">Edit</a>
                                <form action="{{ route('admin.reels.destroy', $reel) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this reel?');" style="margin: 0;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-admin btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" style="text-align: center; color: var(--text-muted); padding: 30px;">
                            No media reels found. Click "+ Add New Reel" to create one.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
