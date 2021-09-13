<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use App\Models\Pembayaran;
use App\Models\Tagihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Tahun_ajaran;
use Exception;
use PhpParser\Node\Stmt\TryCatch;

class PembayaranController extends Controller
{
    public function bayar(Request $request) {
        $request->validate([
            'bukti_bayar' => 'mimes:png,jpg,jpeg|max:1024' //memvalidasi image yang diinputkan
        ]);
        $jml = str_replace(',', '', $request->jml_bayar); //menghilangkan tanda koma dari jumlah pembayaran
        if ($jml < 100000){ //apabila jumlah pembayaran lebih kecil dari 100rb
            return Redirect::back()->with('ses_error', 'Minimal Pembayaran Rp. 100,000'); // maka tampilkan error berikut
        }

        try {
            $imgName = $request->bukti_bayar->getClientOriginalName() . '-' . time() . '.' . $request->bukti_bayar->extension();
            $request->bukti_bayar->move(public_path('image'), $imgName);

            //proses pengambilan data pembayaran sebelumnya
            $tagihan = Tagihan::where('id_mhs', $request->id_mhs)->
                                where('id_ta', $request->id_ta)->first();  //request record "tagihan" dari id_mhs dan tahun ajaran yang diinputkan
            $semuapembayaran = Pembayaran::where('id_tagihan', $tagihan->id)->get(); //request pembayaran pembayaran sebelumnya dari id tagihan
            $jmlpembayaran_sebelumnya = 0; //variable jumlah pembayaran pembayaran yang pernah dilakukan
            foreach($semuapembayaran as $bayar){
                $jmlpembayaran_sebelumnya = $jmlpembayaran_sebelumnya + $bayar->jml_bayar; //mengakumulasi semua pembayaran sebelumnya
            }
            $summarytagihan = $tagihan->jml_tagihan - $jmlpembayaran_sebelumnya; //tagihan yang direquest dikurang jumlah pembayaran sebelumnya.

            if ($summarytagihan > 0){
                Pembayaran::create([
                    'id_tagihan' => $tagihan->id,
                    'id_mhs' => $request->id_mhs,
                    'jml_bayar' => $jml,
                    'bukti_bayar' => $imgName
                ]);
                return back()->with('ses_success', 'Pembayaran Telah Berhasil Ditambahkan');
            } else {
                return Redirect::back()->with('ses_error', 'Tagihan Sudah Rp. 0 Kebawah.');
            }
        } catch (Exception $e) {
            return Redirect::back()->with('ses_error', 'Terjadi Error Pengimputan');
        }
    }

    public function inputthnajaran(Request $request){
        if ($request->semester == "ganjil") {
            $id = $request->id . "1";
        } else {
            $id = $request->id . "2";
        }
        $check = Tahun_ajaran::where('id', $id)->first();
        try {

            if ($id == $check->id){
                return back()->with('error_thnajaran', 'Tahun Ajaran Tersebut Sudah Ada');
            }else{
                goto ugh;
            };
        } catch (Exception $e) {
            ugh:
            $ids = (int)$request->id+1;
            $nama_ta = $request->id . "-" . $ids;
            Tahun_ajaran::create([
                'id' => $id,
                'nama_ta' => $nama_ta,
                'semester' => $request->semester,
            ]);
            $ta_baru = Tahun_ajaran::where('nama_ta', $nama_ta)
            ->where('semester', $request->semester)->first();
            $listmhs = Mahasiswa::all();

            foreach($listmhs as $mhs){
                $stat = 0;
                if ($mhs->status_mhs == 'aktif'){
                    $stat = 4750000;
                }
                elseif ($mhs->status_mhs == 'cuti'){
                    $stat = 4750000/2;
                }
                else{
                    $stat = 0;
                }

                if ($mhs->mhs_spesial == 'mhs_binaan1'){
                    $stat = $stat - $stat;
                }
                elseif ($mhs->mhs_spesial == 'mhs_binaan2'){
                    $stat = $stat - $stat*50/100;
                }
                Tagihan::create([
                    'id_mhs' => $mhs->id,
                    'id_ta' => $ta_baru->id,
                    'jml_tagihan' => $stat
                ]);
            }
            return back()->with('success_thnajaran', 'Tahun Ajaran Tersebut Berhasil Ditambahkan');
        }


    }

    public function deletebayar($id){
        try {
            Pembayaran::where('id', $id)->delete();
            return back()->with('ses_success', 'Pembayaran Telah Berhasil Dihapus');
        } catch (\Throwable $th) {
            return back()->with('ses_error', 'Pembayaran Tidak Berhasil Dihapus');
        }
    }
}
