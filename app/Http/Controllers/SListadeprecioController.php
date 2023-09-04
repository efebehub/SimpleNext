<?php

namespace App\Http\Controllers;

use App\Models\SListadeprecio;
use Illuminate\Http\Request;

/**
 * Class SListadeprecioController
 * @package App\Http\Controllers
 */
class SListadeprecioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sListadeprecios = SListadeprecio::paginate();

        return view('slistadeprecios.index', compact('sListadeprecios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sListadeprecio = new SListadeprecio();
        return view('slistadeprecios.create', compact('sListadeprecio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SListadeprecio::$rules);

        $sListadeprecio = SListadeprecio::create($request->all());

        return redirect()->route('slistadeprecios.index')
            ->with('success', 'SListadeprecio created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sListadeprecio = SListadeprecio::find($id);

        return view('slistadeprecios.show', compact('sListadeprecio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sListadeprecio = SListadeprecio::find($id);

        return view('slistadeprecios.edit', compact('sListadeprecio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SListadeprecio $sListadeprecio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SListadeprecio $sListadeprecio)
    {
        request()->validate(SListadeprecio::$rules);

        $sListadeprecio->update($request->all());

        return redirect()->route('slistadeprecios.index')
            ->with('success', 'SListadeprecio updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $sListadeprecio = SListadeprecio::find($id)->delete();

        return redirect()->route('slistadeprecios.index')
            ->with('success', 'SListadeprecio deleted successfully');
    }
}
