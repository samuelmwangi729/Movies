<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    public $fillable=[
        'SubscriberEmail',
        'VideoUrl',
        'Status'
    ];
}
