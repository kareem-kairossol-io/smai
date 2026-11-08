@extends('admin.layout')

@section('title', 'Clinic Locations')
@section('page_title', 'Clinic Branches & Locations')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
    <p style="color: var(--text-muted); margin: 0;">Manage your physical clinic branches, branch videos, and Google Maps queries.</p>
    <a href="{{ route('admin.locations.create') }}" class="btn-admin btn-primary">
        + Add New Branch
    </a>
</div>

<div class="admin-card">
    <div class="admin-card-body" style="padding: 0;">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Branch Key</th>
                    <th>Name (EN / AR)</th>
                    <th>Area & Tag</th>
                    <th>Video Tour</th>
                    <th>Phone / WhatsApp</th>
                    <th style="width: 80px;">Order</th>
                    <th style="width: 90px;">Status</th>
                    <th style="text-align: right; width: 140px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($locations as $loc)
                    <tr>
                        <td>
                            <code style="color: var(--gold); background: rgba(0,0,0,0.3); padding: 3px 6px; border-radius: 4px;">{{ $loc->key }}</code>
                        </td>
                        <td>
                            <div style="font-weight: 600;">{{ $loc->name_en }}</div>
                            <div style="font-size: 12px; color: var(--gold);">{{ $loc->name_ar }}</div>
                        </td>
                        <td>
                            <div>{{ $loc->area_en }}</div>
                            <span style="font-size: 11px; color: var(--text-muted);">{{ $loc->tag_en }}</span>
                        </td>
                        <td>
                            @if($loc->video_path)
                                <span style="color: var(--success); font-size: 12px;">✓ Video Configured</span>
                            @else
                                <span style="color: var(--text-muted); font-size: 12px;">None</span>
                            @endif
                        </td>
                        <td style="font-size: 13px;">
                            <div>{{ $loc->phone ?: 'Main' }}</div>
                            <div style="font-size: 11px; color: var(--text-muted);">WA: {{ $loc->whatsapp ?: 'Main' }}</div>
                        </td>
                        <td>{{ $loc->order }}</td>
                        <td>
                            <span class="tag-status {{ $loc->is_active ? 'active' : 'inactive' }}">
                                {{ $loc->is_active ? 'Active' : 'Hidden' }}
                            </span>
                        </td>
                        <td style="text-align: right;">
                            <div style="display: flex; gap: 6px; justify-content: flex-end;">
                                <a href="{{ route('admin.locations.edit', $loc) }}" class="btn-admin btn-secondary btn-sm">Edit</a>
                                <form action="{{ route('admin.locations.destroy', $loc) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this location?');" style="margin: 0;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-admin btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" style="text-align: center; padding: 40px; color: var(--text-muted);">
                            No locations configured. Click "+ Add New Branch" to create one.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
