@extends('plantilla')
@section('contenido')
<h1 class = "mt-4 display-1 text-center text-light"> <i class="bi bi-card-checklist"></i> Consulta <h1>
<body style="background-color: #8b0000">
<div class="container col-md-6">
    
    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        <strong>Advertencia: se va a eliminar un usuario</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <div class="card m-5">
        <h5 class="card-header text-primary"><i class="bi bi-calendar3"></i> {{ $usuarioid->fecha }}</h5>
        <div class="card-body">
            <h5 class="card-titulo fw-semibold"> {{ $usuarioid->usuario }}</h5>
            <p class="card-text fw-light"> {{ $usuarioid->Ncompu }}</p>
            <p class="card-text fw-light"> {{ $usuarioid->tiempo }}</p>
        </div>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <form action="{{ route('listaCompu.destroy', $usuarioid->idC) }}" method="post">
            {!! method_field('DELETE') !!}
            {!! csrf_field() !!}
            <button type="submit" class="btn btn-outline-danger">Si... Ya termino su tiempo </button></form>
            <a href="{{ route('listaCompu.index') }}" class="btn btn-outline-danger">No... Aun no <i class="bi bi-trash"></i></a>
        </div>
    </div>
<div>
@stop