<<<<<<< HEAD
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
=======
@extends('layouts.app')


@section('content')
<div class="container">
<div class="row">


<div class="col-lg-10 logousuarioleft" >
      <h3><i class="fas fa-users"></i> {{__('Users Management')}}</h3>
    </div>  
    <div class="col-lg-2 margin-tb ">
        @can('Agregar_Usuarios')
            <a class="cbtn " href="{{ route('users.create') }}"><i class="fas fa-user-plus"></i> {{ __('Create New User') }}</a>
         @endcan 
    </div>
</div>




<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
<table class="table table-sm table-borderled table-hover" >
  <thead class="thead-grayl">
 <tr >
   <th class="borderLeft">No</th>
   <th width="270px" >Name</th>
   <th>Email</th>
   <th>Roles</th>
   <th width="120px" class="borderRight">Action</th>
>>>>>>> 92b34ddc6d16892957e62b7c682b578e157f1fa7
 </tr>

 </thead>
</table>

    <table class="table-hover"  cellpadding="0" cellspacing="0" border="0">
      <tbody>
 @foreach ($data as $key => $user)
<<<<<<< HEAD
  <tr>
    <td width="60px" class="numero">{{ $user->id }}</td>
    <td width="270px">{{ $user->name }}</td>
=======
  <tr style="border-left: 1px #CFD8DC solid">
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
>>>>>>> 92b34ddc6d16892957e62b7c682b578e157f1fa7
    <td>{{ $user->email }}</td>
    <td>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge badge-success">{{ $v }}</label>
        @endforeach
      @endif
    </td>
<<<<<<< HEAD
    <td width="120px">
=======
    <td style="border-right: 1px #CFD8DC solid">
>>>>>>> 92b34ddc6d16892957e62b7c682b578e157f1fa7
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
<<<<<<< HEAD
      
     
=======
>>>>>>> 92b34ddc6d16892957e62b7c682b578e157f1fa7
  </tr>
 @endforeach
 <tr>
  <td colspan="5" >
  
  </td>
 </tr>

</tbody>
</table>
{!! $data->render() !!}





</div>  


<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">




</div>  



<<<<<<< HEAD


   








=======
>>>>>>> 92b34ddc6d16892957e62b7c682b578e157f1fa7


@endsection