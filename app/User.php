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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function paciente(){
        return $this->belongsTo('App\Paciente');

    }
    public function medico(){
        return $this->belongsTo('App\Medico');
    }
    public function administrador(){
        return $this->belongsTo('App\Administrador');
    }
    public function personalDeLab(){
        return $this->belongsTo('App\Personal_Laboratorio');
    }

}
