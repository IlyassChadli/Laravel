<?php
/**
 * Created by PhpStorm.
 * User: Ilyass
 * Date: 22/05/2017
 * Time: 18:27
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitud;
use App\Laboratorio;
class SolicitudController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $solicitudes = Solicitud::all();

        return view('Solicitud/index',['solicitudes'=>$solicitudes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $solicitudes = Solicitud::all()->pluck('id');

        return view('Solicitud/create',['solicitudes'=>$solicitudes]);

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
            'medico_id' => 'required|',
            'lab_id' => 'required|',
            'cita_id' => 'required|',
        ]);


        $solicitud = new Solicitud($request->all());
        $solicitud->save();

        // return redirect('especialidades');

        flash('Solicitud creada correctamente');

        return redirect()->route('Solicitud.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $solicitud = Solicitud::find($id);

        return view('Solicitud/edit',['solicitud'=> $solicitud ]);
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
        $this->validate($request, [
            'medico_id' => 'required|',
            'cita_id' => 'required|',
            'lab_id' => 'required|',
        ]);

        $solicitud = Solicitud::find($id);
        $solicitud->fill($request->all());

        $solicitud->save();

        flash('Solicitud modificado correctamente');

        return redirect()->route('Solicitud.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $solicitud = Solicitud::find($id);
        $solicitud->delete();
        flash('Solicitud borrado correctamente');

        return redirect()->route('Solicitud.index');
    }
}
