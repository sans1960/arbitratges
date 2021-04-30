<?php

namespace App\Http\Controllers;

use App\Models\Gol;
use App\Models\Partido;
use App\Models\Categoria;
use App\Models\Equipo;
use Illuminate\Http\Request;

class GolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('goles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $partidos = Partido::all();
        $categorias = Categoria::all();
        $equipos = Equipo::all();
        return view('goles.create',compact('partidos','categorias','equipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gol  $gol
     * @return \Illuminate\Http\Response
     */
    public function show(Gol $gol)
    {
        return view('goles.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gol  $gol
     * @return \Illuminate\Http\Response
     */
    public function edit(Gol $gol)
    {
        return view('goles.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gol  $gol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gol $gol)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gol  $gol
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gol $gol)
    {
        //
    }
}
