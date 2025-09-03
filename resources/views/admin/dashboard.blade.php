<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Janjua Tailors</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            content: ["./src/**/*.{html,js}"],
            theme: {
                fontFamily: {
                    sans: ["Open Sans", "ui-sans-serif", "system-ui", "sans-serif"],
                    title: ["Lato", "ui-sans-serif", "system-ui", "sans-serif"],
                    body: ["Open Sans", "ui-sans-serif", "system-ui", "sans-serif"]
                },
                extend: {
                    colors: {
                        neutral: {
                            50: "#f7f7f7", 100: "#eeeeee", 200: "#e0e0e0", 300: "#cacaca",
                            400: "#b1b1b1", 500: "#999999", 600: "#7f7f7f", 700: "#676767",
                            800: "#545454", 900: "#464646", 950: "#282828"
                        },
                        primary: {
                            50: "#f3f1ff", 100: "#e9e5ff", 200: "#d5cfff", 300: "#b7a9ff",
                            400: "#9478ff", 500: "#7341ff", 600: "#631bff", 700: "#611bf8",
                            800: "#4607d0", 900: "#3c08aa", 950: "#220174", DEFAULT: "#611bf8"
                        }
                    },
                    borderRadius: {
                        none: "0px", sm: "6px", DEFAULT: "12px", md: "18px", lg: "24px",
                        xl: "36px", "2xl": "48px", "3xl": "72px", full: "9999px"
                    }
                }
            },
            plugins: []
        }
    </script>
    <style>
        .sidebar-transition {
            transition: transform 0.3s ease;
        }
        
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }
            
            .main-content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body class="bg-neutral-50 font-body">
    <!-- Sidebar -->
    <div class="fixed left-0 top-0 w-64 h-full bg-white border-r border-neutral-200 z-50 sidebar-transition">
        <div class="p-6 border-b border-neutral-200">
            <h2 class="text-xl font-title font-bold text-neutral-900">Janjua Tailors</h2>
            <p class="text-sm text-neutral-600">Admin Panel</p>
        </div>
        
        <nav class="p-4">
            <ul class="space-y-2">
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-lg bg-primary-50 text-primary-700 border border-primary-200">
                        <span class="material-symbols-outlined mr-3 text-lg">dashboard</span>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.orders') }}" class="flex items-center px-4 py-3 text-sm font-medium text-neutral-700 rounded-lg hover:bg-neutral-100 transition-colors">
                        <span class="material-symbols-outlined mr-3 text-lg">shopping_bag</span>
                        Orders
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.products.index') }}" class="flex items-center px-4 py-3 text-sm font-medium text-neutral-700 rounded-lg hover:bg-neutral-100 transition-colors">
                        <span class="material-symbols-outlined mr-3 text-lg">inventory_2</span>
                        Products
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.customers.index') }}" class="flex items-center px-4 py-3 text-sm font-medium text-neutral-700 rounded-lg hover:bg-neutral-100 transition-colors">
                        <span class="material-symbols-outlined mr-3 text-lg">group</span>
                        Customers
                    </a>
                </li>
                <li>
                    <a href="{{ url('/') }}" class="flex items-center px-4 py-3 text-sm font-medium text-neutral-700 rounded-lg hover:bg-neutral-100 transition-colors">
                        <span class="material-symbols-outlined mr-3 text-lg">public</span>
                        View Website
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 text-sm font-medium text-neutral-700 rounded-lg hover:bg-neutral-100 transition-colors">
                        <span class="material-symbols-outlined mr-3 text-lg">account_circle</span>
                        My Account
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="ml-64 p-6">
        <!-- Header -->
        <div class="bg-white rounded-lg border border-neutral-200 p-6 mb-6">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-2xl font-title font-bold text-neutral-900">Dashboard</h1>
                    <p class="text-neutral-600 mt-1">Welcome back, {{ auth()->user()->name }}</p>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="text-right">
                        <p class="text-sm font-medium text-neutral-900">{{ auth()->user()->name }}</p>
                        <p class="text-xs text-neutral-600">Administrator</p>
                    </div>
                    <div class="w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary-600">person</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
            <div class="bg-white rounded-lg border border-neutral-200 p-6 hover:shadow-lg transition-shadow">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-neutral-600">Total Orders</p>
                        <p class="text-3xl font-bold text-neutral-900 mt-2">{{ $stats['total_orders'] }}</p>
                    </div>
                    <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary-600 text-2xl">shopping_bag</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg border border-neutral-200 p-6 hover:shadow-lg transition-shadow">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-neutral-600">Pending Orders</p>
                        <p class="text-3xl font-bold text-neutral-900 mt-2">{{ $stats['pending_orders'] }}</p>
                    </div>
                    <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                        <span class="material-symbols-outlined text-yellow-600 text-2xl">schedule</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg border border-neutral-200 p-6 hover:shadow-lg transition-shadow">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-neutral-600">Completed Orders</p>
                        <p class="text-3xl font-bold text-neutral-900 mt-2">{{ $stats['completed_orders'] }}</p>
                    </div>
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                        <span class="material-symbols-outlined text-green-600 text-2xl">check_circle</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg border border-neutral-200 p-6 hover:shadow-lg transition-shadow">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-neutral-600">Total Customers</p>
                        <p class="text-3xl font-bold text-neutral-900 mt-2">{{ $stats['total_customers'] }}</p>
                    </div>
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                        <span class="material-symbols-outlined text-purple-600 text-2xl">group</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg border border-neutral-200 p-6 hover:shadow-lg transition-shadow">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-neutral-600">Total Products</p>
                        <p class="text-3xl font-bold text-neutral-900 mt-2">{{ $stats['total_products'] }}</p>
                    </div>
                    <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                        <span class="material-symbols-outlined text-red-600 text-2xl">inventory_2</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg border border-neutral-200 p-6 hover:shadow-lg transition-shadow">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-neutral-600">Monthly Revenue</p>
                        <p class="text-3xl font-bold text-neutral-900 mt-2">Rs. {{ number_format($stats['revenue_this_month']) }}</p>
                    </div>
                    <div class="w-12 h-12 bg-teal-100 rounded-lg flex items-center justify-center">
                        <span class="material-symbols-outlined text-teal-600 text-2xl">payments</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dashboard Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Recent Orders -->
            <div class="lg:col-span-2 bg-white rounded-lg border border-neutral-200">
                <div class="p-6 border-b border-neutral-200">
                    <h3 class="text-lg font-title font-bold text-neutral-900">Recent Orders</h3>
                </div>
                <div class="p-6">
                    @if($recent_orders->count() > 0)
                        <div class="space-y-4">
                            @foreach($recent_orders as $order)
                            <div class="flex items-center justify-between p-4 bg-neutral-50 rounded-lg">
                                <div class="flex items-center space-x-4">
                                    <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center">
                                        <span class="material-symbols-outlined text-primary-600">receipt</span>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-neutral-900">{{ $order->order_number }}</h4>
                                        <p class="text-sm text-neutral-600">{{ $order->user->name }} • {{ $order->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                                        @if($order->status === 'pending') bg-yellow-100 text-yellow-800
                                        @elseif($order->status === 'confirmed') bg-blue-100 text-blue-800
                                        @elseif($order->status === 'ready') bg-green-100 text-green-800
                                        @else bg-neutral-100 text-neutral-800
                                        @endif">
                                        {{ str_replace('_', ' ', ucfirst($order->status)) }}
                                    </span>
                                    <p class="text-sm font-medium text-neutral-900 mt-1">Rs. {{ number_format($order->total_amount) }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="mt-6 text-center">
                            <a href="{{ route('admin.orders') }}" class="inline-flex items-center px-4 py-2 bg-primary-600 text-white text-sm font-medium rounded-lg hover:bg-primary-700 transition-colors">
                                View All Orders
                                <span class="material-symbols-outlined ml-2 text-lg">arrow_forward</span>
                            </a>
                        </div>
                    @else
                        <div class="text-center py-12">
                            <span class="material-symbols-outlined text-6xl text-neutral-300 mb-4">shopping_bag</span>
                            <p class="text-neutral-600">No orders yet</p>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Order Status Distribution -->
            <div class="bg-white rounded-lg border border-neutral-200">
                <div class="p-6 border-b border-neutral-200">
                    <h3 class="text-lg font-title font-bold text-neutral-900">Order Status</h3>
                </div>
                <div class="p-6">
                    <div class="space-y-4">
                        @foreach($status_distribution as $status)
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-3 h-3 rounded-full 
                                    @if($status->status === 'pending') bg-yellow-400
                                    @elseif($status->status === 'confirmed') bg-blue-400
                                    @elseif($status->status === 'ready') bg-green-400
                                    @else bg-neutral-400
                                    @endif"></div>
                                <span class="text-sm font-medium text-neutral-700">{{ str_replace('_', ' ', ucfirst($status->status)) }}</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="w-20 h-2 bg-neutral-200 rounded-full overflow-hidden">
                                    <div class="h-full rounded-full transition-all duration-300
                                        @if($status->status === 'pending') bg-yellow-400
                                        @elseif($status->status === 'confirmed') bg-blue-400
                                        @elseif($status->status === 'ready') bg-green-400
                                        @else bg-neutral-400
                                        @endif" 
                                        style="width: {{ $stats['total_orders'] > 0 ? ($status->count / $stats['total_orders']) * 100 : 0 }}%"></div>
                                </div>
                                <span class="text-sm font-medium text-neutral-900">{{ $status->count }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>