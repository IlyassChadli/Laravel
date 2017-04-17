<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $fillable = [ 'DNI'];


    public function user()
    {
        return $this->belongsTo('App/User') ;
    }
    public function cita()
    {
        return $this->hasMany('App/Cita') ;
    }
}
