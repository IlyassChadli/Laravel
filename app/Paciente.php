<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = ['name', 'surname', 'DNI','email','numeroPaciente'];


    public function user()
    {
        return $this->hasOne('App/User') ;
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
