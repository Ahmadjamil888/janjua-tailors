<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders - Janjua Tailors</title>
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
            background: linear-gradient(135deg, #000 0%, #333 100%);
            min-height: 100vh;
            color: white;
        }

        .navbar {
            background: rgba(0, 0, 0, 0.9);
            padding: 15px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 600;
            color: #fff;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: #fff;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .header {
            margin-bottom: 40px;
        }

        .header h1 {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 10px;
            background: linear-gradient(45deg, #fff, #ccc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .orders-grid {
            display: grid;
            gap: 25px;
        }

        .order-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 25px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s;
        }

        .order-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
        }

        .order-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            flex-wrap: wrap;
            gap: 15px;
        }

        .order-number {
            font-size: 1.2rem;
            font-weight: 600;
            color: #fff;
        }

        .order-status {
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-pending { background: rgba(255, 193, 7, 0.2); color: #FFC107; border: 1px solid rgba(255, 193, 7, 0.3); }
        .status-confirmed { background: rgba(33, 150, 243, 0.2); color: #2196F3; border: 1px solid rgba(33, 150, 243, 0.3); }
        .status-cutting { background: rgba(255, 152, 0, 0.2); color: #FF9800; border: 1px solid rgba(255, 152, 0, 0.3); }
        .status-stitching { background: rgba(156, 39, 176, 0.2); color: #9C27B0; border: 1px solid rgba(156, 39, 176, 0.3); }
        .status-finishing { background: rgba(103, 58, 183, 0.2); color: #673AB7; border: 1px solid rgba(103, 58, 183, 0.3); }
        .status-quality_check { background: rgba(233, 30, 99, 0.2); color: #E91E63; border: 1px solid rgba(233, 30, 99, 0.3); }
        .status-ready { background: rgba(76, 175, 80, 0.2); color: #4CAF50; border: 1px solid rgba(76, 175, 80, 0.3); }
        .status-shipped { background: rgba(0, 188, 212, 0.2); color: #00BCD4; border: 1px solid rgba(0, 188, 212, 0.3); }
        .status-delivered { background: rgba(76, 175, 80, 0.3); color: #4CAF50; border: 1px solid rgba(76, 175, 80, 0.5); }

        .order-details {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }

        .detail-item {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .detail-label {
            font-size: 12px;
            color: #ccc;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .detail-value {
            font-size: 14px;
            color: #fff;
            font-weight: 500;
        }

        .order-actions {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 25px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }

        .btn-primary {
            background: linear-gradient(45deg, #fff, #ccc);
            color: #000;
        }

        .btn-secondary {
            background: transparent;
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: #ccc;
        }

        .empty-state i {
            font-size: 4rem;
            margin-bottom: 20px;
            color: rgba(255, 255, 255, 0.3);
        }

        .empty-state h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #fff;
        }

        .empty-state p {
            margin-bottom: 30px;
        }

        @media (max-width: 768px) {
            .order-header {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .order-details {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <a href="{{ url('/') }}" class="logo">Janjua Tailors</a>
            <div class="nav-links">
                <a href="{{ route('my-orders') }}" class="active">My Orders</a>
                <a href="{{ route('products.index') }}">Products</a>
                <a href="{{ route('custom-order.start') }}">Custom Order</a>
                <a href="{{ route('dashboard') }}">Dashboard</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="header">
            <h1>My Orders</h1>
            <p>Track and manage your custom tailoring orders</p>
        </div>

        @if($orders->count() > 0)
            <div class="orders-grid">
                @foreach($orders as $order)
                <div class="order-card">
                    <div class="order-header">
                        <div class="order-number">{{ $order->order_number }}</div>
                        <div class="order-status status-{{ $order->status }}">
                            {{ str_replace('_', ' ', $order->status) }}
                        </div>
                    </div>

                    <div class="order-details">
                        <div class="detail-item">
                            <div class="detail-label">Size Type</div>
                            <div class="detail-value">{{ ucfirst($order->size_type) }}</div>
                        </div>
                        @if($order->standard_size)
                        <div class="detail-item">
                            <div class="detail-label">Size</div>
                            <div class="detail-value">{{ $order->standard_size }}</div>
                        </div>
                        @endif
                        <div class="detail-item">
                            <div class="detail-label">Color</div>
                            <div class="detail-value">{{ $order->color }}</div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Quality</div>
                            <div class="detail-value">{{ ucfirst($order->quality) }}</div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Amount</div>
                            <div class="detail-value">Rs. {{ number_format($order->total_amount) }}</div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Order Date</div>
                            <div class="detail-value">{{ $order->created_at->format('M d, Y') }}</div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Estimated Delivery</div>
                            <div class="detail-value">{{ $order->estimated_delivery->format('M d, Y') }}</div>
                        </div>
                    </div>

                    <div class="order-actions">
                        <a href="{{ route('order.details', $order) }}" class="btn btn-primary">
                            <i class="fas fa-eye"></i> View Details
                        </a>
                        @if(in_array($order->status, ['shipped', 'delivered']))
                        <a href="#" class="btn btn-secondary">
                            <i class="fas fa-map-marker-alt"></i> Track Order
                        </a>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        @else
            <div class="empty-state">
                <i class="fas fa-shopping-bag"></i>
                <h3>No Orders Yet</h3>
                <p>You haven't placed any orders yet. Start by creating your first custom shalwar kameez!</p>
                <a href="{{ route('custom-order.start') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Place Your First Order
                </a>
            </div>
        @endif
    </div>
</body>
</html>