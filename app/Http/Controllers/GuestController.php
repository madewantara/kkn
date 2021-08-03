<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('guest.index');
    }

    public function indexCovid()
    {
        return view ('covids.index');
    }

    public function store(Request $request)
    {
        $covid = DB::table('covids')->insert([
            'nama' => $request->inputName,
            'status' => $request->inputStatus,
            'gejala' => $request->inputGejala,
            'keterangan' => $request->inputKeterangan,
        ]);

        return redirect()->route('pendataan')->with('status','Data berhasil disimpan!');
    }
}
