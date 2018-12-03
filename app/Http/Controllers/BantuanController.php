<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bantuan;
use App\kategori;
use Illuminate\support\str;

class BantuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kaki = kategori::all();
        return view('bantuan.index', compact('kaki', $kaki));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $kaki = kategori::all();
      return view('bantuan.bantuan', compact('kaki', $kaki));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Bantuan();
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->WA = $request->WA;
        $data->subjek = $request->subjek;
        $data->pesan = $request->pesan;
        $data->slug = str::slug($request->subjek);

        $data-> save();
        return redirect() -> route('Bantuan.create');
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
        //
    }
}
