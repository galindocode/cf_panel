@php
$count = 1;
@endphp
@extends('adminlte::page')

@section('title', 'Editar Video')

@section('content_header')
<h1>Editar Video</h1>
@stop

@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<div class="container">
    <div class="card p-4">
        <form action="{{url("/admin/videos/$video->id")}}" method="POST">
            @csrf
            @method('PUT')

            {{-- Video Name --}}
            <div class="form-group">
                <label for="add-video-title">Nombre del Video</label>
                <input type="text" class="form-control" id="add-video-title" name="title" placeholder="Nombre del Video"
                    value="{{$video->title}}">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>

            {{-- Small Description --}}
            <div class="form-group">
                <label for="exampleInputEmail1">Descripcion Corta</label>
                <input type="text" class="form-control" name="small_description" placeholder="Nombre de la categoría"
                    value="{{$video->slug}}">
                <small id="emailHelp" class="form-text text-muted">Escriba una descripcion de entre (4-10) palabras. Se
                    usará para fines tecnicos. Por favor asegurese de que no se repita con una anterior.</small>
            </div>

            {{-- Video Type --}}
            <div class="form-group" id="video-type">
                <label for="add-video-category">Tipo de Video</label>
                <select name="type" id="add-video-category" class="form-control" disabled>
                    <option value="youtube">Youtube</option>
                    {{-- <option value="file">Video Local</option> --}}
                </select>
            </div>

            {{-- Video Path --}}
            <div class="form-group" id='add-video-youtube'>
                <label for="add-video-url">URL del Video</label>
                <input type="url" name="path" class="form-control" id="add-video-url" placeholder="URL del Video"
                    value="{{$video->path}}">
            </div>
            <div class="form-group d-none" id='add-video-file'>
                <label for="add-video-url">Subir video</label>
                <input type="file" name="video-file" class="form-control" id="add-video-file">
            </div>

            {{-- Category --}}
            <div class="form-group">
                <label for="add-video-category">Categoría</label>
                <select name="categorie_id" id="add-video-category" class="form-control">
                    <option value="{{$video->categorie->id}}" selected>{{$video->categorie->name}}(Actual)</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>


            {{-- Video Description --}}
            <div class="form-group">
                <label for="add-video-description">Descripción del Video</label>
                <textarea name="description" id="" cols="30" rows="10" id="add-video-description"
                    class="form-control">{{$video->description}}</textarea>
            </div>
            <button class="btn btn-primary" type="submit">Guardar</button>
            <a class="btn btn-danger" href="{{url('/admin/videos')}}">Cancelar</a>
        </form>
    </div>
</div>
<script>
    $('#video-type').change(() => {
        $("#add-video-youtube").toggleClass('d-none');
        $("#add-video-file").toggleClass('d-none');
    });
</script>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop