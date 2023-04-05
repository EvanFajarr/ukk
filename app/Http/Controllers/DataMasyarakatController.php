<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\masyarakat;

use Illuminate\Support\Facades\Hash;

class DataMasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masyarakat = masyarakat::orderBy('id', 'desc')->get();
        return view('masyarakat.index')->with('masyarakat', $masyarakat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masyarakat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('nik', $request->nik);
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        Session::flash('tlp', $request->tlp);
        Session::flash('password', $request->password);

        $request->validate([
            'nik' => 'required|unique:masyarakat_15467',
            'name' => 'required',
            'email' => 'required|email|unique:masyarakat_15467',
            'tlp' => 'required',
            'password' => 'required|min:6',
        ], [
            'name' => 'Name wajib diisi',
            'nik' => 'NIK harus diisi',
            'nik.unique' => 'NIK sudah digunakan',
            'tlp' => 'nomor handphone harus diisi',
            'tlp.min' => 'nomor handphone  harus lebih dari 10',
            'email' => 'Email wajib diisi',
            'email.email' => 'Silahkan masukan email dengan benar',
            'email.unique' => 'Email sudah digunakan, silakan masukkan email yang lain',
            'password' => 'Pasword wajib diisi',
            'password.min' => 'Pasword harus lebih dari 6',
        ]);



        $masyarakat = [
            'name' => $request->name,
            'nik' => $request->nik,
            'tlp' => $request->tlp,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];


        masyarakat::create($masyarakat);
        return redirect()->to('masyarakat')->with('success', 'Berhasil menambahkan Data Masyarakat ');
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
        //
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
        masyarakat::where('id', $id)->delete();
        return redirect()->to('masyarakat')->with('success', 'Berhasil menghapus  data');
    }
}
