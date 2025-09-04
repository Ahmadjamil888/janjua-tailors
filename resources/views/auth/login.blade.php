<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Janjua Tailors</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/shared-styles.css') }}">
    
    <style>
        :root {
            --primary-color: #8B4513;
            --secondary-color: #D2B48C;
            --text-dark: #2C2C2C;
            --text-muted: #666666;
            --bg-light: #FAFAFA;
            --border-light: #E5E5E5;
            --font-heading: 'Playfair Display', serif;
            --font-body: 'Inter', sans-serif;
            --border-radius: 8px;
            --border-radius-pill: 9999px;
            --shadow-subtle: 0 2px 8px rgba(0, 0, 0, 0.08);
            --shadow-elevated: 0 8px 32px rgba(0, 0, 0, 0.12);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font-body);
            background: linear-gradient(135deg, #f5f5f5 0%, #e8e8e8 100%);
            min-height: 100vh;
            color: var(--text-dark);
            line-height: 1.6;
        }

        .auth-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            max-width: 1200px;
            width: 100%;
            min-height: 100vh;
            margin: 0 auto;
        }

        .auth-image {
            background: linear-gradient(135deg, var(--primary-color) 0%, #A0522D 100%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            padding: 60px 40px;
            position: relative;
            overflow: hidden;
        }

        .auth-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="0.5" fill="rgba(255,255,255,0.1)"/><circle cx="75" cy="75" r="0.5" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.3;
        }

        .auth-image h1 {
            font-family: var(--font-heading);
            font-size: 48px;
            font-weight: 600;
            margin-bottom: 24px;
            letter-spacing: -0.5px;
            position: relative;
            z-index: 2;
        }

        .auth-image p {
            font-size: 18px;
            opacity: 0.95;
            max-width: 400px;
            line-height: 1.6;
            font-weight: 300;
            position: relative;
            z-index: 2;
        }

        .auth-form {
            padding: 80px 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: white;
            position: relative;
        }

        .form-card {
            background: white;
            border-radius: 16px;
            padding: 48px;
            box-shadow: var(--shadow-elevated);
            border: 1px solid var(--border-light);
            position: relative;
            transition: all 0.3s ease;
        }

        .form-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
        }

        .form-header {
            text-align: center;
            margin-bottom: 48px;
        }

        .form-header h2 {
            font-family: var(--font-heading);
            font-size: 32px;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 12px;
            letter-spacing: -0.5px;
        }

        .form-header p {
            color: var(--text-muted);
            font-size: 16px;
            font-weight: 400;
        }

        .form-group {
            margin-bottom: 24px;
            position: relative;
        }

        .form-label {
            display: block;
            font-size: 14px;
            font-weight: 500;
            color: var(--text-dark);
            margin-bottom: 8px;
            font-family: var(--font-body);
        }

        .form-input {
            width: 100%;
            padding: 16px 20px;
            border: 2px solid var(--border-light);
            border-radius: var(--border-radius);
            font-size: 16px;
            font-family: var(--font-body);
            background: white;
            transition: all 0.3s ease;
            color: var(--text-dark);
        }

        .form-input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(139, 69, 19, 0.1);
            transform: translateY(-1px);
        }

        .form-input:hover {
            border-color: #ccc;
        }

        .form-checkbox {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 32px;
        }

        .form-checkbox input[type="checkbox"] {
            width: 20px;
            height: 20px;
            accent-color: var(--primary-color);
            cursor: pointer;
        }

        .form-checkbox label {
            font-size: 14px;
            color: var(--text-muted);
            cursor: pointer;
            font-family: var(--font-body);
        }

        .form-button {
            width: 100%;
            padding: 16px 20px;
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: var(--border-radius-pill);
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 24px;
            font-family: var(--font-body);
            text-transform: none;
            letter-spacing: 0;
        }

        .form-button:hover {
            background: #A0522D;
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(139, 69, 19, 0.3);
        }

        .form-button:active {
            transform: translateY(0);
        }

        .form-links {
            text-align: center;
            margin-bottom: 24px;
        }

        .form-links a {
            color: var(--primary-color);
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s ease;
            font-family: var(--font-body);
        }

        .form-links a:hover {
            color: #A0522D;
            text-decoration: underline;
        }

        .form-divider {
            margin: 24px 0;
            text-align: center;
            color: var(--text-muted);
            font-size: 14px;
            font-family: var(--font-body);
        }

        .form-divider a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .form-divider a:hover {
            color: #A0522D;
            text-decoration: underline;
        }

        .error-message {
            color: #dc3545;
            font-size: 14px;
            margin-top: 8px;
            font-family: var(--font-body);
            font-weight: 400;
        }

        .success-message {
            background: #d4edda;
            color: #155724;
            padding: 16px 20px;
            border-radius: var(--border-radius);
            margin-bottom: 24px;
            font-size: 14px;
            border: 1px solid #c3e6cb;
            font-family: var(--font-body);
        }

        .back-link {
            position: absolute;
            top: 24px;
            left: 24px;
            z-index: 10;
            background: white;
            color: var(--primary-color);
            padding: 12px 20px;
            border-radius: var(--border-radius-pill);
            text-decoration: none;
            font-weight: 500;
            box-shadow: var(--shadow-subtle);
            transition: all 0.3s ease;
            font-family: var(--font-body);
        }

        .back-link:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-2px);
            box-shadow: var(--shadow-elevated);
        }

        .back-link i {
            margin-right: 8px;
        }

        @media (max-width: 768px) {
            .auth-container {
                grid-template-columns: 1fr;
            }

            .auth-image {
                display: none;
            }

            .auth-form {
                padding: 40px 24px;
            }

            .form-card {
                padding: 32px 24px;
                margin: 20px;
            }

            .form-header h2 {
                font-size: 28px;
            }

            .back-link {
                top: 16px;
                left: 16px;
                padding: 10px 16px;
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .form-card {
                margin: 10px;
                padding: 24px 20px;
            }

            .form-input {
                padding: 14px 16px;
                font-size: 16px;
            }

            .form-button {
                padding: 14px 20px;
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <a href="{{ url('/') }}" class="back-link btn-secondary btn-rounded">
        <i class="fas fa-arrow-left"></i>
        Back to Home
    </a>

    <div class="auth-container">
        <div class="auth-image">
            <h1>Welcome Back</h1>
            <p>Continue your journey with Janjua Tailors - where luxury meets reliability across three generations of excellence.</p>
        </div>

        <div class="auth-form">
            <div class="form-card">
                <div class="form-header">
                    <h2>Sign In</h2>
                    <p>Access your account to manage orders and preferences</p>
                </div>

                @if (session('status'))
                    <div class="success-message">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" class="form-input">
                        @error('email')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password" name="password" required autocomplete="current-password" class="form-input">
                        @error('password')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-checkbox">
                        <input id="remember_me" type="checkbox" name="remember">
                        <label for="remember_me">Remember me</label>
                    </div>

                    <button type="submit" class="form-button">Sign In</button>

                    <div class="form-links">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">Forgot your password?</a>
                        @endif
                    </div>

                    <div class="form-divider">
                        Don't have an account? <a href="{{ route('register') }}">Sign up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/shared-scripts.js') }}"></script>
</body>
</html>
