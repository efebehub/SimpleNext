<?php

namespace App\Http\Controllers;

use App\Models\GTipoComprobante;
use Illuminate\Http\Request;

/**
 * Class GTipoComprobanteController
 * @package App\Http\Controllers
 */
class GTipoComprobanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gTipocomprobante = GTipoComprobante::all()->SortBy('modulo');

        return view('gtipocomprobante.index', compact('gTipocomprobante'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gTipoComprobante = new GTipoComprobante();
        return view('gtipocomprobante.create', compact('gTipoComprobante'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(GTipoComprobante::$rules);

        $gTipoComprobante = GTipoComprobante::create($request->all());

        return redirect()->route('gtipocomprobante.index')
            ->with('success', 'GTipoComprobante created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gTipoComprobante = GTipoComprobante::find($id);

        return view('gtipocomprobante.show', compact('gTipoComprobante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gTipoComprobante = GTipoComprobante::find($id);

        return view('gtipocomprobante.edit', compact('gTipoComprobante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  GTipoComprobante $gTipoComprobante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GTipoComprobante $gTipoComprobante)
    {
        request()->validate(GTipoComprobante::$rules);

        $gTipoComprobante->update($request->all());

        return redirect()->route('gtipocomprobante.index')
            ->with('success', 'GTipoComprobante updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $gTipoComprobante = GTipoComprobante::find($id)->delete();

        return redirect()->route('gtipocomprobante.index')
            ->with('success', 'GTipoComprobante deleted successfully');
    }
}
