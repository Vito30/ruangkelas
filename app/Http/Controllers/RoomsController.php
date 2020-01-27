<?php

namespace App\Http\Controllers;

use App\Rooms;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Rooms::all();
        return view('room.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Room.create');
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
            'kelas_id'=> 'required',
            'nama'=> 'required',
            'angkatan'=> 'required'
        ]);
        $rooms = new Rooms;
        $rooms->kelas_id = $request->kelas_id;
        $rooms->nama = $request->nama;
        $rooms->angkatan = $request->angkatan;
        $rooms->save();
        return redirect('/room')->with('status','Data Ruangan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function show(Rooms $rooms)
    {
        return view('room.show',compact('rooms'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function edit(Rooms $rooms)
    {
        return view('room.edit',compact('rooms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rooms $rooms)
    {
        $request->validate([
            'kelas_id'=> 'required',
            'nama'=> 'required',
            'angkatan'=> 'required'
        ]);
        Rooms::where('id',$rooms->id)
         ->update([
             'kelas_id' =>$request->kelas_id,
             'nama' =>$request->nama,
             'angkatan' =>$request->angkatan

         ]);
         return redirect('/room')->with('status','Data Kelas Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rooms $rooms)
    { 
        Rooms::destroy($rooms->id);
        return redirect('/room')->with('status','Data Kelas Berhasil Dihapus');
        
    }
}
