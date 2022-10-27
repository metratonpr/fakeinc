<?php

namespace App\Http\Controllers;

use App\Models\GrupoProduto;
use App\Http\Requests\StoreGrupoProdutoRequest;
use App\Http\Requests\UpdateGrupoProdutoRequest;

class GrupoProdutoController extends Controller
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
     * @param  \App\Http\Requests\StoreGrupoProdutoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGrupoProdutoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GrupoProduto  $grupoProduto
     * @return \Illuminate\Http\Response
     */
    public function show(GrupoProduto $grupoProduto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GrupoProduto  $grupoProduto
     * @return \Illuminate\Http\Response
     */
    public function edit(GrupoProduto $grupoProduto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGrupoProdutoRequest  $request
     * @param  \App\Models\GrupoProduto  $grupoProduto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGrupoProdutoRequest $request, GrupoProduto $grupoProduto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GrupoProduto  $grupoProduto
     * @return \Illuminate\Http\Response
     */
    public function destroy(GrupoProduto $grupoProduto)
    {
        //
    }
}
