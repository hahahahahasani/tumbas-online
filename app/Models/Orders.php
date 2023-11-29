<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'total_price'
    ];

    public function users() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function products() : BelongsTo
    {
        return $this->belongsTo(Products::class);
    }

    public function payments() : BelongsTo
    {
        return $this->belongsTo(Payments::class);
    }

    public function cart() : BelongsTo
    {
        return $this->belongsTo(Carts::class);
    }
}
