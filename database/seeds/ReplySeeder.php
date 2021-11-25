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
            'reply' => 'reply' ,
            'post_id' => rand(1,20),
            'user_id' => rand(1,5),
            'comment_id' => rand(1,20),
        ]);
    }
}
