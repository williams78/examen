@extends('layouts.templateList')
@section('con','container70')
@section('routeList')
{{ route('roles.index') }}
@endsection
@section('routeAdd') {{ route('roles.create') }} @endsection
@section('nameList') Roles Activos @endsection
@section('nameAdd')  Agregar Rol @endsection
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

@section('search')

@endsection    

@section('contenido')

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

<div class="tbl-header">
<table cellpadding="0" cellspacing="0" border="0" >
    <thead>
  <tr>
     <th>No</th> 
     <th>Name</th>
     <th>Action</th>
  </tr>
  </thead>

</table>
</div>

    <table class="table-hover" cellpadding="0" cellspacing="0" border="0">
      <tbody>
    @foreach ($roles as $key => $role)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $role->name }}</td>
        <td>
           
            @can('Editar-Roles') 
                <a class="btn btn-lights btn-md waves-effect px-2 fa fa-edit" href="{{ route('roles.edit',$role->id) }}">
                </a>
            @endcan
            @can('Eliminar-Roles')
                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                <button type="submit" class="btn btn-lightd btn-sm waves-effect px-2 fa fa-trash">
           
          </button>
                   
                {!! Form::close() !!}
            @endcan
        </td>
    </tr>
    @endforeach
    </tbody>

</table>


{!! $roles->render() !!}


@endsection