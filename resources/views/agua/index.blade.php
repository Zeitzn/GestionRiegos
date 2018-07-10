@extends('layouts.app')

@section('title','Agua')

@section('content')

<h3>Las unidades del precio del Agua introducido son S/ por 1000 m3</h3>
<br>
<div class="row small">
    <form method="POST" action="/agua">
    @csrf
        <!-- <div class="col-md-8 form-group">
            <label>Cód. Tipo Agua</label>
            <input required type="text" class="form-control" name="id">
        </div> -->
        <div class="col-md-12">
            <div class="col-md-4 form-group">
                <label>Tipo Agua</label>
                <input required type="text" class="form-control" name="tipo">
            </div>
            <div class="col-md-2 form-group">
                <label>Coste Agrícola</label>
                <input required type="text" class="form-control" name="coste_agricola">
            </div>
            <div class="col-md-2 form-group">
                <label>Coste Ganadero</label>
                <input required type="text" class="form-control" name="coste_ganadero">
            </div>
            <div class="col-md-2">
                <label>Coste Urbano</label>
                <input required type="text" class="form-control" name="coste_urbano">
            </div>
            <div class="col-md-2">
                <label>Coste Industrial</label>
                <input required type="text" class="form-control" name="coste_industrial">
            </div>
        </div>
        
          
            <div class="col-md-1">    
                <br>
                <input type="submit" class="btn btn-primary btn-xs" value="Registrar">
            </div>
            <div class="col-md-1">
                <br>
                <input type="reset" class="btn btn-danger btn-xs" value="Cancelar">
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
<table class="table table-border" id="aguas">
    <thead>
        <tr>
            <td>COD. TIPO AGUA</td>
            <td>TIPO DE AGUA</td>
            <td>COSTE AGRÍCOLA</td>
            <td>COSTE GANADERO</td>
            <td>COSTE URBANO</td>
            <td>COSTE INDUSTRIAL</td>
            
            <td>ACCIONES</td>
        </tr>
    </thead>
    <tfoot>
        <tr>
        <td>COD. TIPO AGUA</td>
            <td>TIPO DE AGUA</td>
            <td>COSTE AGRÍCOLA</td>
            <td>COSTE GANADERO</td>
            <td>COSTE URBANO</td>
            <td>COSTE INDUSTRIAL</td>
            
            <td>ACCIONES</td>
        </tr>
    </tfoot>
    <tbody class="small">
    
        @foreach($aguas as $agua)
        <tr>
           
            <td>{{$agua->id}}</td>
            <td>{{$agua->tipo}}</td>
            <td>S/ {{$agua->coste_agricola}}</td>
            <td>S/ {{$agua->coste_ganadero}}</td>
            <td>S/ {{$agua->coste_urbano}}</td>
            <td>S/ {{$agua->coste_industrial}}</td>
            <td><a href="{{route('agua.edit',$agua->id)}}" class="btn btn-warning btn-xs" >Editar</a>  
                {!! Form::open(['method' => 'DELETE', 'route'=>['agua.destroy', $agua->id], 'style'=> 'display:inline']) !!}
                {!! Form::submit('Eliminar',['class'=> 'btn btn-xs btn-danger glyphicon glyphicon-edit']) !!}
                {!! Form::close() !!}
            </td>            
        </tr>
        @endforeach
        
    </tbody>
</table>
</div>
@endsection