<?php

namespace App\Http\Controllers;

use App\Models\DetalheCompra;
use App\Http\Requests\StoreDetalheCompraRequest;
use App\Http\Requests\UpdateDetalheCompraRequest;

class DetalheCompraController extends Controller
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
     * @param  \App\Http\Requests\StoreDetalheCompraRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDetalheCompraRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetalheCompra  $detalheCompra
     * @return \Illuminate\Http\Response
     */
    public function show(DetalheCompra $detalheCompra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetalheCompra  $detalheCompra
     * @return \Illuminate\Http\Response
     */
    public function edit(DetalheCompra $detalheCompra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDetalheCompraRequest  $request
     * @param  \App\Models\DetalheCompra  $detalheCompra
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDetalheCompraRequest $request, DetalheCompra $detalheCompra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetalheCompra  $detalheCompra
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetalheCompra $detalheCompra)
    {
        //
    }
}
