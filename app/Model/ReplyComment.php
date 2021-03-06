<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ReplyComment extends Model
{
    protected $guarded = '';

    function post(){
        return  $this->belongsTo( Post::class ,'post_id');
    }

    function user(){
        return  $this->belongsTo( User::class ,'user_id');
    }

    function comment(){
        return  $this->belongsTo( Post::class ,'comment_id');
    }
}
