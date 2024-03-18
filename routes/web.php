<?php

use App\Http\Controllers\acta;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IndexController;

/*
|--------------------------------------------------------------------------
| Archivo Web
|--------------------------------------------------------------------------
|
|  Aqui es donde tú puedes registar las rutas web para tu aplicacion. 
|  Esas rutas son cargadas por el RouteServiceProvider(Proveedor de servicio de rutas), 
|  y todo sera asignado a el web middleware(archivo web que actua 
|  como cuello de botella en las request). 
|  Has algo genial!
|
|--------------------------------------------------------------------------
| Web Routes 
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/', MainController::class)->name('main');
Route::get('/hello-world', HelloWorldController::class)->name('hello-world'); //* test
Route::get('/login', LoginController::class)->name('login');


Route::controller(IndexController::class)->group(function()
{
    Route::get('/', 'index')->name('index'); // pagina central
});

Route::controller(acta::class)->group(function()
{
    Route::get('/acta', 'index')->name('acta'); // pagina central
});

include_once('links/actaEntrega.php');
include_once('links/cargo.php');


