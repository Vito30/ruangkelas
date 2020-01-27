<?php

namespace App\Http\Controllers;

use App\Kelas;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = Kelas::all();
        return view('kelas.index', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kelas'=> 'required',
            'kode_ruangan'=> 'required|size:9',
            'nama_gedung'=> 'required'
        ]);
        $kelas = new Kelas;
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->kode_ruangan = $request->kode_ruangan;
        $kelas->nama_gedung = $request->nama_gedung;
        $kelas->save();
        return redirect('/kelas')->with('status','Data Ruangan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $kelas)
    {
        return view('kelas.show',compact('kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param  \App\Kelas  $Kelas
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelas $kelas)
    {
        return view('kelas.edit',compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelas $kelas)
    {
        $request->validate([
            'nama_kelas'=> 'required',
            'kode_ruangan'=> 'required|size:9',
            'nama_gedung'=> 'required'
        ]);
        Kelas::where('id',$kelas->id)
         ->update([
             'nama_kelas' =>$request->nama_kelas,
             'kode_ruangan' =>$request->kode_ruangan,
             'nama_gedung' =>$request->nama_gedung

         ]);
         return redirect('/kelas')->with('status','Data Ruangan Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $kelas)
    {
        Kelas::destroy($kelas->id);
        return redirect('/kelas')->with('status','Data Ruangan Berhasil Dihapus');
    }
}
