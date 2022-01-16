<?php

use App\Http\Controllers\PerfilController;
use App\Http\Controllers\PropuestaController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/propuesta',[PropuestaController::class,'index'])->name('propuesta.index');
Route::get('/propuesta/{id}',[PropuestaController::class,'show'])->name('propuesta.show');
Route::middleware('auth')->group(function (){
    Route::get('/propuesta/accepter/{id}',[PropuestaController::class,'acceptedProffer'])->name('propuesta.accepted');
    Route::get('/perfil/inversionistas',[PerfilController::class,'indexInvestor'])->name('investor.index');
    Route::delete('/perfil/inversionistas/{id}',[PerfilController::class,'deleteInvestor'])->name('investor.delete');
    Route::post('/propuesta',[PropuestaController::class,'store'])->name('propuesta.store');
});

Route::get('nuevo',function(){
    return view('nuevo');
});
Route::get('template',function(){
    return view('template');
});