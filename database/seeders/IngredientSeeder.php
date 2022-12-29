<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ingre = new Ingredient();
        $ingre->nombre = 'Queso';
        $ingre->descripcion = 'quesito';
        $ingre->save();

        $ingre1 = new Ingredient();
        $ingre1->nombre = 'Jamón';
        $ingre1->descripcion = 'jamónmamon';
        $ingre1->save();

        $ingre2 = new Ingredient();
        $ingre2->nombre = 'Piña';
        $ingre2->descripcion = 'piñaloca';
        $ingre2->save();

    }
}
