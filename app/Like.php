<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    //
    protected $fillable = [
        'is_like', 
        'is_dislike',
        'user_id',
        'photo_id'
        
    ];
}
}
