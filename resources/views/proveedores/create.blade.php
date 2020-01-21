@extends('layouts.template')
@section('con','container70')
@section('boton')
    <a class="nav-link active waves-light show" href="{{ route('clientes.create') }}"><i class="fas fa-user-plus"></i> Nuevo Cliente</a>
@endsection
@section('boton1')
<a class="nav-link " href="{{ route('clientes.index') }}" ><i class="fas fa-user-plus"></i> Listado de Clientes</a>
@endsection
@section('mensage')
 @if ($message = Session::get('success'))
        <script> 
          $(document).ready(function(){
          $('.toast').toast({delay: 8000});
          $('.toast').toast('show');});
        </script>
        <div class="toast">
          <div class="toast-body" style="background-color: #82FA58 ; height: 40px;">
            {{ $message }}
          </div>
        </div>
      @endif
@endsection
@section('contenido')

  
   @if ($errors->any()) 
      
        
        <div class="toast" data-autohide="false" style="position: absolute; right: 0;min-width:100%;">
          <button type="button" class="ml-2 mb-1 close" style="color: #fff" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
          <div class="toast-body" style="background-color: #ec7063; color: #fff; font-size: 12px;">
             <li class="hidevi"> 
              
           @if ($errors->has('pr_nombre'))
               {{ $errors->first('pr_nombre') }}  
           @endif    
           @if ($errors->has('pr_contacto'))
              {{ $errors->first('pr_contacto') }} 
           @endif    
           
           @if ($errors->has('pr_calle'))
               {{ $errors->first('pr_calle') }} 
           @endif
            @if ($errors->has('pr_ciudad'))
               {{ $errors->first('pr_ciudad') }}
           @endif
           @if ($errors->has('pr_estado'))
              {{ $errors->first('pr_estado') }} 
           @endif        
           @if ($errors->has('pr_pais'))
              {{ $errors->first('pr_pais') }} 
           @endif        
           @if ($errors->has('pr_codigo'))
              {{ $errors->first('pr_codigo') }} 
           @endif        
           @if ($errors->has('pr_correo'))
              {{ $errors->first('pr_correo') }} 
           @endif        
           @if ($errors->has('pr_telefono'))
               {{ $errors->first('pr_telefono') }} 
           @endif     
            @if ($errors->has('pr_colonia'))
               {{ $errors->first('pr_colonia') }} 
           @endif  
            @if ($errors->has('pr_telefono'))
               {{ $errors->first('pr_telefono') }} 
           @endif           
          </div>

        </div>
    
      @endif

<div class="card_producto" style="top:-5px;">

      {!! Form::open(array('route' => 'proveedores.store','method'=>'POST')) !!}
      @csrf
<div class="card-body">

         <div class="row justify-content-center mb-4">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe" id="basic-addon1">
                    <i class="fas fa-dolly"></i>
                  </span>
                </div>
                <input type="text" name="pr_nombre" class="form-control inputsb" placeholder="Nombre del Cliente">
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="input-group">
              <input type="text" name="pr_contacto" class="form-control inputsb" placeholder="Nombre del Contacto">
              </div>
            </div>
          </div>
        <div class="row justify-content-center mb-4">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe" id="basic-addon1">
                    <i class="fas fa-dolly"></i>
                  </span>
                </div>
                <input type="text" name="pr_correo" class="form-control inputsb" placeholder="Correo">
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe" id="basic-addon1">
                    <i class="fas fa-dolly"></i>
                  </span>
                </div>
                 <input type="text" name="pr_telefono" class="form-control inputsb" placeholder="Telefono">
                </div>
            </div>
          </div>
        <div class="row justify-content-center mb-4">
            <div class="col-xs-4 col-sm-4 col-md-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe" id="basic-addon1">
                    <i class="fas fa-dolly"></i>
                  </span>
                </div>
                 <input type="text" name="pr_calle" class="form-control inputsb" placeholder="Calle">
              </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe" id="basic-addon1">
                    <i class="fas fa-dolly"></i>
                  </span>
                </div>
                <input type="text" name="pr_colonia" class="form-control inputsb" placeholder="Colonia">
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe" id="basic-addon1">
                    <i class="fas fa-dolly"></i>
                  </span>
                </div>
                  <input type="text" name="pr_codigo" class="form-control inputsb" placeholder="Codigo Postal">
              </div>
            </div>
          </div>
          <div class="row justify-content-center mb-4">
            <div class="col-xs-4 col-sm-4 col-md-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe" id="basic-addon1">
                    <i class="fas fa-dolly"></i>
                  </span>
                </div>
                <input type="text" name="pr_ciudad" class="form-control inputsb" placeholder="Ciudad">
              </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe" id="basic-addon1">
                    <i class="fas fa-dolly"></i>
                  </span>
                </div>
                <input type="text" name="pr_estado" class="form-control inputsb" placeholder="Estado">
              </div>
            </div>
          <div class="col-xs-4 col-sm-4 col-md-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe" id="basic-addon1">
                    <i class="fas fa-dolly"></i>
                  </span>
                </div>
                <input type="text" name="pr_pais" class="form-control inputsb" placeholder="Pais">
             </div>
            </div>
             
          </div>
           
       
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
  </div>  


{!! Form::close() !!} 

@endsection