@extends('adminlte::page')

@section('title', 'Catalogo')

@section('content_header')
    <h1>Edicion de paneles</h1>
@stop

@section('content')
<form action="/paneles/{{$panel->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Referencia</label>
        <input id="referencia" name="referencia" type="text" class="form-control" value="{{$panel->referencia}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">h1</label>
        <input id="h1" name="h1" type="text" class="form-control" value="{{$panel->h1}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">h2</label>
        <input id="h2" name="h2" type="text" class="form-control" value="{{$panel->h2}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripcion</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$panel->descripcion}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Imagen principal</label>
    </div>
        <img src="{{asset($panel->featured)}}" alt="{{$panel->h1}}" class="img-fluid img-thumbnail" width="800px">
        <input id="featured" name="featured" type="file" class="form-control" value="{{$panel->featured}}">
    </div>

    <a href="/paneles" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
