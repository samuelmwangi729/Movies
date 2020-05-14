<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vpayment extends Model
{
    public $fillable = [
        'Username',
        'paymentMethod',
        'paymentAddress',
    ];
}