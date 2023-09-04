<?php

namespace App\Http\Controllers;

use App\Models\FTipoFondo;
use Illuminate\Http\Request;

/**
 * Class FTipoFondoController
 * @package App\Http\Controllers
 */
class FTipoFondoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fTipoFondos = FTipoFondo::paginate();

        return view('f-tipofondos.index', compact('fTipoFondos'))
            ->with('i', (request()->input('page', 1) - 1) * $fTipoFondos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fTipoFondo = new FTipoFondo();
        return view('f-tipofondos.create', compact('fTipoFondo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(FTipoFondo::$rules);

        if(!$request->has('sumaencaja'))
        {
            $request->merge(['sumaencaja' => 0]);
        }

        return $request;

        $fTipoFondo = FTipoFondo::create($request->all());

        return redirect()->route('f-tipofondos.index')
            ->with('success', 'FTipoFondo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fTipoFondo = FTipoFondo::find($id);

        return view('f-tipofondos.show', compact('fTipoFondo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fTipoFondo = FTipoFondo::find($id);

        return view('f-tipofondos.edit', compact('fTipoFondo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  FTipoFondo $fTipoFondo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FTipoFondo $fTipoFondo)
    {
        request()->validate(FTipoFondo::$rules);
 
        if(!$request->has('sumaencaja'))
        {
            $request->merge(['sumaencaja' => 0]);
        }
        if(!$request->has('esmoneda'))
        {
            $request->merge(['esmoneda' => 0]);
        }
        //return $request;
        $fTipoFondo->update($request->all());

        return redirect()->route('f-tipofondos.index')
            ->with('success', 'FTipoFondo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $fTipoFondo = FTipoFondo::find($id)->delete();

        return redirect()->route('f-tipofondos.index')
            ->with('success', 'FTipoFondo deleted successfully');
    }
}
