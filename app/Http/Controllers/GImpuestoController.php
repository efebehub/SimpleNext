<?php

namespace App\Http\Controllers;

use App\Models\GImpuesto;
use Illuminate\Http\Request;

/**
 * Class GImpuestoController
 * @package App\Http\Controllers
 */
class GImpuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gImpuestos = GImpuesto::all()->SortBy('descripcion');

        return view('g-impuestos.index', compact('gImpuestos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gImpuesto = new GImpuesto();
        return view('g-impuestos.create', compact('gImpuesto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(GImpuesto::$rules);

        $gImpuesto = GImpuesto::create($request->all());

        return redirect()->route('g-impuestos.index')
            ->with('success', 'GImpuesto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gImpuesto = GImpuesto::find($id);

        return view('g-impuestos.show', compact('gImpuesto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gImpuesto = GImpuesto::find($id);

        return view('g-impuestos.edit', compact('gImpuesto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  GImpuesto $gImpuesto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GImpuesto $gImpuesto)
    {
        request()->validate(GImpuesto::$rules);

        $gImpuesto->update($request->all());

        return redirect()->route('g-impuestos.index')
            ->with('success', 'GImpuesto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $gImpuesto = GImpuesto::find($id)->delete();

        return redirect()->route('g-impuestos.index')
            ->with('success', 'GImpuesto deleted successfully');
    }
}
