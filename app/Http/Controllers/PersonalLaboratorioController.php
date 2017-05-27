<?php

namespace App\Http\Controllers;

use App\Laboratorio;
use App\PersonalLaboratorio;
use Illuminate\Http\Request;
use App\User;
class PersonalLaboratorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personalLabs=PersonalLaboratorio::all();
        return view('PersonalLab/index',['personalLabs'=>$personalLabs]);
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
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'dni'=> 'required|max:9',
            'lab_id'=>'required',
            'password' => 'required|min:6|',
            'direccion'=> 'required',
            'facultativo'=>'required',
        ]);
        $user = new User($request->all());
        $user->password = bcrypt($user->password);
        $user->save();
        $personalLab = new PersonalLaboratorio($request->all());

        $personalLab->user_id = $user->id;
        $personalLab->fill($request->all());
        $personalLab->save();
        flash('Personal de laboratorio creado correctamente');
        return redirect()->route('PersonalLab.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PersonalLaboratorio  $personal_Laboratorio
     * @return \Illuminate\Http\Response
     */
    public function show(PersonalLaboratorio $personalLaboratorio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PersonalLaboratorio  $personal_Laboratorio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personalLab=PersonalLaboratorio::find($id);
        return view('PersonalLab/edit',['personalLab'=>$personalLab]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PersonalLaboratorio $personal_Laboratorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $personalLab=PersonalLaboratorio::find($id);
        $this->validate($request, [
            'name' => 'required|max:255',

            'dni'=> 'required|max:9',

            'direccion'=> 'required',
            'facultativo'=>'required',
            'lab_id'=>'required',
        ]);
        $personalLab->fill($request->all());
        $personalLab->save();
        flash('Personal de laboratorio modificado correctamente');
        return redirect()->route('PersonalLab.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Personal_Laboratorio  $personal_Laboratorio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personalLab=PersonalLaboratorio::find($id);
        $personalLab->delete();
        flash('personal de laboratorio borrado correctamente');
        return redirect()->route('PersonalLab.index');
    }
}
