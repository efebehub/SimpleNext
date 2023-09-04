<?php

namespace App\Http\Controllers;

use App\Models\TPlancuenta;
use Illuminate\Http\Request;

/**
 * Class TPlancuentaController
 * @package App\Http\Controllers
 */
class TPlancuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tPlancuentas = TPlancuenta::all();

        return view('tplancuentas.index', compact('tPlancuentas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tPlancuenta = new TPlancuenta();
        $tPlancuentaPadre = TPlancuenta::all();
        return view('tplancuentas.create', compact('tPlancuenta','tPlancuentaPadre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!$request->has('asiento'))
        {
            $request->merge(['asiento' => 0]);
        }
        if(!$request->has('nivel'))
        {
            $request->merge(['nivel' => 0]);
        }


        //return $request;
        request()->validate(TPlancuenta::$rules);

        //El nivel es el de la cuenta padre + 1
        $request->nivel=1;
        if($request->idcuentapadre!='') {
            $tPlancuentaPadre = TPlancuenta::find($request->idcuentapadre);
            if($tPlancuentaPadre->nivel!='') {
                $request->nivel=$tPlancuentaPadre->nivel+1;
            }
        }

        $tPlancuenta = TPlancuenta::create($request->all());

        return redirect()->route('tplancuentas.index')
            ->with('success', 'TPlancuenta created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tPlancuenta = TPlancuenta::find($id);
        $tPlancuentaPadre = TPlancuenta::all();
        return view('tplancuentas.show', compact('tPlancuenta','tPlancuentaPadre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tPlancuenta = TPlancuenta::find($id);
        $tPlancuentaPadre = TPlancuenta::all();
        return view('tplancuentas.edit', compact('tPlancuenta','tPlancuentaPadre'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TPlancuenta $tPlancuenta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TPlancuenta $tPlancuenta)
    {
        

        if(!$request->has('asiento'))
        {
            $request->merge(['asiento' => 0]);
        }
        if(!$request->has('nivel'))
        {
            $request->merge(['nivel' => 0]);
        }

        request()->validate(TPlancuenta::$rules);

        

        //El nivel es el de la cuenta padre + 1
        $request->nivel=0;
        if($request->idcuentapadre!='') {
            $tPlancuentaPadre = TPlancuenta::find($request->idcuentapadre);
            $xnivel=intval($tPlancuentaPadre->nivel);
            $request['nivel']=$xnivel+1;
        }
        
        //return $request;

        $tPlancuenta->update($request->all());

        return redirect()->route('tplancuentas.index')
            ->with('success', 'TPlancuenta updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tPlancuenta = TPlancuenta::find($id)->delete();

        return redirect()->route('tplancuentas.index')
            ->with('success', 'TPlancuenta deleted successfully');
    }
}
