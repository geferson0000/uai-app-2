<?php
use App\Http\Controllers\CargoController;
use Illuminate\Support\Facades\Route;

Route::controller(CargoController::class)->group(function()
{
    Route::get('/cargo', 'mostrarTodo')->name('cargo.mostarTodo'); // pagina central
    Route::post('/cargo', 'guardar')->name('cargo.guardar'); // pagina central
});