<?php

namespace App\Http\Controllers;

use App\Models\QNoconformidad;
use App\Http\Requests\StoreQNoconformidadRequest;
use Illuminate\Http\Request;
use App\Models\User;

class QNoconformidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($pModulo='')
    {
        $qNCs = QNoconformidad::select('idnoconformidad', 'descripcion', 'idusuariogenera', 'fechagenera', 'tipo', 'idiusuariosoluciona', 'fechanecesidad', 
        'fechasolucion', 'solucionado', 'tiponc', 'tiposolucion', 'idnc', 'observacion', 'conclusion',
        'ug.name as nombregenera','us.name as nombresoluciona')
            ->leftjoin('users as us', 'q_noconformidad.idiusuariosoluciona', '=', 'us.id')
            ->leftjoin('users as ug', 'q_noconformidad.idusuariogenera', '=', 'ug.id')
            ->orderBy('fechagenera','desc')
            ->get();

        return view('q-noconformidad.index', compact('qNCs'));
    }


    public function iraform($id,$vista) {

        if ($id=='') {
            $qNc = new QNoconformidad();
            $qNc->fechagenera=date('dd-mm-YYYY');
        } else {
            $qNc = QNoconformidad::find($id);

            //dd($qNc);
        }

        $qNCids = QNoconformidad::all();
        
        $gUsuarios = User::all()->sortBy('name');

        return view($vista, compact('qNc','gUsuarios','qNCids'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->iraform('','q-noconformidad.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQNoconformidadRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQNoconformidadRequest $request)
    {
        request()->validate(QNoconformidad::$rules);

        $qNC = QNoconformidad::create($request->all());

        return redirect('q-noconformidad.index')->with(['message' => 'Entidad created correctly!!!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QNoconformidad  $qNoconformidad
     * @return \Illuminate\Http\Response
     */
    public function show(QNoconformidad $qNoconformidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QNoconformidad  $qNoconformidad
     * @return \Illuminate\Http\Response
     * 
     */
    public function edit($id)
    {
        return $this->iraform($id,'q-noconformidad.edit');
    }

    public function update(Request $request, QNoconformidad $qNoconformidad)
    {
        request()->validate(QNoconformidad::$rules);

        $qNoconformidad->update($request->all());

        return redirect()->route('q-noconformidad.index')
        ->with('success', 'GTipoComprobante updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QNoconformidad  $qNoconformidad
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        dd($id);
        $qnc = QNoconformidad::find($id)->delete();

        return redirect()->route('q-noconformidad.index')
        ->with('success', 'GTipoComprobante updated successfully');
    }
}
