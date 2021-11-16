<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = '';

    function posts(){
        return $this->belongsToMany(Post::class,'post_tags','tag_id','post_id');
    }
}
