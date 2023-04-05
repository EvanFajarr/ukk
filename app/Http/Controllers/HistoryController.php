<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengaduan;
use App\Models\tanggapan;
use App\Models\lokasi;

class HistoryController extends Controller
{
    public function index()
    {
        $pengaduan = pengaduan::orderBy('id', 'desc')->get();
        return view('history.index')->with('pengaduan', $pengaduan);
    }

    public function pengaduan($id)
    {
        $pengaduan = pengaduan::find($id);
        $tanggapan = tanggapan::where('pengaduan_id', $id)->orderBy('created_at', 'desc')->get();
        return view('detailPengaduan.index', ['pengaduan' => $pengaduan, 'tanggapans' => $tanggapan]);
    }

    public function tampil()
    {
        $lokasi = lokasi::orderBy('id', 'desc')->get();
        return view('home.create')->with('lokasi', $lokasi);
    }
}
