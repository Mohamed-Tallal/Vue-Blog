<?php

namespace App\Repository;

use App\Interfaces\CategoryRepositoryInterface;
use App\Model\Category;
class CategoryRepository {

    public function get_category_data(){
        $cat = Category::select('id', 'tittle')->get();
        return $cat ;
    }



}
