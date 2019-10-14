@extends('layouts.app')


@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-12 logousuario">
      
      <h3>{{ __('Create New User') }} <i class="fas fa-user-plus"></i> </h3>
    </div>
    
</div>



{!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">@if ($errors->has('name'))
                <strong>
                   <div class="alertas">
                      {{ $errors->first('name') }}
                   </div>   
                </strong>
            @endif</div>
    <div class="col-xs-6 col-sm-6 col-md-6">@if ($errors->has('email'))
                <strong>
                    <div class="alertas">
                      {{ $errors->first('email') }}
                    </div>  
                </strong>
            @endif</div>
</div>
<div class="row" style="padding-top: 5px;">
   
    <div class="col-xs-6 col-sm-6 col-md-6" >
        <div class="input-group mb-4">
            <div class="input-group-prepend" >
                <span class="input-group-text color-awe" id="basic-addon1">
                    <i class="fas fa-user"></i>
                </span>
            </div>
            {!! Form::text('name', null, array('placeholder' => __('Name'),'class' => 'form-control',
            'aria-describedby'=>'basic-addon1','aria-label'=>'Username')) !!}
       </div>
    </div>
      
   
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="input-group mb-4">
            <div class="input-group-prepend" >
               <span class="input-group-text color-awe" id="basic-addon1">
                   <i class="fas fa-at"></i>
               </span>
            </div>
            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
            
        </div>
    </div>
</div>
 <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">@if ($errors->has('name'))
                <strong>
                   <div class="alertas">
                      {{ $errors->first('password') }}
                   </div>   
                </strong>
            @endif</div>
    <div class="col-xs-6 col-sm-6 col-md-6">
            @if ($errors->has('email'))
                <strong>
                    <div class="alertas">
                      {{ $errors->first('confirm-password') }}
                    </div>  
                </strong>
            @endif</div>
</div>    
   
<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="input-group mb-4">
            <div class="input-group-prepend" >
               <span class="input-group-text color-awe" id="basic-addon1">
                  <i class="fas fa-key"></i>
              </span>
            </div>
            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
        </div> 
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="input-group mb-4">
            <div class="input-group-prepend" >
               <span class="input-group-text color-awe" id="basic-addon1">
                   <i class="fas fa-key"></i>
               </span>
            </div>
            {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
        </div>
    </div>    
</div>   
<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
        @if ($errors->has('name'))
                <strong>
                   <div class="alertas">
                      {{ $errors->first('roles') }}
                   </div>   
                </strong>
        @endif
    </div>
</div>    

<div class="row">    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="input-group mb-4">
            <div class="input-group-prepend" >
               <span class="input-group-text color-awe" id="basic-addon1">
                   <i class="fas fa-user-cog"></i>
               </span>
            </div>    
            {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
        </div>
    </div>
        
    <div class="col-xs-12 col-sm-12 col-md-12 text-right">
    
       <a class="cbtn cbtn-danger" href="{{ route('users.index') }}"> {{ __('Back') }} </a>
       <button type="submit" id="create" class="cbtn cbtn-info" > {{ __('Submit') }}</button>
 
    </div>
</div>
</div>


@endsection