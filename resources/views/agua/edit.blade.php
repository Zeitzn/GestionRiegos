@extends('layouts.app')

@section('title','Editar datos de Tipo de Agua')

@section('content')
<div class="row small">

    <!-- <form method="PUT" action="/comunidad/update"> -->
    {!! Form::model($agua, ['method'=>'PUT','route'=>['agua.update', $agua->id]])!!}
    
    @csrf
        <!-- <div class="col-md-8 form-group">
            <label>Cód. Tipo Agua</label>
            <input required type="text" class="form-control" name="id">
        </div> -->
        <div class="col-md-12">
            <div class="col-md-4 form-group">
                <label>Tipo Agua</label>
                <input required type="text" class="form-control" name="tipo" value="{{$agua->tipo}}">
            </div>
            <div class="col-md-2 form-group">
                <label>Coste Agrícola</label>
                <input required type="text" class="form-control" name="coste_agricola" value="{{$agua->coste_agricola}}">
            </div>
            <div class="col-md-2 form-group">
                <label>Coste Ganadero</label>
                <input required type="text" class="form-control" name="coste_ganadero" value="{{$agua->coste_ganadero}}">
            </div>
            <div class="col-md-2">
                <label>Coste Urbano</label>
                <input required type="text" class="form-control" name="coste_urbano" value="{{$agua->coste_urbano}}">
            </div>
            <div class="col-md-2">
                <label>Coste Industrial</label>
                <input required type="text" class="form-control" name="coste_industrial" value="{{$agua->coste_industrial}}">
            </div>
        </div>
        
        
        <div class="col-xs-1">    
               <br>
            <input type="submit" class="btn btn-success btn-xs" value="Guardar">
        </div>
        <div class="col-xs-1">
            <br>
            <a href="/agua" class="btn btn-danger btn-xs" >Cancelar</a>
        </div>
        
    <!-- </form> -->
    {!! Form::close() !!}
</div>


@endsection