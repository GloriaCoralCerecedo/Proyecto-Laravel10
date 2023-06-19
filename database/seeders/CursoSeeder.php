<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Registro 1
        $curso = new Curso();

        $curso->name = "Laravel";
        $curso->description = "El mejor framework de PHP";
        $curso->category = "Desarollo web";

        $curso->save();

         //Registro 2
        $curso2 = new Curso();

        $curso2->name = "Laravel";
        $curso2->description = "El mejor framework de PHP";
        $curso2->category = "Desarollo web";

        $curso2->save();

        //Registro 3
        $curso3 = new Curso();

        $curso3->name = "Laravel";
        $curso3->description = "El mejor framework de PHP";
        $curso3->category = "Desarollo web";

        $curso3->save();
    }
}
