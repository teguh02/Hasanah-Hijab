<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori;
use App\loading;
use App\barang;
use Illuminate\support\str;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kaki = kategori::all();
        $lihat = barang::all();
        $loading = loading::all() -> first();
        $kat = kategori::all();
        return view('barang.index', compact('lihat', $lihat), compact('kaki', $kaki)) -> with('kat', $kat) -> with('loading', $loading);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lihat = kategori::all();
        return view('barang.tambah', compact('lihat', $lihat));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah = new barang();
        $judul = $tambah->nama = $request->judul;
        $tambah->harga = $request->harga;
        $tambah->stok = $request->stok;
        $tambah->deskripsi = $request->deskripsi;
        $tambah->slug = Str::slug($request->judul);
        $tambah->oleh = $request->oleh;

        // Proses Input Kategori
          $kat = kategori::find($request->kategori);
          $tambah->kategori = $kat->kategori;

        // Proses Input Gambar
        if ($request->file('gambar') == '') {
          $tambah->gambar = "";
        } else {
          $file = $request->file('gambar');
          $filename = $judul."-".$file -> getClientOriginalName();
          $file -> move("gambar/", $filename);
          $tambah->gambar = $filename;
        }

        $tambah -> save();
        return redirect() -> route('barang.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $kaki = kategori::all();
        $loading = loading::all() -> first();
        $lihat = barang::where('slug', $slug) -> first();
        return view('barang.lihat',compact('kaki', $kaki)) -> with('lihat', $lihat) -> with('loading', $loading);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        // Menampilkan Semua Kategori
        $kat = kategori::all();

        // Kategori yang terpilih
          $data = barang::where('slug', $slug) -> first();
          $pilih = $data->kategori;

          $pilih2 = kategori::where('kategori', $pilih) -> first();



        // Melempar Data ke Form Edit
        return view('barang.edit', compact('data', $data), compact('kat', $kat)) -> with('pilih2', $pilih2);
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
        $baru = barang::where('id', $id) -> first();
        $judul = $baru->nama = $request->judul;
        $baru->harga = $request->harga;
        $baru->stok = $request->stok;
        $baru->deskripsi = $request->deskripsi;
        $baru->slug = str::slug($request->judul);

        // Proses Kategori
          if ($request->kategori == '') {
            // Nothing Happen
          } else {
            $kategori = kategori::where('id', $request->kategori) -> first();
            $baru->kategori = $kategori->kategori;
          }

        // Proses Gambar
          if ($request->file('gambar') == '') {
            // Nothing Happen
          } else {
            $file = $request->file('gambar');
            $filename = $judul ."-". $file -> getClientOriginalName();
            $file -> move("gambar/", $filename);
            $baru->gambar = $filename;
          }

          $baru->update();
          return redirect() -> route('barang.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $hapus = barang::where('slug', $slug);
        $hapus-> delete();
        return redirect() -> route('barang.index');
    }


}
