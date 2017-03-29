<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{

    protected $fillable = [ 'DNI','consulta_id', 'especialidad'];




    public function getFullNameAttribute()
    {
        return $this->name .' '.$this->surname;
    }

    public function consulta()
    {
        return $this->hasOne('App/Consulta') ;
    }
    public function user()
    {
        return $this->hasOne('App/User') ;
    }
    public function solicitud()
    {
        return $this->hasMany('App/Solucitud') ;
    }
}
