@extends('layouts.app')
  @section('barra-nav') 
    @include('layouts.navegacion')
  @endsection
     
  @section('content')

     <div class="@yield('con')">
      
      <div class="tabs-code">

        <ul class="nav tabs-color" id="rol" role="tablist">
          <li class="nav-item">
            <a class="nav-link active sizetabs" href="@yield('routeList')" >
               @yield('nameList')
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link sizetabs" href= "@yield('routeAdd')" >
               @yield('nameAdd')
            </a>
          </li>
          <li class="nav-item sizetabs">
             
          </li>
          @yield('tab')
          <li class="nav-item sizetabs">
            
          </li>
          <li class="nav-item sizetabs">
            <a id="show" href="javascript:document.getElementById('obj1').style.display='block';void0" onclick="document.getElementById('hide').style.display='block';document.getElementById('show').style.display='none';">
              <div class="colorSearchi"> Buscar</div></a>
            <a id="hide" href="javascript:document.getElementById('obj1').style.display='none';void0" onclick="document.getElementById('show').style.display='block';document.getElementById('hide').style.display='none';" style="display: none" ><div class="colorSearch"> Buscar</div></a>
          </li>
        </ul>
        <div class="table-border-lr">
          <div id="obj1" style="display: none;">
 <form action="" method="GET" >
          {!! Form::text('search', null, array('placeholder' =>'Información a Buscar' ,'class' => 'inputs indexinput',
            'aria-describedby'=>'basic-addon1','aria-label'=>'Username')) !!}
        </form>
</div>        
        </div>
      
        <div class="tab-content cardcustom" id="myClassicTabContentShadow">
          <div class="tab-pane fade active show" id="tab-usuario" role="tabpanel" aria-labelledby="tab-permisos-usuario">
             @yield('contenido')
          </div>
         
          

        </div>
        <div class="card-footer"><div class="row justify-content-center"  >@yield('paginador')</div></div>
</div>
<!-- Classic tabs -->
</div>
<div class="row justify-content-center"  >
      @yield('mensage')
      </div> 

      
@endsection
