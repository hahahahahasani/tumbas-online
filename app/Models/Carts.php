<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Carts extends Model
{
    use HasFactory;

    public function cart_items() : HasMany 
    {
        return $this->hasMany(Cart_Item::class);
    }

    public function orders() : HasOne 
    {
        return $this->hasOne(Orders::class);
    }

    public function users() : BelongsTo 
    {
        return $this->belongsTo(User::class);
    }
}
