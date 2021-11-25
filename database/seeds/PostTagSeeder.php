<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB ;
class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($p= 1 ;$p<=20;$p++){
                DB::table('post_tags')->insert([
                    'post_id' => $p,
                    'tag_id' => rand(1,20)
                ]);

        }
    }
}
