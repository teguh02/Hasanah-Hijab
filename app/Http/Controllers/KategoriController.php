<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $lihat = kategori::all();
      return view('kategori.buat', compact('lihat', $lihat));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lihat = kategori::all();
        return view('kategori.buat', compact('lihat', $lihat));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah = new kategori();
        $tambah->kategori = $request->kategori;
        $tambah-> save();

        return redirect() -> route('kategori.create');
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
        $lihat = kategori::where('id', $id) -> first();
        return view('kategori.edit', compact('lihat', $lihat));
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
        $baru = kategori::where('id', $id) -> first();
        $baru->kategori = $request->kategori;
        $baru-> update();
        return redirect() -> route('kategori.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = kategori::where('id', $id);
        $hapus -> delete();
        return redirect() -> route('kategori.create');
    }
}
