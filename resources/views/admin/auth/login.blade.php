<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin Login — SMAI Wellness Clinics</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-base: #071716;
            --bg-surface: #0B2422;
            --gold: #C8A96B;
            --gold-hover: #E8D5B0;
            --text-main: #F4F7F6;
            --text-muted: #8EABA7;
            --border-color: rgba(200, 169, 107, 0.22);
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Plus Jakarta Sans', system-ui, sans-serif;
            background: radial-gradient(circle at center, #143B36 0%, #071716 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            color: var(--text-main);
        }
        .login-card {
            width: 100%;
            max-width: 420px;
            background: var(--bg-surface);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            padding: 40px 32px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.5);
            text-align: center;
        }
        .login-logo {
            height: 48px;
            margin-bottom: 20px;
        }
        .login-title {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 6px;
        }
        .login-sub {
            color: var(--text-muted);
            font-size: 13px;
            margin-bottom: 28px;
        }
        .form-group {
            text-align: left;
            margin-bottom: 20px;
        }
        .form-label {
            display: block;
            font-size: 12px;
            font-weight: 600;
            color: var(--gold);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 8px;
        }
        .form-input {
            width: 100%;
            padding: 12px 16px;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.12);
            color: #fff;
            font-size: 14px;
            outline: none;
            transition: all 0.2s;
        }
        .form-input:focus {
            border-color: var(--gold);
            background: rgba(255, 255, 255, 0.08);
        }
        .btn-submit {
            width: 100%;
            padding: 13px;
            background: var(--gold);
            color: #071716;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            transition: background 0.2s;
            margin-top: 10px;
        }
        .btn-submit:hover {
            background: var(--gold-hover);
        }
        .login-error {
            background: rgba(224, 82, 96, 0.15);
            border: 1px solid rgba(224, 82, 96, 0.3);
            color: #FECDD3;
            padding: 10px 14px;
            border-radius: 8px;
            font-size: 13px;
            margin-bottom: 20px;
            text-align: left;
        }
        .login-tip {
            margin-top: 24px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            font-size: 12px;
            color: var(--text-muted);
        }
    </style>
</head>
<body>
    <div class="login-card">
        <img class="login-logo" src="{{ asset('assets/images/brand/smai-logo.webp') }}" alt="SMAI Clinics" />
        <h1 class="login-title">Control Panel</h1>
        <p class="login-sub">Log in to manage SMAI Wellness Clinics content</p>

        @if($errors->any())
            <div class="login-error">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('admin.login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label class="form-label">Email Address</label>
                <input class="form-input" type="email" name="email" value="{{ old('email', '') }}" required autofocus />
            </div>

            <div class="form-group">
                <label class="form-label">Password</label>
                <input class="form-input" type="password" name="password" required />
            </div>

            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px; font-size: 13px; color: var(--text-muted);">
                <label style="display: flex; align-items: center; gap: 8px; cursor: pointer;">
                    <input type="checkbox" name="remember" />
                    <span>Remember me</span>
                </label>
            </div>

            <button type="submit" class="btn-submit">Sign In to Dashboard</button>
        </form>

    </div>
</body>
</html>
