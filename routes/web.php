<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomOrderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    if (auth()->user()->isAdmin()) {
        return redirect()->route('admin.dashboard');
    }
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Custom Order Routes
    Route::get('/custom-order/start', [CustomOrderController::class, 'start'])->name('custom-order.start');
    Route::post('/custom-order/store-details', [CustomOrderController::class, 'storeDetails'])->name('custom-order.store-details');
    Route::get('/custom-order/measurements/{order}', [CustomOrderController::class, 'measurements'])->name('custom-order.measurements');
    Route::post('/custom-order/store-measurements', [CustomOrderController::class, 'storeMeasurements'])->name('custom-order.store-measurements');
    Route::get('/custom-order/address/{order}', [CustomOrderController::class, 'address'])->name('custom-order.address');
    Route::post('/custom-order/store-address', [CustomOrderController::class, 'storeAddress'])->name('custom-order.store-address');
    Route::get('/custom-order/confirmation/{order}', [CustomOrderController::class, 'confirmation'])->name('custom-order.confirmation');
    
    // User Dashboard
    Route::get('/my-orders', [CustomOrderController::class, 'myOrders'])->name('my-orders');
    Route::get('/order/{order}', [CustomOrderController::class, 'orderDetails'])->name('order.details');
});

// Admin Routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/orders', [AdminController::class, 'orders'])->name('orders');
    Route::get('/orders/{order}', [AdminController::class, 'orderDetails'])->name('orders.details');
    Route::post('/orders/{order}/update-status', [AdminController::class, 'updateOrderStatus'])->name('orders.update-status');
    
    // Product Management
    Route::get('/products', [ProductController::class, 'adminIndex'])->name('products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
    
    // Customer Management
    Route::get('/customers', [AdminController::class, 'customers'])->name('customers.index');
    Route::get('/customers/{customer}', [AdminController::class, 'customerDetails'])->name('customers.details');
});

// Products (Public)
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

// Debug route (remove after fixing)
Route::get('/debug-auth', function () {
    try {
        // Check database connection
        $dbConnected = \Illuminate\Support\Facades\DB::connection()->getPdo() ? true : false;
        
        // Check if users table exists and has data
        $userCount = \App\Models\User::count();
        $users = \App\Models\User::select('id', 'name', 'email', 'role')->get();
        
        // Check admin user specifically
        $adminUser = \App\Models\User::where('email', 'janjuatailors@gmail.com')->first();
        
        // Check session configuration
        $sessionDriver = config('session.driver');
        $sessionLifetime = config('session.lifetime');
        
        return response()->json([
            'database_connected' => $dbConnected,
            'total_users' => $userCount,
            'users' => $users,
            'admin_user' => $adminUser ? [
                'exists' => true,
                'name' => $adminUser->name,
                'email' => $adminUser->email,
                'role' => $adminUser->role,
                'is_admin' => $adminUser->isAdmin(),
                'password_check' => \Illuminate\Support\Facades\Hash::check('JanjuaTailors@4590', $adminUser->password)
            ] : ['exists' => false],
            'session_config' => [
                'driver' => $sessionDriver,
                'lifetime' => $sessionLifetime,
                'domain' => config('session.domain'),
                'secure' => config('session.secure_cookie'),
            ],
            'app_config' => [
                'env' => config('app.env'),
                'url' => config('app.url'),
                'debug' => config('app.debug'),
            ]
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'error' => true,
            'message' => $e->getMessage(),
            'trace' => $e->getTraceAsString()
        ]);
    }
});

// Test login route (remove after fixing)
Route::get('/test-login', function () {
    try {
        $credentials = [
            'email' => 'janjuatailors@gmail.com',
            'password' => 'JanjuaTailors@4590'
        ];
        
        if (\Illuminate\Support\Facades\Auth::attempt($credentials)) {
            $user = \Illuminate\Support\Facades\Auth::user();
            return response()->json([
                'login_success' => true,
                'user' => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'role' => $user->role,
                    'is_admin' => $user->isAdmin()
                ],
                'redirect_url' => $user->isAdmin() ? route('admin.dashboard') : route('dashboard')
            ]);
        } else {
            return response()->json([
                'login_success' => false,
                'message' => 'Invalid credentials'
            ]);
        }
    } catch (\Exception $e) {
        return response()->json([
            'error' => true,
            'message' => $e->getMessage()
        ]);
    }
});

// Static Pages
Route::get('/about', function () { return view('pages.about'); })->name('pages.about');
Route::get('/services', function () { return view('pages.services'); })->name('pages.services');
Route::get('/contact', function () { return view('pages.contact'); })->name('pages.contact');
Route::get('/gallery', function () { return view('pages.gallery'); })->name('pages.gallery');
Route::get('/heritage', function () { return view('pages.heritage'); })->name('pages.heritage');
Route::get('/craftsmanship', function () { return view('pages.craftsmanship'); })->name('pages.craftsmanship');
Route::get('/innovation', function () { return view('pages.innovation'); })->name('pages.innovation');
Route::get('/quality', function () { return view('pages.quality'); })->name('pages.quality');
Route::get('/delivery', function () { return view('pages.delivery'); })->name('pages.delivery');
Route::get('/alterations', function () { return view('pages.alterations'); })->name('pages.alterations');
Route::get('/testimonials', function () { return view('pages.testimonials'); })->name('pages.testimonials');
Route::get('/size-guide', function () { return view('pages.size-guide'); })->name('pages.size-guide');
Route::get('/faq', function () { return view('pages.faq'); })->name('pages.faq');
Route::get('/care', function () { return view('pages.care'); })->name('pages.care');
Route::get('/privacy', function () { return view('pages.privacy'); })->name('pages.privacy');
Route::get('/terms', function () { return view('pages.terms'); })->name('pages.terms');
Route::get('/sitemap', function () { return view('pages.sitemap'); })->name('pages.sitemap');

require __DIR__.'/auth.php';
