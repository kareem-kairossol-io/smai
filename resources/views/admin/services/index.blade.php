@extends('admin.layout')

@section('title', 'Services')
@section('page_title', 'Clinical Services & Specializations')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
    <p style="color: var(--text-muted); margin: 0;">Manage medical & wellness services, descriptions, badges, and landing page contents.</p>
    <a href="{{ route('admin.services.create') }}" class="btn-admin btn-primary">
        + Add New Service
    </a>
</div>

<div class="admin-card">
    <div class="admin-card-body" style="padding: 0;">
        <table class="admin-table">
            <thead>
                <tr>
                    <th style="width: 50px;">#</th>
                    <th>Service Name (EN / AR)</th>
                    <th>Slug</th>
                    <th>Badge</th>
                    <th style="width: 80px;">Order</th>
                    <th style="width: 90px;">Status</th>
                    <th style="text-align: right; width: 140px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($services as $service)
                    <tr>
                        <td>{{ $service->id }}</td>
                        <td>
                            <div style="font-weight: 600;">{{ $service->title_en }}</div>
                            <div style="font-size: 12px; color: var(--gold);">{{ $service->title_ar }}</div>
                        </td>
                        <td>
                            <code style="font-size: 12px; color: #a5d6a7;">{{ $service->slug }}</code>
                        </td>
                        <td>
                            @if($service->badge_en)
                                <span style="font-size: 11px; padding: 2px 8px; background: rgba(200,169,110,0.15); color: var(--gold); border-radius: 4px;">{{ $service->badge_en }}</span>
                            @else
                                <span style="color: var(--text-muted); font-size: 12px;">—</span>
                            @endif
                        </td>
                        <td>{{ $service->order }}</td>
                        <td>
                            <span class="tag-status {{ $service->is_active ? 'active' : 'inactive' }}">
                                {{ $service->is_active ? 'Active' : 'Hidden' }}
                            </span>
                        </td>
                        <td style="text-align: right;">
                            <div style="display: flex; gap: 6px; justify-content: flex-end;">
                                <a href="{{ route('admin.services.edit', $service) }}" class="btn-admin btn-secondary btn-sm">Edit</a>
                                <form action="{{ route('admin.services.destroy', $service) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this service?');" style="margin: 0;">
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
                            No services found. Click "+ Add New Service" to create one.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
