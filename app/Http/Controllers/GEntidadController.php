<?php

namespace App\Http\Controllers;

use App\Models\GEntidad;
use App\Models\GLocalidad;
use App\Models\GProvincia;
use App\Models\SListadeprecio;
use App\Models\GTipoIva;
use App\Models\TPlancuenta;
use Illuminate\Http\Request;

/**
 * Class GEntidadController
 * @package App\Http\Controllers
 */
class GEntidadController extends Controller
{


    public function tituloModulo($pModulo, $pPlural) {
        $pTitulo='Entidades';

        switch ($pModulo) {
            case 'V': $pTitulo=$pPlural ? 'Clientes' : 'Cliente'; break;
            case 'C': $pTitulo=$pPlural ? 'Proveedores' : 'Proveedor'; break;
            case 'D': $pTitulo=$pPlural ? 'Legajos': 'Legajo'; break;
        }



        return $pTitulo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($pModulo='')
    {

        if($pModulo == 'V') {
            // Si se paso valor agrego al array para hacer el where y busco el profesional
            $gEntidades = GEntidad::select('g_entidades.id', 'g_entidades.nombre', 'g_entidades.cuit', 'g_entidades.domicilio', 'g_entidades.barrio', 'g_entidades.telefono', 'g_entidades.email', 'g_localidades.descripcion as localidad' )
            ->leftjoin('g_localidades', 'g_entidades.idlocalidad', '=', 'g_localidades.id')
            ->where('escliente','=','1')
            ->orderBy('nombre')
            ->get();
        } 
        
        if($pModulo == '') {
            $gEntidades = GEntidad::select('g_entidades.id', 'g_entidades.nombre', 'g_entidades.cuit', 'g_entidades.domicilio', 'g_entidades.barrio', 'g_entidades.telefono', 'g_entidades.email', 'g_localidades.descripcion as localidad')
            ->leftjoin('g_localidades', 'g_entidades.idlocalidad', '=', 'g_localidades.id')
            ->orderBy('nombre')
            ->get();
        }

        $pTitulo=  $this->tituloModulo($pModulo,true);

        return view('g-entidades.index', compact('gEntidades','pModulo','pTitulo'));
    }


    public function iraform($id,$pModulo,$pTitulo,$vista) {

        if ($id=='') {
            $gEntidade = new GEntidad();
        } else {
            $gEntidade = GEntidad::find($id);

            //dd($gEntidade);
        }
        
        $gLocalidad = GLocalidad::select('g_localidades.id', 'g_localidades.descripcion', 'g_localidades.idprovincia', 'g_provincias.descripcion as provincia')
        ->join('g_provincias', 'g_localidades.idprovincia', '=', 'g_provincias.idprovincia')
        ->get();
        $gProvincia = GProvincia::select('g_provincias.idprovincia', 'g_provincias.descripcion')    ->get();
        $gListaPrecios = SListadeprecio::all()->sortBy('descripcion');
        $gVendedores = GEntidad::where('esvendedor', '=','1')->orderBy('nombre')->get();
        $gTipoIva = GTipoIva::all()->sortBy('descripcion');
        $tPlanCuentas = TPlancuenta::all()->sortBy('id');
        return view($vista, compact('gEntidade','gLocalidad','gProvincia','gListaPrecios','gVendedores','gTipoIva','tPlanCuentas','pModulo','pTitulo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $pModulo=$request->input('pModulo');
        $pTitulo=  $this->tituloModulo($pModulo,false);
        return $this->iraform('',$pModulo,$pTitulo,'g-entidades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(GEntidad::$rules);

        $GEntidad = GEntidad::create($request->all());

        return redirect('g-entidades/'.$request->input('pModulo'))->with(['message' => 'Entidad created correctly!!!']);


        //return redirect()->route('g-entidades.index')            ->with('success', 'Entidad created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if ($id=='V') {
            return $this->index($id);
        }
        

        $gEntidade = GEntidad::find($id);

        return view('g-entidades.show', compact('gEntidade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        //dd($request->input('pModulo'));
     
        $pModulo=$request->input('pModulo');
        $pTitulo=  $this->tituloModulo($pModulo,false);

        return $this->iraform($id,$pModulo,$pTitulo,'g-entidades.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  GEntidad $GEntidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GEntidad $GEntidade, $pId='', $pModulo='')
    {

        //dd($request);

        request()->validate(GEntidad::$rules);

        if(!$request->has('escliente')) { $request->merge(['escliente' => 0]); }
        if(!$request->has('esproveedor')) { $request->merge(['esproveedor' => 0]); }
        if(!$request->has('estransporte')) { $request->merge(['estransporte' => 0]); }
        if(!$request->has('esentfin')) { $request->merge(['esentfin' => 0]); }
        if(!$request->has('esvendedor')) { $request->merge(['esvendedor' => 0]); }
        if(!$request->has('esconsecionario')) { $request->merge(['esconsecionario' => 0]); }
        if(!$request->has('esempleado')) { $request->merge(['esempleado' => 0]); }
        if(!$request->has('foto')) { $request->merge(['foto' => '']); }
        if(!$request->has('idejercicio')) { $request->merge(['idejercicio' => '1']); }
        if(!$request->has('idlogin')) { $request->merge(['idlogin' => '1']); }

        $GEntidade->update($request->all());

        return redirect('g-entidades/'.$request->input('pModulo'))->with(['message' => 'GEntidad saved correctly!!!']);

        //return redirect()->route('g-entidades.index', [$request->input('pModulo')]);
            //->with('success', 'GEntidad updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id, Request $request)
    {
        $GEntidad = GEntidad::find($id)->delete();

        return redirect('g-entidades/'.$request->input('pModulo'))->with(['message' => 'GEntidad deleted correctly!!!']);

        //return redirect()->route('g-entidades.index')
        //    ->with('success', 'GEntidad deleted successfully');
    }

}
