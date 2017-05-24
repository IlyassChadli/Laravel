<?php

namespace App\Http\Controllers;

use App\Administrador;
use Illuminate\Http\Request;
use App\User;
class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administrador = Administrador::all();
        return view('Administrador/index',['administradors'=>$administrador]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Administrador/create');
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
                'centro_id'=>'required|exists:Centro,id',
                'email' => 'required|email|max:255|unique:users',
                'dni'=> 'required|max:9',
                'password' => 'required|min:6|',
                'direccion'=> 'required',

            ]);
            $user = new User($request->all());
            $user->password = bcrypt($user->password);
            $user->save();
            $administrador = new Administrador($request->all());

            $administrador->user_id = $user->id;

            $administrador->save();


            flash('Administrador creado correctamente');

            return redirect()->route('Administrador.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function show(Administrador $administrador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $administrador=Administrador::find($id);
        return view('Administrador/edit',['administrador'=>$administrador]);
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
        $administrador=Administrador::find($id);
        $this->validate($request, [
            'name' => 'required|max:255',
            'centro_id'=>'required|exists:Centro,id',
            'email' => 'required|email|max:255|unique:users',
            'dni'=> 'required|max:9',
            'password' => 'required|min:6|',
            'direccion'=> 'required',
        ]);
        $administrador->fill($request->all());
        $administrador->save();
        flash('Administrador modificado correctamente');
        return redirect()->route('Administrador.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $administrador=Administrador::find($id);
        $administrador->delete();
        flash('administrador borrado correctamente');
        return redirect()->route('Administrador.index');
    }
}
