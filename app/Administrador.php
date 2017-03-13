<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $fillable = ['name', 'surname', 'DNI','email'];
}
