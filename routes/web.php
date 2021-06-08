<?php

use App\Http\Controllers\PessoaController;
use App\Models\Pessoa;
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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('pessoa')->group(function () {
    Route::get('/', [PessoaController::class, 'index']);
    Route::get('/create', [PessoaController::class, 'create']);
    Route::post('/store', [PessoaController::class, 'store'])->name('cadastro.pessoa');
});