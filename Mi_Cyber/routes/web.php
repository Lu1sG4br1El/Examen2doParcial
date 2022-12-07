<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ControladorPaginas;
use App\Http\Controllers\controlador_BD;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formulario', [ControladorPaginas::class, 'fFormulario'])->name('NFormulario');
Route::get('/consulta', [ControladorPaginas::class, 'fConsulta'])->name('NConsulta');
Route::post('/guardarFormulario', [ControladorPaginas::class, 'store'])->name('listaCompu.store');
//----ruta para la funcion create----:
Route::get('/listaCompu/create', [controlador_BD::class, 'create'])->name('listaCompu.create');
//----ruta para la funcion store----:
Route::post('/listaCompu', [controlador_BD::class, 'store'])->name('listaCompu.store');
//----ruta para la funcion index----:
Route::get('/listaCompu', [controlador_BD::class, 'index'])->name('listaCompu.index');
//----ruta para la funcion edit----:
Route::get('/listaCompu/{id}/edit', [controlador_BD::class, 'edit'])->name('listaCompu.edit');
//----ruta para la funcion update----:
Route::put('/listaCompu/{id}', [controlador_BD::class, 'update'])->name('listaCompu.update');
//----ruta para la funcion confirm----:
Route::get('/listaCompu/{id}/confirm', [controlador_BD::class, 'confirm'])->name('listaCompu.confirm');
//----ruta para la funcion delete----:
Route::delete('/listaCompu/{id}', [controlador_BD::class, 'destroy'])->name('listaCompu.destroy');