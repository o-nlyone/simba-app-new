<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('auth.dashboard', ['dashboard' => 'active']);
    }

    public function inputdata(){
        return view('auth.inputdata', ['inputdata' => 'active']);
    }

    public function tagihan(){
        return view('auth.tagihan', ['tagihan' => 'active']);
    }
}

