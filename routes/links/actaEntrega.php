<?php
use App\Http\Controllers\ActaEntregaController;
use Illuminate\Support\Facades\Route;

Route::controller(ActaEntregaController::class)->group(function()
{
    Route::get('/acta-entrega', 'mostrarTodo')->name('acta.mostarTodo'); // pagina central
    Route::post('/acta-entrega', 'guardar')->name('acta.guardar'); // pagina central
});