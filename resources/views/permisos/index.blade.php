@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Role Management</h2>
        </div>
        <div class="pull-right">
        
            <a class="btn btn-success" href="{{ route('permission.create') }}"> Create New Role</a>
        
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif


<table class="table table-bordered">
  <tr>
     <th>No</th>
     <th>Name</th>
     <th width="280px">Action</th>
  </tr>
    @foreach ($permissions as $permission)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $permission->name }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('permission.show',$permission->id) }}">Show</a>
            
                <a class="btn btn-primary" href="{{ route('permission.edit',$permission->id) }}">Edit</a>
            
                {!! Form::open(['method' => 'DELETE','route' => ['permission.destroy', $permission->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            
        </td>
    </tr>
    @endforeach
</table>


{!! $permissions->render() !!}


@endsection