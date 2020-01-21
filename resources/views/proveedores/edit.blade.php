@extends('layouts.template')
@section('con','container70')
@section('boton')
    <a class="nav-link " href="{{ route('products.create') }}"><i class="fas fa-box"></i> Nuevo Producto</a>
@endsection
@section('boton1')
<a class="nav-link " href="{{ route('products.index') }}" ><i class="fas fa-store"></i> Listado de Productos</a>
@endsection
@section('boton2')
<a class="nav-link active waves-light show" href="#" ><i class="fas fa-box-open"></i> Editar Producto</a>
@endsection
@section('contenido')
      @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

 <div class="  card-producto" style="top:-25px;">
    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')

 <div class="card-body">

         <div class="row justify-content-center mb-4">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe" id="basic-addon1">
                    <i class="fas fa-dolly"></i>
                  </span>
                </div>
                <input type="text" name="p-nombre" class="form-control inputsb" placeholder="Nombre del Producto">
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="input-group">
                <input type="file" class="custom-file-input" id="inputGroupFile01"
      aria-describedby="inputGroupFileAddon01" name="p-imagen">
    <label class="custom-file-label inputsb" for="inputGroupFile01" >Elija el Archivo</label>
              </div>
            </div>
          </div>
        <div class="row justify-content-center mb-4">
            <div class="col-xs-8 col-sm-8 col-md-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe" id="basic-addon1">
                    <i class="fas fa-dolly"></i>
                  </span>
                </div>
                <textarea class="form-control inputsb" style="height:60px;" name="p-descripcion" placeholder="Descripción del Prodcuto"></textarea>
              </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe" id="basic-addon1">
                    <i class="fas fa-dolly"></i>
                  </span>
                </div>
                <input type="text" name="p-presentacion" class="form-control inputsb" placeholder="Presentacion">
              </div>
            </div>
          </div>
        <div class="row justify-content-center mb-4">
            <div class="col-xs-4 col-sm-4 col-md-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe" id="basic-addon1">
                    <i class="fas fa-dolly"></i>
                  </span>
                </div>
                 <input type="text" name="p-modelo" class="form-control inputsb" placeholder="Modelo">
              </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe" id="basic-addon1">
                    <i class="fas fa-dolly"></i>
                  </span>
                </div>
                <select class="browser-default custom-select inputsb" name="p-fabricante">
                <option selected>Selec. Fabricante</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select> 
              </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe" id="basic-addon1">
                    <i class="fas fa-dolly"></i>
                  </span>
                </div>
                  <select class="browser-default custom-select inputsb" name="p-estado">
                <option selected>Selec. Estado</option>
                <option value="1">Activo</option>
                <option value="2">Desactivado</option>
              </select>
              </div>
            </div>
          </div>
          <div class="row justify-content-center mb-4">
            <div class="col-xs-4 col-sm-4 col-md-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe" id="basic-addon1">
                    <i class="fas fa-dolly"></i>
                  </span>
                </div>
               <input type="text" name="p-stock" class="form-control inputsb" placeholder="Stock">
              </div>
            </div>
          <div class="col-xs-4 col-sm-4 col-md-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe" id="basic-addon1">
                    <i class="fas fa-dolly"></i>
                  </span>
                </div>
               <input type="text" name="p-costo" class="form-control inputsb" placeholder="Costo">
              </div>
            </div>
              <div class="col-xs-4 col-sm-4 col-md-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe" id="basic-addon1">
                    <i class="fas fa-dolly"></i>
                  </span>
                </div>
                <input type="text" name="p-venta" class="form-control inputsb" placeholder="Venta">
              </div>
            </div>
          </div>
           
       
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>


    </form>


@endsection