@extends('layouts.templateList')
@section('con','container85')
@section('routeList') {{ route('products.index') }} @endsection
@section('routeAdd')  {{ route('products.create') }} @endsection
@section('nameList') Productos Activos @endsection
@section('nameAdd')  Agregar Productos @endsection  
@section('menusone') Manage Usuarios @endsection
@section('menusonem') {{ route('users.index') }} @endsection
@section('menustwo') Manage Clientes @endsection
@section('menustwom') {{ route('clientes.index') }} @endsection
@section('menustres') Manage Proveedores @endsection
@section('menustresm') {{ route('proveedores.index') }} @endsection
@section('tab')<li class="nav-item sizetabs"> </li> @endsection
@section('s1') active @endsection

@section('mensage')
 @if ($message = Session::get('success'))
        <script> 
          $(document).ready(function(){
          $('.toast').toast({delay: 6000});
          $('.toast').toast('show');});
        </script>
        <div class="toast" >
          <div class="toast-body " style="background-color: #82FA58 ; height: 40px;">
            {{ $message }}
          </div>
        </div>
      @endif
@endsection

@section('contenido')
   
   <table class="tbl-header" cellpadding="0" cellspacing="0" border="0" >
  <thead>
 <tr>
            <th class="getSizeFont">No</th>
            <th class="getSizeFont">Nombre</th>
            <!--<th class="getSizeFont">Imagen</th>-->
            <th class="getSizeFont">Modelo</th>
            <th class="getSizeFont">Presentacion</th>
            <th class="getSizeFont">Fabricante</th>
            <th class="getSizeFont">Estado</th>
            <th class="getSizeFont">Descripcion</th>
            <th class="getSizeFont">Costo</th>
            <th class="getSizeFont">Venta</th>
            <th class="getSizeFont">Stock</th>
            <th class="getSizeFont">Action</th>
        </tr>
  </tr>

 </thead>
</table> <table class="table-hover " cellpadding="0" cellspacing="0" border="0">
      <tbody>      
	    @foreach ($products as $product)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $product->p_nombre }}</td>
            <!--<td><img src="img/{{ $product->p_imagen }}" width="40px" height="40px;"></td>-->
            <td>{{ $product->p_modelo }}</td>
            <td>{{ $product->p_presentacion }}</td>
            <td>{{ $product->p_fabricante }}</td>
            <td>{{ $product->p_estado }}</td>
            <td>{{ $product->p_descripcion }}</td>
            <td>{{ $product->p_costo }}</td>
            <td>{{ $product->p_venta }}</td>
            <td>{{ $product->p_stock }}</td>
	        <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                    
                    @can('product_edit')
                    <a class="btn btn-lights btn-md waves-effect px-2 fa fa-edit" href="{{ route('products.edit',$product->id) }}"></a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('product_delete')
                    <button type="submit" class="btn btn-lightd btn-sm waves-effect px-2 fa fa-trash">
                    @endcan
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>


    {!! $products->links() !!}


@endsection