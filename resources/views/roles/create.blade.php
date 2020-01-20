@extends('layouts.templateCreate')
@section('con','container70')
@section('routeList') {{ route('roles.index') }} @endsection
@section('routeAdd') {{ route('roles.create') }} @endsection
@section('nameList') Roles Activos @endsection
@section('nameAdd')  Agregar Rol @endsection
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
@section('s2') active @endsection

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
           @if ($errors->has('permission'))
              <li class="hidevi"> {{ $errors->first('permission') }} </li>
           @endif    
          
          </div>

        </div>
    
      @endif

  
    <div class="  cardcus" style="top:-25px;">
        <div class="card-body">

               {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}         
                <div class="tbl-header">
                    <table cellpadding="0" cellspacing="0" border="0" >
                        <thead>
                            <tr>    
                                <th>{!! Form::text('name', null, array('placeholder' => 'Escribe nombre del rol','class' => 'sinborde')) !!}</th>
                            </tr>
                            <tr style="background-color: rgba(189,189,189,0.5);">
                                <th style="text-align: left;">

                                <label for="state"><strong>Permission:</strong></label>
                </th>
                            </tr>
                        </thead>
                    </table>    
                </div>
            

<div class="">
    <table class="table-hover" cellpadding="0" cellspacing="0" border="0">
      <tbody>
        @foreach($permission as $value)
             <tr>
               <td style="text-align: left;">
                {{ Form::checkbox('permission[]', $value->id, false, array('class' => '')) }}
                {{ $value->name }}
               </td>   
               <td>
                 Lista los usurios de todo
               </td> 
             </tr>
        @endforeach
      </tbody>
    </table>          
</div>
<br>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button type="submit" class="btn color-awe">Guardar</button>
</div>
</div>
</div>


{!! Form::close() !!}

@endsection