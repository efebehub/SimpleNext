<?php

namespace App\Http\Controllers;

use App\Models\GTipoIva;
use Illuminate\Http\Request;

/**
 * Class GTipoIvaController
 * @package App\Http\Controllers
 */
class GTipoIvaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gTipoIvas = GTipoIva::paginate();

        return view('gtipoivas.index', compact('gTipoIvas'))
            ->with('i', (request()->input('page', 1) - 1) * $gTipoIvas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gTipoIva = new GTipoIva();
        return view('gtipoivas.create', compact('gTipoIva'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(GTipoIva::$rules);

        $gTipoIva = GTipoIva::create($request->all());

        return redirect()->route('gtipoivas.index')
            ->with('success', 'GTipoIva created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gTipoIva = GTipoIva::find($id);

        return view('gtipoivas.show', compact('gTipoIva'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gTipoIva = GTipoIva::find($id);

        return view('gtipoivas.edit', compact('gTipoIva'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  GTipoIva $gTipoIva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GTipoIva $gTipoIva)
    {
        request()->validate(GTipoIva::$rules);

        $gTipoIva->update($request->all());

        return redirect()->route('gtipoivas.index')
            ->with('success', 'GTipoIva updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $gTipoIva = GTipoIva::find($id)->delete();

        return redirect()->route('gtipoivas.index')
            ->with('success', 'GTipoIva deleted successfully');
    }
}
