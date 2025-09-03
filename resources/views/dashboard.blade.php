<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account - Janjua Tailors</title>
    
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
        @media (max-width: 768px) {
            .dashboard-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body class="bg-neutral-50 font-body">
    <!-- Navigation -->
    <nav class="bg-white border-b border-neutral-200 fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-4">
                    <span class="material-symbols-outlined text-neutral-600 cursor-pointer hover:text-neutral-900">menu</span>
                    <span class="material-symbols-outlined text-neutral-600 cursor-pointer hover:text-neutral-900">shopping_cart</span>
                </div>
                
                <a href="{{ url('/') }}" class="text-xl font-title font-bold text-neutral-900">Janjua Tailors</a>
                
                <div class="flex items-center space-x-4">
                    <a href="{{ route('my-orders') }}" class="text-sm text-neutral-700 hover:text-neutral-900">My Orders</a>
                    <a href="{{ route('dashboard') }}" class="text-sm text-neutral-700 hover:text-neutral-900">Account</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16 p-6">
        <div class="max-w-7xl mx-auto">
            <!-- Header -->
            <div class="bg-white rounded-lg border border-neutral-200 p-6 mb-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h1 class="text-3xl font-title font-bold text-neutral-900">Welcome back, {{ Auth::user()->name }}</h1>
                        <p class="text-neutral-600 mt-1">Manage your orders, preferences, and account settings</p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="text-right">
                            <p class="text-sm font-medium text-neutral-900">{{ Auth::user()->name }}</p>
                            <p class="text-xs text-neutral-600">Customer</p>
                        </div>
                        <div class="w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary-600">person</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
                <!-- Sidebar -->
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-lg border border-neutral-200 p-6">
                        <nav class="space-y-2">
                            <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-lg bg-primary-50 text-primary-700 border border-primary-200">
                                <span class="material-symbols-outlined mr-3 text-lg">dashboard</span>
                                Dashboard
                            </a>
                            <a href="{{ route('my-orders') }}" class="flex items-center px-4 py-3 text-sm font-medium text-neutral-700 rounded-lg hover:bg-neutral-100 transition-colors">
                                <span class="material-symbols-outlined mr-3 text-lg">shopping_bag</span>
                                My Orders
                            </a>
                            <a href="{{ route('profile.edit') }}" class="flex items-center px-4 py-3 text-sm font-medium text-neutral-700 rounded-lg hover:bg-neutral-100 transition-colors">
                                <span class="material-symbols-outlined mr-3 text-lg">person</span>
                                Profile
                            </a>
                            <a href="{{ route('custom-order.start') }}" class="flex items-center px-4 py-3 text-sm font-medium text-neutral-700 rounded-lg hover:bg-neutral-100 transition-colors">
                                <span class="material-symbols-outlined mr-3 text-lg">add_circle</span>
                                New Order
                            </a>
                            <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-neutral-700 rounded-lg hover:bg-neutral-100 transition-colors">
                                <span class="material-symbols-outlined mr-3 text-lg">favorite</span>
                                Favorites
                            </a>
                            <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-neutral-700 rounded-lg hover:bg-neutral-100 transition-colors">
                                <span class="material-symbols-outlined mr-3 text-lg">settings</span>
                                Settings
                            </a>
                        </nav>

                        <form method="POST" action="{{ route('logout') }}" class="mt-6 pt-6 border-t border-neutral-200">
                            @csrf
                            <button type="submit" class="w-full flex items-center justify-center px-4 py-3 text-sm font-medium text-red-700 bg-red-50 rounded-lg hover:bg-red-100 transition-colors">
                                <span class="material-symbols-outlined mr-2 text-lg">logout</span>
                                Sign Out
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Main Panel -->
                <div class="lg:col-span-3">
                    <div class="bg-white rounded-lg border border-neutral-200 p-8">
                        <div class="text-center mb-8">
                            <h2 class="text-2xl font-title font-bold text-neutral-900 mb-4">Your Tailoring Journey</h2>
                            <p class="text-neutral-600 max-w-2xl mx-auto">Experience the luxury and reliability that three generations of Janjua Tailors have perfected in Gujranwala.</p>
                        </div>

                        <!-- Quick Actions -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="bg-neutral-50 rounded-lg p-6 text-center hover:shadow-lg transition-shadow">
                                <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                                    <span class="material-symbols-outlined text-primary-600 text-2xl">add_circle</span>
                                </div>
                                <h3 class="text-lg font-title font-bold text-neutral-900 mb-2">Start Custom Order</h3>
                                <p class="text-neutral-600 text-sm mb-4">Create a new bespoke shalwar kameez tailored to your measurements</p>
                                <a href="{{ route('custom-order.start') }}" class="inline-flex items-center px-4 py-2 bg-primary-600 text-white text-sm font-medium rounded-lg hover:bg-primary-700 transition-colors">
                                    Get Started
                                    <span class="material-symbols-outlined ml-2 text-lg">arrow_forward</span>
                                </a>
                            </div>

                            <div class="bg-neutral-50 rounded-lg p-6 text-center hover:shadow-lg transition-shadow">
                                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                                    <span class="material-symbols-outlined text-green-600 text-2xl">shopping_bag</span>
                                </div>
                                <h3 class="text-lg font-title font-bold text-neutral-900 mb-2">View Orders</h3>
                                <p class="text-neutral-600 text-sm mb-4">Track your current orders and view order history</p>
                                <a href="{{ route('my-orders') }}" class="inline-flex items-center px-4 py-2 bg-primary-600 text-white text-sm font-medium rounded-lg hover:bg-primary-700 transition-colors">
                                    View Orders
                                    <span class="material-symbols-outlined ml-2 text-lg">arrow_forward</span>
                                </a>
                            </div>

                            <div class="bg-neutral-50 rounded-lg p-6 text-center hover:shadow-lg transition-shadow">
                                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                                    <span class="material-symbols-outlined text-purple-600 text-2xl">palette</span>
                                </div>
                                <h3 class="text-lg font-title font-bold text-neutral-900 mb-2">Browse Fabrics</h3>
                                <p class="text-neutral-600 text-sm mb-4">Explore our premium fabric collection from top brands</p>
                                <a href="{{ route('products.index') }}" class="inline-flex items-center px-4 py-2 bg-primary-600 text-white text-sm font-medium rounded-lg hover:bg-primary-700 transition-colors">
                                    Browse Fabrics
                                    <span class="material-symbols-outlined ml-2 text-lg">arrow_forward</span>
                                </a>
                            </div>

                            <div class="bg-neutral-50 rounded-lg p-6 text-center hover:shadow-lg transition-shadow">
                                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                                    <span class="material-symbols-outlined text-orange-600 text-2xl">edit</span>
                                </div>
                                <h3 class="text-lg font-title font-bold text-neutral-900 mb-2">Update Profile</h3>
                                <p class="text-neutral-600 text-sm mb-4">Manage your account information and preferences</p>
                                <a href="{{ route('profile.edit') }}" class="inline-flex items-center px-4 py-2 bg-primary-600 text-white text-sm font-medium rounded-lg hover:bg-primary-700 transition-colors">
                                    Edit Profile
                                    <span class="material-symbols-outlined ml-2 text-lg">arrow_forward</span>
                                </a>
                            </div>
                        </div>

                        @php
                            $userOrders = \App\Models\Order::where('user_id', Auth::id())->latest()->take(3)->get();
                        @endphp

                        @if($userOrders->count() > 0)
                        <!-- Recent Orders -->
                        <div class="mt-8 pt-8 border-t border-neutral-200">
                            <h3 class="text-lg font-title font-bold text-neutral-900 mb-4">Recent Orders</h3>
                            <div class="space-y-4">
                                @foreach($userOrders as $order)
                                <div class="flex items-center justify-between p-4 bg-neutral-50 rounded-lg">
                                    <div class="flex items-center space-x-4">
                                        <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center">
                                            <span class="material-symbols-outlined text-primary-600">receipt</span>
                                        </div>
                                        <div>
                                            <h4 class="font-medium text-neutral-900">{{ $order->order_number }}</h4>
                                            <p class="text-sm text-neutral-600">{{ $order->created_at->diffForHumans() }}</p>
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
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
