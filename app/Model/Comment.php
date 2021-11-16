<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = '';

    function post(){
      return  $this->belongsTo( Post::class ,'post_id');
    }

    function user(){
        return  $this->belongsTo( User::class ,'user_id');
    }

    function replys(){
        return  $this->hasMany( ReplyComment::class ,'comment_id');

    }
}
