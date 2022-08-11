<?php

namespace App\Http\Controllers;
use PD0;

use App\Models\foto_kosan;
use App\Models\Kosan;
use App\Models\Pemilik;
use Illuminate\Http\Request;

class kosanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.home.index', [
            'kosans' => Kosan::latest()->paginate(12),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kosan  $kosan
     * @return \Illuminate\Http\Response
     */
    public function show($nama_kosan)
    {
        $kosan = Kosan::where('nama_kosan', $nama_kosan)->first();
        $kosans = Kosan::all();
        return view('user.home.show', [
            'kosans' => Kosan::where('nama_kosan', $nama_kosan)->first(),
            'fotos' => foto_kosan::where('kosan_id', $kosan->id)->get()
        ]);
       
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
