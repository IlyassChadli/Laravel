<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicos = Medico::all();

        return view('medico',['medicos'=>$medicos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Medico/create');
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
            'email' => 'required|email|max:255|unique:users',
            'dni'=> 'required|max:8',
            'password' => 'required|min:6|confirmed',
            'direccion'=> 'required',
            'consulta_id'=>'required'
        ]);



        $user = new User($request->all());
        $user->password=bcrypt($user->password);
        $user->save();
        $medico=new Medico($request->all());
        $medico->user_id=$user->id;
        $medico->save();


        // return redirect('especialidades');

        flash('Medico creado correctamente');

        return redirect()->route('medicos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medico $medico)
    {
        $medico->delete();
        flash('medico borrado correctamente');
        return redirect()->route('medicco.index');
    }
}
