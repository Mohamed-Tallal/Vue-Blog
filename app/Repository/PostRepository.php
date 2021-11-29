<?php

namespace App\Repository;

use App\Interfaces\PostRepositoryInterface;
use App\Model\Post;

class PostRepository {

    public function get_post_data($item){
        $post =Post::with('category','user','comments','tags')->paginate(5*$item) ;
        return $post ;
    }

    public function count_posts(){
        $post =Post::count() ;
        return $post ;
    }



}
