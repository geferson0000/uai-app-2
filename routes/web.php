<?php

use App\Http\Controllers\acta;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\SignController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use App\Models\PersonalUai;

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

Route::get('/hello-world', HelloWorldController::class)->name('hello-world'); //* test

Route::middleware('auth')->group(function () {
    // Route::get('/profile', function () {
    //     // ...
    // })->withoutMiddleware([EnsureTokenIsValid::class]);
    
    Route::controller(IndexController::class)->group(function()
    {
        Route::get("/", 'index')->name('index');
        Route::get("/index/acta/users", 'actaUsers')->name('index.acta.users');
    });

    Route::controller(PersonalUai::class)->group(function()
    {
        Route::get("/personal/create", 'create')->name('personal.index'); // muestra la vista
        Route::get("/personal/show", 'show')->name('personal.show'); // muestra 
        Route::post("/personal/store", 'store')->name('personal.store'); // almacenar
        Route::put("/personal/edit/{id}", 'edit')->name('personal.edit'); // editar un usuario
        Route::delete("/personal/destroy/{id}", 'destroy')->name('personal.destroy'); // elimina un usuario
    });
 
    
    // * routes to auth
    Route::controller(SignController::class)->group(function()
    {
        Route::get('/iniciar-sesion', 'login')->name('sign.login')->withoutMiddleware('auth'); 
        Route::get('/cerrar-sesion', 'logout')->name('sign.logout'); 
        Route::post('/iniciar-sesion/autenticar', 'authenticate')->name('sign.login.authenticate')->withoutMiddleware('auth'); 
        
        Route::get('/registrar-usuario', 'register')->name('sign.register')->withoutMiddleware('auth'); 
    });
    Route::post('/registrar-usuario/almacenar', [UserController::class, 'store'])->name('sign.register.store')->withoutMiddleware('auth');
});
