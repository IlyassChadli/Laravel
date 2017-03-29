<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal_Laboratorio extends Model
{
    public function user()
    {
        return $this->hasOne('App/User') ;
    }
    public function informe()
    {
        return $this->hasMany('App/Informe') ;
    }
    public function laboratorio()
    {
        return $this->belongsTo('App/Laboratorio') ;
    }
}
