<?php

use Illuminate\Database\Seeder;
use App\Plate;
use App\Restaurant;

class PlateSeeder extends Seeder
{


    public function run()
    {
        factory(Plate::class,5)->create()->each(function ($plate)
            {
                factory(Plate::class)->create(['restaurant_id'=>$plate->id]);
            }
        );
    }
}
