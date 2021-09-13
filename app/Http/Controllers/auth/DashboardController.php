<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use App\Models\Pembayaran;
use App\Models\Tagihan;
use App\Models\Tahun_ajaran;
use Exception;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class DashboardController extends Controller
{
    public function index() {
        return view('auth.dashboard', ['dashboard' => 'active']);
    }

    public function inputdata(){
        return view('auth.inputdata', ['inputdata' => 'active']);
    }

    public function inputmhs($id){
        $mhs = Mahasiswa::where('nim', $id)->first();
        try {
            $tagihan = Tagihan::where('id_mhs', $mhs->id)->get();
        } catch (\Throwable $th) {
            $tagihan = null;
        }
        return view('auth.inputdata', ['mhs' => $mhs,'tagihan' => $tagihan, 'inputdata' => 'active']);
    }

    public function thnajaran(){
        return view('auth.thnajaran', ['thnajaran' => 'active']);
    }

    public function thnajarandelete($id){

        try {
            $tagihan = Tagihan::where('id_ta', $id)->get();

            foreach ($tagihan as $tagih) {
                Pembayaran::where('id_tagihan', $tagih->id)->delete();
            }

            Tagihan::where('id_ta', $id)->delete();

            Tahun_ajaran::where('id', $id)->delete();
            return back();
        } catch (Exception $e) {
            dd($e);
        }

    }
}

