@extends('layouts.templateList')
@section('con','container70')
@section('routeList')
{{ route('permission.index') }}
@endsection
@section('routeAdd') {{ route('permission.create') }} @endsection
@section('nameList') Permisos Activos @endsection
@section('nameAdd')  Agregar Permisos @endsection
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


@section('contenido')


@section('mensage')
 @if ($message = Session::get('success'))
        <script> 
          $(document).ready(function(){
          $('.toast').toast({delay: 6000});
          $('.toast').toast('show');});
        </script>
        <div class="toast" >
          <div class="toast-body " style="background-color: #82FA58 ; height: 40px;">
            {{ $message }}
          </div>
        </div>
      @endif
@endsection


<table class="tbl-header" cellpadding="0" cellspacing="0" border="0" >
 <thead>
  <tr>
     <th>Id</th>
     <th>Nombre</th>
     <th>Descripción</th>
     <th>Modulo</th>
     <th>Eliminar</th>
  </tr>
 </thead>
</table>


<table class="table-hover " cellpadding="0" cellspacing="0" border="0">
      <tbody>  
    @foreach ($permissions as $permission)
    <tr>
        <td>{{ $permission->id }}</td>
        <td>{{ $permission->name }}</td>
        <td>{{ $permission->descripcion }}</td>
        <td>{{ $permission->modulo }}</td>
        <td>
                    <form action="{{ route('permission.destroy',$permission->id) }}" method="POST">   
                     <a class="btn btn-lights btn-md fas fa-shield-alt" href="{{ route('permission.edit',$permission->id) }}"></a>
                 @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-lightd btn-sm waves-effect px-2">
            <i class="fas fa-folder-minus"></i>
          </button>
                    </form>
            
        </td>
    </tr>
    @endforeach
    @section('paginador') {!! $permissions->links() !!} @endsection
     
    </tbody>
</table>





@endsection