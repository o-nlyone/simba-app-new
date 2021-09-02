<?php

use App\Http\Controllers\auth\DashboardController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\PembayaranController;
use App\Http\Controllers\MahasiswaController;
use GuzzleHttp\Middleware;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;


Route::group(['middleware'=>['guest']], function(){
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('login');
});

Route::get('mhs', [MahasiswaController::class, 'mhsshow']);

Route::group(['middleware'=>['auth']], function(){
    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::resource('datamhs', MahasiswaController::class);
    Route::get('input', [DashboardController::class, 'inputdata']);
    Route::get('input/{id}', [DashboardController::class, 'inputmhs']);
    Route::get('thnajaran', [DashboardController::class, 'thnajaran']);
    Route::get('logout', [LoginController::class, 'logout']);
    Route::get('tagihan', [DashboardController::class, 'tagihan']);
    Route::post('bayar', [PembayaranController::class, 'bayar']);
});




Route::get('/', function () {
    return view('homepej');
});
