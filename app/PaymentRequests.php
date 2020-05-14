<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentRequests extends Model
{
    public $fillable = [
        'Username',
        'PaymentMethod',
        'PaymentAddress',
        'Amount',
        'Status'
    ];
}