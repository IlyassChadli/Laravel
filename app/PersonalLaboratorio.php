<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class PersonalLaboratorio extends Model

{
    protected $fillable = [ 'facultativo', 'lab_id'];
    public function user()
    {
        return $this->belongsTo('App\User') ;
    }
    public function informe()
    {
        return $this->hasMany('App\Informe') ;
    }
    public function laboratorio()
    {
        return $this->belongsTo('App\Laboratorio') ;
    }
}
