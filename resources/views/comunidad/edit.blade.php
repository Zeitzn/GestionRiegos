@extends('layouts.app')

@section('title','Editar datos de Comunidad')

@section('content')
<div class="row small">

    <!-- <form method="PUT" action="/comunidad/update"> -->
    {!! Form::model($comunidad, ['method'=>'PUT','route'=>['comunidad.update', $comunidad->id]])!!}
    
    @csrf

    <input required type="hidden" name="id" value="{{$comunidad->id}}">
        <div class="col-md-8 form-group">
            <label>Nombre Comunidad</label>
            <input required type="text" class="form-control" name="nombre" value="{{$comunidad->nombre}}">
            
            
        </div>
        <div class="col-md-4 form-group">
            <label>DNI</label>
            <input required type="number" class="form-control" name="dni" value="{{$comunidad->dni}}">
        </div>
        <div class="col-md-8 form-group">
            <label>Domicilio Comunidad</label>
            <input required type="text" class="form-control" name="domicilio" value="{{$comunidad->domicilio}}">
        </div>
        <div class="col-md-4 form-group">
            <label>Teléfono</label>
            <input required type="text" class="form-control" name="telefono" value="{{$comunidad->telefono}}">
        </div>
        <div class="col-md-6">
            <label>Localidad</label>
            <input required type="text" class="form-control" name="localidad" value="{{$comunidad->localidad}}">
        </div>
        <div class="col-md-6">
            <label>Provincia</label>
            <input required type="text" class="form-control" name="provincia" value="{{$comunidad->provincia}}">
        </div>
        <div class="col-md-3">
            <label>Zona Regadio</label>
            <input required type="text" class="form-control" name="zona" value="{{$comunidad->zona}}">
        </div>
        <div class="col-md-1 text-center">
            <label>Zona Regadio</label>
            <br>
            <input  type="checkbox" name="regadio" class="form-control" @if ($comunidad->regadio=='on') checked @endif>
        </div>
        
        <div class="col-xs-12">
            <div class="col-xs-1">    
                <br>
                <input type="submit" class="btn btn-success btn-xs" value="Guardar">
            </div>
            <div class="col-xs-1">
                <br>
                <a href="/comunidad" class="btn btn-danger btn-xs" >Cancelar</a>
            </div>
        </div>
        
        
    <!-- </form> -->
    {!! Form::close() !!}
</div>


@endsection