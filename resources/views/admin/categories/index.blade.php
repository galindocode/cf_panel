@php
$count = 0;
@endphp
@extends('adminlte::page')

@section('title', 'Categorías')

@section('content_header')
<h1>Lista de Categorías</h1>
@stop

@section('content')
<div class="px-4 py-2 bg-danger rounded my-4 ">
    <small><b>Advertencia:</b> Al eliminar una categoría se eliminarán todos los videos asociados a esa
        categoría</small>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $categorie)
        <tr>
            <th scope="row">{{ $count }}</th>
            <td>{{ $categorie->name }}</td>
            <td>{{ $categorie->excerpt }}</td>
            <td>{{ $categorie->price }}</td>
            <td>
                <a href="{{ url('admin/categories/' . $categorie->id . '/edit') }}" class="btn btn-primary">Editar</a>
                <form action="{{ url('admin/categories/' . $categorie->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @php
        $count++;
        @endphp
        @endforeach
    </tbody>
</table>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!'); 
</script>
@stop
{{-- <livewire:layouts.header :title="''">

    <div class="m-8 flex flex-col bg-white rounded-md shadow-lg p-8">
        <h1 class="mb-8 text-center text-2xl text-gray-800">Categorías</h1>
        <table>
            <thead class="mb-4">
                <tr class="">
                    <th class="">ID</th>
                    <th class="">Nombre</th>
                    <th class="">Descripción</th>
                    <th>Precio</th>
                    <th class="">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $categorie)
                <tr class="rounded border text-center text-gray-700">
                    <td class="px-4">{{ $categorie->id }}</td>
                    <td class="px-4">{{ $categorie->name }}</td>
                    <td class="px-4">{{ $categorie->excerpt }}</td>
                    <td>(No disponible)</td>
                    <td class="flex py-4">
                        <a href="#" class="btn btn-warning block btn btn-primary mx-2">Edit</a>
                        <a href="#" class="btn btn-danger inline-block btn btn-danger mx-2">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}