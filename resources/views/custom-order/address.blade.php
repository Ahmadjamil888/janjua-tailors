 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Address - Janjua Tailors</title>
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
        }

        .header {
            text-align: center;
            margin-bottom: 50px;
        }

        .header h1 {
            font-size: 3rem;
            font-weight: 600;
            margin-bottom: 10px;
            background: linear-gradient(45deg, #fff, #ccc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            font-weight: 500;
            color: #fff;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 15px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 16px;
            transition: all 0.3s;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #fff;
            background: rgba(255, 255, 255, 0.2);
        }

        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: #ccc;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .order-summary {
            background: rgba(255, 255, 255, 0.05);
            padding: 25px;
            border-radius: 15px;
            margin-bottom: 30px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .order-summary h3 {
            margin-bottom: 20px;
            color: #fff;
            font-size: 1.3rem;
            border-bottom: 2px solid rgba(255, 255, 255, 0.2);
            padding-bottom: 10px;
        }

        .summary-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            color: #ccc;
        }

        .summary-item.total {
            font-weight: 600;
            color: #fff;
            font-size: 1.1rem;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            padding-top: 10px;
            margin-top: 15px;
        }

        .submit-btn {
            width: 100%;
            padding: 18px;
            background: linear-gradient(45deg, #fff, #ccc);
            color: #000;
            border: none;
            border-radius: 50px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(255, 255, 255, 0.3);
        }

        .back-link {
            display: inline-block;
            margin-bottom: 30px;
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s;
        }

        .back-link:hover {
            color: #fff;
        }

        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
            }
            
            .header h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ $order->size_type === 'custom' ? route('custom-order.measurements', $order) : route('custom-order.start') }}" class="back-link">
            <i class="fas fa-arrow-left"></i> Back to Previous Step
        </a>

        <div class="header">
            <h1>Delivery Information</h1>
            <p>Please provide your delivery address and contact details</p>
        </div>

        <div class="order-summary">
            <h3><i class="fas fa-receipt"></i> Order Summary</h3>
            <div class="summary-item">
                <span>Size Type:</span>
                <span>{{ ucfirst($order->size_type) }}</span>
            </div>
            @if($order->standard_size)
            <div class="summary-item">
                <span>Size:</span>
                <span>{{ $order->standard_size }}</span>
            </div>
            @endif
            <div class="summary-item">
                <span>Color:</span>
                <span>{{ $order->color }}</span>
            </div>
            <div class="summary-item">
                <span>Quality:</span>
                <span>{{ ucfirst($order->quality) }}</span>
            </div>
            <div class="summary-item">
                <span>Estimated Delivery:</span>
                <span>{{ $order->estimated_delivery->format('M d, Y') }}</span>
            </div>
            <div class="summary-item total">
                <span>Total Amount:</span>
                <span>Rs. {{ number_format($order->total_amount) }}</span>
            </div>
        </div>

        <div class="form-container">
            <form action="{{ route('custom-order.store-address') }}" method="POST">
                @csrf
                <input type="hidden" name="order_id" value="{{ $order->id }}">
                
                <div class="form-group">
                    <label for="address">Complete Address *</label>
                    <textarea name="address" id="address" rows="3" placeholder="House/Flat No., Street, Area, Landmark..." required></textarea>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="city">City *</label>
                        <input type="text" name="city" id="city" placeholder="e.g., Gujranwala" required>
                    </div>

                    <div class="form-group">
                        <label for="postal_code">Postal Code *</label>
                        <input type="text" name="postal_code" id="postal_code" placeholder="e.g., 52250" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number *</label>
                    <input type="tel" name="phone" id="phone" placeholder="+92 300 1234567" required>
                </div>

                <button type="submit" class="submit-btn">
                    Confirm Order
                </button>
            </form>
        </div>
    </div>
</body>
</html>