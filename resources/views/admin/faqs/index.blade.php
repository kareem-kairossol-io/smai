@extends('admin.layout')

@section('title', 'FAQs')
@section('page_title', 'Frequently Asked Questions')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
    <p style="color: var(--text-muted); margin: 0;">Manage categorized FAQs across General, Services, Consultations, and Locations.</p>
    <a href="{{ route('admin.faqs.create') }}" class="btn-admin btn-primary">
        + Add New FAQ
    </a>
</div>

<div class="admin-card">
    <div class="admin-card-body" style="padding: 0;">
        <table class="admin-table">
            <thead>
                <tr>
                    <th style="width: 50px;">#</th>
                    <th>Category</th>
                    <th>Question (EN / AR)</th>
                    <th style="width: 80px;">Order</th>
                    <th style="width: 90px;">Status</th>
                    <th style="text-align: right; width: 140px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($faqs as $faq)
                    <tr>
                        <td>{{ $faq->id }}</td>
                        <td>
                            <span style="display: inline-block; font-size: 11px; padding: 3px 8px; background: rgba(30,122,110,0.25); color: #80cbc4; border-radius: 4px; font-weight: 600;">
                                {{ $faq->category_en }}
                            </span>
                        </td>
                        <td>
                            <div style="font-weight: 600; margin-bottom: 4px;">{{ $faq->question_en }}</div>
                            <div style="font-size: 13px; color: var(--gold);">{{ $faq->question_ar }}</div>
                        </td>
                        <td>{{ $faq->order }}</td>
                        <td>
                            <span class="tag-status {{ $faq->is_active ? 'active' : 'inactive' }}">
                                {{ $faq->is_active ? 'Active' : 'Hidden' }}
                            </span>
                        </td>
                        <td style="text-align: right;">
                            <div style="display: flex; gap: 6px; justify-content: flex-end;">
                                <a href="{{ route('admin.faqs.edit', $faq) }}" class="btn-admin btn-secondary btn-sm">Edit</a>
                                <form action="{{ route('admin.faqs.destroy', $faq) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this FAQ?');" style="margin: 0;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-admin btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" style="text-align: center; color: var(--text-muted); padding: 30px;">
                            No FAQs found. Click "+ Add New FAQ" to create one.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
