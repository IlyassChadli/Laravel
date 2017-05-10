<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Medico extends Model
{

    protected $fillable = [ 'dni','consulta_id','user_id','numColegiado'];




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
        return $this->hasMany('App/Solucitud') ;
    }
    public function cita()
    {
        return $this->hasMany('App/Cita') ;
    }
}
