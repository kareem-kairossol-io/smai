@extends('admin.layout')

@section('title', 'Dashboard')
@section('page_title', 'Overview & Dashboard')

@section('content')
<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; margin-bottom: 30px;">
    <!-- Card 1 -->
    <div class="admin-card" style="margin-bottom: 0; padding: 22px;">
        <span style="font-size: 12px; color: var(--gold); text-transform: uppercase; font-weight: 700; letter-spacing: 0.05em;">Specialists</span>
        <div style="font-size: 32px; font-weight: 700; margin: 8px 0; color: #fff;">{{ $counts['specialists'] }}</div>
        <a href="{{ route('admin.specialists.index') }}" style="font-size: 12px; color: var(--text-muted); text-decoration: none;">Manage Doctors →</a>
    </div>

    <!-- Card 2 -->
    <div class="admin-card" style="margin-bottom: 0; padding: 22px;">
        <span style="font-size: 12px; color: var(--gold); text-transform: uppercase; font-weight: 700; letter-spacing: 0.05em;">Clinic Locations</span>
        <div style="font-size: 32px; font-weight: 700; margin: 8px 0; color: #fff;">{{ $counts['locations'] }}</div>
        <a href="{{ route('admin.locations.index') }}" style="font-size: 12px; color: var(--text-muted); text-decoration: none;">Manage Branches →</a>
    </div>

    <!-- Card 3 -->
    <div class="admin-card" style="margin-bottom: 0; padding: 22px;">
        <span style="font-size: 12px; color: var(--gold); text-transform: uppercase; font-weight: 700; letter-spacing: 0.05em;">News & Media Reels</span>
        <div style="font-size: 32px; font-weight: 700; margin: 8px 0; color: #fff;">{{ $counts['reels'] }}</div>
        <a href="{{ route('admin.reels.index') }}" style="font-size: 12px; color: var(--text-muted); text-decoration: none;">Manage Video Reels →</a>
    </div>

    <!-- Card 4 -->
    <div class="admin-card" style="margin-bottom: 0; padding: 22px;">
        <span style="font-size: 12px; color: var(--gold); text-transform: uppercase; font-weight: 700; letter-spacing: 0.05em;">Services</span>
        <div style="font-size: 32px; font-weight: 700; margin: 8px 0; color: #fff;">{{ $counts['services'] }}</div>
        <a href="{{ route('admin.services.index') }}" style="font-size: 12px; color: var(--text-muted); text-decoration: none;">Manage Treatments →</a>
    </div>

    <!-- Card 5 -->
    <div class="admin-card" style="margin-bottom: 0; padding: 22px;">
        <span style="font-size: 12px; color: var(--gold); text-transform: uppercase; font-weight: 700; letter-spacing: 0.05em;">New Appointments</span>
        <div style="font-size: 32px; font-weight: 700; margin: 8px 0; color: var(--gold);">{{ $counts['new_inquiries'] }}</div>
        <a href="{{ route('admin.inquiries.index') }}" style="font-size: 12px; color: var(--text-muted); text-decoration: none;">View Pending Requests →</a>
    </div>
</div>

<!-- Quick Action shortcuts -->
<div style="display: flex; gap: 12px; margin-bottom: 30px; flex-wrap: wrap;">
    <a href="{{ route('admin.specialists.create') }}" class="btn-admin btn-primary">
        + Add New Specialist
    </a>
    <a href="{{ route('admin.locations.create') }}" class="btn-admin btn-secondary">
        + Add Clinic Branch
    </a>
    <a href="{{ route('admin.reels.create') }}" class="btn-admin btn-secondary">
        + Add Media Reel
    </a>
    <a href="{{ route('admin.faqs.create') }}" class="btn-admin btn-secondary">
        + Add FAQ
    </a>
</div>

<!-- Recent Inquiries Section -->
<div class="admin-card">
    <div class="admin-card-header">
        <h2 class="admin-card-title">Recent Appointment Requests</h2>
        <a href="{{ route('admin.inquiries.index') }}" class="btn-admin btn-secondary btn-sm">View All Inquiries ({{ $counts['inquiries'] }})</a>
    </div>
    <div class="admin-card-body" style="padding: 0;">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Patient Name</th>
                    <th>Phone</th>
                    <th>Requested Service</th>
                    <th>Branch</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th style="text-align: right;">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($recentInquiries as $inq)
                    <tr>
                        <td style="font-weight: 600;">{{ $inq->name }}</td>
                        <td><a href="tel:{{ $inq->phone }}" style="color: var(--gold); text-decoration: none;">{{ $inq->phone }}</a></td>
                        <td>{{ $inq->service ?: 'General Consultation' }}</td>
                        <td>{{ $inq->branch ?: 'Any Branch' }}</td>
                        <td>
                            <span class="tag-status {{ $inq->status }}">{{ $inq->status }}</span>
                        </td>
                        <td style="font-size: 12px; color: var(--text-muted);">{{ $inq->created_at->diffForHumans() }}</td>
                        <td style="text-align: right;">
                            <a href="{{ route('admin.inquiries.show', $inq) }}" class="btn-admin btn-secondary btn-sm">View Details</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" style="text-align: center; padding: 40px; color: var(--text-muted);">
                            No patient inquiries received yet. When users submit the booking form, they will appear here.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
