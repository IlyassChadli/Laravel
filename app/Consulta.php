<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $fillable = ['cosulta_id', 'centro_id', 'especialidad'];
}
