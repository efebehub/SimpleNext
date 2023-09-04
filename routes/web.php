<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();    

Route::group(['middleware' => 'auth'], function(){  

    //Route::get('/', function () { return view('home'); });
    Route::get('/', [App\Http\Controllers\HomeController::class, 'message'])->name('home');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('g-tipoivas', App\Http\Controllers\GTipoIvaController::class);
    Route::resource('g-talonarios', App\Http\Controllers\GTalonarioController::class);
    Route::resource('g-entidades', App\Http\Controllers\GEntidadController::class);
    Route::resource('g-localidades', App\Http\Controllers\GLocalidadController::class);
    Route::resource('g-impuestos', App\Http\Controllers\GImpuestoController::class);
    Route::resource('g-tipocomprobante', App\Http\Controllers\GTipoComprobanteController::class);
    Route::resource('g-comprobante', App\Http\Controllers\GTipoComprobanteController::class);
    Route::resource('g-usuarios', App\Http\Controllers\Auth\UserController::class);
    
    Route::resource('f-tipofondos', App\Http\Controllers\FTipoFondoController::class);

    Route::resource('t-plancuentas', App\Http\Controllers\TPlancuentaController::class);

    Route::resource('s-listadeprecios', App\Http\Controllers\SListadeprecioController::class);

    Route::resource('q-documentacion', App\Http\Controllers\QDocumentacionController::class);
    Route::resource('q-noconformidad', App\Http\Controllers\QNoconformidadController::class);

    Route::resource('r-establecimientos', App\Http\Controllers\REstablecimientoController::class);

    
});

//Route::get('entidades/{id}/destroy', [EntidadController::class, 'destroy'])->name('entidades.destroy');

/*
Route::get('/entidades', [EntidadController::class, 'index']);
Route::get('/entidades/create', [EntidadController::class, 'create'])->name('entidades.create');
Route::get('/entidades/store', [EntidadController::class, 'store']);
Route::post('/','App\Http\Controllers\EntidadController@store')->name('entidadesstore');
*/