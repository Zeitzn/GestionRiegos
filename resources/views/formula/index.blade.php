@extends('layouts.app')

@section('title','Formula')

@section('content')

<h3>Titulo</h3>



<div class="row">
<table class="table table-bordered">
    <thead>
        <tr>
            <td width="100px"></td>
            <td width="100px">ENERO</td>
            <td width="100px">FEBRERO</td>
            <td width="100px">MARZO</td>
            <td width="100px">ABRIL</td>
            <td width="100px">MAYO</td>
            <td width="100px">JUNIO</td>
            <td width="100px">JULIO</td>
            <td width="100px">AGOSTO</td>
            <td width="100px">SETIEMBRE</td>
            <td width="100px">OCTUBRE</td>
            <td width="100px">NOVIEMBRE</td>
            <td width="100px">DICIEMBRE</td>  
        </tr>
    </thead>
   
    <tbody class="small">
    
        <tr>
            <td style="font-weight:bold;">N° (dias)</td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td> 
        </tr>
        <tr>
            <td style="font-weight:bold;">Tmedia (C°)</td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td> 
        </tr>
        <tr>
            <td style="font-weight:bold;">HR (%)</td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td> 
        </tr>
        <tr style="font-weight:bold;">
            <td>TMF (F°)</td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td> 
        </tr>
        <tr>
            <td style="font-weight:bold;">CH</td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td> 
        </tr>
        <tr style="font-weight:bold;">
            <td>CE</td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td> 
        </tr>
        <tr style="font-weight:bold;">
            <td>MF</td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td> 
        </tr>
        <tr style="font-weight:bold;">
            <td>ETO (mm/mes)</td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td> 
        </tr>
        <tr style="font-weight:bold;">
            <td>ETO (mm/dia)</td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td>
            <td><input /></td> 
        </tr>
        
    </tbody>
</table>
</div>
@endsection