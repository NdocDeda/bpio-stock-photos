<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = [
        'comment', 
        'user_id',
        'photo_id',
        
        
    ];
}
