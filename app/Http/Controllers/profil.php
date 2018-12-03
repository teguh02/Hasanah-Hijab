<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori;

class profil extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kaki = kategori::all();
        return view('teguh.index', compact('kaki', $kaki));
    }


}
