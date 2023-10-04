<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index()
    {
        $persona = Persona::get();
        return view('posts.createPersona', ['posts' => $persona]);
    }
    public function update()
    {
        return 'update form';
    }
    public function create(){

        return view('posts.createPersona');

    }

    public function store(Request $request)
    {
        $request->validate([

            'nombrePersona'=>['required','string','max:255'],
            'identificacionPersona'=>['required','integer','unique:personas'],
            'celularPersona'=>['required','integer'],
            'correoPersona'=>['required','string','email', 'max:255','unique:personas']
        ]);
        Persona::create([

            'nombrePersona'=>$request->nombrePersona,
            'identificacionPersona'=>$request->identificacionPersona,
            'celularPersona'=>$request->celularPersona,
            'correoPersona'=>$request->correoPersona,

        ]);
        return to_route('posts.pc')->with('status','Persona Creada Correctamente');
    }
}
