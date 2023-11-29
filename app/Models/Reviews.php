<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reviews extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment'
    ];
    
    function users() : BelongsTo 
    {
        return $this->belongsTo(User::class);
    }

    function reviews() : BelongsTo 
    {
        return $this->belongsTo(Reviews::class);
    }
}
