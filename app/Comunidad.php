<?php

namespace LaraDex;

use Illuminate\Database\Eloquent\Model;

class Comunidad extends Model
{
    protected $table = 'comunidads';
    protected $fillable = ['nombre','dni','domicilio','telefono','localidad','provincia','zona','regadio'];
}
