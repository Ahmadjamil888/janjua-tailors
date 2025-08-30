<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderStatus extends Model
{
    protected $fillable = [
        'custom_order_id',
        'status',
        'description',
        'status_date',
        'updated_by'
    ];

    protected $casts = [
        'status_date' => 'datetime'
    ];

    public function customOrder(): BelongsTo
    {
        return $this->belongsTo(CustomOrder::class);
    }
}
