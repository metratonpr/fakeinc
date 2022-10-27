<?php

namespace App\Http\Controllers;

use App\Models\Estoque;
use App\Http\Requests\StoreEstoqueRequest;
use App\Http\Requests\UpdateEstoqueRequest;

class EstoqueController extends Controller
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
     * @param  \App\Http\Requests\StoreEstoqueRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEstoqueRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estoque  $estoque
     * @return \Illuminate\Http\Response
     */
    public function show(Estoque $estoque)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estoque  $estoque
     * @return \Illuminate\Http\Response
     */
    public function edit(Estoque $estoque)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEstoqueRequest  $request
     * @param  \App\Models\Estoque  $estoque
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEstoqueRequest $request, Estoque $estoque)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estoque  $estoque
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estoque $estoque)
    {
        //
    }
}
