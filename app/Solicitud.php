<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{

    public function medico(){
        return $this->belongsTo('App\Medico');
    }
    public function laboratorio()
    {
        return $this->belongsTo('App\Laboratorio');
    }
    public function cita()
    {
    return $this->belongsTo('App\Cita');
    }

}
