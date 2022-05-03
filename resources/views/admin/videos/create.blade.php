@php
$count = 1;
@endphp
@extends('adminlte::page')

@section('title', 'Añadir Video')

@section('content_header')
<h1>Añadir un Video</h1>
@stop

@section('content')
<div class="container">
    <div class="card p-4">
        <form action="{{url('/admin/videos')}}" method="POST">
            @csrf

            {{-- Video Name --}}
            <div class="form-group">
                <label for="add-video-title">Nombre del Video</label>
                <input type="text" class="form-control" id="add-video-title" name="title"
                    placeholder="Nombre del Video">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>

            {{-- Small Description --}}
            <div class="form-group">
                <label for="exampleInputEmail1">Descripcion Corta</label>
                <input type="text" class="form-control" name="small_description" placeholder="Nombre de la categoría">
                <small id="emailHelp" class="form-text text-muted">Escriba una descripcion de entre (4-10) palabras. Se
                    usará para fines tecnicos. Por favor asegurese de que no se repita con una anterior.</small>
            </div>

            {{-- Video Path --}}
            <div class="form-group">
                <label for="add-video-url">URL del Video</label>
                <input type="url" name="path" class="form-control" id="add-video-url" placeholder="URL del Video">
            </div>

            {{-- Category --}}
            <div class="form-group">
                <label for="add-video-category">Categoría</label>
                <select name="categorie_id" id="add-video-category" class="form-control">
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            {{-- Video Type --}}
            <div class="form-group">
                <label for="add-video-category">Tipo de Video</label>
                <select name="type" id="add-video-category" class="form-control">
                    <option value="youtube">Youtube</option>
                </select>
            </div>

            {{-- Video Description --}}
            <div class="form-group">
                <label for="add-video-description">Descripción del Video</label>
                <textarea name="description" id="" cols="30" rows="10" id="add-video-description"
                    class="form-control"></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Agregar</button>
        </form>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop