@extends('layouts.app')

@section('title','Formula')

@section('content')

<div class="row">
    <h3>CÁLCULOS DE LA EVAPOTRANSPIRACIÓN POTENCIAL</h3>
    <label>Latitud:</label> 
        <input type="text" style="width:60px" placeholder="Gr" id="grados">
        <input type="text" style="width:60px" placeholder="min" id="minutos">
        <input type="text" style="width:60px" placeholder="seg" id="segundos">
        <a onclick="calcularDecimal()" class="btn btn-primary btn-xs">Calcular MF</a>


    <div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <td></td>
                <td>ENERO</td>
                <td>FEBRERO</td>
                <td>MARZO</td>
                <td>ABRIL</td>
                <td>MAYO</td>
                <td>JUNIO</td>
                <td>JULIO</td>
                <td>AGOSTO</td>
                <td>SETIEMBRE</td>
                <td>OCTUBRE</td>
                <td>NOVIEMBRE</td>
                <td>DICIEMBRE</td>  
            </tr>
        </thead>
    
        <tbody class="small">
        
            <tr>
                <td style="font-weight:bold;">N° (dias)</td>
                <td><input class="form-control" value="31" id="enero"/></td>
                <td><input class="form-control" value="30" id="febrero"/></td>
                <td><input class="form-control" value="31" id="marzo"/></td>
                <td><input class="form-control" value="30" id="abril"/></td>
                <td><input class="form-control" value="31" id="mayo"/></td>
                <td><input class="form-control" value="30" id="junio"/></td>
                <td><input class="form-control" value="31" id="julio"/></td>
                <td><input class="form-control" value="31" id="agosto"/></td>
                <td><input class="form-control" value="30" id="setiembre"/></td>
                <td><input class="form-control" value="31" id="octubre"/></td>
                <td><input class="form-control" value="30" id="noviembre"/></td>
                <td><input class="form-control" value="31" id="diciembre"/></td> 
            </tr>
            <tr>
                <td style="font-weight:bold;">Tmedia (C°)</td>
                <td><input class="form-control" value="0" id="tmedia_enero"/></td>
                <td><input class="form-control" value="0" id="tmedia_febrero"/></td>
                <td><input class="form-control" value="0" id="tmedia_marzo"/></td>
                <td><input class="form-control" value="0" id="tmedia_abril"/></td>
                <td><input class="form-control" value="0" id="tmedia_mayo"/></td>
                <td><input class="form-control" value="0" id="tmedia_junio"/></td>
                <td><input class="form-control" value="0" id="tmedia_julio"/></td>
                <td><input class="form-control" value="0" id="tmedia_agosto"/></td>
                <td><input class="form-control" value="0" id="tmedia_setiembre"/></td>
                <td><input class="form-control" value="0" id="tmedia_octubre"/></td>
                <td><input class="form-control" value="0" id="tmedia_noviembre"/></td>
                <td><input class="form-control" value="0" id="tmedia_diciembre"/></td> 
            </tr>
            <tr>
                <td style="font-weight:bold;">HR (%)</td>
                <td><input class="form-control" value="0" id="hr_enero"/></td>
                <td><input class="form-control" value="0" id="hr_febrero"/></td>
                <td><input class="form-control" value="0" id="hr_marzo"/></td>
                <td><input class="form-control" value="0" id="hr_abril"/></td>
                <td><input class="form-control" value="0" id="hr_mayo"/></td>
                <td><input class="form-control" value="0" id="hr_junio"/></td>
                <td><input class="form-control" value="0" id="hr_julio"/></td>
                <td><input class="form-control" value="0" id="hr_agosto"/></td>
                <td><input class="form-control" value="0" id="hr_setiembre"/></td>
                <td><input class="form-control" value="0" id="hr_octubre"/></td>
                <td><input class="form-control" value="0" id="hr_noviembre"/></td>
                <td><input class="form-control" value="0" id="hr_diciembre"/></td> 
            </tr>
            <tr>
                <td style="font-weight:bold;">TMF (F°)</td>
                <td><input class="form-control" value="0" id="tmf_enero"/></td>
                <td><input class="form-control" value="0" id="tmf_febrero"/></td>
                <td><input class="form-control" value="0" id="tmf_marzo"/></td>
                <td><input class="form-control" value="0" id="tmf_abril"/></td>
                <td><input class="form-control" value="0" id="tmf_mayo"/></td>
                <td><input class="form-control" value="0" id="tmf_junio"/></td>
                <td><input class="form-control" value="0" id="tmf_julio"/></td>
                <td><input class="form-control" value="0" id="tmf_agosto"/></td>
                <td><input class="form-control" value="0" id="tmf_setiembre"/></td>
                <td><input class="form-control" value="0" id="tmf_octubre"/></td>
                <td><input class="form-control" value="0" id="tmf_noviembre"/></td>
                <td><input class="form-control" value="0" id="tmf_diciembre"/></td> 
            </tr>
            <tr>
                <td style="font-weight:bold;">CH</td>
                <td><input class="form-control" value="0" id="ch_enero"/></td>
                <td><input class="form-control" value="0" id="ch_febrero"/></td>
                <td><input class="form-control" value="0" id="ch_marzo"/></td>
                <td><input class="form-control" value="0" id="ch_abril"/></td>
                <td><input class="form-control" value="0" id="ch_mayo"/></td>
                <td><input class="form-control" value="0" id="ch_junio"/></td>
                <td><input class="form-control" value="0" id="ch_julio"/></td>
                <td><input class="form-control" value="0" id="ch_agosto"/></td>
                <td><input class="form-control" value="0" id="ch_setiembre"/></td>
                <td><input class="form-control" value="0" id="ch_octubre"/></td>
                <td><input class="form-control" value="0" id="ch_noviembre"/></td>
                <td><input class="form-control" value="0" id="ch_diciembre"/></td> 
            </tr>
            <tr>
                <td style="font-weight:bold;">CE</td>
                <td><input class="form-control" value="0" id="ce_enero"/></td>
                <td><input class="form-control" value="0" id="ce_febrero"/></td>
                <td><input class="form-control" value="0" id="ce_marzo"/></td>
                <td><input class="form-control" value="0" id="ce_abril"/></td>
                <td><input class="form-control" value="0" id="ce_mayo"/></td>
                <td><input class="form-control" value="0" id="ce_junio"/></td>
                <td><input class="form-control" value="0" id="ce_julio"/></td>
                <td><input class="form-control" value="0" id="ce_agosto"/></td>
                <td><input class="form-control" value="0" id="ce_setiembre"/></td>
                <td><input class="form-control" value="0" id="ce_octubre"/></td>
                <td><input class="form-control" value="0" id="ce_noviembre"/></td>
                <td><input class="form-control" value="0" id="ce_diciembre"/></td> 
            </tr>
            <tr>
                <td style="font-weight:bold;">MF</td>
                <td><input class="form-control" value="0" id="mf_enero"/></td>
                <td><input class="form-control" value="0" id="mf_febrero"/></td>
                <td><input class="form-control" value="0" id="mf_marzo"/></td>
                <td><input class="form-control" value="0" id="mf_abril"/></td>
                <td><input class="form-control" value="0" id="mf_mayo"/></td>
                <td><input class="form-control" value="0" id="mf_junio"/></td>
                <td><input class="form-control" value="0" id="mf_julio"/></td>
                <td><input class="form-control" value="0" id="mf_agosto"/></td>
                <td><input class="form-control" value="0" id="mf_setiembre"/></td>
                <td><input class="form-control" value="0" id="mf_octubre"/></td>
                <td><input class="form-control" value="0" id="mf_noviembre"/></td>
                <td><input class="form-control" value="0" id="mf_diciembre"/></td> 
            </tr>
            <tr>
                <td style="font-weight:bold;">ETO (mm/mes)</td>
                <td><input class="form-control" value="0" id="etomm_enero"/></td>
                <td><input class="form-control" value="0" id="etomm_febrero"/></td>
                <td><input class="form-control" value="0" id="etomm_marzo"/></td>
                <td><input class="form-control" value="0" id="etomm_abril"/></td>
                <td><input class="form-control" value="0" id="etomm_mayo"/></td>
                <td><input class="form-control" value="0" id="etomm_junio"/></td>
                <td><input class="form-control" value="0" id="etomm_julio"/></td>
                <td><input class="form-control" value="0" id="etomm_agosto"/></td>
                <td><input class="form-control" value="0" id="etomm_setiembre"/></td>
                <td><input class="form-control" value="0" id="etomm_octubre"/></td>
                <td><input class="form-control" value="0" id="etomm_noviembre"/></td>
                <td><input class="form-control" value="0" id="etomm_diciembre"/></td> 
            </tr>
            <tr>
                <td style="font-weight:bold;">ETO (mm/dia)</td>
                <td><input class="form-control" value="0" id="etomd_enero"/></td>
                <td><input class="form-control" value="0" id="etomd_febrero"/></td>
                <td><input class="form-control" value="0" id="etomd_marzo"/></td>
                <td><input class="form-control" value="0" id="etomd_abril"/></td>
                <td><input class="form-control" value="0" id="etomd_mayo"/></td>
                <td><input class="form-control" value="0" id="etomd_junio"/></td>
                <td><input class="form-control" value="0" id="etomd_julio"/></td>
                <td><input class="form-control" value="0" id="etomd_agosto"/></td>
                <td><input class="form-control" value="0" id="etomd_setiembre"/></td>
                <td><input class="form-control" value="0" id="etomd_octubre"/></td>
                <td><input class="form-control" value="0" id="etomd_noviembre"/></td>
                <td><input class="form-control" value="0" id="etomd_diciembre"/></td> 
            </tr>        
        </tbody>
    </table>
    </div>
