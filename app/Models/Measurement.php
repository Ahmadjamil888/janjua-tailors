<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Measurement extends Model
{
    protected $fillable = [
        'custom_order_id',
        'chest',
        'waist',
        'hip',
        'shoulder',
        'sleeve_length',
        'kameez_length',
        'neck',
        'armhole',
        'shalwar_length',
        'shalwar_waist',
        'thigh',
        'bottom',
        'height',
        'notes'
    ];

    protected $casts = [
        'chest' => 'decimal:2',
        'waist' => 'decimal:2',
        'hip' => 'decimal:2',
        'shoulder' => 'decimal:2',
        'sleeve_length' => 'decimal:2',
        'kameez_length' => 'decimal:2',
        'neck' => 'decimal:2',
        'armhole' => 'decimal:2',
        'shalwar_length' => 'decimal:2',
        'shalwar_waist' => 'decimal:2',
        'thigh' => 'decimal:2',
        'bottom' => 'decimal:2',
        'height' => 'decimal:2'
    ];

    public function customOrder(): BelongsTo
    {
        return $this->belongsTo(CustomOrder::class);
    }
}
