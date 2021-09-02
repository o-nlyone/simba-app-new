<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index() {
        return view('auth.dashboard', ['dashboard' => 'active']);
    }

    public function inputdata(){
        return view('auth.inputdata', ['inputdata' => 'active']);
    }

    public function inputmhs($id){
        $mhs = DB::table('mahasiswas')->where('nim', $id)->first();
        return view('auth.inputdata', ['mhs' => $mhs, 'inputdata' => 'active']);
    }

    public function tagihan(){
        return view('auth.tagihan', ['tagihan' => 'active']);
    }

    public function thnajaran(){
        return view('auth.thnajaran', ['thnajaran' => 'active']);
    }
}

