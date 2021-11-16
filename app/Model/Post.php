<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = '';

    function category(){
        return $this->belongsTo(Category::class , 'category_id');
    }

    function tags(){
        return $this->belongsToMany(Tag::class , 'post_tags' ,'post_id','tag_id' );
    }

    function user(){
        return $this->belongsTo(User::class , 'user_id');
    }

    function comments(){
        return $this->hasMany(Comment::class,'post_id');
    }

    function replys(){
        return $this->hasMany(ReplyComment::class,'post_id');
    }

}
