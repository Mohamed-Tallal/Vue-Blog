<?php

namespace App\Interfaces ;

use App\Repository\PostRepository;


interface PostRepositoryInterface   {
    public function get_post_data($item) ;
    public function count_posts() ;
    public function find_post_data($id);
}
