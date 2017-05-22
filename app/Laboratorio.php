<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
    protected $fillable = ['centro_id','solicitud_id','PersonalLab_id'];
    public function personal_laboratorio()
    {
        return $this->hasMany('App\Personal_Laboratorio');
    }
    public function centro()
    {
        return $this->belongsTo('App\Centro');
    }
    public function solicitud()
    {
        return $this->hasMany('App\Solucitud');
    }

}
