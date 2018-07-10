@extends('layouts.app')

@section('title','Consumo de Agua')

@section('content')
<div class="row small">
        <script>  
            
        $( document ).ready(function() {
         
            $("#fecha_inicio").on('change',function(){                
                
                var fecha = new Date($("#fecha_inicio").val());
                var dias = 1; // Número de días a agregar
                fecha.setDate(fecha.getDate() + dias);   
                $("#fecha_fin").val(fecha.toLocaleDateString());

                var fecha_inicio=new Date($("#fecha_inicio").val());
                $("#fecha_inicio").val(fecha_inicio.toLocaleDateString());
            })

            $("#hora_inicio").on('change',function(){                
                var hora=$("#hora_inicio").val();

                var ini_hora=parseInt(hora.substr(0,2));
                var fin_hora=hora.substr(2,4);

               

                if(ini_hora>=12){
                    $("#hora_fin").val((ini_hora-12)+fin_hora+' am');
                }else{
                    $("#hora_fin").val((ini_hora+12)+fin_hora+' pm');
                }

                /*console.log(ini_hora);
                console.log(fin_hora);
                */
            })
           
                   
            $("#pagador").on('change',function(){
                var id=parseInt($("#pagador option:selected").val());
                $("#parcelas_usuario").html('')

                $.ajax({
                    url: "/auxiliar/cargarParcelasUsuario/"+id,
                    type: "GET",
                    success: function(data){
                        
                        $.each(data, function(i, item) {             
                            $("#parcelas_usuario").append('<tr>'
                            +   '<td>'+item.id+'</td>'
                            +   '<td>Agrícola</td>'
                            +   '<td>'+item.sup_ag+'</td>'
                            +   '<td></td>'
                            +   '<td></td>'
                            +   '<td></td>'
                            +   '<td>'+item.cultivo+'</td>'
                            +   '<td></td>'                                                       
                            +'</tr>'
                            
                            );
                        
                            
                        });

                       
                        
                    }
                }); 
            })
                

                function cargarUsuarios(){
                     $.ajax({
                        url: "/auxiliar/cargar",
                        type: "GET",
                        success: function(data){
                            console.log(data);
                            
                                $.each(data, function(i, item) { 
                                    var nombreCompleto=item.nombre+' '+item.apellidos;
                                    //console.log(nombreCompleto);             
                                    $(".usuarios select").append('<option value="'+item.id+'">'+item.nombre+' '+item.apellidos+'</option>');
                                    $(".regante select").append('<option value="'+nombreCompleto+'">'+item.nombre+' '+item.apellidos+'</option>');
                                    
                                });
                            
                        }
                    }); 
                    
                }     
    cargarUsuarios();  

    });
                
        </script>
    <form method="POST" action="/peticion">
    @csrf
