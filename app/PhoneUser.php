<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhoneUser extends Model
{
    protected $fillable=[
        'email',
        'password',
        'Token',
        'Status'
    ];
}
