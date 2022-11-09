@extends('plantilla')
@section('contenido')
<h1 class = "mt-4 display-1 text-center text-light">Consulta</h1>
<body style="background-color: #8b0000">
</ul>
<div class="container text-center w-50">
<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">Usuario</th>
            <th scope="col">Numero de compu</th>
            <th scope="col">Tiempo</th>
            <th scope="col">Fecha</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Luis</td>
            <td>1</td>
            <td>30</td>
            <td>08/11/2022</td>
        </tr>
        <tr>
            <td>Gabriel</td>
            <td>2</td>
            <td>40</td>
            <td>08/11/2022</td>
        </tr>
        <tr>
            <td>Gabo</td>
            <td>7</td>
            <td>60</td>
            <td>08/11/2022</td>
        </tr>
        </tbody>
    </table>
</div>
@stop