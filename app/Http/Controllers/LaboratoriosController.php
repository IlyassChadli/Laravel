<?php

namespace App\Http\Controllers;

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
        $laboratorios=laboratorios::all();
        return view('laboatorios/index',['laboratorios'=>$laboratorios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function edit(laboratorios $laboratorios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\laboratorios  $laboratorios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, laboratorios $laboratorios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\laboratorios  $laboratorios
     * @return \Illuminate\Http\Response
     */
    public function destroy(laboratorios $laboratorios)
    {
        $laboratorios->delete();
        flash('laboratorio borrado correctamente');
        return redirect()->route('laboratorios.index');
    }
}
