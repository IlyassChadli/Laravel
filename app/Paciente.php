<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = ['name', 'surname', 'dni','email','cita_id'];


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
