<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $fillable = [
        'filename',
        'original_filename',
        'photographer',
        'location',
        'location_url'
    ];
}
