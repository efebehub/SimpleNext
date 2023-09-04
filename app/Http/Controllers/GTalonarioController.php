<?php

namespace App\Http\Controllers;

use App\Models\GTalonario;
use Illuminate\Http\Request;

/**
 * Class GTalonarioController
 * @package App\Http\Controllers
 */
class GTalonarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gTalonarios = GTalonario::paginate();

        return view('gtalonarios.index', compact('gTalonarios'))
            ->with('i', (request()->input('page', 1) - 1) * $gTalonarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gTalonario = new GTalonario();
        return view('gtalonarios.create', compact('gTalonario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(GTalonario::$rules);

        $gTalonario = GTalonario::create($request->all());

        return redirect()->route('gtalonarios.index')->with('success', 'GTalonario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gTalonario = GTalonario::find($id);

        return view('gtalonarios.show', compact('gTalonario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gTalonario = GTalonario::find($id);

        return view('gtalonarios.edit', compact('gTalonario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  GTalonario $gTalonario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GTalonario $gTalonario)
    {
        request()->validate(GTalonario::$rules);

        $gTalonario->update($request->all());

        return redirect()->route('gtalonarios.index')->with('success', 'GTalonario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $gTalonario = GTalonario::find($id)->delete();

        return redirect()->route('gtalonarios.index')->with('success', 'GTalonario deleted successfully');
    }
}
