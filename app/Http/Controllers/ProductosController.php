<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::get();
        return view('productos/productosindex', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos/productoscreate');
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
            'descripcion' => 'required',
            'precio' => 'required|min:0',
            'tamanio' => 'required',
            'file-image' => 'required'
        ]);
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->tipo = $request->tipo;
        $producto->tamanio = $request->tamanio;
        $producto->imagen = $request->file('file-image')->store('public');
        $producto->save();
        return redirect('productos')->with([
            'msj'=>'Producto agregado exitosamente',
            'alert-type'=>'alert-success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        return view('productos/productosshow', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        return view("productos/productoscreate", compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|min:0'
        ]);
        if ($request->hasFile('file-image')) {
            $request->request->add(['imagen'=> $request->file('file-image')->store('public')]);
        }

        Producto::where('id', $producto->id)
            ->update($request->except('_method', '_token','file-image'));

        return redirect()->route('productos.show', [$producto])->with([
            'msj'=>'Producto actualizado exitosamente',
            'alert-type'=>'alert-success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route("productos.index")->with([
            'msj'=>'Acabas de eliminar un producto',
            'alert-type'=>'alert-warning'
        ]);
    }

    public function addToCart(Request $request, Producto $producto) {
        $registro = $producto->users()->find(\Auth::id());
        if (!empty($registro)) {
            $producto->users()->updateExistingPivot(\Auth::id(),
            ['cantidad'=>($registro->pivot->cantidad+$request->cantidad)], false);
        }
        else {
            $producto->users()->attach(\Auth::id(), ['cantidad' => $request->cantidad]);
        }
        return redirect()->route('menu')->with([
            'msj'=>'Producto agregado al carrito',
            'alert-type'=>'alert-success'
        ]);
    }

    public function showCart() {
        $contenido = \Auth::user()->productos()->get();
        $contenido->toArray();
        return view('productos/productosshowcart', compact('contenido'));
    }
    public function removeFromCart(Producto $producto) {
        //\DB::delete('delete producto_user where user_id = ? && producto_id = ?', [\Auth::id(), $producto->id]);
        \Auth::user()->productos()->detach($producto->id);
        return redirect()->route('productos.showCart')->with([
            'msj'=>'Producto quitado del carrito',
            'alert-type'=>'alert-warning'
        ]);
    }
}
