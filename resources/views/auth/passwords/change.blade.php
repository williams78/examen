@extends('layouts.app')  
   
 @section('title')  
   Cambio de contraseña  
 @endsection  
   
 @section('content')  
   <div class="container">  
     <div class="row">  
       <div class="col-md-8 col-md-offset-2">  
         <div class="panel panel-default">  
           <div class="panel-heading">Change Password</div>  
           <div class="panel-body">  
             <form class="form-horizontal" method="POST" role="form" action="{{ route('password.change.post') }}">  
               @if (count($errors) > 0)  
                 <div class="alert alert-danger">  
                   <ul>  
                     @foreach ($errors->all() as $error)  
                       <li>{{ $error }}</li>  
                     @endforeach  
                   </ul>  
                 </div>  
               @endif  
               {{ csrf_field() }}  
               {{-- Current password --}}  
               <div class="form-group{{ $errors->has('current_password') ? ' has-error' : '' }}">  
             
   
               {{-- New password --}}  
               <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">  
                 <label for="password" class="col-md-4 control-label">Password</label>  
   
                 <div class="col-md-6">  
                   <input id="password" type="password" class="form-control" name="password" required>  
   
                   @if ($errors->has('password'))  
                     <span class="help-block">  
                     <strong>{{ $errors->first('password') }}</strong>  
                   </span>  
                   @endif  
                 </div>  
               </div>  
   
               {{-- Confirm new password --}}  
               <div class="form-group">  
                 <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>  
   
                 <div class="col-md-6">  
                   <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>  
                 </div>  
               </div>  
   
               {{-- Submit button --}}  
               <div class="form-group">  
                 <div class="col-md-6 col-md-offset-4">  
                   <button type="submit" class="btn btn-primary">  
                     Change password  
                   </button>  
                 </div>  
               </div>  
   
             </form>  
           </div>  
           <div class="panel-footer">Hello</div>  
         </div>  
       </div>  
     </div>  
   </div>  
 @endsection