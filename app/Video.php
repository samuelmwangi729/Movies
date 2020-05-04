<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public $fillable=[
        'VideoTitle' ,
        'VideoSlug',
        'VideoCategory',
        'VideoDescription',
        'VideoPoster' ,
        'VideoFile',
        'VideoFile',
        'Views',
        'Likes',
        'Subscribers',
        'PostedBy',
        'Status'
    ];
}
