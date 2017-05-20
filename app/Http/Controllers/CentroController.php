<?php

namespace App\Http\Controllers;

use App\Centro;
use Illuminate\Http\Request;

class CentroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $centros=Centro::all();
        return view('Centro/index',['Centro'=>$centros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       return view ('Centro/create');
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
            'direccion'=> 'required',
            'departamentos'=>'required',
        ]);

        $centro = new centro($request->all());
        $centro->save();


        flash('Centro creado correctamente');

        return redirect()->route('Centro.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Centro  $centro
     * @return \Illuminate\Http\Response
     */
    public function show(Centro $centro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Centro  $centro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $centro=Centro::find($id);
        return view('Centro/edit',['centro'=>$centro]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Centro  $centro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $centro=Centro::find($id);
        $this->validate($request, [
            'name' => 'required|max:255',
            'direccion'=> 'required',
            'departamentos'=>'required',
        ]);

        $centro->fill($request->all());
        $centro->save();


        flash('Centro modificado correctamente');

        return redirect()->route('Centro.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Centro  $centro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Centro $centro)
    {
        $centro->delete();
        flash('centro borrado correctamente');
        return redirect()->route('Centro.index');
    }
}
