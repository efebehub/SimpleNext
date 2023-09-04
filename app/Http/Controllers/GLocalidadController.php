<?php

namespace App\Http\Controllers;

use App\Models\GLocalidad;
use App\Models\GProvincia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
/**
 * Class GLocalidadController
 * @package App\Http\Controllers
 */
class GLocalidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //dd($request);
        //return;

        if(isset($request->idprovincia)){
            $gLocalidades = GLocalidad::select('g_localidades.id', 'g_localidades.descripcion', 'g_localidades.cp', 'g_localidades.idprovincia', 'g_provincias.descripcion as provincia')
            ->join('g_provincias', 'g_localidades.idprovincia', '=', 'g_provincias.idprovincia')
            ->where('g_provincias.idprovincia',$request->idprovincia)
            ->get()->sortBy('descripcion');

            //dd($gLocalidades);
        }else{
            $gLocalidades = GLocalidad::select('g_localidades.id', 'g_localidades.descripcion', 'g_localidades.cp', 'g_localidades.idprovincia', 'g_provincias.descripcion as provincia')
            ->join('g_provincias', 'g_localidades.idprovincia', '=', 'g_provincias.idprovincia')
            ->get()->sortBy('descripcion');
        }

        return view('g-localidades.index', compact('gLocalidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $this->show($id);

        /*
        $gLocalidade = new GLocalidad();
        $gProvincias = GProvincia::all();
        return view('g-localidades.create', compact('gLocalidade','gProvincias'));
        */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        

        request()->validate(GLocalidad::$rules);

        $gLocalidade = GLocalidad::create($request->all());

        return redirect()->route('g-localidades.index')
            ->with('success', 'GLocalidad created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id='')
    {
       
        $urlloc = "https://apis.datos.gob.ar/georef/api/municipios?max=5000&provincia=";

        $url = "https://apis.datos.gob.ar/georef/api/provincias";
        $response = Http::get($url);

        //dd($response->json());
        $data = $response->json(['provincias']);
        //dd($data);

        foreach ($data as $obj) {         

            $idprovincia=$obj['id'];


            $gProvincia = GProvincia::find($idprovincia);
            if (!$gProvincia) {

                GProvincia::create([
                    'idprovincia' => $idprovincia,
                    'descripcion' => $obj['nombre'],
                    'idpais' => '1',
                ]);

            }

            $response2 = Http::get($urlloc.$idprovincia);

            $data2 = $response2->json(['municipios']);
            //dd($data2);
    
            foreach ($data2 as $obj2) { 

                $gLocalidade = GLocalidad::find($obj2['id']);
                if (!$gLocalidade) {

                    GLocalidad::create([
                        'id' => $obj2['id'],
                        'descripcion' => $obj2['nombre'],
                        'idprovincia' => $idprovincia,
                        'cp' => '',
                    ]);

                }

            }
                    
        }

        return redirect()->route('g-localidades.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gLocalidade = GLocalidad::find($id);
        $gProvincias = GProvincia::all();
        return view('g-localidades.edit', compact('gLocalidade','gProvincias'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  GLocalidad $GLocalidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GLocalidad $gLocalidade)
    {
        
        //dd($request);

        request()->validate(GLocalidad::$rules);

        $gLocalidade->update($request->all());

        return redirect()->route('g-localidades.index')
            ->with('success', 'GLocalidad updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $GLocalidad = GLocalidad::find($id)->delete();

        return redirect()->route('g-localidades.index')
            ->with('success', 'GLocalidad deleted successfully');
    }

}
