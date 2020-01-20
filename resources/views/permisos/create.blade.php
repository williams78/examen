@extends('layouts.templateCreate')
@section('con','container70')
@section('routeList') {{ route('permission.index') }} @endsection
@section('routeAdd') {{ route('permission.create') }} @endsection
@section('nameList') Permisos Activos @endsection
@section('nameAdd')  Agregar Permiso @endsection
@section('menuone')  Manage Usuarios @endsection
@section('menuonem') {{ route('users.index') }} @endsection
@section('menutwo')  Manage Roles @endsection
@section('menutwom') {{ route('roles.index') }} @endsection
@section('menutres') Manage Permisos @endsection
@section('menutresm') {{ route('permission.index') }} @endsection
@section('menusone') Manage Productos @endsection
@section('menusonem') {{ route('products.index') }} @endsection
@section('menustwo') Manage Clientes @endsection
@section('menustwom') {{ route('clientes.index') }} @endsection
@section('menustres') Manage Proveedores @endsection
@section('menustresm') {{ route('proveedores.index') }} @endsection
@section('s3') active @endsection

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
      
         <script> 
          $(document).ready(function(){
          
          $('.toast').toast('show');});
        </script>
        <div class="toast" data-autohide="false" style="position: absolute; right: 0;min-width: 250px;">
          <button type="button" class="ml-2 mb-1 close" style="color: #fff" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
          <div class="toast-body" style="background-color: #ec7063; color: #fff; font-size: 12px;">
           
           @if ($errors->has('name'))
              <li class="hidevi"> {{ $errors->first('name') }}  </li>
           @endif 
           @if ($errors->has('modulo'))
              <li class="hidevi"> {{ $errors->first('modulo') }} </li>
           @endif   
           @if ($errors->has('descripcion'))
              <li class="hidevi"> {{ $errors->first('descripcion') }} </li>
           @endif    
          
          </div>

        </div>
    
      @endif





 <div class="  cardcus" style="top:-10px;">
        {!! Form::open(array('route' => 'permission.store','method'=>'POST')) !!}
        <div class="card-body">
          <div class="row justify-content-center mb-4">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe" id="basic-addon1">
                    <i class="fas fa-user-shield"></i>
                  </span>
                </div>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
              </div>
            </div>
          </div>
           <div class="row justify-content-center mb-4">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe" id="basic-addon1">
                    <i class="fas fa-user-shield"></i>
                  </span>
                </div>
                <select id="module" name="modulo" class="form-control">
                <option>Usuarios</option>
                <option>Roles</option>
                <option>Permisos</option>
                <option>Productos</option>
                <option>Clientes</option>
                <option>Proveedores</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row justify-content-center mb-4">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe" id="basic-addon1">
                    <i class="fas fa-shield-alt"></i>
                  </span>
                </div>
                {!! Form::text('descripcion', null, array('placeholder' => 'Descripcion','class' => 'form-control inputsb')) !!}
              </div>
            </div>
          </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn color-awe">Guardar</button>
    </div>
</div>
</div>
{!! Form::close() !!}


@endsection