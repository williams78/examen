@extends('layouts.templateList')
@section('con','container85') 
@section('routeList') {{ route('clientes.index') }} @endsection
@section('routeAdd') {{ route('clientes.create') }} @endsection
@section('nameList') Usuarios Activos @endsection
@section('nameAdd')  Agregar Usuario @endsection
@section('nameEdit')  Editar Usuario @endsection
@section('menuone')  Manage Usuarios @endsection
@section('menuonem') {{ route('users.index') }} @endsection
@section('menusone') Manage Productos @endsection
@section('menusonem') {{ route('permission.index') }} @endsection
@section('menustwo') Manage Clientes @endsection
@section('menustwom') {{ route('products.index') }} @endsection
@section('menustres') Manage Proveedores @endsection
@section('menustresm') {{ route('proveedores.index') }} @endsection
@section('s3') active @endsection
@section('contenido')
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


   <table class="tbl-header" cellpadding="0" cellspacing="0" border="0" >
  <thead>
 <tr>
   <th>No</th>
   <th>Nombre</th>
   <th>Contacto</th>
   <th>Calle</th>
   <th>Ciudad</th>
   <th>Estado</th>
   <th>Pais</th>
   <th>Codigo Postal</th>
   <th>Correo</th>
   <th>Telefono</th>
   <th>Acciones</th>
        </tr>
  </tr>

 </thead>
</table> <table class="table-hover " cellpadding="0" cellspacing="0" border="0">
      <tbody>      
      @foreach ($clientes as $cliente)
      <tr>
          <td>{{ $cliente->id_codigo }}</td>
          <td>{{ $cliente->pr_nombre }}</td>
          <td>{{ $cliente->pr_contacto }}</td>
          <td>{{ $cliente->pr_calle }}</td>
          <td>{{ $cliente->pr_ciudad }}</td>
          <td>{{ $cliente->pr_estado }}</td>
          <td>{{ $cliente->pr_pais }}</td>
          <td>{{ $cliente->pr_codigo }}</td>
          <td>{{ $cliente->pr_correo }}</td>
          <td>{{ $cliente->pr_telefono }}</td>
          <td>
                <form action="{{ route('clientes.destroy',$cliente->id_codigo) }}" method="POST">
                    
                    @can('clientes-edit')
                    <a class="btn btn-lights btn-md fas fa-shield-alt" href="{{ route('clientes.edit',$cliente->id_codigo) }}"></a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('clientes-delete')
                    <button type="submit" class="btn btn-lightd btn-sm waves-effect px-2">
            <i class="fas fa-folder-minus"></i>
          </button>
                    @endcan
                </form>
          </td>
      </tr>
      @endforeach
    </table>


    {!! $clientes->links() !!}


@endsection