<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Http\Requests\categorias_form_request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Categorias = Categoria::paginate(10);

        return view('categorias.index')->with('Categorias', $Categorias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $Categoria = new Categoria;

        return view('categorias.create')->with('Categoria', $Categoria);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(categorias_form_request $request)
    {
        /*Para poder hacer las validaciones es necesario importar el request creado*/
        $Categoria = new Categoria();

        $Categoria->nombre = $request->nombre;
        $Categoria->description = $request->descripcion;
        $Categoria->imagen = $request->imagen;

        $Categoria->save();

        return redirect('categorias');
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
        $Categoria=Categoria::findOrFail($id);

        return view('categorias.show')->with('Categoria', $Categoria);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $Categoria = Categoria::findOrFail($id);

        return view('categorias.edit')->with('Categoria', $Categoria);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $Categoria = Categoria::findOrFail($id);
        $Categoria->nombre = $request->nombre;
        $Categoria->description = $request->descripcion;
        $Categoria->imagen = $request->imagen;

        $Categoria->update();

        return redirect('categorias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $Categoria = Categoria::findOrFail($id);

        $Categoria->delete();

        return redirect()->route('categorias.index');
    }
}