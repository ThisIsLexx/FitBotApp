<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class EjercicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ejercicios')->insert([
            'id' => 1,
            'nombreEjercicio' => 'Press militar',
            'infoEjercicio' => 'Ejercicio enfocado al deltoide posterior del hombro. Consiste en el movimiento vertical de ambos brazos en paralelo a los codos',
            'categoriaEjercicio' => 'hombro',
            'calificacion' => 5,
        ]);

        DB::table('ejercicios')->insert([
            'id' => 2,
            'nombreEjercicio' => 'Press frances sentado',
            'infoEjercicio' => 'Ejercicio enfocado en la cabeza larga del triceps. Movimiento vertical de ambos brazos sobre la cabeza',
            'categoriaEjercicio' => 'triceps',
            'calificacion' => 3,
        ]);

        DB::table('ejercicios')->insert([
            'id' => 3,
            'nombreEjercicio' => 'Elevaciones laterales',
            'infoEjercicio' => 'Ejercicio enfocado en los deltoides laterales. Consiste en un movimiento en pendulo con mancuernas',
            'categoriaEjercicio' => 'hombro',
            'calificacion' => 3,
        ]);

        DB::table('ejercicios')->insert([
            'id' => 4,
            'nombreEjercicio' => 'Extensión en lazo',
            'infoEjercicio' => 'Ejercicio enfocado en la cabeza corta del triceps. Consiste en un movimiento paralelo hacia abajo con los brazos',
            'categoriaEjercicio' => 'triceps',
            'calificacion' => 5,
        ]);

        DB::table('ejercicios')->insert([
            'id' => 5,
            'nombreEjercicio' => 'Sentadilla libre',
            'infoEjercicio' => 'Ejercicio enfocado en los cuadriceps. Consiste en el movimiento paralelo con una barra de peso en la espalda',
            'categoriaEjercicio' => 'pierna',
            'calificacion' => 5,
        ]);

        DB::table('ejercicios')->insert([
            'id' => 6,
            'nombreEjercicio' => 'Sentadilla hack',
            'infoEjercicio' => 'Ejercicio enfocado en los cuadriceps. Consiste en un movimiento perpendicular a una diagonal con peso integrado',
            'categoriaEjercicio' => 'pierna',
            'calificacion' => 5,
        ]);

        DB::table('ejercicios')->insert([
            'id' => 7,
            'nombreEjercicio' => 'Curl con mancuerna',
            'infoEjercicio' => 'Ejercicio enfocado en la cabeza larga del biceps. Consiste en un movimiento controlado con mancuerna',
            'categoriaEjercicio' => 'biceps',
            'calificacion' => 4,
        ]);

        DB::table('ejercicios')->insert([
            'id' => 8,
            'nombreEjercicio' => 'Curl spider',
            'infoEjercicio' => 'Ejercicio enfocado en la cabeza larga y corta del biceps. Consiste en usar un banco inclinado para hacer el curl',
            'categoriaEjercicio' => 'biceps',
            'calificacion' => 5,
        ]);

        DB::table('ejercicios')->insert([
            'id' => 9,
            'nombreEjercicio' => 'Face pull',
            'infoEjercicio' => 'Ejercicio enfocado al deltoide posterior del hombro. Consiste en jalar una polea hacia tu cara',
            'categoriaEjercicio' => 'hombro',
            'calificacion' => 3,
        ]);

        DB::table('ejercicios')->insert([
            'id' => 10,
            'nombreEjercicio' => 'pull over',
            'infoEjercicio' => 'Ejercicio enfocado en los dorsales de la espalda. Consiste en llevar una barra en paralelo hacia tu estomago',
            'categoriaEjercicio' => 'espalda',
            'calificacion' => 3,
        ]);
    }
}
