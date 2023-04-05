<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\Session;
// use Illuminate\Support\Facades\File;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\pengaduan;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaduan = pengaduan::orderBy('id', 'desc')->get();
        return view('admin.index')->with('pengaduan', $pengaduan);
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
    public function edit($id)
    {
        $pengaduan = pengaduan::where('id', $id)->first();
        return view('admin.edit')->with('pengaduan', $pengaduan);
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
        $request->validate([
            'status' => 'required',



        ], [
            'status.required' => 'status wajib diisi',

        ]);
        $pengaduan = [
            'status' => $request->status,

        ];
        pengaduan::where('id', $id)->update($pengaduan);
        return redirect()->to('admin')->with('success', 'Berhasil mengubah status');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}
