<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    protected $fillable = ['direccion', 'telefono',];



    public function consulta()
    {
        return $this->hasMany('App\Consulta') ;
    }
    public function laboratorio()
    {
        return $this->hasMany('App\Laboratorio') ;
    }
    public function administrador()
    {
        return $this->hasMany('App\Administrador') ;
    }
    public function informe()
    {
        return $this->hasMany('App\Informe') ;
    }
}
