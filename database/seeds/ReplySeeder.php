<?php

use App\Model\ReplyComment;
use Illuminate\Database\Seeder;

class ReplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ReplyComment::create([
            'reply' => '' ,
            'post_id' => '',
            'user_id' => '',
            'comment_id' => '',
        ]);
    }
}