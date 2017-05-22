<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = ['user_id','numPaciente'];


    public function user()
    {
        return $this->belongsTo('App/User') ;
    }

    public function informe()
    {
        return $this->hasMany('App/Informe') ;
    }
    public function cita()
    {
        return $this->hasMany('App/Cita') ;
    }

}
