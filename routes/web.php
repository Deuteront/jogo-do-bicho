<?php

use App\Http\Controllers\ControladorJogadores;
use App\Http\Controllers\ControladorAnimais;
use App\Http\Controllers\ControladorSorteios;
use App\Http\Controllers\ControladorPalpites;
use Illuminate\Support\Facades\Auth;
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

Route::get('/home', [ControladorAnimais::class, 'index']);
Route::resource('/jogadores', ControladorJogadores::class);
Route::resource('/sorteios', ControladorSorteios::class);
Route::resource('/palpites', ControladorPalpites::class);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
