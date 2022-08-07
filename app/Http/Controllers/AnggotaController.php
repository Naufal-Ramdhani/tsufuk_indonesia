<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Anggota;
use App\Models\Lanah;


class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota = Anggota::latest()->get();
        return view('admin.anggota.index', compact('anggota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $anggota = Anggota::latest()->get();
        return view('admin.anggota.create');
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
            'nama_anggota' => 'required',
            'no_ktp' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'alamat_anggota' => 'required',
            'tlp_anggota' => 'required',
            'email_anggota' => 'required',
            'pekerjaan' => 'required',
            'lanah' => 'required',
            'foto' => 'required',

        ]);

        $anggota = Anggota::create([
            'nama_anggota' => $request->nama_anggota,
            'no_ktp' => $request->no_ktp,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'agama' => $request->agama,
            'alamat_anggota' => $request->alamat_anggota,
            'tlp_anggota' => $request->tlp_anggota,
            'email_anggota' => $request->email_anggota,
            'pekerjaan' => $request->pekerjaan,
            'lanah' => $request->lanah,
            'foto' => $request->foto,
        ]);
    
       

        // $anggota = new Anggota();
        // $anggota->nama_anggota = $request->nama_anggota;
        // $anggota->tempat_lahir = $request->tempat_lahir;
        // $anggota->tanggal_lahir = $request->tanggal_lahir;
        // $anggota->alamat_anggota = $request->alamat_anggota;
        // $anggota->tlp_anggota = $request->tlp_anggota;
        // $anggota->pekerjaan = $request->pekerjaan;
        // $anggota->cabang = $request->cabang;
        // if ($image = $request->file('foto')) {
        //     $destinationPath = 'image/';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $anggota['foto'] = "$profileImage";
        // }
        // $anggota->save();

        return redirect()->route('anggota.index')
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
    public function edit(Anggota $anggota)
    {
        return view('admin.anggota.edit');
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

        $lanah = Anggota::findOrfail($id);
        $lanah->update($data);

        return redirect()->route('admin.anggota.index')->with(['success' => 'Data Berhasil Diubah']);
    }

    // {
    //     $request->validate([
    //         'nama_anggota' => 'required',
    //         'n0_ktp' => 'required',
    //         'tempat_lahir' => 'required',
    //         'tanggal_lahir' => 'required',
    //         'agama' => 'required',
    //         'alamat_anggota' => 'required',
    //         'tlp_anggota' => 'required',
    //         'pekerjaan' => 'required',
    //         'lanah' => 'required',
    //         'foto' => 'required',

    //     ]);
    
       

    //     $anggota->nama_anggota = $request->nama_anggota;
    //     $anggota->tempat_lahir = $request->tempat_lahir;
    //     $anggota->tanggal_lahir = $request->tanggal_lahir;
    //     $anggota->alamat_anggota = $request->alamat_anggota;
    //     $anggota->tlp_anggota = $request->tlp_anggota;
    //     $anggota->pekerjaan = $request->pekerjaan;
    //     $anggota->cabang = $request->cabang;
    //     if ($image = $request->file('foto')) {
    //         $destinationPath = 'image/';
    //         $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
    //         $image->move($destinationPath, $profileImage);
    //         $anggota['foto'] = "$profileImage";
    //     }
    //     $anggota->update();

    //     return redirect()->route('anggota.index')
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
        $anggota = Anggota::find($id);

        $anggota->delete();
 
        return redirect()->route('anggota.index')->with(['succes' => 'Data Berhasil Dihapus']);
    }
}
