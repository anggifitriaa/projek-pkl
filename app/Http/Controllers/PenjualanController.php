<?php

namespace App\Http\Controllers;

use App\Models\penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penjualan = Penjualan::all();
        return view('penjualan.index', compact('penjualan'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penjualan.create');

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
            'no_meja' => 'required',
            'tgl_penjualan' => 'required',
            'jumlah_menu' => 'required',
            'total' => 'required',
            'id_pembeli' => 'required',
            'id_karyawan' => 'required',
            'id_menu' => 'required',
        ]);
        $penjualan->no_meja = $request->no_meja;
        $penjualan->tgl_penjualan = $request->tgl_penjualan;
        $penjualan->jumlah_menu = $request->jumlah_menu;
        $penjualan->total = $request->total;
        $penjualan->id_pembeli = $request->id_pembeli;
        $penjualan->id_karyawan = $request->id_karyawan;
        $penjualan->id_menu = $request->id_menu;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function show(penjualan $penjualan)
    {
        $penjualan = penjualan::findOrFail($id);
        return view('penjualan.show', compact('penjualan'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function edit(penjualan $penjualan)
    {
        $penjualan = penjualan::all();
        return view('penjualan.edit', compact('penjualan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, penjualan $penjualan)
    {
        $validated = $request->validate([
            'no_meja' => 'required',
            'tgl_penjualan' => 'required',
            'jumlah_menu' => 'required',
            'total' => 'required',
            'id_pembeli' => 'required',
            'id_karyawan' => 'required',
            'id_menu' => 'required',
        ]);
        $penjualan->no_meja = $request->no_meja;
        $penjualan->tgl_penjualan = $request->tgl_penjualan;
        $penjualan->jumlah_menu = $request->jumlah_menu;
        $penjualan->total = $request->total;
        $penjualan->id_pembeli = $request->id_pembeli;
        $penjualan->id_karyawan = $request->id_karyawan;
        $penjualan->id_menu = $request->id_menu;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy(penjualan $penjualan)
    {
        $penjualan = penjualan::findOrFail($id);
        $penjualan->delete();
        return redirect()->route('delete.index');

    }
}
