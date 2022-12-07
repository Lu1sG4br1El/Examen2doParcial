@extends('plantilla')
@section('contenido')
@if(session()->has('confirmacion'))
    {!! "<script> Swal.fire('Listo','Los datos llegaron al controlador correctamente', 'success') </script>"!!}
    <div class="alert alert-primary alert-dimissible fade show text-center" role="alert">
        <strong>{{session('confirmacion')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
    </div>
@endif
<h1 class = "mt-4 display-1 text-center text-light">Corregir datos</h1>
<body style="background-color: #8b0000">
<br>
<div>

@if($errors->any())
            @foreach($errors->all() as $error)
            <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                <strong>Formulario Incompleto!</strong>{{$error}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endforeach
        @endif
        <div class="text-center text-light">
            Corregir datos <i class="bi bi-wechat"></i>
        </div>
    <div>
        <form method="post" action="{{ route('listaCompu.update', $usuarioid->idC) }}">
	        @csrf
            {!! method_field('PUT')!!}
            <div class="mb-3">
                <label class="form-label text-center text-light" name="labelUsuario">Nombre de usuario: </label>
                <input type="text" class="form-control" name="txtUsuario" value="{{ $usuarioid->usuario }}">
                <p class="fw-bold text-danger"> {{$errors->first('txtUsuario')}}</p>
            </div>
            <div class="mb-3">
            <label class="form-label text-center text-light" name="labelCompu">No. Computadora: </label>
                <input type="text" class="form-control" name="txtCompu" value="{{ $usuarioid->Ncompu }}">
                <p class="fw-bold text-danger"> {{$errors->first('txtCompu')}}</p>
            </div>
            <div class="mb-3">
                <label class="form-label text-center text-light" name="labelTiempo">Tiempo: </label>
                <input type="text" class="form-control" name="txtTiempo" value="{{  $usuarioid->tiempo }}">
                <p class="fw-bold text-danger"> {{$errors->first('txtTiempo')}}</p>
            </div>
    </div>
        <div>
            <button type="submit" class="btn btn-info" name="btnActualizarP">Actualizar</button>
        </div>
        </form>
    </div>
</div>
<br>
@stop