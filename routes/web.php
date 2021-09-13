<?php

use App\Http\Controllers\auth\DashboardController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\PembayaranController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\TagihanController;
use App\Models\Pembayaran;
use GuzzleHttp\Middleware;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;


Route::group(['middleware'=>['guest']], function(){
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('login');
});

Route::get('mhs', [MahasiswaController::class, 'mhsshow']);
Route::get('mhs/{id}', [MahasiswaController::class, 'lookpembayaran']);

Route::group(['middleware'=>['auth']], function(){
    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::resource('datamhs', MahasiswaController::class)->except(['show', 'update']);
    Route::get('input', [DashboardController::class, 'inputdata']);
    Route::get('input/{id}', [DashboardController::class, 'inputmhs']);
    Route::get('thnajaran', [DashboardController::class, 'thnajaran']);
    Route::get('thnajaran/{id}/delete', [DashboardController::class, 'thnajarandelete']);
    Route::get('logout', [LoginController::class, 'logout']);
    Route::resource('tagihan', TagihanController::class);
    Route::post('bayar', [PembayaranController::class, 'bayar']);
    Route::get('bayar/{id}/delete', [PembayaranController::class, 'deletebayar']);
    Route::post('inputthnajaran', [PembayaranController::class, 'inputthnajaran']);
});




Route::get('/', function () {
    return view('homepej');
});
