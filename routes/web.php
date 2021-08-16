<?php

use App\Http\Controllers\auth\LoginController;
use GuzzleHttp\Middleware;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;


Route::group(['middleware'=>['guest']], function(){
Route::get('login', [LoginController::class, 'index']);

Route::get('/', function () {
    return view('homepej');
});
});