</div>


<div class="row">
        <h3>PROGRAMACIÓN DE RIEGO</h3>
        <div class="row table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>PARÁMETRO</td>
                            <td>ENERO</td>
                            <td>FEBRERO</td>
                            <td>MARZO</td>
                            <td>ABRIL</td>
                            <td>MAYO</td>
                            <td>JUNIO</td>
                            <td>JULIO</td>
                            <td>AGOSTO</td>
                            <td>SETIEMBRE</td>
                            <td>OCTUBRE</td>
                            <td>NOVIEMBRE</td>
                            <td>DICIEMBRE</td>  
                        </tr>
                    </thead>
                
                    <tbody class="small">
                    
                        <tr>
                            <td style="font-weight:bold;">KC</td>
                            <td><input class="form-control" value="0" id="kc_enero"/></td>
                            <td><input class="form-control" value="0" id="kc_febrero"/></td>
                            <td><input class="form-control" value="0" id="kc_marzo"/></td>
                            <td><input class="form-control" value="0" id="kc_abril"/></td>
                            <td><input class="form-control" value="0" id="kc_mayo"/></td>
                            <td><input class="form-control" value="0" id="kc_junio"/></td>
                            <td><input class="form-control" value="0" id="kc_julio"/></td>
                            <td><input class="form-control" value="0" id="kc_agosto"/></td>
                            <td><input class="form-control" value="0" id="kc_setiembre"/></td>
                            <td><input class="form-control" value="0" id="kc_octubre"/></td>
                            <td><input class="form-control" value="0" id="kc_noviembre"/></td>
                            <td><input class="form-control" value="0" id="kc_diciembre"/></td> 
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">ETO</td>
                            <td><input class="form-control" value="0" id="eto_enero"/></td>
                            <td><input class="form-control" value="0" id="eto_febrero"/></td>
                            <td><input class="form-control" value="0" id="eto_marzo"/></td>
                            <td><input class="form-control" value="0" id="eto_abril"/></td>
                            <td><input class="form-control" value="0" id="eto_mayo"/></td>
                            <td><input class="form-control" value="0" id="eto_junio"/></td>
                            <td><input class="form-control" value="0" id="eto_julio"/></td>
                            <td><input class="form-control" value="0" id="eto_agosto"/></td>
                            <td><input class="form-control" value="0" id="eto_setiembre"/></td>
                            <td><input class="form-control" value="0" id="eto_octubre"/></td>
                            <td><input class="form-control" value="0" id="eto_noviembre"/></td>
                            <td><input class="form-control" value="0" id="eto_diciembre"/></td> 
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">ETR</td>
                            <td><input class="form-control" value="0" id="etr_enero"/></td>
                            <td><input class="form-control" value="0" id="etr_febrero"/></td>
                            <td><input class="form-control" value="0" id="etr_marzo"/></td>
                            <td><input class="form-control" value="0" id="etr_abril"/></td>
                            <td><input class="form-control" value="0" id="etr_mayo"/></td>
                            <td><input class="form-control" value="0" id="etr_junio"/></td>
                            <td><input class="form-control" value="0" id="etr_julio"/></td>
                            <td><input class="form-control" value="0" id="etr_agosto"/></td>
                            <td><input class="form-control" value="0" id="etr_setiembre"/></td>
                            <td><input class="form-control" value="0" id="etr_octubre"/></td>
                            <td><input class="form-control" value="0" id="etr_noviembre"/></td>
                            <td><input class="form-control" value="0" id="etr_diciembre"/></td> 
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">P. EFECTIVA</td>
                            <td><input class="form-control" value="0" id="pef_enero"/></td>
                            <td><input class="form-control" value="0" id="pef_febrero"/></td>
                            <td><input class="form-control" value="0" id="pef_marzo"/></td>
                            <td><input class="form-control" value="0" id="pef_abril"/></td>
                            <td><input class="form-control" value="0" id="pef_mayo"/></td>
                            <td><input class="form-control" value="0" id="pef_junio"/></td>
                            <td><input class="form-control" value="0" id="pef_julio"/></td>
                            <td><input class="form-control" value="0" id="pef_agosto"/></td>
                            <td><input class="form-control" value="0" id="pef_setiembre"/></td>
                            <td><input class="form-control" value="0" id="pef_octubre"/></td>
                            <td><input class="form-control" value="0" id="pef_noviembre"/></td>
                            <td><input class="form-control" value="0" id="pef_diciembre"/></td> 
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">DUN</td>
                            <td><input class="form-control" value="0" id="dun_enero"/></td>
                            <td><input class="form-control" value="0" id="dun_febrero"/></td>
                            <td><input class="form-control" value="0" id="dun_marzo"/></td>
                            <td><input class="form-control" value="0" id="dun_abril"/></td>
                            <td><input class="form-control" value="0" id="dun_mayo"/></td>
                            <td><input class="form-control" value="0" id="dun_junio"/></td>
                            <td><input class="form-control" value="0" id="dun_julio"/></td>
                            <td><input class="form-control" value="0" id="dun_agosto"/></td>
                            <td><input class="form-control" value="0" id="dun_setiembre"/></td>
                            <td><input class="form-control" value="0" id="dun_octubre"/></td>
                            <td><input class="form-control" value="0" id="dun_noviembre"/></td>
                            <td><input class="form-control" value="0" id="dun_diciembre"/></td> 
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">Eficiencia</td>
                            <td><input class="form-control" value="0" id="efi_enero"/></td>
                            <td><input class="form-control" value="0" id="efi_febrero"/></td>
                            <td><input class="form-control" value="0" id="efi_marzo"/></td>
                            <td><input class="form-control" value="0" id="efi_abril"/></td>
                            <td><input class="form-control" value="0" id="efi_mayo"/></td>
                            <td><input class="form-control" value="0" id="efi_junio"/></td>
                            <td><input class="form-control" value="0" id="efi_julio"/></td>
                            <td><input class="form-control" value="0" id="efi_agosto"/></td>
                            <td><input class="form-control" value="0" id="efi_setiembre"/></td>
                            <td><input class="form-control" value="0" id="efi_octubre"/></td>
                            <td><input class="form-control" value="0" id="efi_noviembre"/></td>
                            <td><input class="form-control" value="0" id="efi_diciembre"/></td> 
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">DUB</td>
                            <td><input class="form-control" value="0" id="dub_enero"/></td>
                            <td><input class="form-control" value="0" id="dub_febrero"/></td>
                            <td><input class="form-control" value="0" id="dub_marzo"/></td>
                            <td><input class="form-control" value="0" id="dub_abril"/></td>
                            <td><input class="form-control" value="0" id="dub_mayo"/></td>
                            <td><input class="form-control" value="0" id="dub_junio"/></td>
                            <td><input class="form-control" value="0" id="dub_julio"/></td>
                            <td><input class="form-control" value="0" id="dub_agosto"/></td>
                            <td><input class="form-control" value="0" id="dub_setiembre"/></td>
                            <td><input class="form-control" value="0" id="dub_octubre"/></td>
                            <td><input class="form-control" value="0" id="dub_noviembre"/></td>
                            <td><input class="form-control" value="0" id="dub_diciembre"/></td> 
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">PROF. RAIZ</td>
                            <td><input class="form-control" value="0" id="raiz_enero"/></td>
                            <td><input class="form-control" value="0" id="raiz_febrero"/></td>
                            <td><input class="form-control" value="0" id="raiz_marzo"/></td>
                            <td><input class="form-control" value="0" id="raiz_abril"/></td>
                            <td><input class="form-control" value="0" id="raiz_mayo"/></td>
                            <td><input class="form-control" value="0" id="raiz_junio"/></td>
                            <td><input class="form-control" value="0" id="raiz_julio"/></td>
                            <td><input class="form-control" value="0" id="raiz_agosto"/></td>
                            <td><input class="form-control" value="0" id="raiz_setiembre"/></td>
                            <td><input class="form-control" value="0" id="raiz_octubre"/></td>
                            <td><input class="form-control" value="0" id="raiz_noviembre"/></td>
                            <td><input class="form-control" value="0" id="raiz_diciembre"/></td> 
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">DOSIS BRUTA DE RIEGO</td>
                            <td><input class="form-control" value="0" id="dosis_enero"/></td>
                            <td><input class="form-control" value="0" id="dosis_febrero"/></td>
                            <td><input class="form-control" value="0" id="dosis_marzo"/></td>
                            <td><input class="form-control" value="0" id="dosis_abril"/></td>
                            <td><input class="form-control" value="0" id="dosis_mayo"/></td>
                            <td><input class="form-control" value="0" id="dosis_junio"/></td>
                            <td><input class="form-control" value="0" id="dosis_julio"/></td>
                            <td><input class="form-control" value="0" id="dosis_agosto"/></td>
                            <td><input class="form-control" value="0" id="dosis_setiembre"/></td>
                            <td><input class="form-control" value="0" id="dosis_octubre"/></td>
                            <td><input class="form-control" value="0" id="dosis_noviembre"/></td>
                            <td><input class="form-control" value="0" id="dosis_diciembre"/></td> 
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">CONSUMO DIARIO</td>
                            <td><input class="form-control" value="0" id="consumo_enero"/></td>
                            <td><input class="form-control" value="0" id="consumo_febrero"/></td>
                            <td><input class="form-control" value="0" id="consumo_marzo"/></td>
                            <td><input class="form-control" value="0" id="consumo_abril"/></td>
                            <td><input class="form-control" value="0" id="consumo_mayo"/></td>
                            <td><input class="form-control" value="0" id="consumo_junio"/></td>
                            <td><input class="form-control" value="0" id="consumo_julio"/></td>
                            <td><input class="form-control" value="0" id="consumo_agosto"/></td>
                            <td><input class="form-control" value="0" id="consumo_setiembre"/></td>
                            <td><input class="form-control" value="0" id="consumo_octubre"/></td>
                            <td><input class="form-control" value="0" id="consumo_noviembre"/></td>
                            <td><input class="form-control" value="0" id="consumo_diciembre"/></td> 
                        </tr>   
                        <tr>
                            <td style="font-weight:bold;">INTERVALO DE RIEGO</td>
                            <td><input class="form-control" value="0" id="intervalo_enero"/></td>
                            <td><input class="form-control" value="0" id="intervalo_febrero"/></td>
                            <td><input class="form-control" value="0" id="intervalo_marzo"/></td>
                            <td><input class="form-control" value="0" id="intervalo_abril"/></td>
                            <td><input class="form-control" value="0" id="intervalo_mayo"/></td>
                            <td><input class="form-control" value="0" id="intervalo_junio"/></td>
                            <td><input class="form-control" value="0" id="intervalo_julio"/></td>
                            <td><input class="form-control" value="0" id="intervalo_agosto"/></td>
                            <td><input class="form-control" value="0" id="intervalo_setiembre"/></td>
                            <td><input class="form-control" value="0" id="intervalo_octubre"/></td>
                            <td><input class="form-control" value="0" id="intervalo_noviembre"/></td>
                            <td><input class="form-control" value="0" id="intervalo_diciembre"/></td> 
                        </tr>
                            <tr>
                            <td style="font-weight:bold;">N° DE RIEGOS</td>
                            <td><input class="form-control" value="0" id="riegos_enero"/></td>
                            <td><input class="form-control" value="0" id="riegos_febrero"/></td>
                            <td><input class="form-control" value="0" id="riegos_marzo"/></td>
                            <td><input class="form-control" value="0" id="riegos_abril"/></td>
                            <td><input class="form-control" value="0" id="riegos_mayo"/></td>
                            <td><input class="form-control" value="0" id="riegos_junio"/></td>
                            <td><input class="form-control" value="0" id="riegos_julio"/></td>
                            <td><input class="form-control" value="0" id="riegos_agosto"/></td>
                            <td><input class="form-control" value="0" id="riegos_setiembre"/></td>
                            <td><input class="form-control" value="0" id="riegos_octubre"/></td>
                            <td><input class="form-control" value="0" id="riegos_noviembre"/></td>
                            <td><input class="form-control" value="0" id="riegos_diciembre"/></td> 
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">VOL. AGUA APORTADA</td>
                            <td><input class="form-control" value="0" id="volumen_enero"/></td>
                            <td><input class="form-control" value="0" id="volumen_febrero"/></td>
                            <td><input class="form-control" value="0" id="volumen_marzo"/></td>
                            <td><input class="form-control" value="0" id="volumen_abril"/></td>
                            <td><input class="form-control" value="0" id="volumen_mayo"/></td>
                            <td><input class="form-control" value="0" id="volumen_junio"/></td>
                            <td><input class="form-control" value="0" id="volumen_julio"/></td>
                            <td><input class="form-control" value="0" id="volumen_agosto"/></td>
                            <td><input class="form-control" value="0" id="volumen_setiembre"/></td>
                            <td><input class="form-control" value="0" id="volumen_octubre"/></td>
                            <td><input class="form-control" value="0" id="volumen_noviembre"/></td>
                            <td><input class="form-control" value="0" id="volumen_diciembre"/></td> 
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">BALANCE ENTRE DEMANDA Y APORTACIÓN</td>
                            <td><input class="form-control" value="0" id="balance_enero"/></td>
                            <td><input class="form-control" value="0" id="balance_febrero"/></td>
                            <td><input class="form-control" value="0" id="balance_marzo"/></td>
                            <td><input class="form-control" value="0" id="balance_abril"/></td>
                            <td><input class="form-control" value="0" id="balance_mayo"/></td>
                            <td><input class="form-control" value="0" id="balance_junio"/></td>
                            <td><input class="form-control" value="0" id="balance_julio"/></td>
                            <td><input class="form-control" value="0" id="balance_agosto"/></td>
                            <td><input class="form-control" value="0" id="balance_setiembre"/></td>
                            <td><input class="form-control" value="0" id="balance_octubre"/></td>
                            <td><input class="form-control" value="0" id="balance_noviembre"/></td>
                            <td><input class="form-control" value="0" id="balance_diciembre"/></td> 
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">AJUSTE DEL N° DE RIEGOS</td>
                            <td><input class="form-control" value="1" id="ajuste_enero"/></td>
                            <td><input class="form-control" value="1" id="ajuste_febrero"/></td>
                            <td><input class="form-control" value="1" id="ajuste_marzo"/></td>
                            <td><input class="form-control" value="1" id="ajuste_abril"/></td>
                            <td><input class="form-control" value="1" id="ajuste_mayo"/></td>
                            <td><input class="form-control" value="1" id="ajuste_junio"/></td>
                            <td><input class="form-control" value="1" id="ajuste_julio"/></td>
                            <td><input class="form-control" value="1" id="ajuste_agosto"/></td>
                            <td><input class="form-control" value="1" id="ajuste_setiembre"/></td>
                            <td><input class="form-control" value="1" id="ajuste_octubre"/></td>
                            <td><input class="form-control" value="1" id="ajuste_noviembre"/></td>
                            <td><input class="form-control" value="1" id="ajuste_diciembre"/></td> 
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">VOL. FINAL APORTADO CONRREGIDO</td>
                            <td><input class="form-control" value="0" id="final_enero"/></td>
                            <td><input class="form-control" value="0" id="final_febrero"/></td>
                            <td><input class="form-control" value="0" id="final_marzo"/></td>
                            <td><input class="form-control" value="0" id="final_abril"/></td>
                            <td><input class="form-control" value="0" id="final_mayo"/></td>
                            <td><input class="form-control" value="0" id="final_junio"/></td>
                            <td><input class="form-control" value="0" id="final_julio"/></td>
                            <td><input class="form-control" value="0" id="final_agosto"/></td>
                            <td><input class="form-control" value="0" id="final_setiembre"/></td>
                            <td><input class="form-control" value="0" id="final_octubre"/></td>
                            <td><input class="form-control" value="0" id="final_noviembre"/></td>
                            <td><input class="form-control" value="0" id="final_diciembre"/></td> 
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">FECHAS PROBABLES DE RIEGO</td>
                            <td><input class="form-control" value="0" id="fechas_enero"/></td>
                            <td><input class="form-control" value="0" id="fechas_febrero"/></td>
                            <td><input class="form-control" value="0" id="fechas_marzo"/></td>
                            <td><input class="form-control" value="0" id="fechas_abril"/></td>
                            <td><input class="form-control" value="0" id="fechas_mayo"/></td>
                            <td><input class="form-control" value="0" id="fechas_junio"/></td>
                            <td><input class="form-control" value="0" id="fechas_julio"/></td>
                            <td><input class="form-control" value="0" id="fechas_agosto"/></td>
                            <td><input class="form-control" value="0" id="fechas_setiembre"/></td>
                            <td><input class="form-control" value="0" id="fechas_octubre"/></td>
                            <td><input class="form-control" value="0" id="fechas_noviembre"/></td>
                            <td><input class="form-control" value="0" id="fechas_diciembre"/></td> 
                        </tr>     
                    </tbody>
                </table>
                </div>
