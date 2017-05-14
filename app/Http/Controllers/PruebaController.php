<?php

namespace App\Http\Controllers;

use App\Prueba;
use Illuminate\Http\Request;

class PruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pruebas=Prueba::all();
        return view('Prueba/index',['pruebas'=>$pruebas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Prueba/create');
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
            'tipo' => 'required|max:255',
            'direccion'=> 'required',
            'consulta_id'=>'required',
        ]);

        $user = new User($request->all());
        $user->save();
        $prueba = new Prueba($request->all());

        $prueba->user_id = $user->id;

        $prueba->save();


        flash('Prueba creado correctamente');

        return redirect()->route('Prueba.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function show(Prueba $prueba)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prueba=Prueba::find($id);
        return view('Prueba/edit',['prueba'=>$prueba]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prueba=Prueba::find($id);
        $this->validate($request, [
            'tipo' => 'required|max:255',
            'direccion'=> 'required',
            'consulta_id'=>'required',
        ]);
        $prueba->fill($request->all());
        $prueba->save();
        flash('Prueba modificado correctamente');
        return redirect()->route('Prueba.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prueba  $prueba
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prueba=Prueba::find($id);
        $prueba->delete();
        flash('prueba borrada correctamente');
        return redirect()->route('pruebas.index');
    }
}
