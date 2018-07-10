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

                console.log(ini_hora);
                console.log(fin_hora);
                
            })
           
                   
          
                var id=parseInt($("#id_usuario_peticion").val());
                //$("#parcelas_usuario").html('')

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
           
                
            function cargarUsuarioSeleccionado(){
                $.ajax({
                    url: "/auxiliar/cargar",
                    type: "GET",
                    success: function(data){

                        
                        var id=$("#id_usuario_peticion").val();
                        
                        
                            $.each(data, function(i, item) {
                                
                                if(id==item.id){
                                    $("#id_usuario_peticion").val(item.nombre+' '+item.apellidos);    
                                    
                                }                       
                                
                            });
                        
                    }
                }); 

                

                

               
            }
            $("#rb_arrendatario").attr("checked");
            if($("#tipo_aux").val()=='Arrendatario'){
                $("#rb_arrendatario").attr("checked");
            }
            
    cargarUsuarioSeleccionado()

    });
                
        </script>
    <form method="POST" action="/peticion">
    @csrf
<h4><strong>GENERAR PETICIÓN</strong></h4>

<input type="hidden" id="tipo_aux" value="{{$peticion->tipo}}">
    <div class="col-xs-12">

        <div class="col-md-4 form-group usuarios">
            <label>Pagador Agua</label>
            <input class="form-control" name="id_usuario" disabled value="{{$peticion->id_usuario}}" id="id_usuario_peticion">
        </div>
        <div class="col-md-4 form-group">
            <label>Linea Hidrante</label>
            <input type="text" class="form-control" name="consumo" value="{{$peticion->linea_hidrante}}" disabled >
        </div>

        <div class="col-md-4 form-group">
            <label>Tipo</label>
            <input type="text" class="form-control" name="tipo" value="{{$peticion->tipo}}" disabled >
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
                        
                    </tbody>
                </table>
    </div>


    <div class="col-xs-12">
        <div class="col-md-3 form-group">
            <label>Caudal Petición (m3/24h)</label>
            <input type="text" class="form-control" name="caudal_peticion" value="{{$peticion->caudal_peticion}}" disabled>
        </div>

        <div class="col-md-3">
            <label>l/s</label>
            <input type="text" class="form-control " name="litros_segundo" value="{{$peticion->litros_segundo}}" disabled>
        </div>

        <div class="col-md-3">
            <label>Para Dia</label>
            {{--  <input type="date" class="form-control" name="fecha_inicio">  --}}
            <input class="datepicker form-control" name="fecha_inicio" id="fecha_inicio" value="{{$peticion->fecha_inicio}}" disabled>
        </div>

        <div class="col-md-3">
            <label>Fecha Fin</label>
            <input type="text" class="form-control" name="fecha_fin" id="fecha_fin" value="{{$peticion->fecha_fin}}" disabled>
        </div>

    </div>
        
    <div class="col-xs-12">
        <div class="col-md-2">
            <label>Hora Inicio</label>
            <br>
            <input type="time" class="form-control" name="hora_inicio" id="hora_inicio" value="{{$peticion->hora_inicio}}" disabled>
        </div>

        <div class="col-md-2">
            <label>Hora Fin</label>
            <br>
            <input type="text" class="form-control" name="hora_fin" id="hora_fin" value="{{$peticion->hora_fin}}" disabled>
        </div>

        <div class="col-md-2">
            <label>Horas</label>
            <br>
            <input type="text" class="form-control" name="horas" value="{{$peticion->horas}}" disabled >
        </div>

        <div class="col-md-2">
            <label>Consumo</label>
            <br>
            <input type="text" class="form-control" name="consumo" value="{{$peticion->consumo}}" disabled >
        </div>

    </div>  
    
    <h4><strong>GESTOR DE PETICIONES</strong></h4>
    <div class="col-xs-12">
        <div class="col-md-2 form-group regante">
            <label>Regante</label>
            <input type="text" class="form-control" name="regante" value="{{$peticion->regante}}" disabled >
        </div>
        <div class="col-md-2 form-group">
            <label>Línea</label>
            <input type="text" class="form-control" name="linea" value="{{$peticion->linea}}" disabled >
        </div>
        <div class="col-md-2 form-group">
            <label>Unidad</label>
            <input type="text" class="form-control" name="unidades" value="{{$peticion->unidades}}" disabled >
        </div>
    </div>    
        
        
        
    <div class="col-xs-12">
        
        <div class="col-sm-2 ">   
            <a href="{{route('peticion.index')}}" class="btn btn-primary btn-xs" >Volver</a>
        </div>
        <div class="col-sm-2">            
            <a href="{{route('peticion.edit',$peticion->id)}}" class="btn btn-warning btn-xs" >Editar</a>
        </div>
    </div>   
        
       
    </form>
</div>

@endsection