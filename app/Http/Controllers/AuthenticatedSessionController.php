<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    public function store(Request $request, Redirector $redirector){

        $recuerdame=$request->filled('recuerdame');

        if (Auth::attempt($request->only('usuarioCelador','contraseñaCelador'), $recuerdame)) {
            throw ValidationException::withMessages
            ([
                'usuarioCelador'=>__('auth.failed'),
                'contraseñaCelador'=>__('auth.failed')
            ]);
        }

        $request->session()->regenerate();
        return $redirector->intended('index')->with('status','Sesion Iniciada Correctamente');



    }

}
