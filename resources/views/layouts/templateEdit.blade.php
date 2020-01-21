@extends('layouts.app')
  @section('barra-nav') 
    @include('layouts.navegacion')
  @endsection

  @section('content')
     <div class="@yield('con')">
      <div class="tabs-code">
        <ul class="nav tabs-color" id="rol" role="tablist">
          <li class="nav-item">
            <a class="nav-link  sizetabs" href="@yield('routeList')" >
               @yield('nameList')
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  sizetabs" href= "@yield('routeAdd')" >
               @yield('nameAdd')
            </a>
          </li>
          <li class="nav-item sizetabs">
            <a class="nav-link active sizetabs" href= "#" >
             @yield('nameEdit')
           </a>
          </li>
          <li class="nav-item sizetabs">
            @yield('mensage')
          </li>
          <li class="nav-item sizetabs">
           
          
          </li>
        </ul>
      
        <script> 
          $(document).ready(function(){
          $('.toast').toast('show');});
        </script>
        <div class="tab-content cardcustom" id="myClassicTabContentShadow">
          <div class="tab-pane fade active show" id="tab-usuario" role="tabpanel" aria-labelledby="tab-permisos-usuario">
             @yield('contenido')
          </div>
        
          <div class="card-footer">@yield('paginador')</div>
        </div>
</div>
<!-- Classic tabs -->
</div>
@endsection
