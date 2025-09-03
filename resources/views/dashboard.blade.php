<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account - Janjua Tailors</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/shared-styles.css') }}">
    
    <style>
        .main-content {
            margin-top: 80px;
            padding: 40px 0;
        }

        .dashboard-grid {
            display: grid;
            grid-template-columns: 300px 1fr;
            gap: 2rem;
            margin-top: 2rem;
        }

        .sidebar-nav {
            position: sticky;
            top: 100px;
            height: fit-content;
        }

        .nav-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 1rem 1.5rem;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s ease;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .nav-item:hover,
        .nav-item.active {
            color: #fff;
            background: rgba(255, 255, 255, 0.1);
            padding-left: 2rem;
        }

        .nav-item i {
            font-size: 1.1rem;
            width: 20px;
        }

        .quick-actions {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
            margin-bottom: 3rem;
        }

        .action-card {
            text-align: center;
            padding: 2rem;
            transition: all 0.3s ease;
        }

        .action-card:hover {
            transform: translateY(-5px);
        }

        .action-icon {
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 1.5rem;
            color: #fff;
        }

        .action-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.25rem;
            font-weight: 600;
            color: #fff;
            margin-bottom: 0.75rem;
        }

        .action-description {
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.9rem;
            line-height: 1.5;
            margin-bottom: 1.5rem;
        }

        .recent-orders {
            margin-top: 3rem;
            padding-top: 3rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .order-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1.5rem;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 1rem;
            transition: all 0.3s ease;
        }

        .order-item:hover {
            background: rgba(255, 255, 255, 0.08);
            transform: translateX(5px);
        }

        .order-info h4 {
            color: #fff;
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .order-info p {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
        }

        .order-status {
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-pending {
            background: rgba(255, 193, 7, 0.2);
            color: #ffc107;
            border: 1px solid rgba(255, 193, 7, 0.3);
        }

        .status-confirmed {
            background: rgba(13, 110, 253, 0.2);
            color: #0d6efd;
            border: 1px solid rgba(13, 110, 253, 0.3);
        }

        .status-ready {
            background: rgba(25, 135, 84, 0.2);
            color: #198754;
            border: 1px solid rgba(25, 135, 84, 0.3);
        }

        .logout-btn {
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .logout-btn button {
            width: 100%;
            background: rgba(220, 53, 69, 0.2);
            color: #dc3545;
            border: 1px solid rgba(220, 53, 69, 0.3);
        }

        .logout-btn button:hover {
            background: rgba(220, 53, 69, 0.3);
            border-color: rgba(220, 53, 69, 0.5);
        }

        @media (max-width: 768px) {
            .dashboard-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .sidebar-nav {
                position: static;
            }

            .quick-actions {
                grid-template-columns: 1fr;
            }

            .order-item {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <a href="{{ url('/') }}" class="nav-brand">Janjua Tailors</a>
            
            <ul class="nav-links">
                <li><a href="{{ route('pages.heritage') }}">Heritage</a></li>
                <li><a href="{{ route('pages.craftsmanship') }}">Craftsmanship</a></li>
                <li><a href="{{ route('products.index') }}">Fabrics</a></li>
                <li><a href="{{ route('custom-order.start') }}">Custom Order</a></li>
                @auth
                    <li><a href="{{ route('my-orders') }}">My Orders</a></li>
                    <li><a href="{{ route('dashboard') }}">Account</a></li>
                @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Sign Up</a></li>
                @endauth
            </ul>
            
            <button class="nav-toggle" id="navToggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>

    <!-- Mobile Navigation -->
    <div class="mobile-nav" id="mobileNav">
        <ul class="mobile-nav-links">
            <li><a href="{{ route('pages.heritage') }}">Heritage</a></li>
            <li><a href="{{ route('pages.craftsmanship') }}">Craftsmanship</a></li>
            <li><a href="{{ route('products.index') }}">Fabrics</a></li>
            <li><a href="{{ route('custom-order.start') }}">Custom Order</a></li>
            @auth
                <li><a href="{{ route('my-orders') }}">My Orders</a></li>
                <li><a href="{{ route('dashboard') }}">Account</a></li>
            @else
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Sign Up</a></li>
            @endauth
        </ul>
    </div>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <!-- Header -->
            <div class="section-header">
                <h1 class="section-title">Welcome back, {{ Auth::user()->name }}</h1>
                <p class="section-subtitle">Manage your orders, preferences, and account settings with three generations of tailoring excellence</p>
            </div>

            <div class="dashboard-grid">
                <!-- Sidebar -->
                <div class="sidebar-nav card">
                    <div class="card-content">
                        <nav>
                            <a href="{{ route('dashboard') }}" class="nav-item active">
                                <i class="fas fa-tachometer-alt"></i>
                                Dashboard
                            </a>
                            <a href="{{ route('my-orders') }}" class="nav-item">
                                <i class="fas fa-shopping-bag"></i>
                                My Orders
                            </a>
                            <a href="{{ route('profile.edit') }}" class="nav-item">
                                <i class="fas fa-user"></i>
                                Profile
                            </a>
                            <a href="{{ route('custom-order.start') }}" class="nav-item">
                                <i class="fas fa-plus-circle"></i>
                                New Order
                            </a>
                            <a href="#" class="nav-item">
                                <i class="fas fa-heart"></i>
                                Favorites
                            </a>
                            <a href="#" class="nav-item">
                                <i class="fas fa-cog"></i>
                                Settings
                            </a>
                        </nav>

                        <div class="logout-btn">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn-secondary btn-rounded w-full">
                                    <i class="fas fa-sign-out-alt"></i>
                                    Sign Out
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Main Panel -->
                <div class="main-panel">
                    <div class="card">
                        <div class="card-content">
                            <!-- Quick Actions -->
                            <div class="quick-actions">
                                <div class="action-card card">
                                    <div class="card-content">
                                        <div class="action-icon">
                                            <i class="fas fa-plus-circle"></i>
                                        </div>
                                        <h3 class="action-title">Start Custom Order</h3>
                                        <p class="action-description">Create a new bespoke shalwar kameez tailored to your measurements</p>
                                        <a href="{{ route('custom-order.start') }}" class="btn-primary btn-rounded">
                                            Get Started
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="action-card card">
                                    <div class="card-content">
                                        <div class="action-icon">
                                            <i class="fas fa-shopping-bag"></i>
                                        </div>
                                        <h3 class="action-title">View Orders</h3>
                                        <p class="action-description">Track your current orders and view order history</p>
                                        <a href="{{ route('my-orders') }}" class="btn-primary btn-rounded">
                                            View Orders
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="action-card card">
                                    <div class="card-content">
                                        <div class="action-icon">
                                            <i class="fas fa-swatches"></i>
                                        </div>
                                        <h3 class="action-title">Browse Fabrics</h3>
                                        <p class="action-description">Explore our premium fabric collection from top brands</p>
                                        <a href="{{ route('products.index') }}" class="btn-primary btn-rounded">
                                            Browse Fabrics
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="action-card card">
                                    <div class="card-content">
                                        <div class="action-icon">
                                            <i class="fas fa-user-edit"></i>
                                        </div>
                                        <h3 class="action-title">Update Profile</h3>
                                        <p class="action-description">Manage your account information and preferences</p>
                                        <a href="{{ route('profile.edit') }}" class="btn-primary btn-rounded">
                                            Edit Profile
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        @php
                            $userOrders = \App\Models\CustomOrder::where('user_id', Auth::id())->latest()->take(3)->get();
                        @endphp

                            @if($userOrders->count() > 0)
                            <!-- Recent Orders -->
                            <div class="recent-orders">
                                <h3 class="section-title" style="font-size: 1.5rem; margin-bottom: 1.5rem;">Recent Orders</h3>
                                <div>
                                    @foreach($userOrders as $order)
                                    <div class="order-item">
                                        <div class="order-info">
                                            <h4>{{ $order->order_number }}</h4>
                                            <p>{{ $order->created_at->diffForHumans() }} • Rs. {{ number_format($order->total_amount) }}</p>
                                        </div>
                                        <div>
                                            <span class="order-status 
                                                @if($order->status === 'pending') status-pending
                                                @elseif($order->status === 'confirmed') status-confirmed
                                                @elseif($order->status === 'ready') status-ready
                                                @else status-pending
                                                @endif">
                                                {{ str_replace('_', ' ', ucfirst($order->status)) }}
                                            </span>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('js/shared-scripts.js') }}"></script>
</body>
</html>
