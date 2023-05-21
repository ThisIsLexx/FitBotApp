<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatBotController extends Controller
{
    public function showChatbot()
    {
        return view('Chatbot.chatbot');
    }

    public function handleChatbot(Request $request)
    {
        $mensaje = $request->message;

        $message = strtolower($mensaje);
        
        if ($message === "ejercicios") {
            $cont = random_int(0,3);

            if($cont == 0){
                $response = "Asegurate de planificar tus actividades físicas de acuerdo a tu condición física.";
            }
            elseif($cont == 1){
                $response = "Intenta realizar ejercicios de fuerza y flexibilidad.<br>Estos ejercicios nos permiten mejorar nuestros musculos, huesos, ligamentos y articulaciones.<br>
                            Intenta poner en practica este tipo de ejercicios al menos dos veces por semana";
            }
            elseif($cont == 2){
                $response = "Mantener un ritmo constante entre la ejecución de los ejercicios es importante.<br>Intenta que el transcurso entre el movimiento sea de al menos 3 segundos.";
            }
            else{
                $response = "Es importante mantener pesos que puedas controlar, intentar cargar más peso del que tu cuerpo soporta puede traer consecuencias negativas o daños no reparables a tu cuerpo.";
            }
            $currentTime = now()->format("h:i");
            return response()->json(['response' => $response, 'userMessage' => $mensaje, 'hora' => $currentTime]);
        }
        elseif ($message === "rutina"){                     // AQUI VA EL ALGORITMO DE RECOMENDACIÓN
            $currentTime = now()->format("h:i");
            $response = "La rutina es la siguiente";
            return response()->json(['response' => $response, 'userMessage' => $mensaje, 'hora' => $currentTime]);
        }
        else if ($message == "gracias" || $mensaje == "muchas gracias!" || $mensaje == "muchas gracias"){
            $currentTime = now()->format("h:i");
            $response = "Gracias a ti!, Espero haber sido de ayuda. puedes ir al menú de funciones en barra de navegación que se encuentra en la parte superior de la pantalla.<br>Que pases un bonito dia!";
            return response()->json(['response' => $response, 'userMessage' => $mensaje, 'hora' => $currentTime]);
        }
        else {
            $currentTime = now()->format("h:i");
            $response = DB::table('answers')->where('pregunta', 'like', $message)->value('respuesta');
            if ($response === null) {
                $response = "Lo siento, por el momento no cuento con una respuesta para eso!";
            }
            return response()->json(['response' => $response, 'userMessage' => $mensaje, 'hora' => $currentTime]);
        }
    }

    public function matrizPonderada()
    {   
        $categorias = ['hombro','pecho','triceps','pierna','espalda','biceps'];

        $matrizEjercicios = [];

        $consultas = DB::table('ejercicios')->get();

        foreach($consultas as $consulta){
            $matrizEjercicios[] = [$consulta->nombreEjercicio, $consulta->categoriaEjercicio, $consulta->calificacion];
        }

        $valoracionEjercicios = [];

        $response = $categorias;

        return response()->json(['categorias' => $categorias, 'ejerciciosMatriz' => $matrizEjercicios]);
    }
}
