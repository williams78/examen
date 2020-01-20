@extends('layouts.templateCreate')
@section('con','container70')
@section('routeList') {{ route('users.index') }} @endsection
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
          $('.toast').toast({delay: 8000});
          $('.toast').toast('show');});
        </script>
        <div class="toast">
          <div class="toast-body" style="background-color: #82FA58 ; height: 40px;">
            {{ $message }}
          </div>
        </div>
      @endif
@endsection
@section('contenido')

  <div class="tab-content ">
      @if ($errors->any()) 
      
         <script> 
          $(document).ready(function(){
          
          $('.toast').toast('show');});
        </script>
        <div class="toast" data-autohide="false" style="position: absolute; right: 0;min-width: 250px;">
          <button type="button" class="ml-2 mb-1 close" style="color: #fff" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
          <div class="toast-body" style="background-color: #ec7063; color: #fff; font-size: 12px;">
           
           @if ($errors->has('name'))
              <li class="hidevi"> {{ $errors->first('name') }}  </li>
           @endif    
           @if ($errors->has('email'))
              <li class="hidevi"> {{ $errors->first('email') }} </li>
           @endif    
           @if ($errors->has('password'))
              <li class="hidevi"> {{ $errors->first('password') }} </li>
           @endif
            @if ($errors->has('roles'))
              <li class="hidevi"> {{ $errors->first('roles') }} </li>
           @endif        
          </div>

        </div>
    
      @endif
    
      <div class="cardcus">
        <div class="card-body ">
          {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}

          <div class="row justify-content-center mb-4">
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="input-group">
              <div class="input-group-prepend" >
                <span class="input-group-text color-awe" id="basic-addon1">
                  <i class="fas fa-user"></i>
                </span>
              </div>
              {!! Form::text('name', null, array('placeholder' => __('Name'),'class' => 'form-control inputsb',
             'aria-describedby'=>'basic-addon1','aria-label'=>'Username')) !!}
            </div>
            </div>
        </div>
        
        <div class="row justify-content-center mb-4">   
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="input-group ">
              <div class="input-group-prepend" >
                <span class="input-group-text color-awe" id="basic-addon1">
                  <i class="fas fa-at"></i>
                </span>
              </div>
              {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control inputsb')) !!}
            </div>
              
          </div>
        </div>

     


        <div class="row justify-content-center mb-4">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="input-group ">
                    <div class="input-group-prepend" >
                       <span class="input-group-text color-awe" id="basic-addon1">
                          <i class="fas fa-key"></i>
                      </span>
                    </div>
                    {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control inputsb')) !!}
                </div> 
            </div>
        </div>
        <div class="row justify-content-center mb-4">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="input-group">
                  <div class="input-group-prepend" >
                     <span class="input-group-text color-awe" id="basic-addon1">
                         <i class="fas fa-key"></i>
                     </span>
                  </div>
                  {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control inputsb')) !!}
              </div>
          </div>    
      </div>   
      
      <div class="row justify-content-center">    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="input-group mb-4">
            <div class="input-group-prepend" >
               <span class="input-group-text color-awe" id="basic-addon1">
                   <i class="fas fa-user-cog"></i>
               </span>
            </div>    
            {!! Form::select('roles[]', $roles,[], array('class' => 'form-control inputsb','multiple')) !!}
        </div>
    </div>
    

    
      
       <button type="submit" class="cbtn color-awe" > {{ __('Submit') }}</button>
       
 
{!! Form::close() !!} 

    </div>      

    


        </div>
       
      </div>
    
  </div>
</div>


@endsection