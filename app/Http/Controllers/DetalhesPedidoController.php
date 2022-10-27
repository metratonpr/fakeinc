<?php

namespace App\Http\Controllers;

use App\Models\DetalhesPedido;
use App\Http\Requests\StoreDetalhesPedidoRequest;
use App\Http\Requests\UpdateDetalhesPedidoRequest;

class DetalhesPedidoController extends Controller
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
     * @param  \App\Http\Requests\StoreDetalhesPedidoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDetalhesPedidoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetalhesPedido  $detalhesPedido
     * @return \Illuminate\Http\Response
     */
    public function show(DetalhesPedido $detalhesPedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetalhesPedido  $detalhesPedido
     * @return \Illuminate\Http\Response
     */
    public function edit(DetalhesPedido $detalhesPedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDetalhesPedidoRequest  $request
     * @param  \App\Models\DetalhesPedido  $detalhesPedido
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDetalhesPedidoRequest $request, DetalhesPedido $detalhesPedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetalhesPedido  $detalhesPedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetalhesPedido $detalhesPedido)
    {
        //
    }
}
