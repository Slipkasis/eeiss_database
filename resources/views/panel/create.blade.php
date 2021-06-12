@extends('adminlte::page')

@section('title', 'Catalogo')

@section('content_header')
    <h1>Listado de paneles</h1>
@stop

@section('content')
<form action="/paneles" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Referencia</label>
        <input id="referencia" name="referencia" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">h1</label>
        <input id="h1" name="h1" type="text" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">h2</label>
        <input id="h2" name="h2" type="text" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripcion</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Imagen principal</label>
        <input id="featured" name="featured" type="file" class="form-control" tabindex="5">
    </div>
    <a href="/paneles" class="btn btn-secondary" tabindex="6">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="5">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
