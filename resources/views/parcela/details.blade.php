@extends('layouts.app')

@section('title','Detalles de Parcelas Catastrales')

@section('content')
<div class="row small">
        <script>

                function cargarUsuarioSeleccionado(){
                    $.ajax({
                        url: "/auxiliar/cargar",
                        type: "GET",
                        success: function(data){
    
                            
                            var id=$("#id_usuario").val();
                            
                            
                                $.each(data, function(i, item) {
                                    
                                    if(id==item.id){
                                        $("#id_usuario").val(item.nombre+' '+item.apellidos);    
                                        
                                    }                       
                                    
                                });
                            
                        }
                    }); 
    
                   
                }
                
        cargarUsuarioSeleccionado()
                
        </script>
        <h4><strong>DETALLES</strong></h4>
        <div class="col-xs-12">
                <div class="col-md-2 form-group">
                        <label>Parcela</label>
                        
                        <input type="text" class="form-control" name="parcela" disabled value="{{$parcela->parcela}}" value="{{$parcela->parcela}}">
                    </div>
                    <div class="col-md-2 form-group">
                        <label>Subparcela</label>
                        
                        <input type="number" class="form-control" name="subparcela" disabled value="{{$parcela->subparcela}}">
                    </div>
                    <div class="col-md-2 form-group">
                        <label>Superficie catastral (Hectáreas)</label>
                        <input type="text" class="form-control" name="superficie_catastral" disabled value="{{$parcela->superficie_catastral}}">
                    </div>
                    <div class="col-md-2 form-group form-group">
                        <label>Superficie de riego (Hectáreas)</label>
                        <input type="text" class="form-control" name="superficie_riego" disabled value="{{$parcela->superficie_riego}}">
                    </div>
                    <div class="col-md-2 form-group">
                        <label>Riego en Precario</label>
                        
                        <input type="checkbox" class="form-control" name="riego_precario" disabled @if ($parcela->riego_precario=='on') checked @endif>
                    </div>
                    <div class="col-md-2 form-group">
                        <label>Municipio</label>
                        
                        <input type="text" class="form-control" name="municipio" disabled value="{{$parcela->municipio}}">
                    </div>
        </div>
        
        <div class="col-xs-12">
                <div class="col-md-2 form-group">
                        <label>Sector</label>
                        <input type="text" class="form-control" name="sector" disabled value="{{$parcela->sector}}">
                    </div>
                    <div class="col-md-2 form-group">
                        <label>Propietario</label>            
                        <input class="form-control" name="id_usuario" disabled value="{{$parcela->id_usuario}}" id="id_usuario">
                            
                    </div>
                    {{--  <div class="col-md-2 form-group" disabled value="{{$parcela->parcela}}">
                        <label>Cultivo</label>
                        <input type="text" class="form-control" name="cultivo" disabled value="{{$parcela->cultivo}}">
                    </div>  --}}
                    <div class="col-md-2 form-group">
                        <label>Sup. Ag</label>
                        <input type="text" class="form-control" name="sup_ag" disabled value="{{$parcela->sup_ag}}">
                    </div>
                    {{--  <div class="col-md-2 form-group">
                        <label>Tipo de Riego</label>
                        <input type="text" class="form-control" name="tipo_riego" disabled value="{{$parcela->tipo_riego}}">
                    </div>  --}}
            
                    <div class="col-md-2 form-group">
                        <label>Usos Agrícolas</label>
                        
                        <input type="checkbox" class="form-control" disabled  checked>
                    </div>
        </div>  
        
        

        <h4><strong>USOS AGRÍCOLAS</strong></h4>
        <h5><strong>Datos de uso</strong></h5>
        <div class="col-xs-12">
                <div class="col-md-3 form-group">
                        <label>Superficie</label>
                        
                        <input type="text" class="form-control" name="superficie" value="{{$parcela->superficie}}" disabled>
                    </div>
                    <div class="col-md-3 form-group">
                        <label>Coef. Amortización</label>
                        
                        <input type="number" class="form-control" name="amortizacion"  value="{{$parcela->amortizacion}}" disabled>
                    </div>

                    
                    <div class="col-md-3 form-group">
                        <label>Cultivo</label>
                        <input class="form-control" name="cultivo" disabled value="{{$parcela->cultivo}}" id="cultivo">
                    </div>

                    <div class="col-md-3 form-group">
                        <label>Variedad</label>
                        <input class="form-control" name="variedad" disabled value="{{$parcela->variedad}}" id="variedad">
                    </div>
        </div>

        <h5><strong>Usuarios Uso Parcela</strong></h5>
        <div class="col-xs-12">
            <div class="col-md-3 form-group arrendatario">
                <label>Usuario Arrendatario</label>
                <input class="form-control" name="arrendatario" disabled value="{{$parcela->arrendatario}}" id="arrendatario">
            </div>
            <div class="col-md-3 form-group pagador_agua">
                <label>Usuario Pagador de Agua</label>
                <input class="form-control" name="pagador_agua" disabled value="{{$parcela->pagador_agua}}" id="pagador_agua">
            </div>
            <div class="col-md-3 form-group pagador_gastos">
                <label>Usuario pagador de gastos</label>
                <input class="form-control" name="pagador_gastos" disabled value="{{$parcela->pagador_gastos}}" id="pagador_gastos">
            </div>
        </div>

        <h5><strong>Datos de riego</strong></h5>
        <div class="col-xs-12">
            <div class="col-md-3 form-group">
                <label>Tipo de Riego</label>
                <input class="form-control" name="tipo_riego" disabled value="{{$parcela->tipo_riego}}" id="tipo_riego">
            </div>
            <div class="col-md-4 form-group">
                <label>Pto. Hidrante que Riega el Uso</label>
                <input type="text" class="form-control" name="hidrante" value="{{$parcela->hidrante}}" disabled>
            </div>
        </div>


 
        
        <div class="col-xs-1">    
               <br>
               <a href="{{route('parcela.index')}}" class="btn btn-primary btn-xs" >Volver</a>  
        </div>
        <div class="col-xs-1">
            <br>
            <a href="{{route('parcela.edit',$parcela->id)}}" class="btn btn-warning btn-xs" >Editar</a>  
        </div>
        
        
       
   
</div>

    

@endsection