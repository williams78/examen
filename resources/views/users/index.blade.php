@extends('layouts.templateList')
@section('con','container70')
@section('routeList')
{{ route('users.index') }}
@endsection
@section('routeAdd') {{ route('users.create') }} @endsection
@section('nameList') Usuarios Activos @endsection
@section('nameAdd')  Agregar Usuario @endsection
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
@section('s1') active @endsection

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
@section('contenido')
    

<table class="tbl-header" cellpadding="0" cellspacing="0" border="0" >
  <thead>
 <tr>
   <th width="60px">No</th>
   <th width="270px">Nombre</th>
   <th>Correo</th>
   <th>Roles</th>
   <th width="120px">Acciones</th>
 </tr>

 </thead>
</table>

    <table class="table-hover"  cellpadding="0" cellspacing="0" border="0">
      <tbody>
 @foreach ($data as $key => $user)
  <tr>
    <td width="60px" class="numero">{{ $user->id }}</td>
    <td width="270px">{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge badge-success">{{ $v }}</label>
        @endforeach
      @endif
    </td>
    <td width="120px">
      <form action="{{ route('users.destroy',$user->id) }}" method="POST">
        @can('Editar_Usuarios')
          <a  class="btn btn-lights btn-md waves-effect px-2 fas fa-user-edit" href="{{ route('users.edit',$user->id) }}"></a>
        @endcan
        @csrf
        @method('DELETE')
        @can('Eliminar_Usuarios')
          <button type="submit" class="btn btn-lightd btn-sm waves-effect px-2">
            <i class="fas fa-user-times"></i>
          </button>
        @endcan
      </form>
     </td>
      
     
  </tr>
 @endforeach

</tbody>
</table>




   










@endsection