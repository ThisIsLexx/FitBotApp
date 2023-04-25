<?php

namespace App\Http\Controllers;

use App\Models\Ejercicio;
use Illuminate\Http\Request;

class EjercicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ejercicios = Ejercicio::all();
        $filter = "";

        return view('Chatbot.chatbot-ejercicios', compact('ejercicios', 'filter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ejercicio  $ejercicio
     * @return \Illuminate\Http\Response
     */
    public function show(Ejercicio $ejercicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ejercicio  $ejercicio
     * @return \Illuminate\Http\Response
     */
    public function edit(Ejercicio $ejercicio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ejercicio  $ejercicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ejercicio $ejercicio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ejercicio  $ejercicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ejercicio $ejercicio)
    {
        //
    }





    public function IMC(Request $request){
        $request->validate([
            'edad' => 'required|numeric|integer|min:1|max:100',
            'estatura' => 'required|numeric|integer|min:1|max:250',
            'peso' => 'required|numeric',
        ]);

        $peso = $request->peso;
        $estatura = $request->estatura;

        $divisor = $estatura * $estatura;

        $IMC = ($peso / $divisor) * 10000;

        return redirect('/CalculadoraIMC')->with('success', 'Se han ingresado correctamente todos los campos')->with('IMC', $IMC)->with('peso', $peso)->with('estatura', $estatura);
    }

    public function filter(Request $request){
        $request->validate([
            'filter' =>'required',
        ]);

        $filter = $request->filter;
        $ejercicios = Ejercicio::where('categoriaEjercicio', $request->filter)->get();

        return view('/Chatbot.chatbot-ejercicios', compact('ejercicios', 'filter'))->with('filtrado', $filter);
    }
}
