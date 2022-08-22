<?php

namespace App\Http\Controllers;

use App\Models\Kosan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\foto_kosan;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(Kosan::all());
        return view('admin.kosan.index', [
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
        return view('admin.kosan.create', [

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
    public function upload_image(Request $request, $kosan_id)
    {
        // dd($kosan_id);
        return view('admin.kosan.upimage',compact('kosan_id'));
    }
    public function store_image(Request $request, $kosan_id)
    {
        $path = public_path("assets/images/");
        $image_name = '';
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $image_name = $file->getClientOriginalName();
            $file->move($path, $image_name);
            $galeri = new foto_kosan();
            $galeri->nama_file = $image_name;
            $galeri->kosan_id = $kosan_id;
            $kosan = Kosan::where('id', $kosan_id)->first();
            if(empty($kosan->foto)){
                Kosan::where('id', $kosan_id)->update(['foto' => $image_name]);
            }
            $galeri->save();
        }
        return response()->json(['success' => $image_name]);
    }
}
