<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart_Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity'
    ];

    public function products() : BelongsTo 
    {
        return $this->belongsTo(Products::class);
    }

    public function carts() : BelongsTo 
    {
        return $this->belongsTo(Carts::class);
    }
}
