<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    public $fillable = [
        'PaymentMethod', 'Status'
    ];
}