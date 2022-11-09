<?php

namespace App\Http\Controllers;

use App\Http\Requests\validador;

use Illuminate\Http\Request;

class ControladorPaginas extends Controller
{
    function fFormulario(){
        return view('formulario');
    }
    function fConsulta(){
        return view('consulta');
    }
    public function procesarConsulta(validador $req){
        //return $req->all();
        return redirect('/formulario')->with('confirmacion','Tus datos se ha guardado');
    }
}
