<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesan;
use App\barang;
use Illuminate\support\str;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pesan::all();
        return view('pesan.admin', compact('data', $data));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect() -> route('barang.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Pesan();
        $data->invoice = "HH" . $request->telp . $request->id;
        $data->nama = $request->nama;
        $data->telp = $request->telp;
        $data->jumlah = $request->jumlah;
        $data->keterangan = $request->keterangan;
        $data->pertanyaan = $request->pertanyaan;
        $data->alamat = $request->alamat;
        $data->barang = $request->barang;
        $data->oleh = $request->oleh;
        $data->slug = "pesanan-" . str::slug($request->barang) ."-dari-". str::slug($request->nama);

        // Proses Menjumlah harga
        $data->harga = $request->jumlah * $request->harga;
        $data->save();

        return redirect('/pemesanan/105691E8282232A4645226404D9Z82/berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        $email = $name;
        $data = Pesan::all() -> where('oleh', $name);
        return view('pesan.admin', compact('data', $data)) -> with('email', $email);
      
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
        $hapus = Pesan::where('id', $id);
        $hapus -> delete();

        return redirect() -> route('Pesan.index');
    }
}
