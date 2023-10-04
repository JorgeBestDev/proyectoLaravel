<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'nombreCelador'=>['required','string','max:255'],
            'identificacionCelador'=>['required','integer','unique:celadores'],
            'celularCelador'=>['required','integer'],
            'correoCelador'=>['required','string','email', 'max:255','unique:celadores'],
            'usuarioCelador'=>['required','string','max:255','unique:celadores'],
            'contraseñaCelador'=>['required','confirmed',Rules\Password::defaults()],

        ]);
        User::create([

            'nombreCelador'=>$request->nombreCelador,
            'identificacionCelador'=>$request->identificacionCelador,
            'celularCelador'=>$request->celularCelador,
            'correoCelador'=>$request->correoCelador,
            'usuarioCelador'=>$request->usuarioCelador,
            'contraseñaCelador'=>bcrypt($request->contraseñaCelador),

        ]);
        return to_route('login')->with('status','Cuenta Creada Correctamente');
    }



    /**
     * Display the specified resource.
     */
    public function show(User $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $usuario)
    {
        //
    }
}
