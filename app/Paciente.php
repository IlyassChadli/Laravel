<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Paciente extends Model
{
    protected $fillable = ['numPaciente'];


    public function user()
    {
        return $this->belongsTo('App\User') ;
    }

    public function informe()
    {
        return $this->hasMany('App\Informe') ;
    }
    public function cita()
    {
        return $this->hasMany('App\Cita') ;
    }

}
