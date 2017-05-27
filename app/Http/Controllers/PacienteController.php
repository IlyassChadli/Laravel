<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;
use App\User;
class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes=Paciente::all();
        return view('Paciente/index',['pacientes'=>$pacientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Paciente/create');
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
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'dni'=> 'required|max:8',
            'password' => 'required|min:6|',
            'numPaciente'=> 'max:255',
        ]);



        $user = new User($request->all());
        $user->password=bcrypt($user->password);
        $user->save();
        $paciente=new Paciente($request->all());
        $paciente->user_id=$user->id;
        $paciente->save();

        flash('Paciente creado correctamente');

        return redirect()->route('Paciente.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente=Paciente::find($id);
        return view('Paciente/edit',['paciente'=>$paciente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $paciente=Paciente::find($id);
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'dni'=> 'required|max:8',
            'password' => 'required|min:6|',
            'numPaciente'=> 'required|max:255',
        ]);
        $paciente->fill($request->all());
        $paciente->save();
        flash('Paciente modificado correctamente');
        return redirect()->route('Paciente.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paciente=Paciente::find($id);
        $paciente->delete();
        flash('paciente borrado correctamente');
        return redirect()->route('Paciente.index');
    }
}
