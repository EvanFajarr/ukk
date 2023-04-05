<?php

namespace App\Http\Controllers;

use App\Models\pengaduan;
use Illuminate\Http\Request;
use App\Models\tanggapan;

class TanggapanController extends Controller
{
    public function index($id)
    {
        $pengaduan = pengaduan::find($id);
        $tanggapan = tanggapan::where('pengaduan_id', $id)->orderBy('created_at', 'desc')->get();
        return view('tanggapan.index', ['pengaduan' => $pengaduan, 'tanggapans' => $tanggapan]);
    }
    public function postTanggapan(Request $request)
    {
        $request->request->add(['user_id' => auth()->guard('user')->user()->id]);
        $tanggapan = tanggapan::create($request->all());
        return redirect()->back()->with("success", 'tanggapan berhasi ditambahkan');
        // return view('pengaduanTampil.index',['tanggapan' => $tanggapan]);
    }
}
