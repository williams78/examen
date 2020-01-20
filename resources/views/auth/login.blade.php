@extends('layouts.app')
 
@section('content')
<div id="home" class="container tab-pane active"><br>
     
      <div class="  card_producto" style="top:-25px;">
        
         <div class="card-body">

       
          <div class="row justify-content-center fa-1x ">
              <label style="color: #909090"> INICIAR SESIÓN </label>
          </div>  
          <form method="POST" class="forms" action="{{ route('login') }}">
          @csrf
          <br>
           
          <div class="row justify-content-center mb-4">
                          <div class="col-xs-4 col-sm-4 col-md-4">
               <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
               </div>
               <div class="col-xs-6 col-sm-6 col-md-6">
                <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                     @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                @enderror
                </div>
           </div>  
           <div class="row justify-content-center mb-4">
            <div class="col-xs-4 col-sm-4 col-md-4">
               <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>
           </div>
               <div class="col-xs-6 col-sm-6 col-md-6">
                <input id="password" type="password" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
           </div> 
           <div class="row justify-content-center mb-4">
            <div class="text-md-right col-xs-4 col-sm-4 col-md-4">
              
                                
           </div>
               <div class="text-md-right col-xs-6 col-sm-6 col-md-6">
                <button type="submit" class="btn color-awe">
                                    {{ __('Login') }}
                                </button>
                <button type="submit" class="btn color-awe">
                                    Cancelar
                                </button>

                </div>
           </div> 
        </form>
    </div>
</div>
   
@endsection
