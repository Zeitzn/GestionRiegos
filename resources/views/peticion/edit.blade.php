@extends('layouts.app')

@section('title','Editar datos de Peticion')

@section('content')
<div class="row small">
        <script>  
                $( document ).ready(function() {

                    //Seleccionar el option segun su valor
                    var lineaHidrante=$("#linea_hidrante").val();  
                    $(".hidrante select").val(lineaHidrante);

                    //Seleccionar el radiobutton correcto
                    var tipo=$("#tipo").val();
                    if(tipo=="Arrendatario"){
                        $('input:radio[name="tipo"][value="'+tipo+'"]').prop('checked', true);
                    }

                    //Calcular fecha de fin a partir de la fecha de inicio
                    $("#fecha_inicio").on('change',function(){                
                
                        var fecha = new Date($("#fecha_inicio").val());
                        var dias = 1; // Número de días a agregar
                        fecha.setDate(fecha.getDate() + dias);   
                        $("#fecha_fin").val(fecha.toLocaleDateString());
        
                        var fecha_inicio=new Date($("#fecha_inicio").val());
                        $("#fecha_inicio").val(fecha_inicio.toLocaleDateString());
                    })
                    
                    //Calcular la hora de fin a partir de la fecha de inicio
                    $("#hora_inicio").on('change',function(){                
                        var hora=$("#hora_inicio").val();        
                        var ini_hora=parseInt(hora.substr(0,2));
                        var fin_hora=hora.substr(2,4);        
                        if(ini_hora>=12){
                            $("#hora_fin").val((ini_hora-12)+fin_hora+' am');
                        }else{
                            $("#hora_fin").val((ini_hora+12)+fin_hora+' pm');
                        }       

                    });

                function cargarUsuarioEditable(){
                    $.ajax({
                        url: "/auxiliar/cargar",
                        type: "GET",
                        success: function(data){    
                            
                            var id=$("#id_usuario").val();
                            var regante=$("#regante").val();                            
    
                                $.each(data, function(i, item) {
                                    var nombreCompleto=item.nombre+' '+item.apellidos;
                                    //'<option>ss<option>';                        
                                    $(".usuarios select").append('<option value="'+item.id+'"'+ ((id==item.id) ? " selected" : "")+'>'+item.nombre+' '+item.apellidos+'</option>');
                                    $(".regante select").append('<option value="'+nombreCompleto+'"'+ ((regante==nombreCompleto) ? " selected" : "")+'>'+item.nombre+' '+item.apellidos+'</option>');
                                    //$(".hidrante select").append('<option value="'+nombreCompleto+'">'+item.nombre+' '+item.apellidos+'</option>');
                                    //$(".pagador_gastos select").append('<option value="'+nombreCompleto+'">'+item.nombre+' '+item.apellidos+'</option>');
                                
                                    
                                });                            
                        }
                    });


                    

                };
                    cargarUsuarioEditable();
            })
        </script>
        {!! Form::model($peticion, ['method'=>'PUT','route'=>['peticion.update', $peticion->id]])!!}
    @csrf
<h4><strong>GENERAR PETICIÓN</strong></h4>

<input required type="hidden" id="tipo_aux" value="{{$peticion->tipo}}">
    <div class="col-xs-12">
        <input required type="hidden" id="id_usuario" value="{{$peticion->id_usuario}}" >
        <div class="col-md-4 form-group usuarios">
            <label>Pagador Agua</label>
            <select class="form-control selectBox" name="id_usuario" id="pagador">
                <option selected>--Seleccionar--</option>            
            </select>
        </div>
        <div class="col-md-4 form-group hidrante">
            <input required type="hidden" id="linea_hidrante" value="{{$peticion->linea_hidrante}}" >
            <label>Linea Hidrante</label>
            <select class="form-control selectBox" name="linea_hidrante">
                <option selected>--Seleccionar--</option>
                <option value="Loma Media">Loma Media</option>
                <option value="San Pedro">San Pedro</option>
            </select>
        </div>

        <input required type="hidden" id="tipo" value="{{$peticion->tipo}}" >
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
                        
                    </tbody>
                </table>
    </div>


    <div class="col-xs-12">
        <div class="col-md-3 form-group">
            <label>Caudal Petición (m3/24h)</label>
            <input required type="text" class="form-control" name="caudal_peticion" value="{{$peticion->caudal_peticion}}" >
        </div>

        <div class="col-md-3">
            <label>l/s</label>
            <input required type="text" class="form-control " name="litros_segundo" value="{{$peticion->litros_segundo}}" >
        </div>

        <div class="col-md-3">
            <label>Para Dia</label>
            {{--  <input required type="date" class="form-control" name="fecha_inicio">  --}}
            <input required class="datepicker form-control" name="fecha_inicio" id="fecha_inicio" value="{{$peticion->fecha_inicio}}" >
        </div>

        <div class="col-md-3">
            <label>Fecha Fin</label>
            <input required type="text" class="form-control" name="fecha_fin" id="fecha_fin" value="{{$peticion->fecha_fin}}" >
        </div>

    </div>
        
    <div class="col-xs-12">
        <div class="col-md-2">
            <label>Hora Inicio</label>
            <br>
            <input required type="time" class="form-control" name="hora_inicio" id="hora_inicio" value="{{$peticion->hora_inicio}}" >
        </div>

        <div class="col-md-2">
            <label>Hora Fin</label>
            <br>
            <input required type="text" class="form-control" name="hora_fin" id="hora_fin" value="{{$peticion->hora_fin}}" >
        </div>

        <div class="col-md-2">
            <label>Horas</label>
            <br>
            <input required type="text" class="form-control" name="horas" value="{{$peticion->horas}}"  >
        </div>

        <div class="col-md-2">
            <label>Consumo</label>
            <br>
            <input required type="text" class="form-control" name="consumo" value="{{$peticion->consumo}}"  >
        </div>

    </div>  
    
    <h4><strong>GESTOR DE PETICIONES</strong></h4>
    <div class="col-xs-12">
        <div class="col-md-2 form-group regante">
            <input required type="hidden" id="regante" value="{{$peticion->regante}}"  >
            <label>Regante</label>
            <select class="form-control selectBox" name="regante">
                <option selected>--Seleccionar--</option>
            </select>
        </div>
        <div class="col-md-2 form-group">
            <label>Línea</label>
            <select class="form-control selectBox" name="linea">
                <option value="none" selected>--Seleccionar--</option>
            </select>
        </div>
        <div class="col-md-2 form-group">
            <label>Unidad</label>
            <select class="form-control selectBox" name="unidades">
                <option value="none" selected>--Seleccionar--</option>
            </select>
        </div>
    </div>    
        
        
        
    <div class="col-xs-12">
        
        <div class="col-sm-2">    
            <br>
         <input type="submit" class="btn btn-success btn-xs" value="Guardar">
        </div>
        <div class="col-sm-2">
            <br>
            <a href="/peticion" class="btn btn-danger btn-xs" >Cancelar</a>
        </div>
    </div>   
        
       
    </form>
</div>

@endsection