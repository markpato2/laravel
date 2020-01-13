<?php

namespace App\Http\Controllers;

use App\Roupas;
use App\Tamanho;
use Illuminate\Http\Request;
use App;

class RoupasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$notas = App\Nota::all();
      // $roupas = App\Roupas::paginate(3);

        $roupas =  App\Roupas::with('tamanhos')->get();
        //$roupas = App\Roupas::all();
        $tamanhos = App\Tamanho::all();

        //return view('inicio', ['notas'=> $notas]);
        return view('roupas', compact('roupas'),compact('tamanhos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $roupasAgregar = new Roupas();
        $request->validate([

            'descricaoRoupas'=> 'required'
        ]);

        $roupasAgregar->descricaoRoupas= $request->descricaoRoupas;
        $roupasAgregar->tamanho_id = $request->tamanho_id;
        $roupasAgregar->save();

        return back()->with('agregar','A roupa se agrego correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Roupas  $roupas
     * @return \Illuminate\Http\Response
     */
    public function show(Roupas $roupas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Roupas  $roupas
     * @return \Illuminate\Http\Response
     */
    public function edit(Roupas $roupas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Roupas  $roupas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Roupas $roupas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Roupas  $roupas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roupas $roupas)
    {
        //
    }
}
