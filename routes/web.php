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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('materias', App\Http\Controllers\MatMateriumController::class);
Route::resource('grados', App\Http\Controllers\GrdGradoController::class);
Route::resource('alumnos', App\Http\Controllers\AlmAlumnoController::class);
Route::resource('materiaxgrados', App\Http\Controllers\MxgMateriaxgradoController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
