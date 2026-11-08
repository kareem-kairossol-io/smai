@extends('admin.layout')

@section('title', 'Patient Inquiries')
@section('page_title', 'Patient Booking Inquiries & Leads')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px; flex-wrap: wrap; gap: 12px;">
    <p style="color: var(--text-muted); margin: 0;">Review inquiries and appointment booking requests submitted from website forms.</p>
    
    <div style="display: flex; gap: 8px;">
        <a href="{{ route('admin.inquiries.index') }}" class="btn-admin {{ empty($status) ? 'btn-primary' : 'btn-secondary' }} btn-sm">All</a>
        <a href="{{ route('admin.inquiries.index', ['status' => 'new']) }}" class="btn-admin {{ $status === 'new' ? 'btn-primary' : 'btn-secondary' }} btn-sm">New</a>
        <a href="{{ route('admin.inquiries.index', ['status' => 'contacted']) }}" class="btn-admin {{ $status === 'contacted' ? 'btn-primary' : 'btn-secondary' }} btn-sm">Contacted</a>
        <a href="{{ route('admin.inquiries.index', ['status' => 'booked']) }}" class="btn-admin {{ $status === 'booked' ? 'btn-primary' : 'btn-secondary' }} btn-sm">Booked</a>
        <a href="{{ route('admin.inquiries.index', ['status' => 'cancelled']) }}" class="btn-admin {{ $status === 'cancelled' ? 'btn-primary' : 'btn-secondary' }} btn-sm">Cancelled</a>
    </div>
</div>

<div class="admin-card">
    <div class="admin-card-body" style="padding: 0;">
        <table class="admin-table">
            <thead>
                <tr>
                    <th style="width: 50px;">#</th>
                    <th>Patient Name</th>
                    <th>Contact Info</th>
                    <th>Requested Service</th>
                    <th>Preferred Branch</th>
                    <th>Date Received</th>
                    <th style="width: 100px;">Status</th>
                    <th style="text-align: right; width: 130px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($inquiries as $inq)
                    <tr>
                        <td>{{ $inq->id }}</td>
                        <td style="font-weight: 600;">
                            {{ $inq->full_name }}
                            @if($inq->locale === 'ar')
                                <span style="font-size: 10px; padding: 1px 5px; background: rgba(200,169,110,0.15); color: var(--gold); border-radius: 3px; margin-left: 4px;">AR</span>
                            @endif
                        </td>
                        <td>
                            <div><a href="tel:{{ $inq->phone }}" style="color: var(--teal-light); text-decoration: underline;">{{ $inq->phone }}</a></div>
                            @if($inq->email)
                                <div style="font-size: 12px; color: var(--text-muted);"><a href="mailto:{{ $inq->email }}" style="color: var(--text-muted);">{{ $inq->email }}</a></div>
                            @endif
                        </td>
                        <td>
                            <span style="font-size: 12px; color: var(--text-main);">{{ $inq->service ?? 'General Inquiry' }}</span>
                        </td>
                        <td>
                            <span style="font-size: 12px; color: var(--text-muted);">{{ $inq->preferred_branch ?? 'Any' }}</span>
                        </td>
                        <td style="font-size: 12px; color: var(--text-muted);">
                            {{ $inq->created_at->format('M d, Y H:i') }}
                        </td>
                        <td>
                            <span class="tag-status status-{{ $inq->status }}">
                                {{ ucfirst($inq->status) }}
                            </span>
                        </td>
                        <td style="text-align: right;">
                            <div style="display: flex; gap: 6px; justify-content: flex-end;">
                                <a href="{{ route('admin.inquiries.show', $inq) }}" class="btn-admin btn-secondary btn-sm">View</a>
                                <form action="{{ route('admin.inquiries.destroy', $inq) }}" method="POST" onsubmit="return confirm('Delete this inquiry record?');" style="margin: 0;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-admin btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" style="text-align: center; color: var(--text-muted); padding: 30px;">
                            No inquiries found for this filter.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<div style="margin-top: 16px;">
    {{ $inquiries->links() }}
</div>
@endsection
