<?php

namespace LaraDex;

use Illuminate\Database\Eloquent\Model;

class Parcela extends Model
{
    protected $table = 'parcela';
    protected $fillable = ['parcela','subparcela',
                            'superficie_catastral','superficie_riego',
                            'riego_precario','municipio',
                            'sector','id_usuario',
                            'cultivo','sup_ag',
                            'tipo_riego','codigo_catastro',
                            'superficie','amortizacion',
                            'variedad',
                            'arrendatario','pagador_agua',
                            'pagador_gastos','hidrante',
                        ];
}
