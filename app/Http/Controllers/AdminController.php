<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomOrder;
use App\Models\Product;
use App\Models\User;
use App\Models\OrderStatus;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function dashboard()
    {
        $stats = [
            'total_orders' => CustomOrder::count(),
            'pending_orders' => CustomOrder::where('status', 'pending')->count(),
            'completed_orders' => CustomOrder::where('status', 'delivered')->count(),
            'total_customers' => User::where('role', 'customer')->count(),
            'total_products' => Product::count(),
            'revenue_this_month' => CustomOrder::whereMonth('created_at', now()->month)
                ->whereYear('created_at', now()->year)
                ->sum('total_amount')
        ];

        $recent_orders = CustomOrder::with('user')->latest()->take(5)->get();
        $status_distribution = CustomOrder::selectRaw('status, count(*) as count')
            ->groupBy('status')
            ->get();

        return view('admin.dashboard', compact('stats', 'recent_orders', 'status_distribution'));
    }

    public function orders()
    {
        $orders = CustomOrder::with('user', 'measurement')->latest()->paginate(20);
        return view('admin.orders.index', compact('orders'));
    }

    public function orderDetails(CustomOrder $order)
    {
        $order->load('user', 'measurement', 'statusHistory');
        return view('admin.orders.details', compact('order'));
    }

    public function updateOrderStatus(Request $request, CustomOrder $order)
    {
        $request->validate([
            'status' => 'required|in:pending,confirmed,cutting,stitching,finishing,quality_check,ready,shipped,delivered',
            'description' => 'nullable|string|max:500'
        ]);

        $order->update([
            'status' => $request->status,
            'actual_delivery' => $request->status === 'delivered' ? now() : null
        ]);

        OrderStatus::create([
            'custom_order_id' => $order->id,
            'status' => $request->status,
            'description' => $request->description,
            'status_date' => now(),
            'updated_by' => auth()->user()->name
        ]);

        return redirect()->back()->with('success', 'Order status updated successfully!');
    }

    public function customers()
    {
        $customers = User::where('role', 'customer')
            ->withCount('customOrders')
            ->latest()
            ->paginate(20);
        
        return view('admin.customers.index', compact('customers'));
    }

    public function customerDetails(User $customer)
    {
        if ($customer->role !== 'customer') {
            abort(404);
        }

        $customer->load(['customOrders' => function($query) {
            $query->latest();
        }]);

        return view('admin.customers.details', compact('customer'));
    }
}
