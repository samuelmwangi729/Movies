<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatSubscriber extends Model
{
    public $fillable=[
           'Subscriber',
           'Category',
           'EndDate',
           'Status',
    ];
}
