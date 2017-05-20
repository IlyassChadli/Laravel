<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalLaboratorio extends Model

{
    protected $fillable = [ 'DNI', 'laboratorio_id'];
    public function user()
    {
        return $this->belongsTo('App/User') ;
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