<h4><strong>GENERAR PETICIÓN</strong></h4>
    <div class="col-xs-12">

        <div class="col-md-4 form-group usuarios">
            <label>Pagador Agua</label>
            <br>
            <select class="form-control selectBox" name="id_usuario" id="pagador">
                <option selected>--Seleccionar--</option>            
            </select>
        </div>
        <div class="col-md-4 form-group">
            <label>Linea Hidrante</label>
            <br>
            <select class="form-control selectBox" name="linea_hidrante">
                <option selected>--Seleccionar--</option>
                <option value="Loma Media">Loma Media</option>
                <option value="San Pedro">San Pedro</option>
            </select>
        </div>
        <div class="col-md-1 form-group text-center">
            <label>Pag. Agua</label>
            <input required type="radio" class="form-control" name="tipo" value="Pagar agua" checked>
        </div>
        <div class="col-md-1 form-group text-center">
            <label>Arrendatario</label>
            <input required type="radio" class="form-control" name="tipo" value="Arrendatario">
        </div>

    </div>


    <div class="col-xs-12">
            <table class="table table-border" id="">
                    <thead>
                        <tr>
                            <td>PARCELA</td>
                            <td>TIPO USO</td>
                            <td>SUP. AG</td>
                            <td>SUP. GA</td>
                            <td>SUP. IN</td>
                            <td>SUP. UR</td>
                            <td>CULTIVO</td>
                            <td>LÍNEA</td>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td>PARCELA</td>
                            <td>TIPO USO</td>
                            <td>SUP. AG</td>
                            <td>SUP. GA</td>
                            <td>SUP. IN</td>
                            <td>SUP. UR</td>
                            <td>CULTIVO</td>
                            <td>LÍNEA</td>            
                        </tr>
                    </tfoot>
                    <tbody class="small" id="parcelas_usuario">
                       
                    {{--  @php ($a = 1)
                        @foreach($parcelas as $parcela)
                        <tr>
                            <td>{{$parcela->id}}</td>
                            <td>Agrícola</td>
                            <td>{{$parcela->sup_ag}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>{{$parcela->cultivo}}</td>
                            <td></td>
                                       
                        </tr>
                        @endforeach  --}}
                        
                    </tbody>
                </table>
    </div>


    <div class="col-xs-12">
        <div class="col-md-3 form-group">
            <label>Caudal Petición (m3/24h)</label>
            <input required type="text" class="form-control" name="caudal_peticion" value="51840">
        </div>

        <div class="col-md-3">
            <label>l/s</label>
            <input required type="text" class="form-control " name="litros_segundo" value="600">
        </div>

        <div class="col-md-3">
            <label>Para Dia</label>
            {{--  <input required type="date" class="form-control" name="fecha_inicio">  --}}
            <input required class="datepicker form-control" name="fecha_inicio" id="fecha_inicio" placeholder="dd/mm/yyyy" required >
        </div>

        <div class="col-md-3">
            <label>Fecha Fin</label>
            <input required type="text" class="form-control" name="fecha_fin" id="fecha_fin" >
        </div>

    </div>
        
    <div class="col-xs-12">
        <div class="col-md-2">
            <label>Hora Inicio</label>
            <br>
            <input required type="time" class="form-control" name="hora_inicio" id="hora_inicio" >
        </div>

        <div class="col-md-2">
            <label>Hora Fin</label>
            <br>
            <input required type="text" class="form-control" name="hora_fin" id="hora_fin" >
        </div>

        <div class="col-md-2">
            <label>Horas</label>
            <br>
            <input required type="text" class="form-control" name="horas" value="24" >
        </div>

        <div class="col-md-2">
            <label>Consumo</label>
            <br>
            <input required type="text" class="form-control" name="consumo" value="51840" >
        </div>

    </div>  
    
    <h4><strong>GESTOR DE PETICIONES</strong></h4>
    <div class="col-xs-12">
        <div class="col-md-2 form-group regante">
            <label>Regante</label>
            <br>
            <select class="form-control selectBox" name="regante">
                <option selected>--Seleccionar--</option>
            </select>
        </div>
        <div class="col-md-2 form-group">
            <label>Línea</label>
            <br>
            <select class="form-control selectBox" name="linea">
                <option value="none" selected>--Seleccionar--</option>
            </select>
        </div>
        <div class="col-md-2 form-group">
            <label>Unidad</label>
            <br>
            <select class="form-control selectBox" name="unidades">
                <option value="none" selected>--Seleccionar--</option>
            </select>
        </div>
    </div>    
        
        
        
    <div class="col-xs-12">
        
        <div class="col-sm-2 ">   
            <input type="submit" class="btn btn-primary btn-xs" value="Generar Petición">
        </div>
        <div class="col-sm-2">            
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
<table class="table table-border" id="peticiones">
    <thead>
        <tr>
            <td>USUARIO</td>
            <td>FECHA PETICIÓN</td>
            <td>FECHA INICIO</td>
            <td>HORA INICIO</td>            
            <td>FECHA FIN</td>
            <td>HORA FIN</td>
            <td>m3/24h</td>
            <td>l/s</td>
            <td>CONSUMO TOTAL</td>
            <td>ACCIONES</td> 
        </tr>
    </thead>
    <tfoot>
        <tr>
            <td>USUARIO</td>
            <td>FECHA PETICIÓN</td>
            <td>FECHA INICIO</td>
            <td>HORA INICIO</td>            
            <td>FECHA FIN</td>
            <td>HORA FIN</td>
            <td>m3/24h</td>
            <td>l/s</td>
            <td>CONSUMO TOTAL</td>            
            <td>ACCIONES</td> 
        </tr>
    </tfoot>
    <tbody class="small" id="parcelas_usuario">
            @foreach($peticiones as $peticion)
            <tr>
                <td>{{$peticion->nombre.' '.$peticion->apellidos}}</td>
                <td>{{date('d/m/Y',strtotime($peticion->created_at))}}</td>
                <td>{{$peticion->fecha_inicio}}</td>
                <td>{{$peticion->hora_inicio}}</td>            
                <td>{{$peticion->fecha_fin}}</td>
                <td>{{$peticion->hora_fin}}</td>
                <td>{{$peticion->caudal_peticion}}</td>
                <td>{{$peticion->litros_segundo}}</td>
                <td>{{$peticion->consumo}}</td>  
                <td>
                    <a href="{{route('peticion.show',$peticion->id)}}" class="btn btn-primary btn-xs" >Detalles</a>  
                    <a href="{{route('peticion.edit',$peticion->id)}}" class="btn btn-warning btn-xs" >Editar</a>  
                        
                    {!! Form::open(['method' => 'DELETE', 'route'=>['peticion.destroy', $peticion->id], 'style'=> 'display:inline']) !!}
                    {!! Form::submit('Eliminar',['class'=> 'btn btn-xs btn-danger glyphicon glyphicon-edit']) !!}
                    {!! Form::close() !!}
                </td>                      
            </tr>
            @endforeach
    </tbody>
</table>
</div>
@endsection