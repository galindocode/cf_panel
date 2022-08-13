@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
<h1>EmpresarioDigital Administración</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h2 class="card-title">Bievenido al panel de administración de EmpresarioDigital</h2>
    </div>
    <div class="card-body">
        <p>
            Aquí podrás administrar todo lo relacionado con el sistema.
        </p>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!'); 
</script>
@stop