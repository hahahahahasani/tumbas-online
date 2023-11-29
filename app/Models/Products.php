<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'products_name',
        'description',
        'price',
        'stock',
        'gambar'
    ];

    public function categories() : BelongsTo
    {
        return $this->belongsTo(Categories::class);
    }

    public function orders() : HasMany 
    {
        return $this->hasMany(Orders::class);
    }

    public function cart_items() : HasMany 
    {
        return $this->hasMany(Cart_Item::class);
    }

    public function reviews() : HasMany 
    {
        return $this->hasMany(Reviews::class);
    }
}
