<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ChatbotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert([
            'id' => 1,
            'pregunta' => "hola",
            'respuesta' => "Hola! En que puedo ayudarte el dia de hoy?<br>Entre las posibles opciones tenemos:<br>Para obtener consejos de ejercicio escribe: consejo<br>Para obtener ayuda con tu rutina de ejercicios escribe: rutina<br>Para consultar tu IMC escribe: indice",
        ]);

        DB::table('answers')->insert([
            'id' => 2,
            'pregunta' => "consejo",
            'respuesta' => "Claro, sobre que necesitas un consejo?<br>1. Ejecución de los ejercicios, escribe: ejercicios<br>2. Splits de entrenamiento, escribe: splits",
        ]);

        DB::table('answers')->insert([
            'id' => 3,
            'pregunta' => "rutina",
            'respuesta' => "Para tu rutina del día de hoy, puedes implementar los siguientes ejercicios:",
        ]);

        DB::table('answers')->insert([
            'id' => 4,
            'pregunta' => "indice",
            'respuesta' => "Para consultar tu indice de masa corporal, puedes visitar el apartado de funciones en la parte superior de la pagina<br>o visitar este enlace: <a href='CalculadoraIMC' class='text-resaltar'>Calcula tu IMC</a>",
        ]);

        DB::table('answers')->insert([
            'id' => 5,
            'pregunta' => "corporal",
            'respuesta' => "Para consultar tu indice de masa corporal, puedes visitar el apartado de funciones en la parte superior de la pagina",
        ]);

        DB::table('answers')->insert([
            'id' => 6,
            'pregunta' => "splits",
            'respuesta' => "Los splits son la manera en que dividimos nuestra semana de entrenamiento.<br>Si quieres obtener más información sobre estos, visita: <a href='informacionSplits' class='text-resaltar'>SPLITS</a> ",
        ]);
    }
}
