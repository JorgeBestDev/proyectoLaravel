<?php

namespace App\Http\Controllers;

use App\Models\Computador;
use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;


class ComputadorController extends Controller
{
    public function index()
    {
        $computador = Computador::with('persona')->get();
        return view('posts.index', ['computadores' => $computador]);
    }

    public function show(Computador $computador)
    {
        $persona = Persona::select('idPersona', 'nombrePersona')->get();
        return view('posts.show', ['computador' => $computador, 'persona' => $persona]);
    }

    public function update(Request $request, Computador $computador)
    {
        $request->validate([
            'marcaPc' => ['required', 'string'],
            'modeloPc' => ['required', 'string'],
            'serialPc' => ['required', 'integer', 'unique:computadores,serialPc,' . $computador->id],
            'personas_idPersona' => ['required', 'exists:personas,idPersona']
        ]);

        $computador->update($request->all());

        return redirect()->route('posts.index')->with('status', 'Computador Actualizado Correctamente');
    }

    public function edit(Computador $computador)
    {
        $persona = Persona::select('idPersona', 'nombrePersona')->get();
        return view('posts.editPc', ['computador' => $computador, 'persona' => $persona]);
    }
    public function destroy(Computador $computador)
    {
        $computador->delete();
        return redirect()->route('posts.index')->with('status', 'Computador Eliminado Correctamente');
    }
    public function create()
    {
        $persona = Persona::select('idPersona', 'nombrePersona')->get();
        return view('posts.createPc', ['personas' => $persona]);
    }

    public function store(Request $request)
    {
        $request->validate([

            'marcaPc' => ['required', 'string'],
            'modeloPc' => ['required', 'string'],
            'serialPc' => ['required', 'integer', 'unique:computadores'],
            'personas_idPersona' => ['required', 'exists:personas,idPersona']

        ]);
        Computador::create([

            'marcaPc' => $request->marcaPc,
            'modeloPc' => $request->modeloPc,
            'serialPc' => $request->serialPc,
            'personas_idPersona' => $request->personas_idPersona

        ]);
        return to_route('posts.index')->with('status', 'Computador Ingresado Correctamente');
    }
}
