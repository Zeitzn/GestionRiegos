@extends('layouts.app')

@section('title','Editar datos de Parcela')

@section('content')
<div class="row small">

        

    {!! Form::model($parcela, ['method'=>'PUT','route'=>['parcela.update', $parcela->id]])!!}
    
    @csrf

    <div class="col-xs-12">
        <div class="col-md-2 form-group">
            <label>Parcela</label>
                    
            <input required type="text" class="form-control" name="parcela"  value="{{$parcela->parcela}}" value="{{$parcela->parcela}}">
        </div>
        <div class="col-md-2 form-group">
            <label>Subparcela</label>
                    
            <input required type="number" class="form-control" name="subparcela"  value="{{$parcela->subparcela}}">
        </div>
        <div class="col-md-2 form-group">
            <label>Superficie catastral (Hectáreas)</label>
            <input required type="text" class="form-control" name="superficie_catastral"  value="{{$parcela->superficie_catastral}}">
        </div>
        <div class="col-md-2 form-group form-group">
            <label>Superficie de riego (Hectáreas)</label>
            <input required type="text" class="form-control" name="superficie_riego"  value="{{$parcela->superficie_riego}}">
        </div>

        {{ Form::hidden('riego_precario', 'off') }}

        <div class="col-md-2 form-group">
            <label>Riego en Precario</label>                    
            <input type="checkbox" class="form-control" name="riego_precario"  @if ($parcela->riego_precario=='on') checked @endif>
        </div>
        <div class="col-md-2 form-group">
            <label>Municipio</label>                    
            <input required type="text" class="form-control" name="municipio"  value="{{$parcela->municipio}}">
        </div>
    </div>

    <div class="col-xs-12">
    
    <div class="col-md-2 form-group">
        <label>Sector</label>
        <input required type="text" class="form-control" name="sector"  value="{{$parcela->sector}}">
    </div>
    
               
    <input required type="hidden" class="form-control" id="id_usuario" value="{{$parcela->id_usuario}}">
    <div class="col-md-2 form-group usuarios">
        <label>Propietario</label>
        <br>
        <select class="form-control selectBox" name="id_usuario">    
        </select>
    </div>
     
        
    {{--  <div class="col-md-2 form-group"  value="{{$parcela->parcela}}">
        <label>Cultivo</label>
        <input required type="text" class="form-control" name="cultivo"  value="{{$parcela->cultivo}}">
    </div>  --}}
    <div class="col-md-2 form-group">
        <label>Sup. Ag</label>
        <input required type="text" class="form-control" name="sup_ag"  value="{{$parcela->sup_ag}}">
    </div>
    {{--  <div class="col-md-2 form-group">
        <label>Tipo de Riego</label>
        <input required type="text" class="form-control" name="tipo_riego"  value="{{$parcela->tipo_riego}}">
    </div>  --}}

    <div class="col-md-2 form-group">
        <label>Usos Agrícolas</label>
        
        <input required type="checkbox" class="form-control" disabled  checked>
    </div>
