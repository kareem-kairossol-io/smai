@extends('admin.layout')

@section('title', 'Inquiry Details #' . $inquiry->id)
@section('page_title', 'Inquiry from ' . $inquiry->full_name)

@section('content')
<div style="max-width: 800px;">
    <div style="margin-bottom: 20px;">
        <a href="{{ route('admin.inquiries.index') }}" style="color: var(--gold); text-decoration: none; font-size: 13px;">
            &larr; Back to Inquiries List
        </a>
    </div>

    <div class="admin-card">
        <div class="admin-card-header" style="display: flex; justify-content: space-between; align-items: center;">
            <h3>Inquiry #{{ $inquiry->id }}</h3>
            <span class="tag-status status-{{ $inquiry->status }}">
                {{ ucfirst($inquiry->status) }}
            </span>
        </div>
        <div class="admin-card-body">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 24px;">
                <div>
                    <span style="font-size: 12px; color: var(--text-muted); text-transform: uppercase;">Full Name</span>
                    <div style="font-size: 16px; font-weight: 600; margin-top: 4px;">{{ $inquiry->full_name }}</div>
                </div>
                <div>
                    <span style="font-size: 12px; color: var(--text-muted); text-transform: uppercase;">Language</span>
                    <div style="font-size: 16px; margin-top: 4px;">{{ $inquiry->locale === 'ar' ? 'Arabic (العربية)' : 'English' }}</div>
                </div>
                <div>
                    <span style="font-size: 12px; color: var(--text-muted); text-transform: uppercase;">Phone Number</span>
                    <div style="font-size: 16px; margin-top: 4px;">
                        <a href="tel:{{ $inquiry->phone }}" style="color: var(--teal-light); text-decoration: underline;">{{ $inquiry->phone }}</a>
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $inquiry->phone) }}" target="_blank" rel="noopener" class="btn-admin btn-sm" style="margin-left: 8px; background: #25D366; color: #fff; font-size: 11px;">
                            Chat on WhatsApp &nearr;
                        </a>
                    </div>
                </div>
                <div>
                    <span style="font-size: 12px; color: var(--text-muted); text-transform: uppercase;">Email Address</span>
                    <div style="font-size: 16px; margin-top: 4px;">
                        @if($inquiry->email)
                            <a href="mailto:{{ $inquiry->email }}" style="color: var(--teal-light); text-decoration: underline;">{{ $inquiry->email }}</a>
                        @else
                            <span style="color: var(--text-muted);">Not provided</span>
                        @endif
                    </div>
                </div>
                <div>
                    <span style="font-size: 12px; color: var(--text-muted); text-transform: uppercase;">Requested Treatment / Service</span>
                    <div style="font-size: 15px; margin-top: 4px; color: var(--gold);">{{ $inquiry->service ?? 'General Inquiry' }}</div>
                </div>
                <div>
                    <span style="font-size: 12px; color: var(--text-muted); text-transform: uppercase;">Preferred Branch</span>
                    <div style="font-size: 15px; margin-top: 4px;">{{ $inquiry->preferred_branch ?? 'Any Clinic Location' }}</div>
                </div>
                <div>
                    <span style="font-size: 12px; color: var(--text-muted); text-transform: uppercase;">Preferred Time of Day</span>
                    <div style="font-size: 15px; margin-top: 4px;">{{ $inquiry->preferred_time ?? 'Flexible' }}</div>
                </div>
                <div>
                    <span style="font-size: 12px; color: var(--text-muted); text-transform: uppercase;">Received At</span>
                    <div style="font-size: 15px; margin-top: 4px;">{{ $inquiry->created_at->format('F d, Y \a\t h:i A') }}</div>
                </div>
            </div>

            <div style="margin-bottom: 24px;">
                <span style="font-size: 12px; color: var(--text-muted); text-transform: uppercase;">Patient Note / Message</span>
                <div style="background: rgba(0,0,0,0.25); border: 1px solid var(--border-light); border-radius: 6px; padding: 14px; margin-top: 6px; white-space: pre-line; line-height: 1.6;">
                    {{ $inquiry->message ?: 'No additional message provided.' }}
                </div>
            </div>

            <div style="border-top: 1px solid var(--border-light); padding-top: 20px;">
                <form action="{{ route('admin.inquiries.status', $inquiry) }}" method="POST" style="display: flex; align-items: center; gap: 12px; flex-wrap: wrap;">
                    @csrf
                    @method('PUT')
                    <label class="form-label" style="margin: 0; font-size: 14px;">Update Status:</label>
                    <select name="status" class="form-control" style="width: 180px;">
                        <option value="new" {{ $inquiry->status === 'new' ? 'selected' : '' }}>New</option>
                        <option value="contacted" {{ $inquiry->status === 'contacted' ? 'selected' : '' }}>Contacted</option>
                        <option value="booked" {{ $inquiry->status === 'booked' ? 'selected' : '' }}>Booked</option>
                        <option value="cancelled" {{ $inquiry->status === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                    </select>
                    <button type="submit" class="btn-admin btn-primary">Update Status</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
