<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lanah;

class LanahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lanah = Lanah::all();
        return view('admin.lanah.index', compact('lanah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.lanah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'lanah' => 'required',
            'alamat' => 'required',
        ]);

        $lanah = Lanah::create([
            'lanah' => $request->lanah,
            'alamat' => $request->alamat,
        ]);
        

        return redirect()->route('lanah.index')->with('success','Product created successfully.');
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
       $lanah = Lanah::find($id) ;

       return view('admin.lanah.edit', compact('lanah'));
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

        $lanah = Lanah::findOrfail($id);
        $lanah->update($data);

        return redirect()->route('admin.lanah.index')->with(['success' => 'Data Berhasil Diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lanah = Lanah::find($id);
        $lanah->delete();
        return redirect()->route('lanah.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
