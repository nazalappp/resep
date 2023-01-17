<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kota;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kotas = Kota::all();
        return view('admin.kota.index', compact('kotas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kota.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'nama_kota' => 'required',
        ]);

        $kotas = new Kota();
        $kotas->nama_kota = $request->nama_kota;
        $kotas->save();
        return redirect()
            ->route('kota.index')->with('toast_success', 'Data has been edited');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kotas = Kota::findOrFail($id);
        return view('admin.kota.edit', compact('kotas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validasi
        $validated = $request->validate([
            'nama_kota' => 'required',
        ]);

        $kotas =  Kota::findOrFail($id);
        $kotas->nama_kota = $request->nama_kota;
        $kotas->save();
        return redirect()
            ->route('kota.index')->with('toast_success', 'Data has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kotas = Kota::findOrFail($id);
        $kotas->delete();
        return redirect()
            ->route('kota.index')->with('toast_success', 'Data has been deleted');
    }
}
