<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index() 
    {
    // mengambil data dari table pegawai
    $pelanggan = DB::table('pelanggan')->get();
 
    // mengirim data pegawai ke view index
    return view('pelanggan0039',['pelanggan' => $pelanggan]);
    }

    public function tambah() 
    {
        return view('tambah0039');
    }

    public function edit($id)
    {    
        $pelanggan = DB::table('pelanggan')->where('id', $id)->get(); return view('edit0039', ['pelanggan' => $pelanggan]);
    }

    public function update(Request $request) 
    {
        DB::table('pelanggan')->where('id', $request->id) ->update([ 'nama' => $request->nama,   
        'alamat' => $request->alamat ]);
        return redirect('/pelanggan');
    }

    public function store (Request $request) 
    {
    // insert data ke table pelanggan 
    DB::table('pelanggan')->insert([
    'id' => $request->id,
    'nama' => $request->nama,
    'alamat' => $request->alamat,]);
    
    // alihkan halaman ke URL halaman pelanggan 
    return redirect('/pelanggan');
    }

    public function hapus ($id)
    {
    DB::table('pelanggan')->where('id', $id)->delete(); 
    return redirect('/pelanggan');
    }

    public function cari(request $request)
    {
        $pelanggan = $request->lihat;
        $pelanggan = DB::table('pelanggan')->where('nama','like',"%".$pelanggan."%")->paginate();
        return view('pelanggan0039',['pelanggan'=>$pelanggan]);
    
    }
}
