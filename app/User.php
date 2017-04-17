<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','tipo_user'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function getTipoUser(){

        return $this->tipo_user;
    }
    public function paciente(){
        return $this->hasMany('App\Paciente');

    }
    public function medico(){
        return $this->hasMany('App\Medico');
    }
    public function administrador(){
        return $this->hasMany('App\Administrador');
    }
    public function personalDeLab(){
        return $this->hasMany('App\Personal_Laboratorio');
    }

}
