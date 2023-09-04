<?php

namespace App\Http\Controllers;

use App\Models\GMensaje;
use App\Http\Requests\StoreGMensajeRequest;
use App\Http\Requests\UpdateGMensajeRequest;

class GMensajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $randomId = rand(1,70);
        $gMensaje = GMensaje::find($randomId);

        return view('g-.show', compact('gMensaje'));
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
     * @param  \App\Http\Requests\StoreGMensajeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGMensajeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GMensaje  $gMensaje
     * @return \Illuminate\Http\Response
     */
    public function show(GMensaje $gMensaje)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GMensaje  $gMensaje
     * @return \Illuminate\Http\Response
     */
    public function edit(GMensaje $gMensaje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGMensajeRequest  $request
     * @param  \App\Models\GMensaje  $gMensaje
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGMensajeRequest $request, GMensaje $gMensaje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GMensaje  $gMensaje
     * @return \Illuminate\Http\Response
     */
    public function destroy(GMensaje $gMensaje)
    {
        //
    }
}
