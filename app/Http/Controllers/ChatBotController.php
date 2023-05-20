<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatBotController extends Controller
{
    public function showChatbot()
    {
        return view('Chatbot.chatbot');
    }

    public function handleChatbot(Request $request)
    {
        $message = $request->input('message');

        // Lógica de tu chatbot
        $response = 'Respuesta del chatbot';

        return response()->json(['response' => $response, 'userMessage' => $message]);
    }
}
