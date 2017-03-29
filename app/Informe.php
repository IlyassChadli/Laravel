<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{
    public function personal_Laboratorio()
    {
        return $this->belongsTo('App/Personal_Laboratorio') ;
    }
    public function paciente()
    {
        return $this->belongsTo('App/Paciente') ;
    }
    public function laboratorio()
    {
        return $this->belongsTo('App\Laboratorio');
    }
}
