<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $fillable = [ 'dni'];


    public function user()
    {
        return $this->belongsTo('App/User') ;
    }
    public function cita()
    {
        return $this->hasMany('App/Cita') ;
    }
}
