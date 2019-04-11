<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    //
    protected $fillable = [
        'titre',
        'original_filename',
        'filename',
        'author',
        'paragraphe'  
    ];
}
