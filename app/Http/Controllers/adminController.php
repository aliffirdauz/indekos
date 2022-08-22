<?php

namespace App\Http\Controllers;

use App\Models\Kosan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\foto_kosan;
use Illuminate\Support\Facades\Storage;

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
            'kosans' => Kosan::all(),
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
            'jarak' => 'required',
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
    public function show($nama_kosan)
    {
        $kosan = Kosan::where('nama_kosan', $nama_kosan)->first();
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
    public function edit($id)
    {
        $kosans = Kosan::find($id);
        return view ('admin.kosan.edit', compact('kosans'), [
            // 'kosans' => $kosans->load('foto')
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kosan  $kosan
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $kosans = Kosan::find($id);
        $rules = [
            'nama_kosan' => 'required',
            'alamat' => 'required',
            'harga' => 'required',
            'kapasitas' => 'required',
            'jenis' => 'required',
            'jarak' => 'required',
            'foto' => ['nullable', 'image', 'file', 'max:5120'],
            'deskripsi' => 'required',
            'fasilitas_kamar' => 'required',
            'fasilitas_kamar_mandi' => 'required',
            'fasilitas_umum' => 'required',
            'fasilitas_parkir' => 'required',
            'peraturan' => 'required'
        ];

        if($request->nama_kosan != $kosans->nama_kosan) {
            $rules['nama_kosan'] = 'unique:kosans';
        }

        $validatedData = $request->validate($rules);

        Kosan::where('id', $kosans->id)->update($validatedData);

        return redirect('/admin')->with('success', 'Data Kost berhasil diubah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kosan  $kosan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kosans = Kosan::find($id);
        $kosans->delete();
        return redirect('/admin')->with('success', 'Data Kost berhasil dihapus!');
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
            $foto = foto_kosan::where('id', $kosan_id)->get();
            if(empty($foto->nama_file)) {
                $galeri->save();
            }
            else {
                foreach($foto as $f) {
                    $f->delete();
                }  
            }
        }
        return response()->json(['success' => $image_name]);
    }
}
