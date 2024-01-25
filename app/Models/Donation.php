<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = [
        'title',
        'user_id',
        'description',
        'image',
        'amount',
        'is_accepted',
    ];
}
