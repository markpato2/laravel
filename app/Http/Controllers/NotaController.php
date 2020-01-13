<?php

namespace App\Http\Controllers;

use App\Nota;
use Illuminate\Http\Request;
use App;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$notas = App\Nota::all();
        $notas = App\Nota::paginate(3);

        //return view('inicio', ['notas'=> $notas]);
        return view('inicio', compact('notas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $notaAgregar = new Nota;
        $request->validate([
            'nombre'=>'required',
            'descricao'=> 'required'
        ]);
        $notaAgregar->nombre= $request->nombre;
        $notaAgregar->descricao= $request->descricao;
        $notaAgregar->save();

        return back()->with('agregar','La nota se agrego correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function show(Nota $nota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $notaActualizar = App\Nota::findOrFail($id);
        return view('editar',compact('notaActualizar'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $notaUpdate = App\Nota::findOrFail($id);
        $notaUpdate->nombre= $request->nombre;
        $notaUpdate->descricao= $request->descricao;
        $notaUpdate->save();
        return back()->with('update','La nota foi atualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notaEliminar = App\Nota::findOrFail($id);
        $notaEliminar->delete();
        return back()->with('eliminar','La nota foi eliminada');


    }
}
