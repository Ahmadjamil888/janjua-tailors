<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomOrder;
use App\Models\Measurement;
use Carbon\Carbon;

class CustomOrderController extends Controller
{
    public function start()
    {
        return view('custom-order.start');
    }

    public function storeDetails(Request $request)
    {
        $request->validate([
            'size_type' => 'required|in:standard,custom',
            'standard_size' => 'required_if:size_type,standard|in:S,M,L,XL',
            'color' => 'required|string|max:255',
            'quality' => 'required|string|max:255',
            'special_instructions' => 'nullable|string'
        ]);

        $order = CustomOrder::create([
            'user_id' => auth()->id(),
            'size_type' => $request->size_type,
            'standard_size' => $request->standard_size,
            'color' => $request->color,
            'quality' => $request->quality,
            'special_instructions' => $request->special_instructions,
            'price' => $this->calculatePrice($request->quality),
            'total_amount' => $this->calculatePrice($request->quality),
            'estimated_delivery' => Carbon::now()->addDays(10),
            'status' => 'pending',
            'address' => '',
            'phone' => '',
            'city' => '',
            'postal_code' => ''
        ]);

        if ($request->size_type === 'custom') {
            return redirect()->route('custom-order.measurements', $order);
        } else {
            return redirect()->route('custom-order.address', $order);
        }
    }

    public function measurements(CustomOrder $order)
    {
        if ($order->user_id !== auth()->id()) {
            abort(403);
        }

        return view('custom-order.measurements', compact('order'));
    }

    public function storeMeasurements(Request $request)
    {
        $request->validate([
            'order_id' => 'required|exists:custom_orders,id',
            'chest' => 'required|numeric|min:20|max:60',
            'waist' => 'required|numeric|min:20|max:60',
            'hip' => 'required|numeric|min:20|max:60',
            'shoulder' => 'required|numeric|min:10|max:30',
            'sleeve_length' => 'required|numeric|min:15|max:40',
            'kameez_length' => 'required|numeric|min:30|max:60',
            'neck' => 'required|numeric|min:10|max:25',
            'shalwar_length' => 'required|numeric|min:30|max:50',
            'shalwar_waist' => 'required|numeric|min:20|max:60',
            'height' => 'required|numeric|min:140|max:200'
        ]);

        $order = CustomOrder::findOrFail($request->order_id);
        
        if ($order->user_id !== auth()->id()) {
            abort(403);
        }

        Measurement::create([
            'custom_order_id' => $order->id,
            'chest' => $request->chest,
            'waist' => $request->waist,
            'hip' => $request->hip,
            'shoulder' => $request->shoulder,
            'sleeve_length' => $request->sleeve_length,
            'kameez_length' => $request->kameez_length,
            'neck' => $request->neck,
            'armhole' => $request->armhole,
            'shalwar_length' => $request->shalwar_length,
            'shalwar_waist' => $request->shalwar_waist,
            'thigh' => $request->thigh,
            'bottom' => $request->bottom,
            'height' => $request->height,
            'notes' => $request->notes
        ]);

        return redirect()->route('custom-order.address', $order);
    }

    public function address(CustomOrder $order)
    {
        if ($order->user_id !== auth()->id()) {
            abort(403);
        }

        return view('custom-order.address', compact('order'));
    }

    public function storeAddress(Request $request)
    {
        $request->validate([
            'order_id' => 'required|exists:custom_orders,id',
            'address' => 'required|string|max:500',
            'phone' => 'required|string|max:20',
            'city' => 'required|string|max:100',
            'postal_code' => 'required|string|max:10'
        ]);

        $order = CustomOrder::findOrFail($request->order_id);
        
        if ($order->user_id !== auth()->id()) {
            abort(403);
        }

        $order->update([
            'address' => $request->address,
            'phone' => $request->phone,
            'city' => $request->city,
            'postal_code' => $request->postal_code,
            'status' => 'confirmed'
        ]);

        return redirect()->route('custom-order.confirmation', $order);
    }

    public function confirmation(CustomOrder $order)
    {
        if ($order->user_id !== auth()->id()) {
            abort(403);
        }

        return view('custom-order.confirmation', compact('order'));
    }

    public function myOrders()
    {
        $orders = auth()->user()->customOrders()->with('measurement')->latest()->get();
        return view('customer.orders', compact('orders'));
    }

    public function orderDetails(CustomOrder $order)
    {
        if ($order->user_id !== auth()->id()) {
            abort(403);
        }

        $order->load('measurement', 'statusHistory');
        return view('customer.order-details', compact('order'));
    }

    private function calculatePrice($quality)
    {
        return match($quality) {
            'premium' => 5000,
            'luxury' => 8000,
            'royal' => 12000,
            default => 3000
        };
    }
}
