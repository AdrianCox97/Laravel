<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
use App\Etiqueta;
use App\Http\Requests\productos_form_request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Productos = Producto::paginate(10);

        return view('productos.index')->with('Productos', $Productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $Producto = new Producto;
        /* Se obtiene una lista con todas las categorías. El orden si importa:
            El primer campo es el texto que muestra el Select.
            El segundo campo es el value del Select. Éste es el que recibirá el formulario y lo guardará en la BD */
        $Categorias = Categoria::pluck('nombre', 'id')->toArray();
        $Etiquetas = Etiqueta::pluck('nombre', 'id')->toArray();

        return view('productos.create')->with('Producto', $Producto)->with('Categorias', $Categorias)->with('Etiquetas', $Etiquetas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(productos_form_request $request)
    {
        /* Forma alternativa con eloquent:
            
            Producto::create([
                Arreglo con los campos: ejemplo
                'nombre'=>$request->nombre,
                ....,
            ]) */
        $Producto = new Producto();

        $Producto->nombre = $request->nombre;
        $Producto->descripcion = $request->descripcion;
        $Producto->precio = $request->precio;
        $Producto->categoria_id = $request->categoria_id;
        $Producto->imagen = $request->imagen;

        $Producto->save();

        /* Se insertan todos los registros en la tabla Pivote cuando la relación
           es de Muchos a Muchos */
        $Producto->etiquetasasociadas()->attach($request->etiquetas);

        return redirect('productos');
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
        $Producto = Producto::find($id);
        /* Se obtiene una lista con todas las categorías. El orden si importa:
            El primer campo es el texto que muestra el Select.
            El segundo campo es el value del Select. Éste es el que recibirá el formulario y lo guardará en la BD */
        $Categorias = Categoria::pluck('nombre', 'id')->toArray();
        $Etiquetas = Etiqueta::pluck('nombre', 'id')->toArray();

        return view('productos.show')->with('Producto', $Producto)->with('Categorias', $Categorias)->with('Etiquetas', $Etiquetas);
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
        $Producto = Producto::findOrFail($id);
        /* Se obtiene una lista con todas las categorías. El orden si importa:
            El primer campo es el texto que muestra el Select.
            El segundo campo es el value del Select. Éste es el que recibirá el formulario y lo guardará en la BD */
        $Categorias = Categoria::pluck('nombre', 'id')->toArray();
        $Etiquetas = Etiqueta::pluck('nombre', 'id')->toArray();

        return view('productos.edit')->with('Producto', $Producto)->with('Categorias', $Categorias)->with('Etiquetas', $Etiquetas);;
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
        $Producto = Producto::findOrFail($id);
        
        $Producto->nombre = $request->nombre;
        $Producto->descripcion = $request->descripcion;
        $Producto->precio = $request->precio;
        $Producto->categoria_id = $request->categoria_id;
        $Producto->imagen = $request->imagen;

        $Producto->update();

        $Producto->etiquetasasociadas()->sync($request->etiquetas);

        return redirect('productos');
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
        $Producto = Producto::findOrFail($id);

        $Producto->etiquetasasociadas()->detach();
        $Producto->delete();

        return redirect()->route('productos.index');
    }
}