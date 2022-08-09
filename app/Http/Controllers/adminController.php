<?php

namespace App\Http\Controllers;

use App\Models\Kosan;
use App\Models\Pemilik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kosan.index', [
            'kosans' => Kosan::latest()->paginate(12),
            'pemiliks' => Pemilik::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kosan.create', [
            'pemiliks' => Pemilik::all()
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
        // return $request;
        $validatedData = $request->validate([
            'pemilik_id' => 'required',
            'nama_kosan' => 'required',
            'alamat' => 'required',
            'harga' => 'required',
            'kapasitas' => 'required',
            'jenis' => 'required',
            'foto' => ['nullable', 'image', 'file', 'max:5120'],
            'deskripsi' => 'required',
            'fasilitas_kamar' => 'required',
            'fasilitas_kamar_mandi' => 'required',
            'fasilitas_umum' => 'required',
            'fasilitas_parkir' => 'required',
            'peraturan' => 'required',
        ]);

        if($request->file('foto')){
            $validatedData['foto'] = $request->file('foto')->store('user-foto-kost');
        }

        Kosan::create($validatedData);

        return redirect('/admin')->with('success', 'Kost berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kosan  $kosan
     * @return \Illuminate\Http\Response
     */
    public function show(Kosan $kosan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kosan  $kosan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kosan $kosan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kosan  $kosan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kosan $kosan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kosan  $kosan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kosan $kosan)
    {
        //
    }
}
