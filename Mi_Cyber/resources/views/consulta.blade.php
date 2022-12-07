@extends('plantilla')
@section('contenido')
<h1 class = "mt-4 display-1 text-center text-light"> <i class="bi bi-card-checklist"></i> Consulta <h1>
<body style="background-color: #8b0000">
<div class="container col-md-8">
    <table class="table table-dark table-borderless">
    <tr>
    <th scope="col">ID</th>
    <th scope="col">Usuario</th>
    <th scope="col">No. Compu</th>
    <th scope="col">Tiempo</th>
    <th scope="col">Fecha</th>
    <th scope="col">Acciones</th>
    </tr>
    @foreach ($consultarCompu as $buscarComputadora)
    <tr>
    <th>{{ $buscarComputadora->idC }}</th>
    <td>{{ $buscarComputadora->usuario }}</td>
    <td>{{ $buscarComputadora->Ncompu }}</td>
    <td>{{ $buscarComputadora->tiempo }}</td>
    <td>{{ $buscarComputadora->fecha }}</td>
    <td>
        <a href="{{ route('listaCompu.edit', $buscarComputadora->idC) }}" class="btn btn-outline-warning">Editar <i class="bi bi-pencil"></i></a>
        <a href="{{ route('listaCompu.confirm', $buscarComputadora->idC) }}" class="btn btn-outline-danger">Borrar <i class="bi bi-trash"></i></a>
    </td>
    </tr>
    @endforeach
</table>
@stop