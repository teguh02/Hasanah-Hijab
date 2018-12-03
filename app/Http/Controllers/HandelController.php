<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;
use App\kategori;

class HandelController extends Controller
{

    public function update(Request $request, $slug)
    {
        $kaki = kategori::all();
        
        // Mengambil Email
        $email = $request->oleh;

        // Proses Mengenali Barang berdasarkan Id
        $barang = barang::where('slug', $slug) -> first();

        // Proses Melempar Data Ke Halaman Pemesanan
        return view('pesan.pesan', compact('barang', $barang), compact('kaki', $kaki)) -> with('email', $email);
    }

}
