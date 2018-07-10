<?php

namespace LaraDex;

use Illuminate\Database\Eloquent\Model;

class Peticion extends Model
{
    protected $table = 'peticion';
    protected $fillable = ['id_usuario'/*,'id_parcela'*/,'linea_hidrante','tipo','caudal_peticion','litros_segundo','fecha_inicio','hora_inicio','fecha_fin','hora_fin','consumo','horas','regante','linea','unidades'];
}
