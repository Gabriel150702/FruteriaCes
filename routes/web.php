<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\controladorBD;

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
    return view('welcome');
});


//MOSTRAST LA VISTA CONSULTAR
Route::get('vistaconsulta', [controladorBD::class,'index'])->name('vistaconsulta.index');




//HACER LA INSERSION
Route::post('insfruta', [controladorBD::class,'create'])->name('frutas.create');

//ELIMINAR

Route::delete('fruta/{id}', [controladorBD::class,'destroy'])->name('fruta.destroy');


//ACTUALIZAR
Route::put('fru/{id}', [controladorBD::class,'update'])->name('fru.update');