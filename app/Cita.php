<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $fillable = ['fecha_hora', 'medico_id', 'paciente_id','consulta_id','administrador_id',];

    public function medico()
    {
        return $this->belongsTo('App\Medico');
    }

    public function paciente()
    {
        return $this->belongsTo('App\Paciente');
    }
    public function administrador()
{
    return $this->belongsTo('App\Administrador');

}
    public function consulta()
    {
        return $this->belongsTo('App\Consulta');

    }
    public function solicitud()
    {
        return $this->has('App\Solicitud');

    }
}
