@php
$count = 0;
@endphp
@extends('adminlte::page')

@section('title', 'Categorías')

@section('content_header')
<h1>Lista de Categorías</h1>
@stop

@section('content')
<div class="card p-4">
    <form action="{{url("admin/categories/$categorie->id")}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- Name --}}
        <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" name="name" placeholder="Nombre de la categoría"
                value="{{$categorie->name}}">
        </div>

        {{-- Small Description --}}
        <div class="form-group">
            <label for="exampleInputEmail1">Descripcion Corta</label>
            <input type="text" class="form-control" name="small_description" placeholder="Nombre de la categoría"
                value="{{$categorie->slug}}">
            <small id="emailHelp" class="form-text text-muted">Escriba una descripcion de entre (4-10) palabras. Se
                usará para fines tecnicos. Por favor asegurese de que no se repita con una anterior.</small>
        </div>

        {{-- Free Category --}}
        {{-- <div class="form-group">
            <label for="isFree">Categoría es paga</label>
            <select name="free" id="isFree" class="form-control" value="{{$categorie->free}}">
                <option value="0">Si</option>
                <option value="1">No</option>
            </select>
        </div> --}}

        {{-- Image Category --}}
        <div class="form-group">
            <label for="image" class="form-label">Imagen de la categoria</label>
            <img src="{{asset('images/' . $categorie->image)}}" alt="">
            <input type="file" class="form-control" name="image" id="image" accept="image/png, image/gif, image/jpeg">
        </div>

        {{-- Description --}}
        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea name="description" class="form-control" id="" cols="30"
                rows="10">{{$categorie->description}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a class="btn btn-danger" href="{{route('categories.index')}}">Cancelar</a>
    </form>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop