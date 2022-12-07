<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests\validador;
use Carbon\Carbon;

class controlador_BD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultarCompu = DB::table('tb_cyber')->get();
        return view('consulta', compact('consultarCompu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validador $req)
    {
        DB::table('tb_cyber')->insert([
            'usuario'=>$req->input('txtUsuario'),
            'Ncompu'=>$req->input('txtCompu'),
            'tiempo'=>$req->input('txtTiempo'),
            'fecha'=>Carbon::now(),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now()
        ]);
        return redirect('listaCompu/create')->with('confirmacion','Los datos se guardaron');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuarioid=DB::table('tb_cyber')->where('idC', $id)->first();
        return view('editarDatos', compact('usuarioid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        DB::table('tb_cyber')->where('idC', $id)->update([
            'usuario'=>$req->input('txtUsuario'),
            'Ncompu'=>$req->input('txtCompu'),
            'tiempo'=>$req->input('txtTiempo'),
            "updated_at"=>Carbon::now()
        ]);
        return redirect('listaCompu')->with('mensaje','Los datos se actualizaron');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_cyber')->where('idC', $id)->delete();
        return redirect('listaCompu')->with('mensaje', "Ya se termino el tiempo del usuario");
    }

    public function confirm($id)
    {
        $usuarioid=DB::table('tb_cyber')->where('idC', $id)->first();
        return view('confirEliminacion', compact('usuarioid'));
    }
}
