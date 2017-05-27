<?php

namespace App\Http\Controllers;

use App\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citas=Cita::all();
        return view('Cita/index',['citas'=>$citas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Cita/create');
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
            'fecha_hora' => 'required|date|after:now',
            'medico_id'=> 'required|',
            'paciente_id'=>'required|',
            'consulta_id'=> 'required|',
            'administrador_id'=> 'required|',
        ]);


        $cita = new Cita($request->all());
        $cita->save();


        flash('Cita creada correctamente');
        return redirect()->route('Cita.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function show(Cita $cita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cita=Cita::find($id);
        return view('Cita/edit',['cita'=>$cita]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cita=Cita::find($id);

        $this->validate($request, [
            'fecha_hora' => 'required|date|after:now',
            'medico_id'=> 'required|',
            'paciente_id'=>'required|',
            'consulta_id'=> 'required|',
            'administrador_id'=> 'required|',
        ]);


        $cita->fill($request->all());
        $cita->save();


        flash('Cita modificada correctamente');
        return redirect()->route('Cita.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cita $cita)
    {
        $cita->delete();
        flash('cita borrada correctamente');
        return redirect()->route('Cita.index');
    }
}
