<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trailer extends Model
{
    public $fillable=[
            'TrailerTitle',
            'TrailerSlug',
            'TrailerDescription',
            'TrailerPoster' ,
            'TrailerFile',
            'TrailerFile',
            'Status'
    ];
}
