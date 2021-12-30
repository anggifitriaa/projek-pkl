<?php

namespace App\Http\Controllers;

use App\Models\pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembeli = pembeli::all();
        return view('pembeli.index', compact('pembeli'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembeli.create');

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
            'nama_pembeli' => 'required',
        ]);
        $pembeli->nama_pembeli = $request->nama_pembeli;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pembeli = pembeli::findOrFail($id);
        return view('pembeli.show', compact('pembeli'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pembeli = pembeli::all();
        return view('pembeli.edit', compact('pembeli'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            // 'id_pembeli' => 'required',
            'nama_pembeli' => 'required',

        ]);
        //$pembeli->id_pembeli = $request->id_pembeli;
        $pembeli->nama_pembeli = $request->nama_pembeli;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembeli = pembeli::findOrFail($id);
        $pembeli->delete();
        return redirect()->route('pembeli.index');

    }
}
