<?php

use App\Model\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'tittle' =>  'Nature'
        ]);

        Category::create([
            'tittle' =>  'Life Style'
        ]);

        Category::create([
            'tittle' =>  'Fashion'
        ]);

        Category::create([
            'tittle' =>  'Programming'
        ]);


    }
}
