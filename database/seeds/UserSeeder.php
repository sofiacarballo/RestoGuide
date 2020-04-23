<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Restaurant;

class UserSeeder extends Seeder
{

    public function run()
    {
       factory(User::class)->create(['name'=>'Sofia','email'=>'sofia.carballo@live.com']);
    

        factory(User::class,5)->create()->each(function ($user)
            {
                factory(Restaurant::class)->create(['user_id'=>$user->id]);
            }

        );
    }
}

