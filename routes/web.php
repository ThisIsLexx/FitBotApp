<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EjercicioController;
use App\Http\Controllers\ChatBotController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Bienvenida');
});



Route::get('/CalculadoraIMC', function () {
    return view('Chatbot.chatbot-imc');
});

Route::get('/Avances', function () {
    return view('Chatbot.chatbot-avances');
});

Route::get('/Ajustes', function () {
    return view('Chatbot.chatbot-ajustes');
});

Route::get('informacionSplits', function (){
    return view('informacionSplits');
});

Route::get('/Ejercicios', [EjercicioController::class, 'index']);

Route::post('/IMC', [EjercicioController::class, 'IMC']);

Route::post('/filtrar', [EjercicioController::class, 'filter']);


Route::get('EntrenadorVirtual', [ChatBotController::class, 'showChatbot']);
Route::post('EntrenadorVirtual', [ChatBotController::class, 'handleChatbot']);