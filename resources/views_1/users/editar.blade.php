@extends('layouts.app')


@section('content')

   <input type='submit' id="ok" name='volver' value='VOLVER'>

<a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#create">
    Nueva tarea
</a>


<div class="modal fade" id="create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span>×</span>
                </button>
                <h4>Crear</h4>
            </div>
            <div class="modal-body">
                ….
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Guardar">
            </div>
        </div>
    </div>
</div>



@endsection