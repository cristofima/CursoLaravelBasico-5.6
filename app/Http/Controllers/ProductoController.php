<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use Auth;
use App\Http\Requests\ProductoRequest;
use Illuminate\Support\Facades\Redirect;

class ProductoController extends Controller
{

    public function __construct(){
        //$this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos=Auth::user()->productos()->paginate(10);
        return view('productos.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
       return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductoRequest $request){
        Producto::create($request->all());
        return Redirect::to('productos')->with('success', 'Producto creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $prod=Producto::findOrFail($id);
        return view('productos.edit',compact('prod'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductoRequest $request, $id){
        Producto::updateOrCreate(['idproducto'=>$id],$request->all());
        return Redirect::to('productos')->with('success', 'Producto actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        Producto::destroy($id);
        return Redirect::to('productos')->with('success', 'Producto eliminado');
    }
}
