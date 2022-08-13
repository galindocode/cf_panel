@php
$count = 1;
@endphp
@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
<h1>Lista de Usuarios</h1>
@stop

@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <th scope="row">{{ $count }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>

            <td>
                <a href="{{ url('admin/users/' . $user->id . '/edit') }}" class="btn btn-primary">Editar</a>
                <form action="{{ url('admin/users/' . $user->id) }}" method="POST" class="d-inline">
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