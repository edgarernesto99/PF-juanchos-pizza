<?php

namespace App\Http\Controllers;

use App\Models\Direccion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DireccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $direcciones = Direccion::with('user')->where('user_id' ,'=' , Auth::id())->get();
        return view('direcciones/direccionesindex', compact('direcciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('direcciones/direccionesForm');
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
            'calle_numero' => 'required',
            'colonia' => 'required',
            'ciudad' => 'required',
            'referencias' => 'required'
        ]);
        $direccion = new Direccion();
        $direccion->calle_numero = $request->calle_numero;
        $direccion->colonia = $request->colonia;
        $direccion->ciudad = $request->ciudad;
        $direccion->referencias = $request->referencias;
        $direccion->user_id = Auth::id();
        $direccion->save();
        return redirect('direcciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function show(Direccion $direccion)
    {
        dd($direccion);
        return view('direcciones/direccionesshow', compact('direccion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $direccion = Direccion::get()->where('id','=',$id)->first();
        return view("direcciones/direccionesForm", compact('direccion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'calle_numero' => 'required',
            'colonia' => 'required',
            'ciudad' => 'required',
            'referencias' => 'required'
        ]);
        Direccion::where('id', $id)
            ->update($request->except('_method', '_token'));
        return redirect()->route('direcciones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $direccion = Direccion::get()->where('id','=',$id)->first();
        $direccion->delete();
        return redirect()->route("direcciones.index");
    }
}
