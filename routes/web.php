<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntidadController;
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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('entidades', EntidadController::class);

/*
Route::get('/entidades', [EntidadController::class, 'index']);
Route::get('/entidades/create', [EntidadController::class, 'create'])->name('entidades.create');
Route::get('/entidades/store', [EntidadController::class, 'store']);
Route::post('/','App\Http\Controllers\EntidadController@store')->name('entidadesstore');
*/