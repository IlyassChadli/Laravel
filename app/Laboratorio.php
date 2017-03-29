<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
    public function personal_laboratorio()
    {
        return $this->hasMany('App\Personal_Laboratorio');
    }
    public function centro()
    {
        return $this->belongsTo('App\Centro');
    }
    public function solicitud()
    {
        return $this->hasMany('App\Solucitud');
    }
    public function informe()
    {
        return $this->hasMany('App\Informe');
    }
}
