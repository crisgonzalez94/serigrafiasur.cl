<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ContactoController;

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

Route::get('/', [ProductoController::class, 'productos'] );

Route::get('/inicio' , function(){return view('inicio');} )->name('inicio');


Route::get('/productos' , [ProductoController::class, 'productos'] )->name('productos');

Route::get('/catalogoPdf' , [ProductoController::class, 'catalogoPdf'] )->name('catalogo');
//Esta esta pensada mas para los buscadores y ninguna parte de la web redirige a esta parte
Route::get('/catalogo' , [ProductoController::class, 'catalogo'] );

Route::get('/acerca', function () {
    return view('acerca');
})->name('acerca');

Route::get('/galeria' , [GaleriaController::class, 'galeria'] )->name('galeria');

Route::get('/contacto' , [ContactoController::class, 'contacto'] )->name('contacto');//



Route::post('/mensajeContacto' , [ContactoController::class, 'mensajeContacto'] )->name('mensajeContacto');