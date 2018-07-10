<?php

namespace LaraDex;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $fillable = ['id_contable','nombre','apellidos','dni','telefono','direccion','poblacion','provincia','cp'];

}
