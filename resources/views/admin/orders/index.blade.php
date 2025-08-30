<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders Management - Janjua Tailors Admin</title>
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

        .filters {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            display: flex;
            gap: 15px;
            align-items: center;
            flex-wrap: wrap;
        }

        .filter-group {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .filter-group label {
            font-size: 12px;
            color: #7f8c8d;
            font-weight: 500;
        }

        .filter-group select,
        .filter-group input {
            padding: 8px 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        .orders-table {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .table-header {
            background: #f8f9fa;
            padding: 20px;
            border-bottom: 1px solid #dee2e6;
        }

        .table-header h3 {
            color: #2c3e50;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        th {
            background: #f8f9fa;
            font-weight: 600;
            color: #2c3e50;
            font-size: 14px;
        }

        td {
            font-size: 14px;
        }

        .order-number {
            font-weight: 600;
            color: #2c3e50;
        }

        .customer-info {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .customer-name {
            font-weight: 500;
            color: #2c3e50;
        }

        .customer-email {
            font-size: 12px;
            color: #7f8c8d;
        }

        .order-status {
            padding: 6px 12px;
            border-radius: 15px;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-pending { background: #fff3cd; color: #856404; }
        .status-confirmed { background: #d1ecf1; color: #0c5460; }
        .status-cutting { background: #ffeaa7; color: #6c5ce7; }
        .status-stitching { background: #fd79a8; color: #2d3436; }
        .status-finishing { background: #a29bfe; color: #2d3436; }
        .status-quality_check { background: #fab1a0; color: #2d3436; }
        .status-ready { background: #d4edda; color: #155724; }
        .status-shipped { background: #bee5eb; color: #0c5460; }
        .status-delivered { background: #d1e7dd; color: #0f5132; }

        .amount {
            font-weight: 600;
            color: #27ae60;
        }

        .actions {
            display: flex;
            gap: 8px;
        }

        .btn {
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            font-size: 12px;
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

        .btn-success {
            background: #27ae60;
            color: white;
        }

        .btn-warning {
            background: #f39c12;
            color: white;
        }

        .btn:hover {
            opacity: 0.8;
        }

        .pagination {
            padding: 20px;
            text-align: center;
        }

        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: #7f8c8d;
        }

        .empty-state i {
            font-size: 4rem;
            margin-bottom: 20px;
            color: #bdc3c7;
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }
            
            .main-content {
                margin-left: 0;
            }
            
            .filters {
                flex-direction: column;
                align-items: stretch;
            }
            
            .orders-table {
                overflow-x: auto;
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
            <li><a href="{{ route('admin.dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="{{ route('admin.orders') }}" class="active"><i class="fas fa-shopping-bag"></i> Orders</a></li>
            <li><a href="{{ route('admin.products.index') }}"><i class="fas fa-box"></i> Products</a></li>
            <li><a href="{{ route('admin.customers.index') }}"><i class="fas fa-users"></i> Customers</a></li>
            <li><a href="{{ url('/') }}"><i class="fas fa-globe"></i> View Website</a></li>
        </ul>
    </div>

    <div class="main-content">
        <div class="header">
            <h1>Orders Management</h1>
            <div>
                <span>{{ $orders->total() }} Total Orders</span>
            </div>
        </div>

        <div class="filters">
            <div class="filter-group">
                <label>Status</label>
                <select>
                    <option value="">All Status</option>
                    <option value="pending">Pending</option>
                    <option value="confirmed">Confirmed</option>
                    <option value="cutting">Cutting</option>
                    <option value="stitching">Stitching</option>
                    <option value="finishing">Finishing</option>
                    <option value="quality_check">Quality Check</option>
                    <option value="ready">Ready</option>
                    <option value="shipped">Shipped</option>
                    <option value="delivered">Delivered</option>
                </select>
            </div>
            <div class="filter-group">
                <label>Date Range</label>
                <input type="date" placeholder="From Date">
            </div>
            <div class="filter-group">
                <label>&nbsp;</label>
                <input type="date" placeholder="To Date">
            </div>
            <div class="filter-group">
                <label>Search</label>
                <input type="text" placeholder="Order number or customer name">
            </div>
        </div>

        <div class="orders-table">
            <div class="table-header">
                <h3>All Orders</h3>
            </div>

            @if($orders->count() > 0)
                <table>
                    <thead>
                        <tr>
                            <th>Order #</th>
                            <th>Customer</th>
                            <th>Details</th>
                            <th>Status</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td>
                                <div class="order-number">{{ $order->order_number }}</div>
                            </td>
                            <td>
                                <div class="customer-info">
                                    <div class="customer-name">{{ $order->user->name }}</div>
                                    <div class="customer-email">{{ $order->user->email }}</div>
                                </div>
                            </td>
                            <td>
                                <div style="font-size: 12px; color: #7f8c8d;">
                                    {{ ucfirst($order->size_type) }}
                                    @if($order->standard_size) - {{ $order->standard_size }} @endif
                                    <br>
                                    {{ $order->color }} • {{ ucfirst($order->quality) }}
                                </div>
                            </td>
                            <td>
                                <span class="order-status status-{{ $order->status }}">
                                    {{ str_replace('_', ' ', $order->status) }}
                                </span>
                            </td>
                            <td>
                                <div class="amount">Rs. {{ number_format($order->total_amount) }}</div>
                            </td>
                            <td>
                                <div style="font-size: 12px;">
                                    {{ $order->created_at->format('M d, Y') }}
                                    <br>
                                    <span style="color: #7f8c8d;">{{ $order->created_at->format('h:i A') }}</span>
                                </div>
                            </td>
                            <td>
                                <div class="actions">
                                    <a href="{{ route('admin.orders.details', $order) }}" class="btn btn-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    @if($order->status !== 'delivered')
                                    <button class="btn btn-success" onclick="updateStatus({{ $order->id }})">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    @endif
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="pagination">
                    {{ $orders->links() }}
                </div>
            @else
                <div class="empty-state">
                    <i class="fas fa-shopping-bag"></i>
                    <h3>No Orders Found</h3>
                    <p>No orders match your current filters.</p>
                </div>
            @endif
        </div>
    </div>

    <script>
        function updateStatus(orderId) {
            // This would open a modal or redirect to update status
            window.location.href = `/admin/orders/${orderId}`;
        }
    </script>
</body>
</html>