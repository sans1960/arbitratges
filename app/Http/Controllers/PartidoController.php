<?php

namespace App\Http\Controllers;

use App\Models\Partido;
use App\Models\Categoria;
use App\Models\Equipo;
use Illuminate\Http\Request;

class PartidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partidos = Partido::all();
        return view('partidos.index',compact('partidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        $equipos = Equipo::all();
        return view('partidos.create',compact('categorias','equipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $requested_data = $request->all();
        $new_partit = new Partido();
        $new_partit->data =$requested_data['data'];
        $new_partit->categoria_id = $requested_data['categoria_id'];

        $new_partit->camp =$requested_data['camp'];
        $new_partit->resultat =$requested_data['resultat'];

        $new_partit->save();
        if(isset($requested_data['equipl'])){
            $new_partit->equipo()->attach($requested_data['equipl']);
        }
        if(isset($requested_data['equipv'])){
            $new_partit->equipo()->attach($requested_data['equipv']);
        }
        return redirect()->route('partidos.index')->with("success"," Partido Creado" );;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function show(Partido $partido)
    {
        return view('partidos.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function edit(Partido $partido)
    {
        return view('partidos.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partido $partido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partido $partido)
    {
        //
    }
}
