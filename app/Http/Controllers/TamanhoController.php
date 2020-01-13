<?php

namespace App\Http\Controllers;

use App\Tamanho;
use Illuminate\Http\Request;
use App;

class TamanhoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$notas = App\Nota::all();
        $tamanhos = App\Tamanho::paginate(3);

        //return view('inicio', ['notas'=> $notas]);
        return view('tamanho', compact('tamanhos'));
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
        $tamanhoAgregar = new Tamanho();
        $request->validate([

            'descricaoTamanho'=> 'required'
        ]);

        $tamanhoAgregar->descricaoTamanho= $request->descricaoTamanho;
        $tamanhoAgregar->save();

        return back()->with('agregar','O Tamanho se agrego correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tamanho  $tamanho
     * @return \Illuminate\Http\Response
     */
    public function show(Tamanho $tamanho)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tamanho  $tamanho
     * @return \Illuminate\Http\Response
     */
    public function edit(Tamanho $tamanho)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tamanho  $tamanho
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tamanho $tamanho)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tamanho  $tamanho
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tamanho $tamanho)
    {
        //
    }
}
