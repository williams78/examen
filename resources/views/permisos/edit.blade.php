@extends('layouts.templateEdit')
@section('con','container70')
@section('routeList') {{ route('users.index') }} @endsection
@section('routeAdd') {{ route('users.create') }} @endsection
@section('nameList') Usuarios Activos @endsection
@section('nameAdd')  Agregar Usuario @endsection
@section('nameEdit')  Editar Usuario @endsection
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
@section('s3') active @endsection
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

    <div class="  cardcus" style="top:0px;">
    <form action="{{ route('permission.update',$permission->id) }}" method="POST">
        @csrf
        @method('PUT')
    <div class="card-body">
           <div class="row justify-content-center mb-4">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe" id="basic-addon1">
                    <i class="fas fa-user-shield"></i>
                  </span>
                </div>
                <input type="text" name="name" value="{{ $permission->name }}" class="form-control inputsb">
              </div>
            </div>
          </div>
          <div class="row justify-content-center mb-4">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe" id="basic-addon1">
                    <i class="fas fa-shield-alt"></i>
                  </span>
                </div>
                <input type="text" name="descripcion" value="{{ $permission->descripcion }}" class="form-control inputsb">
                </div>
            </div>
          </div>
          <div class="row justify-content-center mb-4">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text color-awe" id="basic-addon1">
                    <i class="fas fa-shield-alt"></i>
                  </span>
                </div>
                <select id="modulo" name="modulo" class="form-control">
                  <option  @if ($permission->modulo == 'Usuarios') selected="selected" @endif >Usuarios</option>
                  <option  @if ($permission->modulo == 'Roles') selected="selected" @endif >Roles</option>
                  <option  @if ($permission->modulo == 'Permisos') selected="selected" @endif >Permisos</option>
                  <option  @if ($permission->modulo == 'Productos') selected="selected" @endif >Productos</option>
                  <option  @if ($permission->modulo == 'Clientes') selected="selected" @endif >Clientes</option>
                  <option  @if ($permission->modulo == 'Proveedores') selected="selected" @endif >Proveedores</option>
                </select>
              </div>
            </div>
          </div>

           <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn color-awe">Guardar</button>
            </div>
        </div>


    </form>


@endsection