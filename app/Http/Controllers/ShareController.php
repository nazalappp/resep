<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $kotas = Kota::all();
        return view('share',compact('kotas'));
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
        $validated = $request->validate([
            'user_id' => 'required',
            'kota_id' => 'required',
            'judul' => 'required',
            'gambar_resep' => 'required',
            'deskripsi' => 'required',
            'bahan_bahan' => 'required',
            'langkah_langkah' => 'required',
        ]);

        $reseps = new Resep();
        $reseps->user_id = $request->user_id;
        $reseps->kota_id = $request->kota_id;
        $reseps->judul = $request->judul;
        // $reseps->gambar_resep = $request->gambar_resep;
        if ($request->hasFile('gambar_resep')) {
            $reseps->deleteImage(); //menghapus image sebelum di update melalui method deleteImage di model
            $image = $request->file('gambar_resep');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/gambar_resep/', $name);
            $reseps->gambar_resep = $name;
        }
        $reseps->deskripsi = $request->deskripsi;
        $reseps->bahan_bahan = $request->bahan_bahan;
        $reseps->langkah_langkah = $request->langkah_langkah;
        $reseps->save();
        return redirect()
            ->route('share.index')->with('toast_success', 'Data has been edited');
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
        //
    }
}
