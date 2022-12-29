<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $size = new Size();
        $size->nombre = 'chico';
        $size->descripcion = 'chiquito';
        $size->save();

        $size1 = new Size();
        $size1->nombre = 'Grande';
        $size1->descripcion = 'grandote';
        $size1->save();

        $size2 = new Size();
        $size2->nombre = 'Extragrande';
        $size2->descripcion = 'extraextra';
        $size2->save();
        
    }
}
