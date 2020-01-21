@extends('layouts.app')

  @section('barra-nav') 
    @include('layouts.navegacion')
  @endsection
    
  @section('content')
     <div class="container70">
      <div class="tabs-code">
        <ul class="nav tabs-color" id="rol" role="tablist">
          <li class="nav-item">
            <a class="nav-link    " href="@yield('routeIndexRoles')" ><i class="far fa-address-card"></i> Listado de Roles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @yield('linkAddRol')" href= "@yield('routeCreateRol')" ><i class="fas fa-id-card"></i> Crear Nuevo Rol</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @yield('linkEditRol') waves-light show" href="@yield('routeEditRol')" ><i class="fas fa-portrait"></i> Editar Usuario</a>
          </li>
          <li class="nav-item">
            @yield('mensage')
          </li>
          <li class="nav-item">
            <a id="show" href="javascript:document.getElementById('obj1').style.display='block';void0" onclick="document.getElementById('hide').style.display='block';document.getElementById('show').style.display='none';"><i class="fa fa-search-plus"></i></a>
            <a id="hide" href="javascript:document.getElementById('obj1').style.display='none';void0" onclick="document.getElementById('show').style.display='block';document.getElementById('hide').style.display='none';" style="display: none"><i class="fa fa-search-minus"></i></a>
          </li>
        </ul>
        <div class="table-border-lr">
          @yield('search')
        </div>
        <script> 
          $(document).ready(function(){
          $('.toast').toast('show');});
        </script>
        <div class="tab-content cardcustom" id="myClassicTabContentShadow">
          <div class="tab-pane fade active show" id="tab-usuario" role="tabpanel" aria-labelledby="tab-permisos-usuario">
             @yield('contenido')
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

