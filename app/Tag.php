<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $fillable = [
     
            'name',
            
     
        
    ];

    public function users() {
    return $this->belongsToMany(
        Photos::class,
        'photo_tag',
        'photo_id',
        'tag_id');
    
    }
}
