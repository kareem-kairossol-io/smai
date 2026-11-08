<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Admin Panel') — SMAI Wellness Clinics</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg-base: #071716;
            --bg-surface: #0B2422;
            --bg-elevated: #113330;
            --bg-card: #0E2B29;
            --border-color: rgba(200, 169, 107, 0.22);
            --border-light: rgba(255, 255, 255, 0.08);
            --gold: #C8A96B;
            --gold-light: #DFC89B;
            --gold-hover: #E8D5B0;
            --text-main: #F4F7F6;
            --text-muted: #8EABA7;
            --danger: #E05260;
            --success: #34D399;
            --warning: #FBBF24;
            --radius-md: 10px;
            --radius-lg: 14px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
            background-color: var(--bg-base);
            color: var(--text-main);
            min-height: 100vh;
            display: flex;
            font-size: 14px;
            line-height: 1.5;
        }

        /* Sidebar */
        .sidebar {
            width: 260px;
            background: var(--bg-surface);
            border-right: 1px solid var(--border-color);
            display: flex;
            flex-direction: column;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
        }

        .sidebar-brand {
            padding: 24px 20px;
            display: flex;
            align-items: center;
            gap: 12px;
            border-bottom: 1px solid var(--border-light);
        }

        .sidebar-brand img {
            height: 38px;
            width: auto;
        }

        .sidebar-brand div strong {
            display: block;
            font-size: 15px;
            color: var(--text-main);
            letter-spacing: 0.02em;
        }

        .sidebar-brand div span {
            font-size: 11px;
            color: var(--gold);
            text-transform: uppercase;
            letter-spacing: 0.08em;
        }

        .sidebar-nav {
            flex: 1;
            padding: 16px 12px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .nav-category {
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: var(--text-muted);
            padding: 14px 12px 6px;
        }

        .nav-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px 14px;
            border-radius: var(--radius-md);
            color: var(--text-muted);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .nav-item:hover {
            color: var(--text-main);
            background: rgba(255, 255, 255, 0.05);
        }

        .nav-item.active {
            color: #071716;
            background: var(--gold);
            font-weight: 600;
        }

        .nav-item.active .badge-pill {
            background: #071716;
            color: var(--gold);
        }

        .nav-item svg {
            width: 18px;
            height: 18px;
            flex-shrink: 0;
        }

        .badge-pill {
            margin-left: auto;
            background: var(--gold);
            color: #071716;
            font-size: 11px;
            font-weight: 700;
            padding: 2px 7px;
            border-radius: 12px;
        }

        .sidebar-footer {
            padding: 16px;
            border-top: 1px solid var(--border-light);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        /* Main Content Container */
        .main-wrapper {
            margin-left: 260px;
            flex: 1;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Top Header */
        .topbar {
            height: 64px;
            background: var(--bg-surface);
            border-bottom: 1px solid var(--border-light);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 32px;
            position: sticky;
            top: 0;
            z-index: 90;
        }

        .topbar-title {
            font-size: 18px;
            font-weight: 600;
            color: var(--text-main);
        }

        .topbar-actions {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .content-area {
            padding: 32px;
            flex: 1;
        }

        /* Buttons */
        .btn-admin {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 16px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            border: 1px solid transparent;
            transition: all 0.2s ease;
        }

        .btn-primary {
            background: var(--gold);
            color: #071716;
        }

        .btn-primary:hover {
            background: var(--gold-hover);
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.06);
            color: var(--text-main);
            border-color: var(--border-light);
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .btn-danger {
            background: rgba(224, 82, 96, 0.15);
            color: var(--danger);
            border-color: rgba(224, 82, 96, 0.3);
        }

        .btn-danger:hover {
            background: rgba(224, 82, 96, 0.25);
        }

        .btn-sm {
            padding: 5px 10px;
            font-size: 12px;
        }

        /* Card / Table containers */
        .admin-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: var(--radius-lg);
            overflow: hidden;
            margin-bottom: 24px;
        }

        .admin-card-header {
            padding: 18px 24px;
            border-bottom: 1px solid var(--border-light);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .admin-card-title {
            font-size: 16px;
            font-weight: 600;
            color: var(--text-main);
        }

        .admin-card-body {
            padding: 24px;
        }

        /* Table styles */
        .admin-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        .admin-table th {
            padding: 12px 18px;
            background: rgba(0, 0, 0, 0.2);
            color: var(--text-muted);
            font-weight: 600;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            border-bottom: 1px solid var(--border-light);
        }

        .admin-table td {
            padding: 14px 18px;
            border-bottom: 1px solid var(--border-light);
            vertical-align: middle;
            color: var(--text-main);
        }

        .admin-table tr:hover td {
            background: rgba(255, 255, 255, 0.02);
        }

        /* Status tags */
        .tag-status {
            display: inline-block;
            padding: 3px 10px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .tag-status.active, .tag-status.booked {
            background: rgba(52, 211, 153, 0.15);
            color: var(--success);
            border: 1px solid rgba(52, 211, 153, 0.3);
        }

        .tag-status.new {
            background: rgba(200, 169, 107, 0.2);
            color: var(--gold-light);
            border: 1px solid var(--gold);
        }

        .tag-status.contacted {
            background: rgba(251, 191, 36, 0.15);
            color: var(--warning);
            border: 1px solid rgba(251, 191, 36, 0.3);
        }

        .tag-status.inactive, .tag-status.cancelled {
            background: rgba(224, 82, 96, 0.15);
            color: var(--danger);
            border: 1px solid rgba(224, 82, 96, 0.3);
        }

        /* Form elements */
        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 7px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.04em;
            color: var(--gold);
        }

        .form-control {
            width: 100%;
            padding: 11px 14px;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid var(--border-light);
            color: #fff;
            font-family: inherit;
            font-size: 14px;
            outline: none;
            transition: border-color 0.2s;
        }

        .form-control:focus {
            border-color: var(--gold);
            background: rgba(255, 255, 255, 0.06);
        }

        .form-grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-grid-3 {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 20px;
        }

        .form-hint {
            font-size: 12px;
            color: var(--text-muted);
            margin-top: 5px;
        }

        /* Alert notifications */
        .alert-flash {
            padding: 14px 18px;
            border-radius: 8px;
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .alert-success {
            background: rgba(52, 211, 153, 0.15);
            border: 1px solid rgba(52, 211, 153, 0.3);
            color: #A7F3D0;
        }

        .alert-danger {
            background: rgba(224, 82, 96, 0.15);
            border: 1px solid rgba(224, 82, 96, 0.3);
            color: #FECDD3;
        }
    </style>
</head>
<body>
    <!-- Sidebar Navigation -->
    <aside class="sidebar">
        <div class="sidebar-brand">
            <img src="{{ asset('assets/images/brand/smai-logo.webp') }}" alt="SMAI Logo" />
            <div>
                <strong>SMAI Wellness</strong>
                <span>Admin Control</span>
            </div>
        </div>

        <nav class="sidebar-nav">
            <a href="{{ route('admin.dashboard') }}" class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                <span>Dashboard</span>
            </a>

            <div class="nav-category">Content Control</div>

            <a href="{{ route('admin.specialists.index') }}" class="nav-item {{ request()->routeIs('admin.specialists*') ? 'active' : '' }}">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                <span>Specialists (Doctors)</span>
            </a>

            <a href="{{ route('admin.locations.index') }}" class="nav-item {{ request()->routeIs('admin.locations*') ? 'active' : '' }}">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                <span>Clinic Locations</span>
            </a>

            <a href="{{ route('admin.reels.index') }}" class="nav-item {{ request()->routeIs('admin.reels*') ? 'active' : '' }}">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                <span>News & Reels</span>
            </a>

            <a href="{{ route('admin.services.index') }}" class="nav-item {{ request()->routeIs('admin.services*') ? 'active' : '' }}">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                <span>Services</span>
            </a>

            <a href="{{ route('admin.faqs.index') }}" class="nav-item {{ request()->routeIs('admin.faqs*') ? 'active' : '' }}">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span>FAQs</span>
            </a>

            <div class="nav-category">Patients & Inquiries</div>

            @php
                $pendingCount = \App\Models\Inquiry::where('status', 'new')->count();
            @endphp
            <a href="{{ route('admin.inquiries.index') }}" class="nav-item {{ request()->routeIs('admin.inquiries*') ? 'active' : '' }}">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                <span>Appointments</span>
                @if($pendingCount > 0)
                    <span class="badge-pill">{{ $pendingCount }}</span>
                @endif
            </a>

            <div class="nav-category">System</div>

            <a href="{{ route('admin.settings.index') }}" class="nav-item {{ request()->routeIs('admin.settings*') ? 'active' : '' }}">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                <span>Site Settings</span>
            </a>
        </nav>

        <div class="sidebar-footer">
            <span style="font-size: 12px; color: var(--text-muted);">{{ auth()->user()->name ?? 'Administrator' }}</span>
            <form action="{{ route('admin.logout') }}" method="POST" style="margin: 0;">
                @csrf
                <button type="submit" class="btn-admin btn-danger btn-sm" title="Log Out">
                    <svg style="width: 14px; height: 14px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                </button>
            </form>
        </div>
    </aside>

    <!-- Main Content Area -->
    <div class="main-wrapper">
        <header class="topbar">
            <h1 class="topbar-title">@yield('page_title', 'Dashboard')</h1>
            <div class="topbar-actions">
                <a href="{{ url('/') }}" target="_blank" class="btn-admin btn-secondary btn-sm">
                    <svg style="width: 14px; height: 14px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    View Live Site
                </a>
                <a href="{{ url('/ar') }}" target="_blank" class="btn-admin btn-secondary btn-sm">
                    عرض الموقع بالعربية
                </a>
            </div>
        </header>

        <main class="content-area">
            @if(session('success'))
                <div class="alert-flash alert-success">
                    <span>✓ {{ session('success') }}</span>
                </div>
            @endif

            @if($errors->any())
                <div class="alert-flash alert-danger">
                    <div>
                        <strong>Please check the errors below:</strong>
                        <ul style="margin-top: 6px; padding-left: 18px;">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            @yield('content')
        </main>
    </div>
</body>
</html>
