<?php

namespace App\Http\Controllers;

use App\Medico;
use Illuminate\Http\Request;
use League\Flysystem\Exception;
use App\User;
use App\Consulta;

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

        return view('Medico/index',['medicos'=>$medicos]);
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
            'numColegiado'=>'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'dni'=> 'required|max:9',
            'password' => 'required|min:6|',
            'direccion'=> 'required',
            'consulta_id'=>'required',
        ]);

            $user = new User($request->all());
            $user->password = bcrypt($user->password);
            $user->save();
            $medico = new Medico($request->all());

            $medico->user_id = $user->id;

            $medico->save();


            flash('Médico creado correctamente');

            return redirect()->route('Medico.index');




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
        $medico=Medico::find($id);
        return view('Medico/edit',['medico'=>$medico]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $medico=Medico::find($id);
        $this->validate($request, [   'name' => 'required|max:255',
            'numColegiado'=>'required|max:255',

            'dni'=> 'required|max:9',

            'direccion'=> 'required',
            'consulta_id'=>'required',
        ]);
        $user=User::find($medico->user_id);
        $user->fill($request->all());
        $medico->fill($request->all());
        $user->save();
        $medico->save();
        flash('Médico modificado correctamente');
        return redirect()->route('Medico.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medico=Medico::find($id);
        $user=User::find($medico->user_id);
        $medico->delete();
        $user->delete();
        flash('Médico borrado correctamente');
        return redirect()->route('Medico.index');
    }
}
