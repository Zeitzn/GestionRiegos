<?php

namespace LaraDex;

use Illuminate\Database\Eloquent\Model;

class Agua extends Model
{
    protected $table = 'agua';
    protected $fillable = ['tipo','coste_agricola','coste_ganadero','coste_urbano','coste_industrial'];

    
}
