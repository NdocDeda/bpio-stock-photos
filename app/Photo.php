<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
   
    protected $fillable = [
        'name', 
        'server_path',
        'v_resolution',
        'h_resolution',
        'user_id'
    ];
}
