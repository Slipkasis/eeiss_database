@extends('adminlte::page')

@section('title', 'Catalogo')

@section('content_header')
    <h1>Listado de paneles</h1>
@stop

@section('content')
<a href="paneles/create" class="btn btn-primary">CREAR</a>

<table id="paneles" class="table tabled-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Referencia</th>
            <th scope="col">h1</th>
            <th scope="col">h2</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Imagen principal</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($paneles as $panel)
        <tr>
            <td>{{$panel->id}}</td>
            <td>{{$panel->referencia}}</td>
            <td>{{$panel->h1}}</td>
            <td>{{$panel->h2}}</td>
            <td>{{$panel->descripcion}}</td>
            <td><img src="{{asset($panel->featured)}}" alt="{{$panel->h1}}" class="img-fluid img-thumbnail" width="150px"></td>
            <td>
                <form action="{{route('paneles.destroy',$panel->id)}}" method="POST">
                <a href="/paneles/{{$panel->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        @endforeach
    </tbody>    
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#paneles').DataTable({
        "lengthMenu": [[5,10,50,-1], [5,10,50, "All"]]
    });
} );
</script>
    
@stop
