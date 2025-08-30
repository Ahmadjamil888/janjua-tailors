<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details - Admin Panel</title>
    
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

        .customer-grid {
            display: grid;
            grid-template-columns: 1fr 2fr;
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

        .info-item {
            display: flex;
            flex-direction: column;
            gap: 4px;
            margin-bottom: 20px;
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

        .orders-table {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 16px 20px;
            text-align: left;
            border-bottom: 1px solid #f8f9fa;
        }

        .table th {
            background: #f8f9fa;
            font-weight: 600;
            color: #1d1d1f;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .table td {
            font-size: 14px;
            color: #495057;
        }

        .table tbody tr:hover {
            background: #f8f9fa;
        }

        .status-badge {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 11px;
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

        .view-btn {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: #1d1d1f;
            color: white;
            padding: 6px 10px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 12px;
            transition: all 0.3s ease;
        }

        .view-btn:hover {
            background: #424245;
        }

        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: #6c757d;
        }

        .empty-state i {
            font-size: 48px;
            margin-bottom: 16px;
            opacity: 0.5;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 16px;
            margin-bottom: 24px;
        }

        .stat-item {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
        }

        .stat-value {
            font-size: 24px;
            font-weight: 600;
            color: #1d1d1f;
            margin-bottom: 4px;
        }

        .stat-label {
            font-size: 12px;
            color: #6c757d;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        @media (max-width: 768px) {
            .customer-grid {
                grid-template-columns: 1fr;
            }

            .header {
                flex-direction: column;
                gap: 16px;
                align-items: flex-start;
            }

            .table {
                font-size: 12px;
            }

            .table th,
            .table td {
                padding: 12px 16px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Customer Details - {{ $customer->name }}</h1>
            <a href="{{ route('admin.customers.index') }}" class="back-btn">
                <i class="fas fa-arrow-left"></i>
                Back to Customers
            </a>
        </div>

        <div class="customer-grid">
            <!-- Customer Information -->
            <div class="card">
                <h2>Customer Information</h2>
                
                <div class="info-item">
                    <span class="info-label">Name</span>
                    <span class="info-value">{{ $customer->name }}</span>
                </div>
                
                <div class="info-item">
                    <span class="info-label">Email</span>
                    <span class="info-value">{{ $customer->email }}</span>
                </div>
                
                <div class="info-item">
                    <span class="info-label">Phone</span>
                    <span class="info-value">{{ $customer->phone ?? 'Not provided' }}</span>
                </div>
                
                <div class="info-item">
                    <span class="info-label">Address</span>
                    <span class="info-value">{{ $customer->address ?? 'Not provided' }}</span>
                </div>
                
                <div class="info-item">
                    <span class="info-label">Member Since</span>
                    <span class="info-value">{{ $customer->created_at->format('M d, Y') }}</span>
                </div>

                <!-- Customer Stats -->
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-value">{{ $customer->customOrders->count() }}</div>
                        <div class="stat-label">Total Orders</div>
                    </div>
                    
                    <div class="stat-item">
                        <div class="stat-value">Rs. {{ number_format($customer->customOrders->sum('total_amount')) }}</div>
                        <div class="stat-label">Total Spent</div>
                    </div>
                    
                    <div class="stat-item">
                        <div class="stat-value">{{ $customer->customOrders->where('status', 'delivered')->count() }}</div>
                        <div class="stat-label">Completed</div>
                    </div>
                </div>
            </div>

            <!-- Orders History -->
            <div class="orders-table">
                <div style="padding: 32px 32px 0;">
                    <h2 style="margin-bottom: 24px; padding-bottom: 16px; border-bottom: 2px solid #f8f9fa;">Order History</h2>
                </div>

                @if($customer->customOrders->count() > 0)
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Order #</th>
                                <th>Date</th>
                                <th>Items</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($customer->customOrders as $order)
                            <tr>
                                <td>
                                    <strong>{{ $order->order_number }}</strong>
                                </td>
                                <td>{{ $order->created_at->format('M d, Y') }}</td>
                                <td>
                                    {{ ucfirst($order->size_type) }} {{ $order->quality }} 
                                    @if($order->standard_size)
                                        ({{ $order->standard_size }})
                                    @endif
                                </td>
                                <td>Rs. {{ number_format($order->total_amount) }}</td>
                                <td>
                                    <span class="status-badge status-{{ $order->status }}">
                                        {{ ucfirst(str_replace('_', ' ', $order->status)) }}
                                    </span>
                                </td>
                                <td>
                                    <a href="{{ route('admin.orders.details', $order) }}" class="view-btn">
                                        <i class="fas fa-eye"></i>
                                        View
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="empty-state">
                        <i class="fas fa-shopping-bag"></i>
                        <h3>No orders found</h3>
                        <p>This customer hasn't placed any orders yet.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</body>
</html>