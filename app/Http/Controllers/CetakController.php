<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\pengaduan;
use App\Models\tanggapan;

class CetakController extends Controller
{
    public function Cetak($id)
    {
        $pengaduan = pengaduan::find($id);
        $tanggapan = tanggapan::where('pengaduan_id', $id)->orderBy('created_at', 'desc')->get();
        return view('cetak.index', ['pengaduan' => $pengaduan, 'tanggapans' => $tanggapan]);
    }
}
