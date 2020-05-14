<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Totals extends Model
{
    public $fillable = [
        'Username',
        'Amount',
    ];
}