<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'email',
        'business_size',
        'quoting_method',
        'willingness_to_pay',
    ];
}
