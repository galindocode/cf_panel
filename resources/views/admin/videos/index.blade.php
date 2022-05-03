@php
$count = 1;
@endphp
@extends('adminlte::page')

@section('title', 'Videos')

@section('content_header')
<h1>Lista de Videos</h1>
@stop

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Ruta</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($videos as $video)
    <tr>
      <th scope="row">{{ $count }}</th>
      <td>{{ $video->title }}</td>
      <td>{{ $video->excerpt }}</td>
      <td><a href="{{ $video->path }}" target="_blank" rel="noopener noreferrer">{{ $video->path }}</a></td>
      <td>
        <a href="{{ url('admin/videos/' . $video->id . '/edit') }}" class="btn btn-primary">Editar</a>
        <form action="{{ url('videos/' . $video->id) }}" method="POST" class="d-inline">
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