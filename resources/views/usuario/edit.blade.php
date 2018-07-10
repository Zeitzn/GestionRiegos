@extends('layouts.app')

@section('title','Editar datos de Usuario')

@section('content')
<div class="row small">

  
    {!! Form::model($usuario, ['method'=>'PUT','route'=>['usuario.update', $usuario->id]])!!}
    
    @csrf
    
    <div class="col-md-4 form-group">
            <label>Nombre</label>
            <input required type="text" class="form-control" name="nombre" value="{{$usuario->nombre}}">
        </div>

        <div class="col-md-4 form-group">
            <label>Apellidos</label>
            <input required type="text" class="form-control" name="apellidos" value="{{$usuario->apellidos}}">
        </div>

        <div class="col-md-4 form-group">
            <label>Identificador Contable</label>
            <input required type="number" class="form-control" name="id_contable" value="{{$usuario->id_contable}}">
        </div>

        <div  class="col-md-4 form-group">
            <label>DNI</label>
            <input required type="number" class="form-control" name="dni" value="{{$usuario->dni}}">
        </div>  

        <div class="col-md-4 form-group">
            <label>Teléfono</label>
            <input required type="text" class="form-control" name="telefono" value="{{$usuario->telefono}}">
        </div>

        <div class="col-md-4 form-group">
            <label>Calle y N°</label>
            <input required type="text" class="form-control" name="direccion" value="{{$usuario->direccion}}">
        </div>
        
        <div class="col-md-4 form-group">
            <label>Población</label>
            <input required type="text" class="form-control" name="poblacion" value="{{$usuario->poblacion}}">
        </div>

        <div class="col-md-4 form-group">
            <label>Provincia</label>
            <input required type="text" class="form-control" name="provincia" value="{{$usuario->provincia}}">
        </div>

        <div class="col-md-4 form-group">
            <label>C.P.:</label>
            <input required type="text" class="form-control" name="cp" value="{{$usuario->cp}}">
        </div>       
        
        <div class="col-xs-1">    
               <br>
            <input type="submit" class="btn btn-success btn-xs" value="Guardar">
        </div>

        <div class="col-xs-1">
            <br>
            <a href="/usuario" class="btn btn-danger btn-xs" >Cancelar</a>
        </div>
        
   
    {!! Form::close() !!}
</div>


@endsection