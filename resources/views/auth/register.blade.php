<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Janjua Tailors</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            line-height: 1.6;
            color: #1d1d1f;
            background: #fbfbfd;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .auth-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            max-width: 1200px;
            width: 100%;
            min-height: 100vh;
            background: white;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .auth-image {
            background: linear-gradient(135deg, rgba(29, 29, 31, 0.8), rgba(29, 29, 31, 0.6)), url('/images/auth-bg-register.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            padding: 60px 40px;
        }

        .auth-image h1 {
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
        }

        .auth-form {
            padding: 80px 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-header {
            text-align: center;
            margin-bottom: 48px;
        }

        .form-header h2 {
            font-size: 32px;
            font-weight: 600;
            color: #1d1d1f;
            margin-bottom: 12px;
        }

        .form-header p {
            color: #86868b;
            font-size: 16px;
        }

        .form-group {
            margin-bottom: 24px;
        }

        .form-label {
            display: block;
            font-size: 14px;
            font-weight: 500;
            color: #1d1d1f;
            margin-bottom: 8px;
        }

        .form-input {
            width: 100%;
            padding: 16px 20px;
            border: 2px solid #e5e5e7;
            border-radius: 12px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: #fbfbfd;
        }

        .form-input:focus {
            outline: none;
            border-color: #1d1d1f;
            background: white;
        }

        .form-button {
            width: 100%;
            padding: 16px;
            background: #1d1d1f;
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 24px;
        }

        .form-button:hover {
            background: #424245;
            transform: translateY(-1px);
        }

        .form-links {
            text-align: center;
        }

        .form-links a {
            color: #1d1d1f;
            text-decoration: none;
            font-size: 14px;
            transition: opacity 0.3s ease;
        }

        .form-links a:hover {
            opacity: 0.7;
        }

        .form-divider {
            margin: 24px 0;
            text-align: center;
            color: #86868b;
            font-size: 14px;
        }

        .error-message {
            color: #ff3b30;
            font-size: 14px;
            margin-top: 8px;
        }

        .back-link {
            position: absolute;
            top: 24px;
            left: 24px;
            color: #1d1d1f;
            text-decoration: none;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: opacity 0.3s ease;
        }

        .back-link:hover {
            opacity: 0.7;
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
    <a href="{{ url('/') }}" class="back-link">
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
</body>
</html>
