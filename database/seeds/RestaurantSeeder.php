<?php

use Illuminate\Database\Seeder;
use App\Restaurant;
use App\Plate;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Restaurant::class,0)->create();
    }

}


