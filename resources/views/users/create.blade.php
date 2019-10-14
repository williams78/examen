@extends('layouts.app')


@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-1" style="text-align: right; color: #455A64;">
      <h3><i class="fas fa-user-plus pull-left"></i></h3>
    </div>  
    <div class="col-lg-8 ">
      <h3>{{ __('Create New User') }}</h3>
    </div>
    
</div>


@if (count($errors) > 0)
  <div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif

{!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
<div class="row" style="padding-top: 5px;">
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
    <div class="col-xs-12 col-sm-12 col-md-12 text-right">
    
       <a class="cbtn cbtn-danger" href="{{ route('users.index') }}"> {{ __('Back') }} </a>
       <button type="submit" class="cbtn cbtn-info" > {{ __('Submit') }}</button>
 
    </div>
</div>
</div>


@endsection