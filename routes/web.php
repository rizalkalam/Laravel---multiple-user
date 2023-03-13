<?php

use App\Models\Kelas;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MuridAuthController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/guru/home', function () {
    return view('guru.index',[
        'kelas'=>Kelas::all()
    ]);
})->middleware('auth:webguru')->name('guru.home');

Route::get('/murid/home', function () {
    return view('murid.index');
})->middleware('auth:webmurid')->name('murid.home');

Route::get('/kelas/{kelas}',[KelasController::class,'show']);


Route::group(["prefix"=>"/auth"], function(){
    Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
    Route::post('/authenticate', [LoginController::class, 'authenticate']);
    Route::post('/logout', [LoginController::class, 'logout']);
});
