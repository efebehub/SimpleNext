<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

/**
 * Class REstablecimientoController
 * @package App\Http\Controllers
 */
class REstablecimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $baseUrl = env('API_ENDPOINT');

        $client = new \GuzzleHttp\Client();


        //Get Token
        $url = ($baseUrl."/oauth/token?grant_type=client_credentials&client_id=c1e7c8e5eccd29274f1a9fbb0477e99f&client_secret=d044a94cecc88a7e1ca1835160ab7e3c");

        $response = Http::get('https://api.teamplace.finneg.com/api/oauth/token?', [
            'grant_type' => 'client_credentials',
            'client_id' => 'c1e7c8e5eccd29274f1a9fbb0477e99f',
            'client_secret' => 'd044a94cecc88a7e1ca1835160ab7e3c',
        ]);

        $token=$response->body();
        //$token='270e4e0d-bfbe-4dd4-812d-3fba4413b759';

        //get listado
        $res = $client->request('GET', $baseUrl.'/reports/ZBI_NX_ESTAB?ACCESS_TOKEN='. $token);
        //$establecimientos = ($res->getBody());
        $establecimientos = json_decode($res->getBody());

        return view('r-establecimientos.index', compact('establecimientos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fTipoFondo = new FTipoFondo();
        return view('r-establecimientos.create', compact('fTipoFondo'));
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

        return redirect()->route('r-establecimientos.index')
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

        return view('r-establecimientos.show', compact('fTipoFondo'));
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

        return view('r-establecimientos.edit', compact('fTipoFondo'));
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

        return redirect()->route('r-establecimientos.index')
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

        return redirect()->route('r-establecimientos.index')
            ->with('success', 'FTipoFondo deleted successfully');
    }
}
