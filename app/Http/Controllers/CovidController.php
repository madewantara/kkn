<?php

namespace App\Http\Controllers;

use App\Models\Covid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CovidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $covid = DB::table('covids')->get();
        return view('wargacovid.index', ['covid' => $covid]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wargacovid.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $warga = DB::table('covids')->insert([
            'nama' => $request->inputName,
            'status' => $request->inputStatus,
            'keterangan' => $request->inputKeterangan,
            'gejala' => $request->inputGejala,
        ]);

        return redirect()->route('covids.index')->with('status', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Covid  $covid
     * @return \Illuminate\Http\Response
     */
    public function show(Covid $covid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Covid  $covid
     * @return \Illuminate\Http\Response
     */
    public function edit($covid)
    {
        $covids = DB::table('covids')->where('covids_id', $covid)->first(); 
        return view('wargacovid.edit', ['covids' => $covids]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Covid  $covid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $covid)
    {
        $covid = DB::table('covids')
        ->where('covids_id', $covid)
        ->update([
            'nama' => $request->inputName,
            'status' => $request->inputStatus,
            'keterangan' => $request->inputKeterangan,
            'gejala' => $request->inputGejala,
        ]);
        return redirect()->route('covids.index')->with('status', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Covid  $covid
     * @return \Illuminate\Http\Response
     */
    public function destroy($covid)
    {
        Covid::destroy($covid);
        return redirect()->route('covids.index')->with('status', 'Data berhasil dihapus!');
    }
}
