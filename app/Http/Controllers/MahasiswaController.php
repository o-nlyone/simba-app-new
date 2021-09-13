<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Pembayaran;
use App\Models\Tagihan;
use Exception;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list_mahasiswa = Mahasiswa::all();
        if ($request->ajax()){
            return Datatables::of($list_mahasiswa)
            ->addColumn('action', function($data){
                $button = '
                <button data-toggle="tooltip" data-original-title="Edit" type="button" id="'.$data->id.'" data-id="'.$data->id.'" class="edit-post btn btn-icon btn-success">
                    <i data-feather="edit-3"></i>
                </button>';
                // $button .= '&nbsp;&nbsp;';
                $button .= '
                <button data-toggle="tooltip" name="delete" data-original-title="delete" id="'.$data->id.'" type="button" data-id="'.$data->id.'" class="delete btn btn-icon btn-outline-danger">
                    <i data-feather="trash-2"></i>
                </button>';
                return $button;
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('auth.datamhs', ['mendata' => 'active']);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function lookpembayaran($id){
        $pembayaran = Pembayaran::where('id', $id)->first();
        dd($pembayaran);
        return back()->with(['pembayaran' => $pembayaran]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->id;

        try {
            $post   =   Mahasiswa::updateOrCreate(['id' => $id],
                    [
                        'id' => $request->id,
                        'nama_mhs' => $request->nama_mhs,
                        'nim' => $request->nim,
                        'notelp_mhs' =>$request->notelp_mhs,
                        'jurusan' => $request->jurusan,
                        'angkatan' => $request->angkatan,
                        'status_mhs' => $request->status_mhs,
                        'mhs_spesial' => $request->mhs_spesial,
                    ]);
            return [response()->json($post), back()->with('ses_success', 'Berhasil')];
        } catch (\Throwable $th) {
            return back()->with('ses_error', 'Terjadi Error Input Mahasiswa');
        }




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

    }

    public function mhsshow(Request $request)
    {
        $mhs = Mahasiswa::where('nim', $request->nim)->first();

        try {
            if ($request->nama_mhs == $mhs->nama_mhs){
                $tagihan = Tagihan::where('id_mhs', $mhs->id)->get();
                return view('mhsshow', ['mhs' => $mhs, 'tagihan' => $tagihan]);
            }else {
                return back()->with('notfound', 'Data Tidak Ditemukan (notfound)');
            }
        } catch (Exception $e) {
            return back()->with('notfound', 'Data Tidak Ditemukan (ex-notfound)');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($data_id)
    {
        $mhs = Mahasiswa::find($data_id);
        return response()->json($mhs, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $most = Tagihan::where('id_mhs',$id)->delete();
        $post = Mahasiswa::where('id',$id)->delete();
        return response()->json([$post, $most]);
    }
}
