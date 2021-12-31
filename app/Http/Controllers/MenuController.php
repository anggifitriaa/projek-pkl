<?php

namespace App\Http\Controllers;

use App\Models\menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = menu::all();
        return view('menu.index', compact('menu'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'id_menu' => 'required',
        //     'nama_menu' => 'required',
        //     'harga' => 'required',
        //     'stock' => 'required',
        // ]);
        $menu = new Menu;
        $menu->nama_menu = $request->nama_menu;
        $menu->harga = $request->harga;
        $menu->stock = $request->stock;
        $menu->save();
        return redirect()->route('menu.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menu = menu::findOrFail($id);
        return view('menu.show', compact('menu'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = menu::all();
        return view('menu.edit', compact('menu'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, menu $menu)
    {
        $validated = $request->validate([
            'nama_menu' => 'required',
            'harga' => 'required',
            'stock' => 'required',
        ]);
        $menu->nama_menu = $request->nama_menu;
        $menu->harga = $request->harga;
        $menu->stock = $request->stock;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = menu::findOrFail($id);
        $menu->delete();
        return redirect()->route('menu.index');

    }
}
