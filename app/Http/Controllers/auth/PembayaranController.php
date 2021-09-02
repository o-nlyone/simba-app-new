<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PembayaranController extends Controller
{
    public function bayar(Request $request) {
        if ($request->tahunajaran == null){
            return Redirect::back()->with('ta_error', 'Silahkan Pilih Tahun Ajaran');
        }
        if ($request->jumlah < 1000000){
            return Redirect::back()->with('jml_error', 'Minimal Pembayaran Rp. 1,000,000');
        }
    }
}
