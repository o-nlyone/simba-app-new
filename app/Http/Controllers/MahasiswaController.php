<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
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
            return Datatables::of($list_mahasiswa)->make(true);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {

    }

    public function mhsshow(Request $request)
    {
        $mhs = DB::table('mahasiswas')->where('nim', $request->nim)->first();

        try {
            if ($request->nama_mhs == $mhs->nama_mhs){
                $tagihan = DB::table('tagihan')->where('id_mhs', $mhs->id)->first();
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
    public function edit(Mahasiswa $mahasiswa)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
