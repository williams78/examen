@extends('layouts.templateList')
@section('con','container70')
@section('routeList')
{{ route('proveedores.index') }}
@endsection
@section('routeAdd')
    {{ route('proveedores.create') }}
@endsection
@section('nameList')
    Proveedores Activos
@endsection
@section('nameAdd')
    Agregar Proveedor
@endsection  
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
	    @foreach ($proveedores as $proveedor)
	    <tr>
	        <td>{{ $proveedor->id_codigo }}</td>
	        <td>{{ $proveedor->pr_nombre }}</td>
	        <td>{{ $proveedor->pr_contacto }}</td>
	        <td>
                <form action="{{ route('proveedores.destroy',$proveedor->id_codigo) }}" method="POST">
                    
                    @can('product_edit')
                    <a class="btn btn-primary" href="{{ route('proveedores.edit',$proveedor->id_codigo) }}">Edit</a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('product-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>


    {!! $proveedores->links() !!}


@endsection