<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    protected $fillable = ['Localizacion', 'Telefono','email'];



    public function consulta()
    {
        return $this->hasMany('App/Consulta') ;
    }
    public function laboratorio()
    {
        return $this->hasMany('App/Laboratorio') ;
    }
}
