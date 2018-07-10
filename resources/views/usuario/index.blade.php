@extends('layouts.app')

@section('title','Usuario')

@section('content')
<div class="row small">
    <form method="POST" action="/usuario">
    @csrf
        

        <div class="col-md-4 form-group">
            <label>Nombre</label>
            <input required type="text" class="form-control" name="nombre">
        </div>

        <div class="col-md-4 form-group">
            <label>Apellidos</label>
            <input required type="text" class="form-control" name="apellidos">
        </div>

        <div class="col-md-4 form-group">
            <label>Identificador Contable</label>
            <input required type="number" class="form-control" name="id_contable">
        </div>

        <div  class="col-md-4 form-group">
            <label>DNI</label>
            <input required type="number" class="form-control" name="dni">
        </div>  

        <div class="col-md-4 form-group">
            <label>Teléfono</label>
            <input required type="text" class="form-control" name="telefono">
        </div>

        <div class="col-md-4 form-group">
            <label>Calle y N°</label>
            <input required type="text" class="form-control" name="direccion">
        </div>
        
        <div class="col-md-4 form-group">
            <label>Población</label>
            <input required type="text" class="form-control" name="poblacion">
        </div>

        <div class="col-md-4 form-group">
            <label>Provincia</label>
            <input required type="text" class="form-control" name="provincia">
        </div>

        <div class="col-md-4 form-group">
            <label>C.P.:</label>
            <input required type="text" class="form-control" name="cp">
        </div>       
        
        <div class="col-xs-1">    
               <br>
            <input type="submit" class="btn btn-primary btn-xs" value="Registrar">
        </div>

        <div class="col-xs-1">
            <br>
            <input type="reset" class="btn btn-danger btn-xs" value="Cancelar">
        </div>

        <div class="col-xs-1">
            <br>
            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal">Importar</button>
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
<table class="table table-border" id="usuarios">
    <thead>
        <tr>
            <td>IDENTIFICADOR</td>
            <td>IDENTIFICADOR CONTABLE</td>
            <td>NOMBRES</td>
            <td>APELLIDOS</td>
            <td>DNI</td>
            <td>DIRECCION</td>
            <td>TELÉFONO</td>
            <td>PROBLACIÓN</td>
            <td>PROVINCIA</td>
            <td>C.P</td>
            <td>ACCIONES</td>
        </tr>
    </thead>
    <tfoot>
        <tr>
                <td>IDENTIFICADOR</td>
                <td>IDENTIFICADOR CONTABLE</td>
                <td>NOMBRES</td>
                <td>APELLIDOS</td>
                <td>DNI</td>
                <td>DIRECCION</td>
                <td>TELÉFONO</td>
                <td>PROBLACIÓN</td>
                <td>PROVINCIA</td>
                <td>C.P</td>
                <td>ACCIONES</td>
        </tr>
    </tfoot>
    <tbody class="small">    
        @foreach($usuarios as $usuario)
        <tr>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->id_contable}}</td>
            <td>{{$usuario->nombre}}</td>
            <td>{{$usuario->apellidos}}</td>
            <td>{{$usuario->dni}}</td>
            <td>{{$usuario->direccion}}</td>
            <td>{{$usuario->telefono}}</td>
            <td>{{$usuario->poblacion}}</td>
            <td>{{$usuario->provincia}}</td>
            <td>{{$usuario->cp}}</td>
            <!-- <td><a href="usuario/edit/{{$usuario->id}}" class="btn btn-warning btn-xs glyphicon glyphicon-edit" ></a> | <a class="btn btn-danger btn-xs glyphicon glyphicon-trash" ></a></td>             -->
            <td><a href="{{route('usuario.edit',$usuario->id)}}" class="btn btn-warning btn-xs" >Editar</a>  
                <!-- <a href="{{route('usuario.edit',$usuario->id)}}" class="btn btn-danger btn-xs glyphicon glyphicon-trash" ></a> -->
                {!! Form::open(['method' => 'DELETE', 'route'=>['usuario.destroy', $usuario->id], 'style'=> 'display:inline']) !!}
                {!! Form::submit('Eliminar',['class'=> 'btn btn-xs btn-danger glyphicon glyphicon-edit']) !!}
                {!! Form::close() !!}
            </td>            
        </tr>
        @endforeach
        
    </tbody>
</table>
</div>




<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Importar Datos de Usuario</h4>
      </div>
      <div class="modal-body">            
            <div class="links">
                <form method="post" action="{{url('auxiliar/import-excel')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="file" name="excel">
                    <br><br>
                    <input type="submit" value="Enviar" class="btn btn-primary btn-md" >
                    <h5>Asegurese de que los encabezados del archivo cumplan el siguiente formato</h5>
                    <div class="col-xs-12">
                        <img src="/images/modelo_import_usuario.png" class="thumbnail" width="100%">
                    </div>
                    
                </form>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endsection