<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{
    protected $fillable = ['validado','paciente_id','medico_id', 'lab_id','cita_id','resultado'];
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
    public function centro()
    {
        return $this->belongsTo('App\Laboratorio');
    }
}
