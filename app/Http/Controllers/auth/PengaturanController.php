<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    public function updateakun(Request $request){
        if ($request->pass == '' && $request->konpass == ''){
            User::where('id', $request->id)->update([
                'name' => $request->nama,
                'email' => $request->email,
            ]);
            return back()->with('ses_success', 'Sukses Mengupdate Akun');
        } else {
            if($request->pass == $request->konpass){
                User::where('id', $request->id)->update([
                    'name' => $request->nama,
                    'email' => $request->email,
                    'password' => bcrypt($request->pass),
                ]);
                return back()->with('ses_success', 'Sukses Mengupdate Akun & password');
            } else{
                return back()->with('ses_error', 'Password Tidak Sama');
            }
        }


    }

    public function createakun(Request $request){
            if($request->pass == $request->konpass){
                try {
                    User::create([
                        'name' => $request->nama,
                        'email' => $request->email,
                        'password' => bcrypt($request->pass),
                    ]);
                } catch (\Throwable $th) {
                    return back()->with('ses_error', 'Terjadi Error Menambah Akun');
                }
                return back()->with('ses_success', 'Sukses Menambah Akun');
            } else{
                return back()->with('ses_error', 'Password Tidak Sama');
            }


    }
}
