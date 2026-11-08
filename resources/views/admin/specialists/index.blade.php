@extends('admin.layout')

@section('title', 'Specialists')
@section('page_title', 'Specialists (Doctors & Consultants)')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
    <p style="color: var(--text-muted); margin: 0;">Manage doctors appearing on homepage slider and specialists directory.</p>
    <a href="{{ route('admin.specialists.create') }}" class="btn-admin btn-primary">
        + Add New Specialist
    </a>
</div>

<div class="admin-card">
    <div class="admin-card-body" style="padding: 0;">
        <table class="admin-table">
            <thead>
                <tr>
                    <th style="width: 70px;">Photo</th>
                    <th>Name (EN / AR)</th>
                    <th>Role (EN / AR)</th>
                    <th>Branches</th>
                    <th style="width: 80px;">Order</th>
                    <th style="width: 90px;">Status</th>
                    <th style="text-align: right; width: 140px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($specialists as $doc)
                    <tr>
                        <td>
                            <img src="{{ $doc->image_url }}" alt="{{ $doc->name_en }}" style="width: 48px; height: 58px; object-fit: cover; border-radius: 6px; border: 1px solid var(--border-light);" />
                        </td>
                        <td>
                            <div style="font-weight: 600;">{{ $doc->name_en }}</div>
                            <div style="font-size: 12px; color: var(--gold);">{{ $doc->name_ar }}</div>
                        </td>
                        <td>
                            <div style="font-size: 13px;">{{ $doc->role_en }}</div>
                            <div style="font-size: 12px; color: var(--text-muted);">{{ $doc->role_ar }}</div>
                        </td>
                        <td>
                            @foreach($doc->branches as $b)
                                <span style="display: inline-block; font-size: 11px; padding: 2px 7px; background: rgba(255,255,255,0.06); border-radius: 4px; margin-bottom: 2px;">{{ $b }}</span>
                            @endforeach
                        </td>
                        <td>{{ $doc->order }}</td>
                        <td>
                            <span class="tag-status {{ $doc->is_active ? 'active' : 'inactive' }}">
                                {{ $doc->is_active ? 'Active' : 'Hidden' }}
                            </span>
                        </td>
                        <td style="text-align: right;">
                            <div style="display: flex; gap: 6px; justify-content: flex-end;">
                                <a href="{{ route('admin.specialists.edit', $doc) }}" class="btn-admin btn-secondary btn-sm">Edit</a>
                                <form action="{{ route('admin.specialists.destroy', $doc) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this specialist?');" style="margin: 0;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-admin btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" style="text-align: center; padding: 40px; color: var(--text-muted);">
                            No specialists found. Click "+ Add New Specialist" to create one.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
