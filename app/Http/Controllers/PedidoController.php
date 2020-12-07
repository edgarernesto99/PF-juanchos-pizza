<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::with('direccion')->with('productos')->where('user_id','=',\Auth::id())->get();
        return view('pedidos/pedidosindex', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = \Auth::user()->productos()->get();
        $direcciones = \Auth::user()->direcciones()->get();
        //dd($productos->toArray()->sum('cantidad'));
        return view('pedidos/pedidosForm', compact('productos','direcciones'));
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
            'direccion_id' => 'required'
        ]);
        $pedido = new Pedido();
        $pedido->user_id = \Auth::id();
        $pedido->direccion_id = $request->direccion_id;
        $pedido->total = 0;
        $pedido->save();
        //Aqui se guardan los productos en tabla pivote
        $productos = json_decode($request->productos);
        $total = 0.0;
        foreach ($productos as $producto) {
            $pedido->productos()->attach($producto->id, ['cantidad' => $producto->pivot->cantidad]);
            $total = $total + $producto->pivot->cantidad*$producto->precio;
        }
        \Auth::user()->productos()->detach();
        $pedido->total = $total;
        $pedido->save();
        return redirect('pedidos')->with([
            'msj'=>'Pedido realizado',
            'alert-type'=>'alert-success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        //
    }
}
