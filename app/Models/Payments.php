<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Payments extends Model
{
    use HasFactory;

    protected $fillable = [
        'payment_method',
        'amount'
    ];

    public function users() : BelongsTo 
    {
        return $this->belongsTo(User::class);
    }

    public function orders() : HasOne 
    {
        return $this->hasOne(Orders::class);
    }
}
