@extends('layouts.templateEdit')
@section('con','container70')
@section('routeList') {{ route('users.index') }} @endsection
@section('routeAdd') {{ route('users.create') }} @endsection
@section('nameList') Usuarios Activos @endsection
@section('nameAdd')  Agregar Usuario @endsection
@section('nameEdit')  Editar Usuario @endsection
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
@section('s2') active @endsection

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
{!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}


   <div class="  cardcus" style="top:-10px;">
      <div class="card-body">
         <div class="tbl-header">
             <table cellpadding="0" cellspacing="0" border="0" >
                <thead>
                  <tr style="background-color: rgba(189,189,189,0.5);">
                    <td>ROL</td>
                    <td>{!! Form::text('name', null, array('placeholder' => 'Name','class' => 'sinborde')) !!}</td>
                  </tr>
                  <tr>
                     <th>Permisos</th> 
                     <th>Descripciòn</th>
                  </tr>
                </thead>
             </table>
          </div>    
          <div class="">
             <table class="table-hover" cellpadding="0" cellspacing="0" border="0">
                <tbody>
                  @foreach($permission as $value)
                    <tr>
                       <td style="text-align: left;">
                          {{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                          {{ $value->name }}
                       </td>   
                       <td>
                          Lista los usurios de todo
                       </td> 
                    </tr>
                  @endforeach
                </tbody>
             </table>      
             
          </div>
          
      </div>
<div class="row justify-content-center">    
             
              <button type="submit" class="cbtn color-awe">Guardar</button>
            

          </div>   
</div>

{!! Form::close() !!}


@endsection