<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UniqueDownload extends Model
{
    //
    protected $fillable = [
        'comment', 
        'user_id',
        'photo_id',
        
        
    ];
}
