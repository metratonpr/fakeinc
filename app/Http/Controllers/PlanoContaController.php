<?php

namespace App\Http\Controllers;

use App\Models\PlanoConta;
use App\Http\Requests\StorePlanoContaRequest;
use App\Http\Requests\UpdatePlanoContaRequest;

class PlanoContaController extends Controller
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
     * @param  \App\Http\Requests\StorePlanoContaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlanoContaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PlanoConta  $planoConta
     * @return \Illuminate\Http\Response
     */
    public function show(PlanoConta $planoConta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PlanoConta  $planoConta
     * @return \Illuminate\Http\Response
     */
    public function edit(PlanoConta $planoConta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlanoContaRequest  $request
     * @param  \App\Models\PlanoConta  $planoConta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlanoContaRequest $request, PlanoConta $planoConta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlanoConta  $planoConta
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlanoConta $planoConta)
    {
        //
    }
}
