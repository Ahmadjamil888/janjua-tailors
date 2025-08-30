<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details - Admin Panel</title>
    
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
            background: #f8f9fa;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 24px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 32px;
        }

        .header h1 {
            font-size: 32px;
            font-weight: 600;
            color: #1d1d1f;
        }

        .back-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #6c757d;
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .back-btn:hover {
            background: #5a6268;
        }

        .order-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 32px;
        }

        .card {
            background: white;
            border-radius: 12px;
            padding: 32px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .card h2 {
            font-size: 24px;
            font-weight: 600;
            color: #1d1d1f;
            margin-bottom: 24px;
            padding-bottom: 16px;
            border-bottom: 2px solid #f8f9fa;
        }

        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            margin-bottom: 32px;
        }

        .info-item {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .info-label {
            font-size: 14px;
            font-weight: 500;
            color: #6c757d;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .info-value {
            font-size: 16px;
            font-weight: 500;
            color: #1d1d1f;
        }

        .status-badge {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-pending { background: #fff3cd; color: #856404; }
        .status-confirmed { background: #d4edda; color: #155724; }
        .status-cutting { background: #cce5ff; color: #004085; }
        .status-stitching { background: #e2e3e5; color: #383d41; }
        .status-finishing { background: #f8d7da; color: #721c24; }
        .status-quality_check { background: #d1ecf1; color: #0c5460; }
        .status-ready { background: #d4edda; color: #155724; }
        .status-shipped { background: #cce5ff; color: #004085; }
        .status-delivered { background: #d4edda; color: #155724; }

        .measurements-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 16px;
        }

        .measurement-item {
            background: #f8f9fa;
            padding: 16px;
            border-radius: 8px;
            text-align: center;
        }

        .measurement-item .label {
            font-size: 12px;
            color: #6c757d;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 4px;
        }

        .measurement-item .value {
            font-size: 18px;
            font-weight: 600;
            color: #1d1d1f;
        }

        .status-form {
            margin-top: 32px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            font-size: 14px;
            font-weight: 500;
            color: #1d1d1f;
            margin-bottom: 8px;
        }

        .form-select,
        .form-textarea {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .form-select:focus,
        .form-textarea:focus {
            outline: none;
            border-color: #1d1d1f;
        }

        .form-textarea {
            resize: vertical;
            min-height: 80px;
        }

        .btn-primary {
            background: #1d1d1f;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: #424245;
        }

        .success-message {
            background: #d4edda;
            color: #155724;
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 24px;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .order-grid {
                grid-template-columns: 1fr;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .measurements-grid {
                grid-template-columns: 1fr 1fr;
            }

            .header {
                flex-direction: column;
                gap: 16px;
                align-items: flex-start;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Order Details - {{ $order->order_number }}</h1>
            <a href="{{ route('admin.orders') }}" class="back-btn">
                <i class="fas fa-arrow-left"></i>
                Back to Orders
            </a>
        </div>

        @if(session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        <div class="order-grid">
            <div class="main-content">
                <!-- Order Information -->
                <div class="card">
                    <h2>Order Information</h2>
                    
                    <div class="info-grid">
                        <div class="info-item">
                            <span class="info-label">Order Number</span>
                            <span class="info-value">{{ $order->order_number }}</span>
                        </div>
                        
                        <div class="info-item">
                            <span class="info-label">Status</span>
                            <span class="status-badge status-{{ $order->status }}">{{ ucfirst(str_replace('_', ' ', $order->status)) }}</span>
                        </div>
                        
                        <div class="info-item">
                            <span class="info-label">Size Type</span>
                            <span class="info-value">{{ ucfirst($order->size_type) }}</span>
                        </div>
                        
                        @if($order->standard_size)
                        <div class="info-item">
                            <span class="info-label">Size</span>
                            <span class="info-value">{{ $order->standard_size }}</span>
                        </div>
                        @endif
                        
                        <div class="info-item">
                            <span class="info-label">Color</span>
                            <span class="info-value">{{ ucfirst($order->color) }}</span>
                        </div>
                        
                        <div class="info-item">
                            <span class="info-label">Quality</span>
                            <span class="info-value">{{ ucfirst($order->quality) }}</span>
                        </div>
                        
                        <div class="info-item">
                            <span class="info-label">Price</span>
                            <span class="info-value">Rs. {{ number_format($order->price) }}</span>
                        </div>
                        
                        <div class="info-item">
                            <span class="info-label">Total Amount</span>
                            <span class="info-value">Rs. {{ number_format($order->total_amount) }}</span>
                        </div>
                        
                        <div class="info-item">
                            <span class="info-label">Order Date</span>
                            <span class="info-value">{{ $order->created_at->format('M d, Y') }}</span>
                        </div>
                        
                        <div class="info-item">
                            <span class="info-label">Estimated Delivery</span>
                            <span class="info-value">{{ $order->estimated_delivery->format('M d, Y') }}</span>
                        </div>
                    </div>

                    @if($order->special_instructions)
                    <div class="info-item">
                        <span class="info-label">Special Instructions</span>
                        <span class="info-value">{{ $order->special_instructions }}</span>
                    </div>
                    @endif
                </div>

                <!-- Customer Information -->
                <div class="card">
                    <h2>Customer Information</h2>
                    
                    <div class="info-grid">
                        <div class="info-item">
                            <span class="info-label">Name</span>
                            <span class="info-value">{{ $order->user->name }}</span>
                        </div>
                        
                        <div class="info-item">
                            <span class="info-label">Email</span>
                            <span class="info-value">{{ $order->user->email }}</span>
                        </div>
                        
                        <div class="info-item">
                            <span class="info-label">Phone</span>
                            <span class="info-value">{{ $order->phone }}</span>
                        </div>
                        
                        <div class="info-item">
                            <span class="info-label">City</span>
                            <span class="info-value">{{ $order->city }}</span>
                        </div>
                    </div>

                    <div class="info-item">
                        <span class="info-label">Address</span>
                        <span class="info-value">{{ $order->address }}</span>
                    </div>
                </div>

                <!-- Measurements (if custom order) -->
                @if($order->measurement)
                <div class="card">
                    <h2>Measurements</h2>
                    
                    <div class="measurements-grid">
                        <div class="measurement-item">
                            <div class="label">Chest</div>
                            <div class="value">{{ $order->measurement->chest }}"</div>
                        </div>
                        
                        <div class="measurement-item">
                            <div class="label">Waist</div>
                            <div class="value">{{ $order->measurement->waist }}"</div>
                        </div>
                        
                        <div class="measurement-item">
                            <div class="label">Hip</div>
                            <div class="value">{{ $order->measurement->hip }}"</div>
                        </div>
                        
                        <div class="measurement-item">
                            <div class="label">Shoulder</div>
                            <div class="value">{{ $order->measurement->shoulder }}"</div>
                        </div>
                        
                        <div class="measurement-item">
                            <div class="label">Sleeve Length</div>
                            <div class="value">{{ $order->measurement->sleeve_length }}"</div>
                        </div>
                        
                        <div class="measurement-item">
                            <div class="label">Kameez Length</div>
                            <div class="value">{{ $order->measurement->kameez_length }}"</div>
                        </div>
                        
                        <div class="measurement-item">
                            <div class="label">Neck</div>
                            <div class="value">{{ $order->measurement->neck }}"</div>
                        </div>
                        
                        <div class="measurement-item">
                            <div class="label">Shalwar Length</div>
                            <div class="value">{{ $order->measurement->shalwar_length }}"</div>
                        </div>
                        
                        <div class="measurement-item">
                            <div class="label">Shalwar Waist</div>
                            <div class="value">{{ $order->measurement->shalwar_waist }}"</div>
                        </div>
                        
                        <div class="measurement-item">
                            <div class="label">Height</div>
                            <div class="value">{{ $order->measurement->height }}"</div>
                        </div>
                    </div>

                    @if($order->measurement->notes)
                    <div class="info-item" style="margin-top: 24px;">
                        <span class="info-label">Notes</span>
                        <span class="info-value">{{ $order->measurement->notes }}</span>
                    </div>
                    @endif
                </div>
                @endif
            </div>

            <!-- Status Update Sidebar -->
            <div class="sidebar">
                <div class="card">
                    <h2>Update Status</h2>
                    
                    <form method="POST" action="{{ route('admin.orders.update-status', $order) }}" class="status-form">
                        @csrf
                        
                        <div class="form-group">
                            <label for="status" class="form-label">Order Status</label>
                            <select name="status" id="status" class="form-select" required>
                                <option value="pending" {{ $order->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="confirmed" {{ $order->status === 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                                <option value="cutting" {{ $order->status === 'cutting' ? 'selected' : '' }}>Cutting</option>
                                <option value="stitching" {{ $order->status === 'stitching' ? 'selected' : '' }}>Stitching</option>
                                <option value="finishing" {{ $order->status === 'finishing' ? 'selected' : '' }}>Finishing</option>
                                <option value="quality_check" {{ $order->status === 'quality_check' ? 'selected' : '' }}>Quality Check</option>
                                <option value="ready" {{ $order->status === 'ready' ? 'selected' : '' }}>Ready</option>
                                <option value="shipped" {{ $order->status === 'shipped' ? 'selected' : '' }}>Shipped</option>
                                <option value="delivered" {{ $order->status === 'delivered' ? 'selected' : '' }}>Delivered</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="description" class="form-label">Status Description (Optional)</label>
                            <textarea name="description" id="description" class="form-textarea" placeholder="Add any notes about this status update..."></textarea>
                        </div>
                        
                        <button type="submit" class="btn-primary">
                            <i class="fas fa-save"></i>
                            Update Status
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>