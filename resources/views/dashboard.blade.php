<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account - Janjua Tailors</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
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
            color: #fff;
            background: #000;
            overflow-x: hidden;
            position: relative;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="50" cy="50" r="0.5" fill="rgba(255,255,255,0.05)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.3;
            z-index: -1;
        }

        /* Navigation */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            height: 60px;
            background: rgba(0, 0, 0, 0.95);
            backdrop-filter: saturate(180%) blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            z-index: 1000;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 100%;
            padding: 0 24px;
        }

        .nav-left {
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .nav-menu-icon,
        .nav-cart-icon {
            font-size: 20px;
            color: #fff;
            cursor: pointer;
            transition: opacity 0.3s ease;
        }

        .nav-menu-icon:hover,
        .nav-cart-icon:hover {
            opacity: 0.7;
        }

        .nav-brand {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            font-family: 'Playfair Display', serif;
            font-size: 24px;
            font-weight: 600;
            color: #fff;
            text-decoration: none;
            letter-spacing: -0.5px;
        }

        .nav-right {
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .nav-auth-links {
            display: flex;
            gap: 20px;
        }

        .nav-auth-links a {
            font-family: 'Inter', sans-serif;
            color: #fff;
            text-decoration: none;
            font-size: 14px;
            font-weight: 400;
            transition: opacity 0.3s ease;
        }

        .nav-auth-links a:hover {
            opacity: 0.7;
        }

        /* Main Content */
        .main-content {
            margin-top: 60px;
            padding: 40px 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
        }

        .dashboard-header {
            margin-bottom: 40px;
        }

        .dashboard-header h1 {
            font-family: 'Playfair Display', serif;
            font-size: 36px;
            font-weight: 600;
            color: #fff;
            margin-bottom: 8px;
            letter-spacing: -0.5px;
        }

        .dashboard-header p {
            color: rgba(255, 255, 255, 0.8);
            font-size: 18px;
            font-weight: 300;
        }

        .dashboard-grid {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 40px;
        }

        .sidebar {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 0;
            padding: 32px;
            height: fit-content;
            backdrop-filter: blur(20px);
            position: relative;
            overflow: hidden;
        }

        .sidebar::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="sidebar-grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="30" cy="30" r="0.4" fill="rgba(255,255,255,0.04)"/><circle cx="70" cy="70" r="0.4" fill="rgba(255,255,255,0.04)"/></pattern></defs><rect width="100" height="100" fill="url(%23sidebar-grain)"/></svg>');
            opacity: 0.3;
            z-index: 0;
        }

        .sidebar-menu {
            list-style: none;
        }

        .sidebar-menu li {
            margin-bottom: 16px;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 16px;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            border-radius: 0;
            transition: all 0.3s ease;
            position: relative;
            z-index: 2;
        }

        .sidebar-menu a:hover,
        .sidebar-menu a.active {
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
        }

        .sidebar-menu i {
            width: 20px;
            text-align: center;
        }

        .main-panel {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 0;
            padding: 40px;
            backdrop-filter: blur(20px);
            position: relative;
            overflow: hidden;
        }

        .main-panel::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="panel-grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="0.3" fill="rgba(255,255,255,0.03)"/><circle cx="75" cy="75" r="0.3" fill="rgba(255,255,255,0.03)"/></pattern></defs><rect width="100" height="100" fill="url(%23panel-grain)"/></svg>');
            opacity: 0.3;
            z-index: 0;
        }

        .welcome-section {
            text-align: center;
            padding: 60px 0;
        }

        .welcome-section {
            position: relative;
            z-index: 2;
        }

        .welcome-section h2 {
            font-family: 'Playfair Display', serif;
            font-size: 32px;
            font-weight: 600;
            color: #fff;
            margin-bottom: 16px;
            letter-spacing: -0.5px;
        }

        .welcome-section p {
            color: rgba(255, 255, 255, 0.8);
            font-size: 18px;
            margin-bottom: 32px;
            font-weight: 300;
        }

        .quick-actions {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 24px;
            margin-top: 40px;
        }

        .action-card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 24px;
            border-radius: 0;
            text-align: center;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            position: relative;
            overflow: hidden;
        }

        .action-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="card-grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="50" cy="50" r="0.3" fill="rgba(255,255,255,0.03)"/></pattern></defs><rect width="100" height="100" fill="url(%23card-grain)"/></svg>');
            opacity: 0.5;
            z-index: 0;
        }

        .action-card:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.08);
            border-color: rgba(255, 255, 255, 0.2);
        }

        .action-card i {
            font-size: 32px;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 16px;
            position: relative;
            z-index: 2;
        }

        .action-card h3 {
            font-size: 18px;
            font-weight: 600;
            color: #fff;
            margin-bottom: 8px;
            position: relative;
            z-index: 2;
        }

        .action-card p {
            color: rgba(255, 255, 255, 0.7);
            font-size: 14px;
            margin-bottom: 16px;
            position: relative;
            z-index: 2;
        }

        .action-card a {
            display: inline-block;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            padding: 8px 16px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 50px;
            text-decoration: none;
            font-size: 14px;
            transition: all 0.3s ease;
            position: relative;
            z-index: 2;
            backdrop-filter: blur(10px);
        }

        .action-card a:hover {
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.4);
            transform: translateY(-2px);
        }

        .logout-form {
            margin-top: 32px;
            padding-top: 32px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
            z-index: 2;
        }

        .logout-btn {
            width: 100%;
            background: rgba(255, 59, 48, 0.2);
            color: #ff6b6b;
            border: 1px solid rgba(255, 59, 48, 0.3);
            padding: 12px;
            border-radius: 50px;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .logout-btn:hover {
            background: rgba(255, 59, 48, 0.3);
            border-color: rgba(255, 59, 48, 0.5);
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .dashboard-grid {
                grid-template-columns: 1fr;
            }

            .nav-brand {
                font-size: 20px;
            }

            .nav-auth-links {
                display: none;
            }

            .dashboard-header h1 {
                font-size: 28px;
            }

            .main-panel {
                padding: 24px;
            }

            .quick-actions {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-left">
                <i class="fas fa-bars nav-menu-icon"></i>
                <i class="fas fa-shopping-cart nav-cart-icon"></i>
            </div>
            
            <a href="{{ url('/') }}" class="nav-brand">Janjua Tailors</a>
            
            <div class="nav-right">
                <div class="nav-auth-links">
                    <a href="{{ route('my-orders') }}">My Orders</a>
                    <a href="{{ route('dashboard') }}">Account</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <div class="dashboard-header">
                <h1>Welcome back, {{ Auth::user()->name }}</h1>
                <p>Manage your orders, preferences, and account settings</p>
            </div>

            <div class="dashboard-grid">
                <aside class="sidebar">
                    <ul class="sidebar-menu">
                        <li><a href="{{ route('dashboard') }}" class="active"><i class="fas fa-home"></i> Dashboard</a></li>
                        <li><a href="{{ route('my-orders') }}"><i class="fas fa-shopping-bag"></i> My Orders</a></li>
                        <li><a href="{{ route('profile.edit') }}"><i class="fas fa-user"></i> Profile</a></li>
                        <li><a href="{{ route('custom-order.start') }}"><i class="fas fa-plus"></i> New Order</a></li>
                        <li><a href="#"><i class="fas fa-heart"></i> Favorites</a></li>
                        <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li>
                    </ul>

                    <form method="POST" action="{{ route('logout') }}" class="logout-form">
                        @csrf
                        <button type="submit" class="logout-btn">
                            <i class="fas fa-sign-out-alt"></i> Sign Out
                        </button>
                    </form>
                </aside>

                <div class="main-panel">
                    <div class="welcome-section">
                        <h2>Your Tailoring Journey</h2>
                        <p>Experience the luxury and reliability that three generations of Janjua Tailors have perfected in Gujranwala.</p>

                        <div class="quick-actions">
                            <div class="action-card">
                                <i class="fas fa-plus-circle"></i>
                                <h3>Start Custom Order</h3>
                                <p>Create a new bespoke shalwar kameez tailored to your measurements</p>
                                <a href="{{ route('custom-order.start') }}">Get Started</a>
                            </div>

                            <div class="action-card">
                                <i class="fas fa-shopping-bag"></i>
                                <h3>View Orders</h3>
                                <p>Track your current orders and view order history</p>
                                <a href="{{ route('my-orders') }}">View Orders</a>
                            </div>

                            <div class="action-card">
                                <i class="fas fa-swatches"></i>
                                <h3>Browse Fabrics</h3>
                                <p>Explore our premium fabric collection from top brands</p>
                                <a href="{{ route('products.index') }}">Browse Fabrics</a>
                            </div>

                            <div class="action-card">
                                <i class="fas fa-user-edit"></i>
                                <h3>Update Profile</h3>
                                <p>Manage your account information and preferences</p>
                                <a href="{{ route('profile.edit') }}">Edit Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
