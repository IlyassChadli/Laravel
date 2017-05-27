<?php

namespace App\Http\Controllers;

use App\Informe;
use Illuminate\Http\Request;
use App\User;
class InformeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informes = Informe::all();
        return view('Informe/index',['informes'=>$informes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Informe/create');
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
            'validado'=>'required',
            'paciente_id'=>'required',
            'medico_id'=>'required',
            'lab_id'=>'required' ,
            'cita_id'=>'required' ,
            'resutado'=>'',
        ]);
        $informe = new Informe($request->all());
        $informe->save();


        flash('Informe creado correctamente');

        return redirect()->route('Informe.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Informe  $informe
     * @return \Illuminate\Http\Response
     */
    public function show(Informe $informe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Informe  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $informe=Administrador::find($id);
        return view('Informe/edit',['informe'=>$informe]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $informe=Administrador::find($id);
        $this->validate($request, [
            'validado'=>'required',
            'paciente_id'=>'required',
            'medico_id'=>'required',
            'lab_id'=>'required' ,
            'cita_id'=>'required' ,
            'resutado'=>'',
        ]);
        $informe->fill($request->all());
        $informe->save();
        flash('Informe modificado correctamente');
        return redirect()->route('Informe.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $informe=Administrador::find($id);
        $informe->delete();
        flash('Informe borrado correctamente');
        return redirect()->route('Informe.index');
    }
}
