@extends('layouts.app')


@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-1" style="text-align: right; color: #cfd8dc">
      <h3><i class="fas fa-user-plus pull-left"></i></h3>
    </div>  
    <div class="col-lg-8 margin-tb">
        <div class="pull-left">
            <h3>{{ __('Create New User') }}</h3>
        </div>
    </div>
    <div class="col-lg-1 margin-tb">
        <div class="pull-right">
            <a class="cbtn" href="{{ route('users.index') }}">{{ __('Back') }} </a>
        </div>
    </div>    
    {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
    <div class="col-lg-1 margin-tb">
        <div class="pull-right">
            <button type="submit" class="cbtn">{{ __('Submit') }}</button>
        </div>
    </div>    
</div>


@if (count($errors) > 0)
  <div class="alert alert-danger">
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif


<div class="row" style="padding-top: 25px;">
    <div class="col-xs-6 col-sm-6 col-md-6" >
        <div class="form-group">
           {{--  <strong>{{ __('Name') }}:</strong>--}}
             {!! Form::text('name', null, array('placeholder' => __('Name'),'class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            {{--<strong>Email:</strong>--}}
              {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            {{--<strong>Password:</strong>--}}
            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
           {{-- <strong>Confirm Password:</strong>--}}
            {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Role:</strong>
             
             {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        
    </div>
</div>
</div>


@endsection