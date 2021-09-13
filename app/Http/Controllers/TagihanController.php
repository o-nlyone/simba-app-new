<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Tagihan;
use App\Models\Mahasiswa;
use App\Models\Tahun_ajaran;

class TagihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list_tagihan = Tagihan::all();
        if ($request->ajax()){
            return Datatables::of($list_tagihan)
            ->addColumn('nim', function($data){
                $nim = Mahasiswa::where('id', $data->id_mhs)->first();
                return $nim->nim;
            })
            ->addColumn('jml', function($data){
                // $textbox = '
                // <div class="row">
                // <div class="col-md-9 col-12">
                // <form id="editjml" action="tagihan/'. $data->id .'/edit" method="GET">
                // <input type="number" name="jml_bayar" value='. $data->jml_tagihan .' class="form-control" id="itemquantity" aria-describedby="itemquantity" placeholder="0"></div>';
                // $textbox .= '<div class="col-md-2 col-12"><button data-toggle="tooltip" data-original-title="Edit" type="submit" id="'.$data->id.'" data-id="'.$data->id.'" class="edit-post btn btn-icon btn-success">
                // <i data-feather="arrow-right"></i>
                // </button></form></div></div>';
                $textbox = '<input type="number" id='.'jml'.$data->id.' name="jml_tagihan" value='. $data->jml_tagihan .' class="form-control" id="itemquantity" aria-describedby="itemquantity" placeholder="0"></div>';
                return $textbox;
            })
            ->addColumn('ta', function($data){
                $ta = Tahun_ajaran::where('id', $data->id_ta)->first();
                $ta = $ta->nama_ta . ' | ' . $ta->semester;
                return $ta;
            })
            ->addColumn('action', function($data){
                $textbox = '<button data-toggle="tooltip" data-original-title="Edit" type="submit" id="'.'btn'.$data->id.'" data-id="'.$data->id.'" class="edit-post btn btn-icon btn-success">
                <i data-feather="arrow-right"></i>
                </button>';
                return $textbox;
            })
            ->rawColumns(['action', 'jml'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('auth.tagihan', ['tagihan' => 'active']);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        Tagihan::where('id', $id)->update([
            'jml_tagihan' => $request->jml_tagihan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
