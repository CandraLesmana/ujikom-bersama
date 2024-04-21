<?php

namespace App\Http\Controllers;

use App\Models\JenisPembayaran;
use Illuminate\Http\Request;

class JenisPembayaranController extends Controller
{
    public function index(){

        $data = JenisPembayaran::all();
        return view('jenis-pembayaran.index', compact('data'));
    }

    public function store(Request $request)
    {
        $data = JenisPembayaran::create([
            'nama' => $request->nama,
        ]);

        return redirect()->back();
    }

    public function update(Request $request,$id){
        $data = JenisPembayaran::find($id);
        $data->update([
            'nama' => $request->nama,
        ]);

        return redirect()->back();
    }

    public function destroy($id){
        $data = JenisPembayaran::find($id);
        $data->delete();

        return redirect()->back();
    }
}