</div>



<script>
    //Elevación
    var e=3990;
    
function calculosMes(mes){
    $("#tmedia_"+mes).on("change",function(){
        var tmedia=$("#tmedia_"+mes).val();
        var tmf=(9/5)*tmedia+32;

        $("#tmf_"+mes).val(tmf);
        etomm();
        etomd();
    })

    $("#hr_"+mes).on("change",function(){
        var hr=$("#hr_"+mes).val();        
        var ch;

        if(hr>=64){
            ch=0.166*Math.sqrt((100-hr));
            $("#ch_"+mes).val(ch);
        }else{
            $("#ch_"+mes).val(1);
        }
        etomm();
        etomd();
    })

    //------CE-------//
    var ce=1+0.04*(e/2000);
    $("#ce_"+mes).val(ce);
    etomm();
    etomd();
    //------END CE-------//

    //------ETO MM-------//
    function etomm(){
        var mf=$("#mf_"+mes).val();
        var ce=$("#ce_"+mes).val();
        var ch=$("#ch_"+mes).val();
        var tmf=$("#tmf_"+mes).val();
        var etomm=parseFloat(mf)*parseFloat(ce)*parseFloat(ch)*parseFloat(tmf);
        
        $("#etomm_"+mes).val(etomm);
    }    
    //------END MM-------//

    //------ETO MD-------//
    function etomd(){
        var etomm=$("#etomm_"+mes).val();
        var dias=$("#"+mes).val();
       
       
        $("#etomd_"+mes).val(etomm/dias);
        $("#eto_"+mes).val(etomm/dias);
    }    
    //------END MD-------//

    
}

