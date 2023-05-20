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

        }

        $currentTime = now()->format("H:i");

        $response = DB::table('answers')->where('pregunta', 'like', $message)->value('respuesta');

        if ($response === null) {
            $response = "Lo siento, por el momento no cuento con una respuesta para eso!";
        }
        
        return response()->json(['response' => $response, 'userMessage' => $mensaje, 'hora' => $currentTime]);
    }
}
