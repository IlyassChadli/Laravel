<?php

namespace App\Http\Controllers;

use App\Laboratorio;
use App\Personal_Laboratorio;
use Illuminate\Http\Request;

class PersonalLaboratorio extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personalLab=PersonalLaboratorio::all();
        return view('PersonalLab/index',['personalLab'=>personalLab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('PersonalLab/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Personal_Laboratorio  $personal_Laboratorio
     * @return \Illuminate\Http\Response
     */
    public function show(Personal_Laboratorio $personal_Laboratorio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Personal_Laboratorio  $personal_Laboratorio
     * @return \Illuminate\Http\Response
     */
    public function edit(Personal_Laboratorio $personal_Laboratorio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Personal_Laboratorio  $personal_Laboratorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $personalLab=Laboratorio::find($id);
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'dni'=> 'required|max:9',
            'password' => 'required|min:6|',
            'direccion'=> 'required',
        ]);
        $personalLab->fill($request->all());
        $personalLab->save();
        flash('Personal de laboratorio modificado correctamente');
        return redirect()->route('PersonalLab.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Personal_Laboratorio  $personal_Laboratorio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personal_Laboratorio $personal_Laboratorio)
    {
        //
    }
}
