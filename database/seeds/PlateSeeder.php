<?php

use Illuminate\Database\Seeder;
use App\Plate;
use App\Restaurant;

class PlateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /* public function run()
    {
        factory(Plate::class,5)->create();
    } */

    public function run()
    {
        factory(Plate::class,5)->create()->each(function ($plate)
            {
                factory(Plate::class,2)->create(['restaurant_id'=>$plate->id]);
            }
        );
    }
}
