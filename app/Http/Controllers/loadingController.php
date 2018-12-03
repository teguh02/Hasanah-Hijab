<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loading;

class loadingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loading = loading::all() -> first();
        return view('setting.index') -> with('loading', $loading);
    }

    public function update(Request $request, $id)
    {
        $loading = loading::where('id', $id) -> first();

        // Jika status sama dengan 1 atau aktif maka ubah menjadi 0 atau mati
        if ($request->status == "1") {
          $loading->status = "0";
          $loading->update();
          return redirect() -> route('loading.index');

        // Jika status sama dengan 0 atau mati maka ubah menjadi 1 atau nyala
        } else {
          $loading->status = "1";
          $loading->update();
          return redirect() -> route('loading.index');
        }

    }

}
