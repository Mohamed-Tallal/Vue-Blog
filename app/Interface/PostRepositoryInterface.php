<?php

namespace App\Interfaces ;

use App\Repository\PostRepository;


interface PostRepositoryInterface extends  PostRepository  {
    public function get_post_data() ;
}
