<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\ParadaController;
use App\Http\Controllers\RecorridoController;
use App\Http\Controllers\RecorridoParadaController;
use App\Http\Controllers\ConductorController;

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

Route::get('/home', function () {
    return view('auth.login');
});
Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register'=>false,'reset'=>false]);

Route::group(['middleware' => 'auth'], function (){

Route::get('/home', [EmpresaController::class, 'index'])->name('home');
Route::resource('/admin/empresas',EmpresaController::class);
Route::resource('/admin/horarios',HorarioController::class);
Route::resource('/admin/paradas',ParadaController::class);
Route::resource('/admin/recorridos',RecorridoController::class);
Route::resource('/admin/recorrido-paradas',RecorridoParadaController::class);
Route::resource('/admin/conductores',ConductorController::class);

});
