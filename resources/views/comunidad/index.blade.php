@extends('layouts.app')

@section('title','Comunidad')

@section('content')
<div class="row small">
    <form method="POST" action="/comunidad">
    @csrf
    <div class="col-xs-12">
        <div class="col-md-8 form-group">
            <label>Nombre Comunidad</label>
            <input required type="text" class="form-control" name="nombre">
        </div>
        <div class="col-md-4 form-group">
            <label>DNI</label>
            <input required type="number" class="form-control" name="dni">
        </div>
    </div>

    <div class="col-xs-12">
        <div class="col-md-8 form-group">
            <label>Domicilio Comunidad</label>
            <input required type="text" class="form-control" name="domicilio">
        </div>
        <div class="col-md-4 form-group">
            <label>Teléfono</label>
            <input required type="text" class="form-control" name="telefono">
        </div>
    </div>

    <div class="col-xs-12">
        <div class="col-md-6">
            <label>Localidad</label>
            <input required type="text" class="form-control" name="localidad">
        </div>
        <div class="col-md-6">
            <label>Provincia</label>
            <input required type="text" class="form-control" name="provincia">
        </div>
    </div>

    <div class="col-xs-12">
        <div class="col-md-3">
            <label>Zona Regadio</label>
            <input required type="text" class="form-control" name="zona">
        </div>
        <div class="col-md-3 text-center">
            <label>Zona Regadio</label>
            <br>
            <input  type="checkbox" class="form-control" name="regadio">
        </div>
    </div>
        
        
    <div class="col-xs-12">
        <div class="col-xs-1">    
               <br>
            <input type="submit" class="btn btn-primary btn-xs" value="Registrar">
        </div>
        <div class="col-xs-1">
            <br>
            <input type="reset" class="btn btn-danger btn-xs" value="Cancelar">
        </div>
    </div> 
        
        
        
        
        
       
    </form>
</div>
@if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif

<hr>

<div class="row">
<table class="table table-border" id="comunidades">
    <thead>
        <tr>
            <td>Nro</td>
            <td>NOMBRE COMUNIDAD</td>
            <td>DNI</td>
            <td>DOMICILIO COMUNIDAD</td>
            <td>TELÉFONO</td>
            <td>LOCALIDAD</td>
            <td>PROVINCIA</td>
            <td>ZONA REGADÍO</td>
            <td>ZONA REGADÍO</td>
            <td>ACCIONES</td>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <td>Nro</td>
            <td>NOMBRE COMUNIDAD</td>
            <td>DNI</td>
            <td>DOMICILIO COMUNIDAD</td>
            <td>TELÉFONO</td>
            <td>LOCALIDAD</td>
            <td>PROVINCIA</td>
            <td>ZONA REGADÍO</td>
            <td>ZONA REGADÍO</td>
            <td>ACCIONES</td>
        </tr>
    </tfoot>
    <tbody class="small">
    @php ($a = 1)
        @foreach($comunidades as $comunidad)
        <tr>
            <td>{{$a++}}</td>
            <td>{{$comunidad->nombre}}</td>
            <td>{{$comunidad->dni}}</td>
            <td>{{$comunidad->domicilio}}</td>
            <td>{{$comunidad->telefono}}</td>
            <td>{{$comunidad->localidad}}</td>
            <td>{{$comunidad->provincia}}</td>
            <td>{{$comunidad->zona}}</td>
            <td>{{$comunidad->regadio}}</td>
            <!-- <td><a href="comunidad/edit/{{$comunidad->id}}" class="btn btn-warning btn-xs glyphicon glyphicon-edit" ></a> | <a class="btn btn-danger btn-xs glyphicon glyphicon-trash" ></a></td>             -->
            <td><a href="{{route('comunidad.edit',$comunidad->id)}}" class="btn btn-warning btn-xs" >Editar</a>  
                <!-- <a href="{{route('comunidad.edit',$comunidad->id)}}" class="btn btn-danger btn-xs glyphicon glyphicon-trash" ></a> -->
                {!! Form::open(['method' => 'DELETE', 'route'=>['comunidad.destroy', $comunidad->id], 'style'=> 'display:inline']) !!}
                {!! Form::submit('Eliminar',['class'=> 'btn btn-xs btn-danger glyphicon glyphicon-edit']) !!}
                {!! Form::close() !!}
            </td>            
        </tr>
        @endforeach
        
    </tbody>
</table>
</div>
@endsection