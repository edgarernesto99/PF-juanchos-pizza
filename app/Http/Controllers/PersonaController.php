<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::allows('administrador')) {
            $personas = Persona::get();
            return view('personas/personasindex', compact('personas'));
        }
        else {
            $persona = Persona::where('user_id' ,'=' , Auth::id())->first();
            if (empty($persona)) {
                return view('personas/personascreate');
            }
            //Aqui lo mando a personas.show
            else {
                //return view('personas/personasshow', compact('persona'))
                return self::show($persona);
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Gate::allows('administrador')) {
            return redirect('personas');
        }
        else {
            return view('personas/personascreate');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'telefono' => 'required|numeric'
        ]);
        $persona = new Persona();
        $persona->nombre = $request->nombre;
        $persona->apellidos = $request->apellidos;
        $persona->telefono = $request->telefono;
        Auth::user()->persona()->save($persona);
        return redirect('personas')->with([
            'msj'=>'Información guardada exitosamente',
            'alert-type'=>'alert-success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        if (Gate::allows('show-persona', $persona) || Gate::allows('administrador')) {
            return view('personas/personasshow', compact('persona'));
        }
        return redirect('personas');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $persona)
    {
        if (Gate::allows('edit-persona', $persona)) {
            return view("personas/personascreate", compact('persona'));
        }
        return redirect('personas');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $persona)
    {
        $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'telefono' => 'required',
        ]);
        Persona::where('id', $persona->id)
            ->update($request->except('_method', '_token'));

            return redirect('personas.show')->with([
                'msj'=>'Información actualizada exitosamente',
                'alert-type'=>'alert-success'
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
        $persona->delete();
        return redirect()->route("personas.index")->with([
            'msj'=>'Se elimino su informacón',
            'alert-type'=>'alert-success'
        ]);
    }
}
