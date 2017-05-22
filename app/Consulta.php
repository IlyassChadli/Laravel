<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $fillable = ['especialidad','medico_id', 'centro_id'];

    public function centro()
    {
        return $this->belongsTo('App\Centro') ;
    }
    public function cita()
    {
        return $this->hasMany('App\Cita') ;
    }
    public function medico()
    {
        return $this->belongsTo('App\Medico') ;
    }
}
