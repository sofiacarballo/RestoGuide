<?php

use Illuminate\Database\Seeder;
use App\Ingredient;

class IngredientSeeder extends Seeder
{

    public function run()
    {
        factory(Ingredient::class,5)->create();
    }
}
