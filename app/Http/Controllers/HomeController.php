<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GMensaje;
use App\Http\Requests\StoreGMensajeRequest;
use App\Http\Requests\UpdateGMensajeRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function message()
    {
        /*
        echo "<script>setTimeout(function(){ window.location.href = 'http://127.0.0.1:8000/home'; }, 5000);</script>";

        $xmsg = '';
        $xaut = '';

        //echo "<script>setTimeout(function(){ window.location.href = 'http://simplenext.com.ar/home'; }, 5000);</script>";
        
        $randomId = rand(1,70);
        $gMensaje = GMensaje::find($randomId);

        $xmsg = substr($gMensaje->mensaje,0, strpos($gMensaje->mensaje,'('));
        $xaut = substr($gMensaje->mensaje,strpos($gMensaje->mensaje,'('));
        $xaut = str_replace('(','',$xaut);
        $xaut = str_replace(')','',$xaut);
        

        return view('message', compact('xmsg','xaut'));
        */

        return view('home');
    }

}
