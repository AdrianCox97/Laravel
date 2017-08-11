<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Vista de Todo
        $Contactos=Contact::all();

        return view('contactos.index')->with('Contactos', $Contactos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Muestra Formulario
        return view('contactos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Recibe datos del Fomrulario
        $Contacto=new Contact();

        $Contacto->Nombre=$request->txtnombre;
        $Contacto->Email=$request->txtemail;
        $Contacto->Telefono=$request->txtcel;

        $Contacto->save();

        return redirect()->route('contactos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Muestra solo 1
        $Contacto=Contact::findOrFail($id);

        return view('contactos.show')->with('Contacto', $Contacto);
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
        $Contacto=Contact::findOrFail($id);

        return view('contactos.edit')->with('Contacto', $Contacto);
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
        $Contacto=Contact::findOrFail($id);

        $Contacto->Nombre=$request->txtnombre;
        $Contacto->Email=$request->txtemail;
        $Contacto->Telefono=$request->txtcel;

        $Contacto->update();

        return redirect()->route('contactos.index');
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
        $Contacto=Contact::findOrFail($id);

        $Contacto->delete();

        return redirect()->route('contactos.index');
    }
}