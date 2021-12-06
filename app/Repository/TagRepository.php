<?php

namespace App\Repository;

use App\Interfaces\TagRepositoryInterface;
use App\Model\Tag;

class TagRepository {

    public function get_tag_data(){
        $tag = Tag::get();
        return $tag ;
    }



}
