<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Jadwal;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwal = Jadwal::all();
        return view('admin.jadwal.index', compact('jadwal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jadwal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'hari_latihan' => 'required',
            'jam_latihan' => 'required',
            'pelatih' => 'required',
            'lanah' => 'required',
            'tsufuk' => 'required',
            
        ]);
    
       

        $jadwal = Jadwal::create([
            'hari_latihan' => $request->hari_latihan,
            'jam_latihan' => $request->jam_latihan,
            'pelatih' => $request->pelatih,
            'lanah' => $request->lanah,
            'tsufuk' => $request->tsufuk,
        ]);
        // $jadwal->hari_latihan = $request->hari_latihan;
        // $jadwal->jam_latihan = $request->jam_latihan;
        // $jadwal->pelatih = $request->pelatih;
        // $jadwal->lanah = $request->lanah;
        // $jadwal->tsufuk = $request->tsufuk;
        
        // $jadwal->save();

        return redirect()->route('jadwal.index')
                        ->with('success','Product created successfully.');
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
        $jadwal = Jadwal::find($id) ;
 
        return view('admin.jadwal.edit', compact('jadwal'));
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
        $data = $request->all();

        $jadwal = Jadwal::findOrfail($id);
        $jadwal->update($data);

        return redirect()->route('admin.jadwal.index')->with(['success' => 'Data Berhasil Diubah']);
    }

    // {
    //     $request->validate([
    //         'tanggal_latihan' => 'required',
    //         'jam_latihan' => 'required',
    //         'pelatih' => 'required',
    //         'tempat' => 'required',
            
    //     ]);
    
    //     $jadwal->tanggal_latihan = $request->tanggal_latihan;
    //     $jadwal->jam_latihan = $request->jam_latihan;
    //     $jadwal->pelatih = $request->pelatih;
    //     $jadwal->tempat = $request->tempat;
        
    //     $jadwal->update();

    //     return redirect()->route('jadwal.index')
    //                     ->with('success','Product created successfully.');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jadwal = Jadwal::find($id);

        $jadwal->delete();
 
        return redirect()->route('jadwal.index')->with(['succes' => 'Data Berhasil Dihapus']);
    }
}
