<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\MainController;

/*
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

Route::controller(MainController::class)->group(function()
{
    Route::get('/', '__invoke')->name('main');
    Route::get('/action/create', 'create')->name('action.create');
    Route::post('/action/create', 'store')->name('action.store');
    Route::get('/action/{action}', 'show')->name('action.show');
    Route::get('/action/{action}/edit', 'edit')->name('action.edit');
    Route::put('/action/{action}', 'update')->name('action.update');
});

