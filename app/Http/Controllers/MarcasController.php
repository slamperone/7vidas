<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marcas;
use App\Subcategorias;



class MarcasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Marcas  $marcas
     * @return \Illuminate\Http\Response
     */
    public function show($cat)
    {   

        //filtra marcas por categoria
        $marcas = Marcas::where('cat',$cat)
            ->orderBy('marca','asc')
            ->get();

        return json_encode($marcas);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Marcas  $marcas
     * @return \Illuminate\Http\Response
     */
    public function showSub($cat)
    {   
        $subcats = Subcategorias::where('id_cat',$cat)
            ->orderBy('nombre','asc')
            ->get();

        return json_encode($subcats);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Marcas  $marcas
     * @return \Illuminate\Http\Response
     */
    public function edit(Marcas $marcas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Marcas  $marcas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Marcas $marcas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Marcas  $marcas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marcas $marcas)
    {
        //
    }
}
