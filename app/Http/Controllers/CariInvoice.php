<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori;
use App\Pesan;
class CariInvoice extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kaki = kategori::all();
        return view('Invoice.cari', compact('kaki', $kaki));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kaki = kategori::all();

        // Menampilkan Semua Data berdasarkan Telp
          $data = Pesan::all() -> where('telp', $request->telp);
          $user = Pesan::all() -> where('telp', $request->telp) -> first();

          // Melempar ke halaman lihat
            return view('Invoice.lihat', compact('data', $data), compact('kaki', $kaki)) -> with('user', $user);
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

}
