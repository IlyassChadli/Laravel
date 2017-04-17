<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{

    protected $fillable = [ 'dni','consulta_id', 'especialidad'];




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
        return $this->belongsTo('App/User') ;
    }
    public function solicitud()
    {
        return $this->hasOne('App/Solucitud') ;
    }
    public function cita()
    {
        return $this->hasMany('App/Cita') ;
    }
}
