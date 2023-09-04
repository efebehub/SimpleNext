<?php

namespace App\Http\Controllers;

use App\Models\GComprobante;
use Illuminate\Http\Request;

/**
 * Class GComprobanteController
 * @package App\Http\Controllers
 */
class GComprobanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($pModulo='', $pIDEntidad='', $pCtaCte='')
    {

        $where_array = [];
        // Si se paso valor agrego al array para hacer el where y busco el profesional
        if($pModulo != null) {
            $where_array = array_merge($where_array, ['modulo' => $pModulo]);
        }
        if($pIDEntidad != null) {
            $where_array = array_merge($where_array, ['identidad' => $pIDEntidad]);
        }
        if($pCtaCte != null) {
            $where_array = array_merge($where_array, ['ctacte' => $pCtaCte]);
        }

        //$fini = date("Y-m-d", strtotime($request->input('date_start')));
        //$ffin = date("Y-m-d", strtotime($request->input('date_end')));
    
        $gComprobantes = GComprobante::where($where_array); // solo va a hacer el where de las variables que no este nulas. En caso de no pasar ninguno de los dos devuele todos los registros
                                      //->whereBetween('date', [$fini, $ffin])->get();
    

       

        return view('g-comprobante.index', compact('gComprobantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gComprobante = new GComprobante();
        return view('g-comprobante.create', compact('gComprobante'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(GComprobante::$rules);

        $gComprobante = GComprobante::create($request->all());

        return redirect()->route('g-comprobantes.index')
            ->with('success', 'GComprobante created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gComprobante = GComprobante::find($id);

        return view('g-comprobante.show', compact('gComprobante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gComprobante = GComprobante::find($id);

        return view('g-comprobante.edit', compact('gComprobante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  GComprobante $gComprobante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GComprobante $gComprobante)
    {
        request()->validate(GComprobante::$rules);

        $gComprobante->update($request->all());

        return redirect()->route('g-comprobantes.index')
            ->with('success', 'GComprobante updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $gComprobante = GComprobante::find($id)->delete();

        return redirect()->route('g-comprobantes.index')
            ->with('success', 'GComprobante deleted successfully');
    }
}