</div>
    <h4><strong>USOS AGRÍCOLAS</strong></h4>
        <h5><strong>Datos de uso</strong></h5>
        <div class="col-xs-12">
                <div class="col-md-3 form-group">
                        <label>Superficie</label>
                        
                        <input required type="text" class="form-control" name="superficie" value="{{$parcela->superficie}}">
                    </div>
                    <div class="col-md-3 form-group">
                        <label>Coef. Amortización</label>
                        
                        <input required type="number" class="form-control" name="amortizacion"  value="{{$parcela->amortizacion}}">
                    </div>

                    
                    {{--  <div class="col-md-3 form-group">
                        <label>Cultivo</label>
                        <input required class="form-control" name="cultivo" disabled value="{{$parcela->cultivo}}" id="cultivo">
                    </div>  --}}

                    <input required type="hidden" class="form-control" id="cultivo" value="{{$parcela->cultivo}}">
                    <div class="col-md-2 form-group cultivo">
                        <label>Cultivo</label>
                        <br>
                        <select class="form-control selectBox" name="cultivo">
                                <option value="none">--Selecionar--</option>
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

                    <input required type="hidden" class="form-control" id="variedad" value="{{$parcela->variedad}}">
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
                        <input required type="hidden" class="form-control" id="arrendatario" value="{{$parcela->arrendatario}}">
                        <label>Usuario Arrendatario</label>
                        <select class="form-control selectBox" name="arrendatario">
                            <option value="none" selected>--Selecionar--</option>
                        </select>
                    </div>
                    <div class="col-md-3 form-group pagador_agua">
                            <input required type="hidden" class="form-control" id="pagador_agua" value="{{$parcela->pagador_agua}}">
                        <label>Usuario Pagador de Agua</label>
                        <select class="form-control selectBox" name="pagador_agua">
                            <option value="none" selected>--Selecionar--</option>
                        </select>
                    </div>
                    <div class="col-md-3 form-group pagador_gastos">
                        <input required type="hidden" class="form-control" id="pagador_gastos" value="{{$parcela->pagador_gastos}}">
                        <label>Usuario pagador de gastos</label>
                        <select class="form-control selectBox" name="pagador_gastos">
                            <option value="none" selected>--Selecionar--</option>
                        </select>
                    </div>
        </div>

        <h5><strong>Datos de riego</strong></h5>
        <div class="col-xs-12">
                <div class="col-md-3 form-group tipo_riego">
                        <input required type="hidden" class="form-control" id="tipo_riego" value="{{$parcela->tipo_riego}}">
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
                <input required type="text" class="form-control" name="hidrante" value="{{$parcela->hidrante}}">
            </div>
        </div>

    
    <div class="col-xs-1">    
            <br>
         <input type="submit" class="btn btn-success btn-xs" value="Guardar">
     </div>
     <div class="col-xs-1">
         <br>
         <a href="/parcela" class="btn btn-danger btn-xs" >Cancelar</a>
     </div>
        
    <!-- </form> -->
    {!! Form::close() !!}
</div>
    <script>

        

            function cargarUsuarioEditable(){
                $.ajax({
                    url: "/auxiliar/cargar",
                    type: "GET",
                    success: function(data){

                        
                        var id=$("#id_usuario").val();
                        

                            $.each(data, function(i, item) {
                                var nombreCompleto=item.nombre+' '+item.apellidos;
                                //'<option>ss<option>';                        
                                $(".usuarios select").append('<option value="'+item.id+'"'+ ((id==item.id) ? " selected" : "")+'>'+item.nombre+' '+item.apellidos+'</option>');
                                $(".arrendatario select").append('<option value="'+nombreCompleto+'">'+item.nombre+' '+item.apellidos+'</option>');
                                $(".pagador_agua select").append('<option value="'+nombreCompleto+'">'+item.nombre+' '+item.apellidos+'</option>');
                                $(".pagador_gastos select").append('<option value="'+nombreCompleto+'">'+item.nombre+' '+item.apellidos+'</option>');
                            
                                //Seleccionar el option segun su valor
                                var cultivo=$("#cultivo").val();  
                                $(".cultivo select").val(cultivo);
                                //Seleccionar el option segun su valor
                                var arrendatario=$("#arrendatario").val();  
                                $(".arrendatario select").val(arrendatario);
                                //Seleccionar el option segun su valor
                                var pagador_agua=$("#pagador_agua").val();  
                                $(".pagador_agua select").val(pagador_agua);
                                //Seleccionar el option segun su valor
                                var pagador_gastos=$("#pagador_gastos").val();  
                                $(".pagador_gastos select").val(pagador_gastos);
                                //Seleccionar el option segun su valor
                                var tipo_riego=$("#tipo_riego").val();  
                                $(".tipo_riego select").val(tipo_riego);
                            });                            
                    }
                }); 

            
            }



            /*function cargarParcelaEditable(){
             

                var cultivo=$("#cultivo").val();   

                $(".cultivo select").each(function(){
                    var opcion='opcion '+$(this).text();
                    //console.log('opcion '+$(this).text());
                    //console.log('valor '+ $(this).attr('value'));
                    console.log(opcion.toString());
                    console.log(cultivo);
                    if(opcion.toString()==cultivo.toString()){
                        console.log(12);
                    }

                 });
            }*/
            
    cargarUsuarioEditable();
    //cargarParcelaEditable();
            
    </script>

@endsection