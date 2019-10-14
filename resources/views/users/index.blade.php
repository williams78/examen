@extends('layouts.app')


@section('content')
<div class="container">
<div class="row">


<div class="col-lg-1" style="text-align: right; color: #455A64">
      <h2><i class="fas fa-users pull-left"></i></h2>
    </div>  
    <div class="col-lg-9 margin-tb" >
        <h3>{{__('Users Management')}}</h3>
    </div>
    <div class="col-lg-2 margin-tb ">
         
         @can('Agregar_Usuarios')
            <a class="cbtn " href="{{ route('users.create') }}"><i class="fas fa-user-plus"></i> {{ __('Create New User') }}</a>
         @endcan 
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
<table class="table table-sm table-borderled table-hover" >
  <thead class="thead-grayl">
 <tr >
   <th style="border-top-left-radius: 5px;">No</th>
   <th width="270px" >Name</th>
   <th>Email</th>
   <th>Roles</th>
   <th width="120px" style="border-top-right-radius: 5px;">Action</th>
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
          <a  class="btn btn-light btn-sm waves-effect px-2 far fa-edit" href="{{ route('users.edit',$user->id) }}"></a>
        @endcan
        @csrf
        @method('DELETE')
        @can('Eliminar_Usuarios')
          <button type="submit" style="color: red" class="btn btn-light btn-sm waves-effect px-2">
            <i class="far fa-trash-alt"></i>
          </button>
        @endcan
      </form>
     </td>
  </tr>
 @endforeach
 <tr>
  <td colspan="5" >
  {!! $data->render() !!}
  </td>
 </tr>

</table>






</div>  


<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">




</div>  







@endsection