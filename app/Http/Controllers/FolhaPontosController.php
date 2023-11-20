<?php

namespace App\Http\Controllers;

use App\Models\FolhaPontos;
use App\Http\Requests\StoreFolhaPontosRequest;
use App\Http\Requests\UpdateFolhaPontosRequest;

class FolhaPontosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $itens = FolhaPontos::all();

        return view('folha-pontos',[
            'itens'=>$itens
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFolhaPontosRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FolhaPontos $folhaPontos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FolhaPontos $folhaPontos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFolhaPontosRequest $request, FolhaPontos $folhaPontos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FolhaPontos $folhaPontos)
    {
        //
    }
}
