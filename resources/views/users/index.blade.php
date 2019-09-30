@extends('layouts.app')


@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-1" style="text-align: right; color: #cfd8dc">
      <h2><i class="fas fa-users pull-left"></i></h2>
    </div>  
    <div class="col-lg-8 margin-tb" >
        <h3>{{__('Users Management')}}</h3>
    </div>
    <div class="col-lg-3 margin-tb">
         @can('Agregar_Usuarios')
            <a class="cbtn " href="{{ route('users.create') }}"> {{ __('Create New User') }}</a>
         @endcan 
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif


<table class="table table-sm table-hover">
  <thead class="thead-grayl">
 <tr>
   <th style="border-top-left-radius:5px;">No</th>
   <th width="270px" >Name</th>
   <th>Email</th>
   <th>Roles</th>
   <th width="120px" style="border-top-right-radius:5px">Action</th>
 </tr>
 </thead>
 

 @foreach ($data as $key => $user)
  <tr>
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
    <td>
      <form action="{{ route('users.destroy',$user->id) }}" method="POST">

                    <a style="color: #3393E0" class="btn btn-light btn-md waves-effect px-2 far fa-eye" href="{{ route('users.show',$user->id) }}"></a>
                    {{-- @can('user-edit')--}}
                    <a style="color:#F57C0C"
                    class="btn btn-light btn-md waves-effect px-2 far fa-edit" href="{{ route('users.edit',$user->id) }}"></a>
                    {{--  @endcan--}}
                    @csrf
                    @method('DELETE')
                   {{-- @can('user-delete') --}}
                    <button type="submit" 
                     style="color: #F51A0C" 
                    class="btn btn-light btn-sm waves-effect px-2">
                      <i class="far fa-trash-alt"></i>
                    </button>
                   {{--  @endcan--}}
                </form>



       {{-- <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
       <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}--}}
    </td>
  </tr>
 @endforeach

</table>


{!! $data->render() !!}


@endsection