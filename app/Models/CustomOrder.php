<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CustomOrder extends Model
{
    protected $fillable = [
        'user_id',
        'order_number',
        'size_type',
        'standard_size',
        'color',
        'quality',
        'price',
        'special_instructions',
        'address',
        'phone',
        'city',
        'postal_code',
        'status',
        'estimated_delivery',
        'actual_delivery',
        'total_amount'
    ];

    protected $casts = [
        'estimated_delivery' => 'datetime',
        'actual_delivery' => 'datetime',
        'price' => 'decimal:2',
        'total_amount' => 'decimal:2'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function measurement(): HasOne
    {
        return $this->hasOne(Measurement::class);
    }

    public function statusHistory(): HasMany
    {
        return $this->hasMany(OrderStatus::class);
    }

    public function getStatusColorAttribute(): string
    {
        return match($this->status) {
            'pending' => 'yellow',
            'confirmed' => 'blue',
            'cutting' => 'orange',
            'stitching' => 'purple',
            'finishing' => 'indigo',
            'quality_check' => 'pink',
            'ready' => 'green',
            'shipped' => 'teal',
            'delivered' => 'emerald',
            default => 'gray'
        };
    }

    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($order) {
            $order->order_number = 'JT' . date('Y') . str_pad(static::count() + 1, 4, '0', STR_PAD_LEFT);
        });
    }
}
