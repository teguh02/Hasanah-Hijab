<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;
use App\loading;
use App\kategori;
class CariController extends Controller
{

    public function store(Request $request)
    {
        $loading = loading::all() -> first();

        // Proses Menerjemah Id ke Kalimat => Kategori
        $cari = kategori::where('id',$request->kategori) -> first();
        $nama = $cari->kategori;

        // Proses Untuk Menampilkan Data Kategori Yang Dipilih
        $nomor = kategori::find($request->kategori);

        // Proses Untuk Menampilkan Semua Kategori Yang Ada
        $data2 = kategori::all();

        // Proses Menampilkan Data Berdasarkan Kategori Yang Dipilih
        $data = barang::all() -> where('kategori', $nama);

        return view('barang.berdasarkan',
            compact('data', $data),
            compact('data2', $data2))

            -> with('nomor', $nomor)
            -> with('loading', $loading);

    }


}
