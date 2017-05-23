<?php

namespace App\Http\Controllers;

use App\Consulta;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultas=Consulta::all();
        return view('Consulta/index',['consultas'=>$consultas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Consulta/create');
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
            'medico_id' => 'required|max:255',

            'centro_id'=> 'required',
        ]);
        $consulta = new Consulta($request->all());
        $consulta->save();


        flash('Consulta creada correctamente');
        return redirect()->route('Consulta.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function show(Consulta $consulta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consulta=Consulta::find($id);
        return view('Consultas/edit',['consultas'=>$consulta]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $consulta=Consulta::find($id);
        $this->validate($request, [
            'medico_id' => 'required|max:255',

            'centro_id'=> 'required',
        ]);
        $consulta->fill($request->all());
        $consulta->save();


        flash('Consulta modificada correctamente');
        return redirect()->route('Consulta.edit');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consulta $consulta)
    {
        $consulta->delete();
        flash('consulta borrada correctamente');
        return redirect()->route('Consulta.index');
    }
}
