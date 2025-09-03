<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Janjua Tailors</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/shared-styles.css') }}">
    
    <style>
        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .auth-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            max-width: 1200px;
            width: 100%;
            min-height: 100vh;
        }

        .auth-image {
            background: rgba(0, 0, 0, 0.3);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            padding: 60px 40px;
            position: relative;
        }

        .auth-image h1 {
            font-family: 'Playfair Display', serif;
            font-size: 48px;
            font-weight: 600;
            margin-bottom: 24px;
            letter-spacing: -0.5px;
        }

        .auth-image p {
            font-size: 18px;
            opacity: 0.9;
            max-width: 400px;
            line-height: 1.6;
            font-weight: 300;
        }

        .auth-form {
            padding: 80px 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            overflow: hidden;
        }

        .auth-form::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="form-grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="30" cy="30" r="0.4" fill="rgba(255,255,255,0.04)"/><circle cx="70" cy="70" r="0.4" fill="rgba(255,255,255,0.04)"/></pattern></defs><rect width="100" height="100" fill="url(%23form-grain)"/></svg>');
            opacity: 0.3;
            z-index: 0;
        }

        .form-header {
            text-align: center;
            margin-bottom: 48px;
            position: relative;
            z-index: 2;
        }

        .form-header h2 {
            font-family: 'Playfair Display', serif;
            font-size: 32px;
            font-weight: 600;
            color: #fff;
            margin-bottom: 12px;
            letter-spacing: -0.5px;
        }

        .form-header p {
            color: rgba(255, 255, 255, 0.8);
            font-size: 16px;
            font-weight: 300;
        }

        .form-group {
            margin-bottom: 24px;
            position: relative;
            z-index: 2;
        }

        .form-button {
            width: 100%;
            padding: 16px 20px;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 50px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 24px;
            backdrop-filter: blur(10px);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            position: relative;
            z-index: 2;
        }

        .form-button:hover {
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.6);
            transform: translateY(-2px);
        }

        .form-links {
            text-align: center;
            position: relative;
            z-index: 2;
        }

        .form-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .form-links a:hover {
            color: #fff;
        }

        .form-divider {
            margin: 24px 0;
            text-align: center;
            color: rgba(255, 255, 255, 0.6);
            font-size: 14px;
            position: relative;
            z-index: 2;
        }

        .form-divider a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .form-divider a:hover {
            color: #fff;
        }

        .error-message {
            color: #ff6b6b;
            font-size: 14px;
            margin-top: 8px;
        }

        .back-link {
            position: absolute;
            top: 24px;
            left: 24px;
            z-index: 10;
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

            .form-header h2 {
                font-size: 28px;
            }

            .auth-image h1 {
                font-size: 36px;
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
            <h1>Join Our Legacy</h1>
            <p>Become part of the Janjua Tailors family and experience three generations of luxury tailoring excellence in Gujranwala.</p>
        </div>

        <div class="auth-form">
            <div class="form-header">
                <h2>Create Account</h2>
                <p>Start your journey with personalized luxury tailoring</p>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <label for="name" class="form-label">Full Name</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" class="form-input">
                    @error('name')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Email Address</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" class="form-input">
                    @error('email')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" type="password" name="password" required autocomplete="new-password" class="form-input">
                    @error('password')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="form-input">
                    @error('password_confirmation')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="form-button">Create Account</button>

                <div class="form-divider">
                    Already have an account? <a href="{{ route('login') }}">Sign in</a>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/shared-scripts.js') }}"></script>
</body>
</html>
