@extends('layouts.templateEdit')
@section('con','container70')
@section('routeList') {{ route('clientes.index') }} @endsection
@section('routeAdd') {{ route('clientes.create') }} @endsection
@section('nameList') Clientes Activos @endsection
@section('nameAdd')  Agregar Cliente @endsection
@section('nameEdit')  Editar Cliente @endsection
@section('menutresm') {{ route('permission.index') }} @endsection
@section('menusone') Manage Productos @endsection
@section('menusonem') {{ route('products.index') }} @endsection
@section('menustwo') Manage Clientes @endsection
@section('menustwom') {{ route('clientes.index') }} @endsection
@section('menustres') Manage Proveedores @endsection
@section('menustresm') {{ route('proveedores.index') }} @endsection
@section('s3') active @endsection
@section('contenido')
 

  
  <div class="tab-content">
    @if ($errors->any()) 
      <script> 
        $(document).ready(function(){
          $('.toast').toast('show');});
      </script>
      <div class="toast" data-autohide="false" style="position: absolute; right: 0;min-width: 280px;">
        <button type="button" class="ml-2 mb-1 close" style="color: #fff" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        <div class="toast-body" style="background-color: #ec7063; color: #fff; font-size: 12px;">
          @if ($errors->has('name'))
            <li class="hidevi"> {{ $errors->first('name') }}  </li>
          @endif    
          @if ($errors->has('email'))
            <li class="hidevi"> {{ $errors->first('email') }} </li>
          @endif    
          @if ($errors->has('password'))
            <li class="hidevi"> {{ $errors->first('password') }} </li>
          @endif
          @if ($errors->has('roles'))
            <li class="hidevi"> {{ $errors->first('roles') }} </li>
          @endif        
        </div>
      </div>
    @endif

    <div id="home" class="container tab-pane active"><br>
      <div class="  card_producto" style="top:-25px;">
        <div class="card-body">
          {!! Form::model($clientes, ['method' => 'PATCH','route' => ['clientes.update', $clientes->id_codigo]]) !!}
          <div class="row justify-content-center mb-4">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe2 getSizeEditSpas" id="basic-addon1">
                    <div class="getSizeFontEditProd"> Nombre </div>
                  </span>
                </div>
                {!! Form::text('pr_nombre', null, array('placeholder' => 'Nombre del Cliente','class' => 'form-control inputsb')) !!}
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe2 getSizeEditSpas" id="basic-addon1">
                    <div class="getSizeFontEditProd"> Contacto </div>
                  </span>
                </div>
                {!! Form::text('pr_contacto', null, array('placeholder' => 'Nombre del Contacto','class' => 'form-control inputsb')) !!}
              </div>
            </div>
             
          </div>
        <div class="row justify-content-center mb-4">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe2 getSizeEditSpas" id="basic-addon1">
                    <div class="getSizeFontEditProd"> Email </div>
                  </span>
                </div>
                {!! Form::text('pr_correo', null, array('placeholder' => 'Email','class' => 'form-control inputsb')) !!}
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="input-group">
                <div class="input-group-prepend"> 
                  <span class="input-group-text color-awe2 getSizeEditSpas" id="basic-addon1">
                    <div class="getSizeFontEditProd"> Telefono </div>
                  </span>
                </div>
                 {!! Form::text('pr_telefono', null, array('placeholder' => 'Telefono','class' => 'form-control inputsb')) !!}
                </div>
            </div>
          </div>
        <div class="row justify-content-center mb-4">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe2 getSizeEditSpas" id="basic-addon1">
                    <div class="getSizeFontEditProd"> Calle </div>
                  </span>
                </div>
                 {!! Form::text('pr_calle', null, array('placeholder' => 'Calle','class' => 'form-control inputsb')) !!}
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe2 getSizeEditSpas" id="basic-addon1">
                    <div class="getSizeFontEditProd"> Colonia </div>
                  </span>
                </div>
                {!! Form::text('pr_colonia', null, array('placeholder' => 'Colonia','class' => 'form-control inputsb')) !!}
                </div>
            </div>
          </div>
          <div class="row justify-content-center mb-4">
             <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe2 getSizeEditSpas" id="basic-addon1">
                    <div class="getSizeFontEditProd"> C.P. </div>
                  </span>
                </div>
                {!! Form::text('pr_codigo', null, array('placeholder' => 'Codigo Postal','class' => 'form-control inputsb')) !!}
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe2 getSizeEditSpas" id="basic-addon1">
                    <div class="getSizeFontEditProd"> Ciudad </div>
                  </span>
                </div>
                 {!! Form::text('pr_ciudad', null, array('placeholder' => 'Ciudad','class' => 'form-control inputsb')) !!}
              </div>
            </div>
          </div>
          <div class="row justify-content-center mb-4">
     <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe2 getSizeEditSpas" id="basic-addon1">
                    <div class="getSizeFontEditProd"> Estado </div>
                  </span>
                </div>
                 {!! Form::text('pr_estado', null, array('placeholder' => 'Estado','class' => 'form-control inputsb')) !!}
              </div>
            </div>
          <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe2 getSizeEditSpas" id="basic-addon1">
                    <div class="getSizeFontEditProd"> Pais </div>
                  </span>
                </div>
                 {!! Form::text('pr_pais', null, array('placeholder' => 'Pais','class' => 'form-control inputsb')) !!}
             </div>
            </div>
</div>
          <div class="row justify-content-center">    
             
              <button type="submit" class="cbtn color-awe">Guardar</button>
            

          </div>   
          {!! Form::close() !!}
      <div>
    </div>
  </div>
</div>
</div>
</div>
</div>
@endsection