{{--  var enero="enero";  --}}
calculosMes("enero");
calculosMes("febrero");
calculosMes("marzo");
calculosMes("abril");
calculosMes("mayo");
calculosMes("junio");
calculosMes("julio");
calculosMes("agosto");
calculosMes("setiembre");
calculosMes("octubre");
calculosMes("noviembre");
calculosMes("diciembre");



/**
 * Convierte una coordenada en formato grados-minutos-segundos a su
 * correspondiente versión en formato decimal.
 *
 * @param	Float	Grados de la coordenada.
 * @param	Float	Minutos de la coordenada.
 * @param	Float	Segundos de la coordenada.
 * @param	String	Sentido de la coordenada {Coordenada.NORTE,Coordenada.SUR, Coordenada.ORIENTE,Coordenada.OCCIDENTE}
 * @return	Array	['decimal', 'valor'].
 */

 function gms2dec(grados, minutos, segundos, direccion)
 {
     if(direccion)
     {
         signo     = (direccion.toLowerCase() == 'w' ||
                      direccion.toLowerCase() == 's') ?
                     -1 : 1;
         direccion = (direccion.toLowerCase() == 'w' ||
                      direccion.toLowerCase() == 's' ||
                      direccion.toLowerCase() == 'n' ||
                      direccion.toLowerCase() == 'e') ?
                     direccion.toLowerCase() : '';
     }
     else
     {
         signo     = (grados < 0) ? -1 : 1;
         direccion = '';
     }
 
     dec = Math.round((Math.abs(grados) + ((minutos * 60) + segundos) / 3600) * 1000000) / 1000000;
 
     if(isNaN(direccion) || direccion == '')
         dec = dec * signo;
 
     return {
         'decimal': dec,
         'valor'  : dec + "u00b0" + ((isNaN(direccion) || direccion == '') ? (' ' + direccion) : '')
     };
 }

 function calcularDecimal(){
   var xg = parseFloat($("#grados").val());
 var xm = parseFloat($("#minutos").val());
 var xs = parseFloat($("#segundos").val());
 
 r2 = gms2dec(xg, xm, xs, 'Coordenada.NORTE');

 var decimal=r2.valor;
var decimal_final=decimal.substr(0,5);
var inferior=Math.floor(decimal_final);
var superior=Math.ceil(decimal_final);

//console.log(inferior,superior);
 
 //alert('Conversion gms2dec = ' + decimal_final);

 $.ajax({
     method:'GET',
     url:'/auxiliar/datosFormula/'+inferior+"/"+superior,
     success:function(data){
        //ENERO
        var min=data[0].numero;
        var max=data[1].numero;
        var minEnero=data[0].enero;
        var maxEnero=data[1].enero;
        var mf_enero=minEnero-((minEnero-maxEnero)*(min-decimal_final))/(min-max);
        $("#mf_enero").val(mf_enero/1000);
        //febrero
        var min=data[0].numero;
        var max=data[1].numero;
        var minfebrero=data[0].febrero;
        var maxfebrero=data[1].febrero;
        var mf_febrero=minfebrero-((minfebrero-maxfebrero)*(min-decimal_final))/(min-max);
        $("#mf_febrero").val(mf_febrero/1000);
        //marzo
        var min=data[0].numero;
        var max=data[1].numero;
        var minmarzo=data[0].marzo;
        var maxmarzo=data[1].marzo;
        var mf_marzo=minmarzo-((minmarzo-maxmarzo)*(min-decimal_final))/(min-max);
        $("#mf_marzo").val(mf_marzo/1000);
        //abril
        var min=data[0].numero;
        var max=data[1].numero;
        var minabril=data[0].abril;
        var maxabril=data[1].abril;
        var mf_abril=minabril-((minabril-maxabril)*(min-decimal_final))/(min-max);
        $("#mf_abril").val(mf_abril/1000);
        //mayo
        var min=data[0].numero;
        var max=data[1].numero;
        var minmayo=data[0].mayo;
        var maxmayo=data[1].mayo;
        var mf_mayo=minmayo-((minmayo-maxmayo)*(min-decimal_final))/(min-max);
        $("#mf_mayo").val(mf_mayo/1000);
        //junio
        var min=data[0].numero;
        var max=data[1].numero;
        var minjunio=data[0].junio;
        var maxjunio=data[1].junio;
        var mf_junio=minjunio-((minjunio-maxjunio)*(min-decimal_final))/(min-max);
        $("#mf_junio").val(mf_junio/1000);
        //julio
        var min=data[0].numero;
        var max=data[1].numero;
        var minjulio=data[0].julio;
        var maxjulio=data[1].julio;
        var mf_julio=minjulio-((minjulio-maxjulio)*(min-decimal_final))/(min-max);
        $("#mf_julio").val(mf_julio/1000);
        //AGOSTO
        var min=data[0].numero;
        var max=data[1].numero;
        var minagosto=data[0].agosto;
        var maxagosto=data[1].agosto;
        var mf_agosto=minagosto-((minagosto-maxagosto)*(min-decimal_final))/(min-max);
        $("#mf_agosto").val(mf_agosto/1000);
        //SETIEMBRE
        var min=data[0].numero;
        var max=data[1].numero;
        var minsetiembre=data[0].setiembre;
        var maxsetiembre=data[1].setiembre;
        var mf_setiembre=minsetiembre-((minsetiembre-maxsetiembre)*(min-decimal_final))/(min-max);
        $("#mf_setiembre").val(mf_setiembre/1000);
        //OCTUBRE
        var min=data[0].numero;
        var max=data[1].numero;
        var minoctubre=data[0].octubre;
        var maxoctubre=data[1].octubre;
        var mf_octubre=minoctubre-((minoctubre-maxoctubre)*(min-decimal_final))/(min-max);
        $("#mf_octubre").val(mf_octubre/1000);
        //NOVIEMBRE
        var min=data[0].numero;
        var max=data[1].numero;
        var minnoviembre=data[0].noviembre;
        var maxnoviembre=data[1].noviembre;
        var mf_noviembre=minnoviembre-((minnoviembre-maxnoviembre)*(min-decimal_final))/(min-max);
        $("#mf_noviembre").val(mf_noviembre/1000);
        //DICIEMBRE
        var min=data[0].numero;
        var max=data[1].numero;
        var mindiciembre=data[0].diciembre;
        var maxdiciembre=data[1].diciembre;
        var mf_diciembre=mindiciembre-((mindiciembre-maxdiciembre)*(min-decimal_final))/(min-max);
        $("#mf_diciembre").val(mf_diciembre/1000);
     }
 })
 }
 
 


