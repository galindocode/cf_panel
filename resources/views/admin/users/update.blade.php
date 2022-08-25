@extends('adminlte::page')

@section('title', 'Editar Usuario')

@section('content_header')
<h1>Editar un Usuario</h1>
@stop

@section('content')
<div class="container">
    <div class="card p-4">
        <form action="{{url("/admin/users/$user->id")}}" method="POST">
            @csrf
            @method('PUT')

            {{-- User name --}}
            <div class="form-group">
                <label for="add-video-title">Nombre del cliente</label>
                <input type="text" class="form-control" id="add-video-title" name="name" placeholder="Enter client name"
                    value="{{$user->name}}">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>

            {{-- Email --}}
            <div class="form-group">
                <label for="exampleInputEmail1">Correo</label>
                <input type="email" class="form-control" name="email" placeholder="Email" value="{{$user->email}}">

            </div>

            {{-- Password --}}
            <div class="form-group">
                <label for="exampleInputEmail1">Contraseña</label>
                <input type="password" class="form-control" name="password" placeholder="Contraseña">
            </div>

            <button class="btn btn-primary" type="submit">Editar</button>
            <a class="btn btn-danger" href="{{url('/admin/users')}}">Cancelar</a>
        </form>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop