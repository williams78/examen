@extends('home')
@section('title','Listado de Usuarios')
@section('con','container70')
@section('roles')
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
 </tr>
 </thead>
 

 @foreach ($data as $key => $user)
  <tr style="border-left: 1px #CFD8DC solid">
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge badge-success">{{ $v }}</label>
        @endforeach
      @endif
    </td>
    <td style="border-right: 1px #CFD8DC solid">
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
 <tr>
  <td colspan="5" >
  
  </td>
 </tr>

</table>





</div>  




@endsection

@section('paginador')
{!! $data->render() !!}
@endsection