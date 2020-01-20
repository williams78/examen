@extends('layouts.templateEdit')
@section('con','container70')
@section('routeList') {{ route('products.index') }} @endsection
@section('routeAdd') {{ route('products.create') }} @endsection
@section('nameList') Productos Activos @endsection
@section('nameAdd')  Agregar Prodcuto @endsection
@section('nameEdit')  Editar Producto @endsection
@section('menusone') Manage Usuarios @endsection
@section('menusonem') {{ route('users.index') }} @endsection
@section('menustwo') Manage Clientes @endsection
@section('menustwom') {{ route('clientes.index') }} @endsection
@section('menustres') Manage Proveedores @endsection
@section('menustresm') {{ route('proveedores.index') }} @endsection
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
     

 <div class="  card_producto">
    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')

 <div class="card-body">
      <div class="row justify-content-center mb-4">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe2 getSizeEditSpa" id="basic-addon1">
                   <div class="getSizeFontEditProd"> Nombre </div>
                  </span>
                </div>
                <input type="text" name="p_nombre" class="form-control inputsb" placeholder="Nombre del Producto"
                value="{{ $product->p_nombre }}">
              </div>
            </div>
          <!--  <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="input-group">
                <input type="file" class="custom-file-input" id="inputGroupFile01"
      aria-describedby="inputGroupFileAddon01" name="p_imagen" value="{{ $product->p_image }}">
    <label class="custom-file-label inputsb" for="inputGroupFile01" >Elija el Archivo</label>
              </div>
            </div> -->
             <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe2" id="basic-addon1">
                   <div class="getSizeFontEditProd"> Presentación </div>
                  </span>
                </div>
                <input type="text" name="p_presentacion" class="form-control inputsb" placeholder="Presentacion"
                value="{{ $product->p_presentacion }}">
              </div>
            </div>
          </div>
        <div class="row justify-content-center mb-4">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe2 getSizeEditSpa" id="basic-addon1">
                  <div class="getSizeFontEditProd">  Descripción </div>
                  </span>
                </div>
                <input class="form-control inputsb" name="p_descripcion" placeholder="Descripción del Procduto" value="{{ $product->p_descripcion }}"></textarea>
              </div>
            </div>
           
          </div>
        <div class="row justify-content-center mb-4">
            <div class="col-xs-4 col-sm-4 col-md-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe2 getSizeEditSpa"  id="basic-addon1">
                   <div class="getSizeFontEditProd"> Modelo </div>
                  </span>
                </div>
                 <input type="text" name="p_modelo" class="form-control inputsb " placeholder="Modelo" value="{{ $product->p_modelo }}">
              </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe2 getSizeEditSpa" id="basic-addon1">
                  <div class="getSizeFontEditProd">  Fabricante </div>
                  </span>
                </div>
                <select class="browser-default custom-select inputsb" name="p_fabricante">
                <option >Selec. Fabricante</option>
                <option value="1" @if ($product->p_fabricante == '1') selected="selected" @endif>One</option>
                <option value="2" @if ($product->p_fabricante == '2') selected="selected" @endif>Two</option>
                <option value="3" @if ($product->p_fabricante == '3') selected="selected" @endif>Three</option>
              </select> 
              </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe2 getSizeEditSpa" id="basic-addon1">
                   <div class="getSizeFontEditProd"> Estado </div>
                  </span>
                </div>
                  <select class="browser-default custom-select inputsb " name="p_estado">
                <option >Selec. Estado</option>
                <option value="1" @if ($product->p_estado == '1') selected="selected" @endif>Activo</option>
                <option value="2" @if ($product->p_estado == '2') selected="selected" @endif>Desactivado</option>
              </select>
              </div>
            </div>
          </div>
          <div class="row justify-content-center mb-4">
            <div class="col-xs-4 col-sm-4 col-md-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe2 getSizeEditSpa" id="basic-addon1">
                   <div class="getSizeFontEditProd"> Stock </div>
                  </span>
                </div>
               <input type="text" name="p_stock" class="form-control inputsb" placeholder="Stock" value="{{ $product->p_stock }}">
              </div>
            </div>
          <div class="col-xs-4 col-sm-4 col-md-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe2 getSizeEditSpa" id="basic-addon1">
                   <div class="getSizeFontEditProd"> Costo </div>
                  </span>
                </div>
               <input type="text" name="p_costo" class="form-control inputsb" placeholder="Costo" value="{{ $product->p_costo }}">
              </div>
            </div>
              <div class="col-xs-4 col-sm-4 col-md-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe2 getSizeEditSpa getSizeFontEditProd" id="basic-addon1">
                    Venta
                  </span>
                </div>
                <input type="text" name="p_venta" class="form-control inputsb" placeholder="Venta" value="{{ $product->p_venta }}">
              </div>
            </div>
          </div>
           
       
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn color-awe">Guardar</button>
        </div>
        </div>

@if ($errors->any()) 
      
         <script> 
          $(document).ready(function(){
          
          $('.toast').toast('show');});
        </script>
        <div class="toast" data-autohide="false" style="position: absolute; right: 0;min-width:100%;">
          <button type="button" class="ml-2 mb-1 close" style="color: #fff" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
          <div class="toast-body" style="background-color: #ec7063; color: #fff; font-size: 12px;">
             <li class="hidevi"> 
              
           @if ($errors->has('p_nombre'))
               {{ $errors->first('p_nombre') }}  
           @endif    
           @if ($errors->has('p_imagen'))
              {{ $errors->first('p_imagen') }} 
           @endif    
           
           @if ($errors->has('p_descripcion'))
               {{ $errors->first('p_descripcion') }} 
           @endif
            @if ($errors->has('p_presentacion'))
               {{ $errors->first('p_presentacion') }}
           @endif
           @if ($errors->has('p_fabricante'))
              {{ $errors->first('p_fabricante') }} 
           @endif        
           @if ($errors->has('p_estado'))
              {{ $errors->first('p_estado') }} 
           @endif        
           @if ($errors->has('p_modelo'))
              {{ $errors->first('p_modelo') }} 
           @endif        
           @if ($errors->has('p_costo'))
              {{ $errors->first('p_costo') }} 
           @endif 
           @if ($errors->has('p_stock'))
              {{ $errors->first('p_stock') }} 
           @endif       
           @if ($errors->has('p_venta'))
               {{ $errors->first('p_venta') }} 
           @endif                
          </div>

        </div>
    
      @endif
    </form>


@endsection