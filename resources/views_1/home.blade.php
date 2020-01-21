
@extends('layouts.app')
@section('barra-nav')
   @include('layouts.navegacion')
@endsection

@section('content')
<div class="@yield('con')">
<!-- Classic tabs -->
<div class="tabs-code">

  <ul class="nav tabs-color" id="rol" role="tablist">
    <li class="nav-item">
      <a class="nav-link waves-light active show" id="tab-permisos-usuario" data-toggle="tab" href="#tab-usuario"
        role="tab" aria-controls="tab-usuario" aria-selected="true">@yield('title')</a>
    </li>
    <li class="nav-item">
      @yield('boton')
    </li>
    <li class="nav-item">
      <a class="nav-link waves-light" id="tab-permisos-permiso" data-toggle="tab" href="#tab-permiso"
        role="tab" aria-controls="tab-permiso" aria-selected="false">Contact</a>
    </li>
    <li class="nav-item">
      <a class="nav-link waves-light" id="tab-permisos-productos" data-toggle="tab" href="#tab-producto"
        role="tab" aria-controls="tab-producto" aria-selected="false">Be awesome</a>
    </li>
  </ul>

  <div class="tab-content cardcustom" id="myClassicTabContentShadow">
    <div class="tab-pane fade active show" id="tab-usuario" role="tabpanel" aria-labelledby="tab-permisos-usuario">
       @yield('roles')
    </div>
    <div class="tab-pane fade" id="tab-rol" role="tabpanel" aria-labelledby="tab-permisos-roles">
      
    </div>
    <div class="tab-pane fade" id="tab-permiso" role="tabpanel" aria-labelledby="tab-permisos-permiso">
     
    </div>
    <div class="tab-pane fade" id="tab-producto" role="tabpanel" aria-labelledby="tab-permisos-productos">
    
    </div>
    <div class="card-footer">@yield('paginador')</div>
  </div>

</div>
<!-- Classic tabs -->
</div>
@endsection