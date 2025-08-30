<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account - Janjua Tailors</title>
    
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
        }

        /* Navigation */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            height: 60px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: saturate(180%) blur(20px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
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
            color: #1d1d1f;
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
            font-family: "Didot", "Bodoni MT", "Garamond", "Palatino Linotype", "Times New Roman", Georgia, serif;
            font-size: 24px;
            font-weight: 600;
            color: #1d1d1f;
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
            font-family: 'Arial', sans-serif;
            color: #1d1d1f;
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
            font-size: 36px;
            font-weight: 600;
            color: #1d1d1f;
            margin-bottom: 8px;
        }

        .dashboard-header p {
            color: #86868b;
            font-size: 18px;
        }

        .dashboard-grid {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 40px;
        }

        .sidebar {
            background: white;
            border-radius: 16px;
            padding: 32px;
            height: fit-content;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
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
            color: #1d1d1f;
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .sidebar-menu a:hover,
        .sidebar-menu a.active {
            background: #f5f5f7;
        }

        .sidebar-menu i {
            width: 20px;
            text-align: center;
        }

        .main-panel {
            background: white;
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .welcome-section {
            text-align: center;
            padding: 60px 0;
        }

        .welcome-section h2 {
            font-size: 32px;
            font-weight: 600;
            color: #1d1d1f;
            margin-bottom: 16px;
        }

        .welcome-section p {
            color: #86868b;
            font-size: 18px;
            margin-bottom: 32px;
        }

        .quick-actions {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 24px;
            margin-top: 40px;
        }

        .action-card {
            background: #f5f5f7;
            padding: 24px;
            border-radius: 12px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .action-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .action-card i {
            font-size: 32px;
            color: #1d1d1f;
            margin-bottom: 16px;
        }

        .action-card h3 {
            font-size: 18px;
            font-weight: 600;
            color: #1d1d1f;
            margin-bottom: 8px;
        }

        .action-card p {
            color: #86868b;
            font-size: 14px;
            margin-bottom: 16px;
        }

        .action-card a {
            display: inline-block;
            background: #1d1d1f;
            color: white;
            padding: 8px 16px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .action-card a:hover {
            background: #424245;
        }

        .logout-form {
            margin-top: 32px;
            padding-top: 32px;
            border-top: 1px solid #e5e5e7;
        }

        .logout-btn {
            width: 100%;
            background: #ff3b30;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .logout-btn:hover {
            background: #d70015;
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
