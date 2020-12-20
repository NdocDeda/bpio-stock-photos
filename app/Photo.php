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

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class,'photo_tag','photo_id','tag_id');
    }
}
