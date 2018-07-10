@extends('layouts.app')

@section('title','Parcelas Catastrales')

@section('content')
<div class="row small">
        <script>                

                function cargarUsuarios(){
                     $.ajax({
                        url: "/auxiliar/cargar",
                        type: "GET",
                        success: function(data){
                            
                                $.each(data, function(i, item) { 
                                    var nombreCompleto=item.nombre+' '+item.apellidos;
                                    //console.log(nombreCompleto);             
                                    $(".usuarios select").append('<option value="'+item.id+'">'+item.nombre+' '+item.apellidos+'</option>');
                                    $(".arrendatario select").append('<option value="'+nombreCompleto+'">'+item.nombre+' '+item.apellidos+'</option>');
                                    $(".pagador_agua select").append('<option value="'+nombreCompleto+'">'+item.nombre+' '+item.apellidos+'</option>');
                                    $(".pagador_gastos select").append('<option value="'+nombreCompleto+'">'+item.nombre+' '+item.apellidos+'</option>');
                                });
                            
                        }
                    }); 

                    
                }                
                
    cargarUsuarios();  

    
                
        </script>
    <form method="POST" action="/parcela">
    @csrf

    <h4><strong>PARCELAS CATASTRALES</strong></h4>
        <div class="col-xs-12">
                <div class="col-md-2 form-group">
                        <label>Parcela</label>
                        
                        <input required type="text" class="form-control" name="parcela">
                    </div>
                    <div class="col-md-2 form-group">
                        <label>Subparcela</label>
                        
                        <input required type="number" class="form-control" name="subparcela">
                    </div>
                    <div class="col-md-2 form-group">
                        <label>Superficie catastral (Hectáreas)</label>
                        <input required type="text" class="form-control" name="superficie_catastral">
                    </div>
                    <div class="col-md-2 form-group form-group">
                        <label>Superficie de riego (Hectáreas)</label>
                        <input required type="text" class="form-control" name="superficie_riego">
                    </div>
                    <div class="col-md-2 form-group text-center">
                        <label>Riego en Precario</label>
                        
                        <input type="checkbox" class="form-control" name="riego_precario">
                    </div>
                    <div class="col-md-2 form-group">
                        <label>Municipio</label>
                        
                        <input required type="text" class="form-control" name="municipio">
                    </div>
        </div>
        <div class="col-xs-12">
                <div class="col-md-2 form-group">
                        <label>Sector</label>
                        <input required type="text" class="form-control" name="sector">
                    </div>
                    <div class="col-md-2 form-group usuarios">
                        <label>Propietario</label>
                        <br>
                        <select class="form-control selectBox" name="id_usuario" id="sel_usuario">
                            <option selected>--Seleccionar--</option>
                        </select>
                    </div>
                    {{--  <div class="col-md-2 form-group">
                        <label>Cultivo</label>
                        <input required type="text" class="form-control" name="cultivo">
                    </div>  --}}
                    <div class="col-md-2 form-group">
                        <label>Sup. Ag</label>
                        <input required type="text" class="form-control" name="sup_ag">
                    </div>
                    {{--  <div class="col-md-2 form-group">
                        <label>Tipo de Riego</label>
                        <input required type="text" class="form-control" name="tipo_riego">
                    </div>  --}}
            
                    <div class="col-md-2 form-group">
                        <label>Usos Agrícolas</label>
                        
                        <input required type="checkbox" class="form-control" disabled checked>
                    </div>
        </div>
        
        <h4><strong>USOS AGRÍCOLAS</strong></h4>
        <h5><strong>Datos de uso</strong></h5>
        <div class="col-xs-12">
                <div class="col-md-3 form-group">
                        <label>Superficie</label>
                        
                        <input required type="text" class="form-control" name="superficie">
                    </div>
                    <div class="col-md-3 form-group">
                        <label>Coef. Amortización</label>
                        
                        <input required type="number" class="form-control" name="amortizacion">
                    </div>

                    
                    <div class="col-md-3 form-group">
                        <label>Cultivo</label>
                        <br>
                        <select class="form-control selectBox" name="cultivo">
                            <option value="none" selected>--Selecionar--</option>
                            <option value="Alfalfa">Alfalfa</option>
                            <option value="Alforjón">Alforjón</option>
                            <option value="Algodón">Algodón</option>
                            <option value="Almendros">Almendros</option>
                            <option value="Alpiste">Alpiste</option>
                            <option value="Altramuces Dulces">Altramuces Dulces</option>
                            <option value="Arroz">Arroz</option>
                            <option value="Avena">Avena</option>
                            <option value="Barbecho Tradicional">Barbecho Tradicional</option>
                            <option value="Cacahuete">Cacahuete</option>
                            <option value="Cañamo">Cañamo</option>
                            <option value="Cártamo">Cártamo</option>
                            <option value="Castaño">Castaño</option>
                            <option value="Cebada">Cebada</option>
                            <option value="Centeno">Centeno</option>
                        </select>
                    </div>

                    <div class="col-md-3 form-group">
                        <label>Variedad</label>
                        <br>
                        <select class="form-control selectBox" name="variedad">
                            <option value="none" selected>--Selecionar--</option>
                        </select>
                    </div>
        </div>

        <h5><strong>Usuarios Uso Parcela</strong></h5>
        <div class="col-xs-12">
            <div class="col-md-3 form-group arrendatario">
                <label>Usuario Arrendatario</label>
                <br>
                <select class="form-control selectBox" name="arrendatario">
                    <option value="none" selected>--Selecionar--</option>
                </select>
            </div>
            <div class="col-md-3 form-group pagador_agua">
                <label>Usuario Pagador de Agua</label>
                <br>
                <select class="form-control selectBox" name="pagador_agua">
                    <option value="none" selected>--Selecionar--</option>
                </select>
            </div>
            <div class="col-md-3 form-group pagador_gastos">
                <label>Usuario pagador de gastos</label>
                <br>
                <select class="form-control selectBox" name="pagador_gastos">
                    <option value="none" selected>--Selecionar--</option>
                </select>
            </div>
        </div>

        <h5><strong>Datos de riego</strong></h5>
        <div class="col-xs-12">
            <div class="col-md-3 form-group">
                <label>Tipo de Riego</label>
                <br>
                <select class="form-control selectBox" name="tipo_riego">
                    <option selected>--Selecionar--</option>
                    <option value="Aspersión">Aspersión</option>
                    <option value="Goteo">Goteo</option>
                    <option value="Máquina">Máquina Lateral</option>
                    <option value="Pivote">Pivote</option>
                    <option value="Surcos">Surcos</option>
                    <option value="Tablar">Tablar</option>
                </select>
            </div>
            <div class="col-md-4 form-group">
                <label>Pto. Hidrante que Riega el Uso</label>
                <input required type="text" class="form-control" name="hidrante">
            </div>
        </div>

        
        
        
        <div class="col-xs-1">    
               <br>
            <input type="submit" class="btn btn-primary btn-xs" value="Registrar">
        </div>
        <div class="col-xs-1">
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
<table class="table table-border" id="parcelas">
    <thead>
        <tr>
            {{--  <td>PROPIETARIO</td>  --}}
            <td>CULTIVO</td>
            <td>SUP. AG</td>
            <td>TIPO AGUA</td> 
            <td>ACCIONES</td>          
        </tr>
    </thead>
    <tfoot>
        <tr>
            {{--  <td>PROPIETARIO</td>  --}}
            <td>CULTIVO</td>
            <td>SUP. AG</td>
            <td>TIPO AGUA</td>  
            <td>ACCIONES</td>          
        </tr>
    </tfoot>
    <tbody class="small">
   
        @foreach($parcelas as $parcela)
        <tr>
            {{--  <td>{{$parcela->nombre.' '.$parcela->apellidos}}</td>              --}}
            <td>{{$parcela->cultivo}}</td>
            <td>{{$parcela->sup_ag}}</td>
            <td>{{$parcela->tipo_riego}}</td>            
            <td>
                <a href="{{route('parcela.show',$parcela->id)}}" class="btn btn-primary btn-xs" >Detalles</a>  
                <a href="{{route('parcela.edit',$parcela->id)}}" class="btn btn-warning btn-xs" >Editar</a>  
                
                {!! Form::open(['method' => 'DELETE', 'route'=>['parcela.destroy', $parcela->id], 'style'=> 'display:inline']) !!}
                {!! Form::submit('Eliminar',['class'=> 'btn btn-xs btn-danger glyphicon glyphicon-edit']) !!}
                {!! Form::close() !!}
            </td>            
        </tr>
        @endforeach
        
    </tbody>
</table>


        

</div>
@endsection