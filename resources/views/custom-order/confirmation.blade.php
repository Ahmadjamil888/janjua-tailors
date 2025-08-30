<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmed - Janjua Tailors</title>
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

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px 20px;
            text-align: center;
        }

        .success-icon {
            font-size: 5rem;
            color: #4CAF50;
            margin-bottom: 30px;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-30px);
            }
            60% {
                transform: translateY(-15px);
            }
        }

        .header h1 {
            font-size: 3rem;
            font-weight: 600;
            margin-bottom: 20px;
            background: linear-gradient(45deg, #4CAF50, #81C784);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .header p {
            font-size: 1.2rem;
            color: #ccc;
            margin-bottom: 40px;
        }

        .order-details {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            margin-bottom: 30px;
            text-align: left;
        }

        .order-number {
            background: rgba(76, 175, 80, 0.2);
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 30px;
            text-align: center;
            border: 1px solid rgba(76, 175, 80, 0.3);
        }

        .order-number h3 {
            color: #4CAF50;
            font-size: 1.5rem;
            margin-bottom: 5px;
        }

        .order-number p {
            color: #81C784;
            font-size: 1.1rem;
            font-weight: 600;
        }

        .details-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .detail-section {
            background: rgba(255, 255, 255, 0.05);
            padding: 20px;
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .detail-section h4 {
            color: #fff;
            margin-bottom: 15px;
            font-size: 1.1rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            padding-bottom: 8px;
        }

        .detail-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
            color: #ccc;
            font-size: 14px;
        }

        .detail-item strong {
            color: #fff;
        }

        .status-timeline {
            background: rgba(255, 255, 255, 0.05);
            padding: 25px;
            border-radius: 15px;
            margin: 30px 0;
        }

        .status-timeline h4 {
            color: #fff;
            margin-bottom: 20px;
            text-align: center;
        }

        .timeline-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 8px;
        }

        .timeline-item.active {
            background: rgba(76, 175, 80, 0.2);
            border: 1px solid rgba(76, 175, 80, 0.3);
        }

        .timeline-item.pending {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .timeline-icon {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-size: 14px;
        }

        .timeline-item.active .timeline-icon {
            background: #4CAF50;
            color: white;
        }

        .timeline-item.pending .timeline-icon {
            background: rgba(255, 255, 255, 0.2);
            color: #ccc;
        }

        .action-buttons {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }

        .btn {
            padding: 15px 30px;
            border: none;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-primary {
            background: linear-gradient(45deg, #fff, #ccc);
            color: #000;
        }

        .btn-secondary {
            background: transparent;
            color: #fff;
            border: 2px solid rgba(255, 255, 255, 0.5);
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(255, 255, 255, 0.3);
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 2rem;
            }
            
            .details-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="success-icon">
            <i class="fas fa-check-circle"></i>
        </div>

        <div class="header">
            <h1>Order Confirmed!</h1>
            <p>Thank you for choosing Janjua Tailors. Your custom shalwar kameez order has been successfully placed.</p>
        </div>

        <div class="order-details">
            <div class="order-number">
                <h3>Order Number</h3>
                <p>{{ $order->order_number }}</p>
            </div>

            <div class="details-grid">
                <div class="detail-section">
                    <h4><i class="fas fa-tshirt"></i> Order Details</h4>
                    <div class="detail-item">
                        <span>Size Type:</span>
                        <strong>{{ ucfirst($order->size_type) }}</strong>
                    </div>
                    @if($order->standard_size)
                    <div class="detail-item">
                        <span>Size:</span>
                        <strong>{{ $order->standard_size }}</strong>
                    </div>
                    @endif
                    <div class="detail-item">
                        <span>Color:</span>
                        <strong>{{ $order->color }}</strong>
                    </div>
                    <div class="detail-item">
                        <span>Quality:</span>
                        <strong>{{ ucfirst($order->quality) }}</strong>
                    </div>
                    <div class="detail-item">
                        <span>Amount:</span>
                        <strong>Rs. {{ number_format($order->total_amount) }}</strong>
                    </div>
                </div>

                <div class="detail-section">
                    <h4><i class="fas fa-shipping-fast"></i> Delivery Info</h4>
                    <div class="detail-item">
                        <span>Address:</span>
                        <strong>{{ $order->address }}</strong>
                    </div>
                    <div class="detail-item">
                        <span>City:</span>
                        <strong>{{ $order->city }}</strong>
                    </div>
                    <div class="detail-item">
                        <span>Phone:</span>
                        <strong>{{ $order->phone }}</strong>
                    </div>
                    <div class="detail-item">
                        <span>Estimated Delivery:</span>
                        <strong>{{ $order->estimated_delivery->format('M d, Y') }}</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="status-timeline">
            <h4>Order Progress</h4>
            <div class="timeline-item active">
                <div class="timeline-icon">
                    <i class="fas fa-check"></i>
                </div>
                <span>Order Confirmed</span>
            </div>
            <div class="timeline-item pending">
                <div class="timeline-icon">
                    <i class="fas fa-cut"></i>
                </div>
                <span>Cutting</span>
            </div>
            <div class="timeline-item pending">
                <div class="timeline-icon">
                    <i class="fas fa-needle"></i>
                </div>
                <span>Stitching</span>
            </div>
            <div class="timeline-item pending">
                <div class="timeline-icon">
                    <i class="fas fa-star"></i>
                </div>
                <span>Quality Check</span>
            </div>
            <div class="timeline-item pending">
                <div class="timeline-icon">
                    <i class="fas fa-shipping-fast"></i>
                </div>
                <span>Shipped</span>
            </div>
            <div class="timeline-item pending">
                <div class="timeline-icon">
                    <i class="fas fa-home"></i>
                </div>
                <span>Delivered</span>
            </div>
        </div>

        <div class="action-buttons">
            <a href="{{ route('my-orders') }}" class="btn btn-primary">
                View My Orders
            </a>
            <a href="{{ url('/') }}" class="btn btn-secondary">
                Continue Shopping
            </a>
        </div>
    </div>
</body>
</html>