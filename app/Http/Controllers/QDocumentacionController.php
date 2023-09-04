<?php

namespace App\Http\Controllers;

use App\Models\QDocumentacion;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QDocumentacionController extends Controller
{

    public function index()
    {

        $qDocs1 = $this->returnCarpetasRaiz();

        $qDocs2 = $this->returnCarpetasSecundarias();

        $qDocsF = $this->returnArchivos();

        return view('q-documentacion.index', compact('qDocs1','qDocs2','qDocsF'));
    }

    public function create()
    {
        $qDocu = new QDocumentacion();
        
        $qDocs1 = $this->returnCarpetasRaiz();

        $qDocs2 = $this->returnCarpetasSecundarias();

        return view('q-documentacion.create', compact('qDocu','qDocs1','qDocs2'));
    }

    public function store(Request $request)
    {
        //request()->validate(QDocumentacion::$rules);
        $myimage = '';
        if ($request->image!='') {
            $destinationPath = 'documentacion/'.Auth::user()->idempresa;
            //dd($destinationPath);
            $myimage = $request->image->getClientOriginalName();
            $extension = $request->image->extension();
            $request->image->move(public_path($destinationPath), $myimage);
        }

        $requestData = $request->all();
        if ($myimage!='') {
            $requestData['file'] =  $myimage;
            $requestData['extension'] =  $extension;
        }

        $requestData['idempresa'] = Auth::user()->idempresa;
        //dd($requestData);
        $QDocu = QDocumentacion::create($requestData);

        //dd($QDocu->iddocumentacion);

        return redirect()->route('q-documentacion.index')->with('xiddocumentacion', $QDocu->iddocumentacion);
        //return redirect('q-documentacion');

    }

    public function show(QDocumentacion $qDocumentacion)
    {
        //
    }

    public function edit($id)
    {
        $qDocu = QDocumentacion::find($id);

        $qDocs1 = $this->returnCarpetasRaiz();

        $qDocs2 = $this->returnCarpetasSecundarias();

        return view('q-documentacion.edit', compact('qDocu','qDocs1','qDocs2'));        

    }

    public function update(Request $request, QDocumentacion $qDocumentacion)
    {

        $myimage = '';
        if ($request->image!='') {
            $destinationPath = 'documentacion/'.Auth::user()->idempresa;
            $myimage = $request->image->getClientOriginalName();
            $extension = $request->image->extension();
            $request->image->move(public_path($destinationPath), $myimage);
        }

        $requestData = $request->all();
        if ($myimage!='') {
            $requestData['file'] =  $myimage;
            $requestData['extension'] =  $extension;

        }

        $requestData['idempresa'] = Auth::user()->idempresa;
        $qDocumentacion->update($requestData);

        //dd($qDocumentacion->iddocumentacion);

        return redirect()->route('q-documentacion.index')->with('xiddocumentacion', $qDocumentacion->iddocumentacion);
    }

    public function destroy($id)
    {
        try {

            $qDoc = QDocumentacion::find($id);
            if ($qDoc->tipo=='f') {

                /*
                dd(public_path('documentacion'));

                /home/c2050240/public_html/laravel/storage//laravel/public/documentacion/1/borri fabian.PDF
                http://simplenext.com.ar/laravel/public/documentacion/1/borri%20fabian.PDF

                "/home/c2050240/public_html/laravel/public/documentacion/1/borri fabian.PDF"
                */
                $xpath = public_path('documentacion').'/'.Auth::user()->idempresa.'/';
                //dd($xpath.$qDoc->file);
                unlink($xpath.$qDoc->file);
            }

            $result = $qDoc->delete();
            return redirect('q-documentacion');
        } catch (Exception $err) {
            return redirect('q-documentacion')->with(['error'=>'No se pudo eliminar el item: '.$err,'xiddocumentacion'=>$id]);
        }

    }

    private function returnCarpetasRaiz() {
        $qDocs1 = QDocumentacion::select('q_documentacion.iddocumentacion', 'q_documentacion.tipo', 'q_documentacion.idpadre', 'q_documentacion.nombre', 'q_documentacion.file', 'q_documentacion.fechavigencia')
        ->whereNull('idpadre')->where('tipo','=','c')->where('idempresa','=',Auth::user()->idempresa)
        ->orderBy('nombre')
        ->get();

        return $qDocs1;
    }

    private function returnCarpetasSecundarias() {
        $qDocs2 = QDocumentacion::select('q_documentacion.iddocumentacion', 'q_documentacion.tipo', 'q_documentacion.idpadre', 'q_documentacion.nombre', 'q_documentacion.file', 'q_documentacion.fechavigencia')
        ->whereNotNull('idpadre')->where('tipo','=','c')->where('idempresa','=',Auth::user()->idempresa)
        ->orderBy('nombre')
        ->get();

        return $qDocs2;
    }

    private function returnArchivos() {
        $qDocsF = QDocumentacion::select('q_documentacion.iddocumentacion', 'q_documentacion.tipo', 'q_documentacion.idpadre', 'q_documentacion.nombre', 'q_documentacion.file', 'q_documentacion.extension', 'q_documentacion.fechavigencia')
        ->where('tipo','=','f')
        ->where('idempresa','=',Auth::user()->idempresa)
        ->orderBy('nombre')
        ->get();

        return $qDocsF;
    }
}
