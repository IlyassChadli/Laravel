<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $fillable = [ 'centro_id','sueldo','user_id'];


    public function user()
    {
        return $this->belongsTo('App/User') ;
    }
    public function cita()
    {
        return $this->hasMany('App/Cita') ;
    }
    public function centro()
    {
        return $this->belongsTo('App/Centro') ;
    }
}
