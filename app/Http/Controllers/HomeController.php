<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\pengaduan;
use App\Models\saran;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $userId = auth()->guard('masyarakat')->user()->id;
        // $pengaduan = pengaduan::where('user_id', $userId)->get();
        // return view('home.index')->with('pengaduan', $pengaduan);
        return view('home.index', [
            'saran' => saran::orderBy('id', 'desc')->get(),
            $userId = auth()->guard('masyarakat')->user()->id,
            'pengaduan' => pengaduan::where('user_id', $userId)->get(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('tanggal', $request->tanggal);
        Session::flash('user_id', $request->user_id);
        Session::flash('nik', $request->nik);
        Session::flash('isi', $request->isi);
        Session::flash('lokasi', $request->lokasi);
        Session::flash('detail_lokasi', $request->detail_lokasi);
        $request->validate([
            'tanggal' => 'required',
            'user_id' => 'required',
            'nik' => 'required',
            'isi' => 'required',
            'lokasi' => 'required',
            'detail_lokasi' => 'required',
            'foto' => 'image|file|max:10000',


        ], [
            'tanggal.required' => 'tanggal wajib diisi',
            'nik.required' => 'Nik wajib diisi',
            'isi.required' => 'Isi wajib Ada',
            'foto.required' => 'Foto wajib diisi',
            'lokasi.required' => 'Lokasi wajib diisi',
            'detail_lokasi.required' => 'Detail Lokasi wajib diisi',
        ]);


        $foto_file = $request->file('foto');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis') . '.' . $foto_ekstensi;
        $foto_file->move(public_path('foto'), $foto_nama);

        $pengaduan = [
            'tanggal' => $request->input('tanggal'),
            'user_id' => $request->input('user_id'),
            'nik' => $request->input('nik'),
            'isi' => $request->input('isi'),
            'lokasi' => $request->input('lokasi'),
            'detail_lokasi' => $request->input('detail_lokasi'),
            'foto' => $foto_nama
        ];
        pengaduan::create($pengaduan);
        return redirect()->to('home')->with('success', 'Laporanmu Berhasi Terkirim');
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
    public function edit($id)
    {
        $pengaduan = pengaduan::where('id', $id)->first();
        return view('home.edit')->with('pengaduan', $pengaduan);
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
        Session::flash('isi', $request->isi);
        Session::flash('lokasi', $request->lokasi);
        Session::flash('detail_lokasi', $request->detail_lokasi);


        $request->validate([
            'isi' => 'required',
            'lokasi' => 'required',
            'detail_lokasi' => 'required',
            'foto' => 'image|file|max:10000',

        ], [
            'isi.required' => 'isi wajib diisi',
            'lokasi.required' => 'lokasi wajib diisi',
            'foto.required' => 'Foto wajib diisi',

        ]);


        $foto_file = $request->file('foto');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis') . '.' . $foto_ekstensi;
        $foto_file->move(public_path('foto'), $foto_nama);

        $pengaduan = [
            'isi' => $request->input('isi'),
            'lokasi' => $request->input('lokasi'),
            'detail_lokasi' => $request->input('detail_lokasi'),
            'foto' => $foto_nama
        ];
        pengaduan::where('id', $id)->update($pengaduan);
        return redirect()->to('home')->with('success', 'Berhasil mengubah pengaduan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $foto_nama = pengaduan::where('id', $id)->first();
        File::delete(public_path('foto') . '/' . $foto_nama->foto);


        pengaduan::where('id', $id)->delete();
        return redirect()->to('home')->with('success', 'Berhasil Menghapus  Pengaduan');
    }
}