//PROGRAMACION DE RIEGOOOOOOOOOOOO
function programacionMes(mes){

    $("#kc_"+mes).on("change",function(){
        var eto=$("#eto_"+mes).val();
        var kc=$("#kc_"+mes).val();
        $("#etr_"+mes).val(eto*kc);
    })

    $("#pef_"+mes).on("change",function(){
        var etr=$("#etr_"+mes).val();
        var pef=$("#pef_"+mes).val();
        $("#dun_"+mes).val(etr-pef);
    })

    $("#efi_"+mes).on("change",function(){
        var dun=$("#dun_"+mes).val();
        var ef=$("#efi_"+mes).val();
        $("#dub_"+mes).val(dun/ef);
        $("#dosis_"+mes).val(dun*ef);

        var dub=$("#dub_"+mes).val();
        var dias=$("#"+mes).val();

        $("#consumo_"+mes).val(dub/dias);
        var consumo=$("#consumo_"+mes).val();


        $("#intervalo_"+mes).val(dub/consumo);
        var intervalo=$("#intervalo_"+mes).val();

        $("#riegos_"+mes).val(dias/intervalo);
        var dbr=$("#dosis_"+mes).val();
        var riegos=$("#riegos_"+mes).val();

        $("#volumen_"+mes).val(dbr*riegos);

        var volumen=$("#volumen_"+mes).val();

        $("#balance_"+mes).val(dub-volumen);
    })

}

programacionMes("enero");
programacionMes("febrero");
programacionMes("marzo");
programacionMes("abril");
programacionMes("mayo");
programacionMes("junio");
programacionMes("julio");
programacionMes("agosto");
programacionMes("setiembre");
programacionMes("octubre");
programacionMes("noviembre");
programacionMes("diciembre");




</script>
@endsection