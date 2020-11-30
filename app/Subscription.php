<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    //

    protected $fillable = [
        'start_at', 
        'end_at',
        'user_id',
        
        
    ];
}
