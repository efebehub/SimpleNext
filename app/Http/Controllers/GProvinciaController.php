<?php

namespace App\Http\Controllers;

use App\Models\GProvincia;
use Illuminate\Http\Request;

/**
 * Class GProvinciaController
 * @package App\Http\Controllers
 */
class GProvinciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gProvincias = GProvincia::paginate();

        return view('g-provincia.index', compact('gProvincias'))
            ->with('i', (request()->input('page', 1) - 1) * $gProvincias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gProvincia = new GProvincia();
        return view('g-provincia.create', compact('gProvincia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(GProvincia::$rules);

        $gProvincia = GProvincia::create($request->all());

        return redirect()->route('g-provincias.index')
            ->with('success', 'GProvincia created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gProvincia = GProvincia::find($id);

        return view('g-provincia.show', compact('gProvincia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gProvincia = GProvincia::find($id);

        return view('g-provincia.edit', compact('gProvincia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  GProvincia $gProvincia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GProvincia $gProvincia)
    {
        request()->validate(GProvincia::$rules);

        $gProvincia->update($request->all());

        return redirect()->route('g-provincias.index')
            ->with('success', 'GProvincia updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $gProvincia = GProvincia::find($id)->delete();

        return redirect()->route('g-provincias.index')
            ->with('success', 'GProvincia deleted successfully');
    }
}
