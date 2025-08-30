<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'brand',
        'category',
        'colors',
        'images',
        'stock_quantity',
        'is_active',
        'sku',
        'weight',
        'material'
    ];

    protected $casts = [
        'colors' => 'array',
        'images' => 'array',
        'price' => 'decimal:2',
        'weight' => 'decimal:2',
        'is_active' => 'boolean'
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeInStock($query)
    {
        return $query->where('stock_quantity', '>', 0);
    }

    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($product) {
            if (!$product->sku) {
                $product->sku = 'JT-' . strtoupper(substr($product->category, 0, 3)) . '-' . str_pad(static::count() + 1, 4, '0', STR_PAD_LEFT);
            }
        });
    }
}
