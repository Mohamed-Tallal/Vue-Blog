<?php

namespace App\Repository;

use App\Interfaces\PostRepositoryInterface;
use App\Model\Post;

class PostRepository {

    public function get_post_data(){
        $post =Post::with('category','user','comments','tags')->paginate(5) ;
        return $post ;


    }



}
