<?php

use App\Model\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($u =1 ;$u<=5;$u++)
        {
            for($i =1 ;$i<=5;$i++)
            {
                Comment::create([
                    'comment' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                    'post_id' => rand(1,20) ,
                    'user_id' => $u
                ]);
            }
        }
    }
}
