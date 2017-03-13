<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $fillable = [ 'DNI','consulta_id','numeroColegiado', 'especialidad'];


    public function getNmroColegiado()
    {
        return $this->numeroColegiado;
    }

    public function getConsulta()
    {
        return $this->hasOneconsulta;
    }

    public function getFullNameAttribute()
    {
        return $this->name .' '.$this->surname;
    }
}
