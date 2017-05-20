<?php

namespace App\Http\Controllers;

use App\Laboratorio;
use App\laboratorios;
use Illuminate\Http\Request;

class LaboratoriosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laboratorios=Laboratorio::all();
        return view('Laboratorio/index',['laboratorios'=>$laboratorios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Laboratorio/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:255',
            'planta'=> 'required',
            'departamento'=>'required',
        ]);

        $laboratorio = new Laboratorio($request->all());
        $laboratorio->save();


        flash('Laboratorio creado correctamente');

        return redirect()->route('Laboratorio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\laboratorios  $laboratorios
     * @return \Illuminate\Http\Response
     */
    public function show(laboratorios $laboratorios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\laboratorios  $laboratorios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laboratorio=Laboratorio::find($id);
        return view('Laboratorio/edit',['laboratorio'=>$laboratorio]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\laboratorios  $laboratorios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $laboratorio=Laboratorio::find($id);
        $this->validate($request, [ 'name' => 'required|max:255',
            'planta'=> 'required',
            'departamento'=>'required',
        ]);
        $laboratorio->fill($request->all());
        $laboratorio->save();
        flash('Laboratorio modificado correctamente');
        return redirect()->route('Laboratorio.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\laboratorios  $laboratorios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $laboratorio=Laboratorio::find($id);
        $laboratorio->delete();
        flash('laboratorio borrado correctamente');
        return redirect()->route('Laboratorio.index');
    }
}
