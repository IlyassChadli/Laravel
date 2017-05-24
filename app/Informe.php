<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{
    protected $fillable = ['paciente_id','medico_id', 'cita_id','personalLab_id'];
    public function personalLaboratorio()
    {
        return $this->belongsTo('App\PersonalLaboratorio') ;
    }
    public function paciente()
    {
        return $this->belongsTo('App\Paciente') ;
    }

    public function medico()
    {
        return $this->belongsTo('App\Medico');
    }
    public function cita()
    {
        return $this->belongsTo('App\Cita');
    }
}
