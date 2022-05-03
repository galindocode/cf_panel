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
    <form action="{{url('admin/categories')}}" method="POST">
        @csrf
        {{-- Name --}}
        <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" name="name" placeholder="Nombre de la categoría">
        </div>

        {{-- Small Description --}}
        <div class="form-group">
            <label for="exampleInputEmail1">Descripcion Corta</label>
            <input type="text" class="form-control" name="small_description" placeholder="Nombre de la categoría">
            <small id="emailHelp" class="form-text text-muted">Escriba una descripcion de entre (4-10) palabras. Se
                usará para fines tecnicos. Por favor asegurese de que no se repita con una anterior.</small>
        </div>

        {{-- Free Category --}}
        <div class="form-group">
            <label for="isFree">Categoría es paga</label>
            <select name="free" id="isFree" class="form-control">
                <option value="0">Si</option>
                <option value="1">No</option>
            </select>
        </div>

        {{-- Description --}}
        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop