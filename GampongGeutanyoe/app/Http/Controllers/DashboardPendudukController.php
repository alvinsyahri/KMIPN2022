<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;

class DashboardPendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.data_penduduk.index',[
            'title' => 'Data Penduduk',
            'penduduks' => Penduduk::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.data_penduduk.create',[
            'title' => 'Tambah Data Penduduk Baru',
            'penduduks' => Penduduk::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nik' => 'required|min:16',
            'nama' => 'required|max:255',
            'tempat' => 'required|max:255',
            'tanggal' =>'required',
            'kelamin' => 'required',
            'darah' => '',
            'alamat' => 'required|max:255',
            'rt' => '',
            'rw' => '',
            'desa' => 'required|max:255',
            'kecamatan' => 'required|max:255',
            'perkawinan' => 'required|max:255',
            'agama' => 'required|max:255',
            'pekerjaan' => 'required|max:255',
            'kewarganegaraan' => 'required|max:255',
            'foto' => 'image|file|max:2048',
        ]);

        if ($request->file('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('perangkat-gampong');
        }

        Penduduk::create($validatedData);

        return redirect('/dashboard/data-penduduk')->with('success', 'Data Penduduk baru berhasil ditambahkan!');
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
