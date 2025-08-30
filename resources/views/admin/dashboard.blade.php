<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Janjua Tailors</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f5f5f5;
            color: #333;
        }

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 250px;
            height: 100vh;
            background: #2c3e50;
            color: white;
            padding: 20px 0;
            z-index: 1000;
        }

        .sidebar .logo {
            text-align: center;
            padding: 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 30px;
        }

        .sidebar .logo h2 {
            font-size: 1.5rem;
            font-weight: 600;
        }

        .sidebar-menu {
            list-style: none;
        }

        .sidebar-menu li {
            margin-bottom: 5px;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            padding: 15px 25px;
            color: #bdc3c7;
            text-decoration: none;
            transition: all 0.3s;
        }

        .sidebar-menu a:hover,
        .sidebar-menu a.active {
            background: #34495e;
            color: white;
        }

        .sidebar-menu i {
            margin-right: 15px;
            width: 20px;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        .header {
            background: white;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            font-size: 2rem;
            color: #2c3e50;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-icon {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .stat-card.orders .stat-icon { color: #3498db; }
        .stat-card.pending .stat-icon { color: #f39c12; }
        .stat-card.completed .stat-icon { color: #27ae60; }
        .stat-card.customers .stat-icon { color: #9b59b6; }
        .stat-card.products .stat-icon { color: #e74c3c; }
        .stat-card.revenue .stat-icon { color: #16a085; }

        .stat-number {
            font-size: 2rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 5px;
        }

        .stat-label {
            color: #7f8c8d;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .dashboard-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
        }

        .card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .card-header {
            padding: 20px 25px;
            border-bottom: 1px solid #ecf0f1;
            background: #f8f9fa;
        }

        .card-header h3 {
            color: #2c3e50;
            font-size: 1.2rem;
        }

        .card-body {
            padding: 25px;
        }

        .recent-orders {
            list-style: none;
        }

        .recent-orders li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid #ecf0f1;
        }

        .recent-orders li:last-child {
            border-bottom: none;
        }

        .order-info h4 {
            color: #2c3e50;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .order-info p {
            color: #7f8c8d;
            font-size: 12px;
        }

        .order-status {
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .status-pending { background: #fff3cd; color: #856404; }
        .status-confirmed { background: #d1ecf1; color: #0c5460; }
        .status-cutting { background: #ffeaa7; color: #6c5ce7; }
        .status-stitching { background: #fd79a8; color: #2d3436; }
        .status-ready { background: #d4edda; color: #155724; }

        .status-chart {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .status-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .status-bar {
            flex: 1;
            height: 8px;
            background: #ecf0f1;
            border-radius: 4px;
            margin: 0 15px;
            overflow: hidden;
        }

        .status-progress {
            height: 100%;
            border-radius: 4px;
            transition: width 0.3s;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary {
            background: #3498db;
            color: white;
        }

        .btn-primary:hover {
            background: #2980b9;
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }
            
            .main-content {
                margin-left: 0;
            }
            
            .dashboard-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <h2>Janjua Tailors</h2>
            <p>Admin Panel</p>
        </div>
        <ul class="sidebar-menu">
            <li><a href="{{ route('admin.dashboard') }}" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="{{ route('admin.orders') }}"><i class="fas fa-shopping-bag"></i> Orders</a></li>
            <li><a href="{{ route('admin.products.index') }}"><i class="fas fa-box"></i> Products</a></li>
            <li><a href="{{ route('admin.customers.index') }}"><i class="fas fa-users"></i> Customers</a></li>
            <li><a href="{{ url('/') }}"><i class="fas fa-globe"></i> View Website</a></li>
            <li><a href="{{ route('dashboard') }}"><i class="fas fa-user"></i> My Account</a></li>
        </ul>
    </div>

    <div class="main-content">
        <div class="header">
            <h1>Dashboard</h1>
            <div class="user-info">
                <span>Welcome, {{ auth()->user()->name }}</span>
                <i class="fas fa-user-circle" style="font-size: 1.5rem; color: #7f8c8d;"></i>
            </div>
        </div>

        <div class="stats-grid">
            <div class="stat-card orders">
                <div class="stat-icon">
                    <i class="fas fa-shopping-bag"></i>
                </div>
                <div class="stat-number">{{ $stats['total_orders'] }}</div>
                <div class="stat-label">Total Orders</div>
            </div>

            <div class="stat-card pending">
                <div class="stat-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="stat-number">{{ $stats['pending_orders'] }}</div>
                <div class="stat-label">Pending Orders</div>
            </div>

            <div class="stat-card completed">
                <div class="stat-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="stat-number">{{ $stats['completed_orders'] }}</div>
                <div class="stat-label">Completed Orders</div>
            </div>

            <div class="stat-card customers">
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-number">{{ $stats['total_customers'] }}</div>
                <div class="stat-label">Total Customers</div>
            </div>

            <div class="stat-card products">
                <div class="stat-icon">
                    <i class="fas fa-box"></i>
                </div>
                <div class="stat-number">{{ $stats['total_products'] }}</div>
                <div class="stat-label">Total Products</div>
            </div>

            <div class="stat-card revenue">
                <div class="stat-icon">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="stat-number">{{ number_format($stats['revenue_this_month']) }}</div>
                <div class="stat-label">Monthly Revenue</div>
            </div>
        </div>

        <div class="dashboard-grid">
            <div class="card">
                <div class="card-header">
                    <h3>Recent Orders</h3>
                </div>
                <div class="card-body">
                    @if($recent_orders->count() > 0)
                        <ul class="recent-orders">
                            @foreach($recent_orders as $order)
                            <li>
                                <div class="order-info">
                                    <h4>{{ $order->order_number }}</h4>
                                    <p>{{ $order->user->name }} • {{ $order->created_at->diffForHumans() }}</p>
                                </div>
                                <div>
                                    <div class="order-status status-{{ $order->status }}">
                                        {{ str_replace('_', ' ', $order->status) }}
                                    </div>
                                    <p style="margin-top: 5px; font-size: 12px; color: #27ae60; font-weight: 600;">
                                        Rs. {{ number_format($order->total_amount) }}
                                    </p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        <div style="text-align: center; margin-top: 20px;">
                            <a href="{{ route('admin.orders') }}" class="btn btn-primary">View All Orders</a>
                        </div>
                    @else
                        <p style="text-align: center; color: #7f8c8d; padding: 40px;">No orders yet</p>
                    @endif
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3>Order Status Distribution</h3>
                </div>
                <div class="card-body">
                    <div class="status-chart">
                        @foreach($status_distribution as $status)
                        <div class="status-item">
                            <span style="font-size: 12px; color: #2c3e50; font-weight: 500;">
                                {{ str_replace('_', ' ', ucfirst($status->status)) }}
                            </span>
                            <div class="status-bar">
                                <div class="status-progress" 
                                     style="width: {{ ($status->count / $stats['total_orders']) * 100 }}%; 
                                            background: {{ $status->status === 'delivered' ? '#27ae60' : ($status->status === 'pending' ? '#f39c12' : '#3498db') }};"></div>
                            </div>
                            <span style="font-size: 12px; color: #7f8c8d;">{{ $status->count }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>