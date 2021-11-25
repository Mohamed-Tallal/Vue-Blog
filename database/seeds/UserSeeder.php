<?php

use App\Model\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($u = 1 ;$u<=5; $u++){
            User::create([
                'name' => 'Mohamed '.$u,
                'email' => 'mohamed'.$u.'@gmail.com',
                'password' => bcrypt(123456789) ,
            ]);
        }
    }
}
