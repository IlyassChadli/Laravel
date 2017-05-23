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
        return view('Laboratorio/index',['Laboratorio'=>$laboratorios]);
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
            'centro_id'=>'required|exists:Centro,id',
            'solicitud_id'=>'required|exists:Solicitud,id',
            'PersonalLab_id'=>'required|exists:PersonalLaboratorio,id',
        ]);

        $laboratorio = new Laboratorio($request->all());
        $laboratorio->save();


        flash('Laboratorio creado correctamente');

        return redirect()->route('Laboratorio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Laboratorio  $id
     * @return \Illuminate\Http\Response
     */
    public function show(laboratorio $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\laboratorio  $id
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
     * @param  \App\laboratorio  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $laboratorio=Laboratorio::find($id);
        $this->validate($request, [
            'centro_id'=>'required|exists:Centro,id',
            'solicitud_id'=>'required|exists:Solicitud,id',
            'PersonalLab_id'=>'required|exists:PersonalLaboratorio,id',
        ]);
        $laboratorio->fill($request->all());
        $laboratorio->save();
        flash('Laboratorio modificado correctamente');
        return redirect()->route('Laboratorio.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\laboratorio $id
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
