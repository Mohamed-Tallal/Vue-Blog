<?php

use App\Model\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'tittle' => '' ,
            'image' => '',
            'user_id' => '',
            'category_id' => '',
            'small_desc' => '',
            'desc' => ''
        ]);
    }
}
