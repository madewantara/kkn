<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warga = DB::table('wargas')->get();
        return view('warga.index', ['warga' => $warga]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('warga.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $warga = DB::table('wargas')->insert([
            'nokk' => $request->nokk,
            'nik' => $request->nik,
            'name' => $request->name,
            'ttl' => $request->ttl,
            'kelamin' => $request->kelamin,
            'agama' => $request->agama,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('wargas.index')->with('status', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function show(Warga $warga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function edit($warga)
    {
        $wargas = DB::table('wargas')->where('warga_id', $warga)->first(); 
        return view('warga.edit', ['wargas' => $wargas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $warga)
    {
        $warga = DB::table('wargas')
        ->where('warga_id', $warga)
        ->update(
            ['nokk' => $request->nokk,
            'nik' => $request->nik,
            'name' => $request->name,
            'ttl' => $request->ttl,
            'kelamin' => $request->kelamin,
            'agama' => $request->agama,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat],
        );
        return redirect()->route('wargas.index')->with('status', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function destroy($warga)
    {
        Warga::destroy($warga);
        return redirect()->route('wargas.index')->with('status', 'Data berhasil dihapus!');
    }
}
