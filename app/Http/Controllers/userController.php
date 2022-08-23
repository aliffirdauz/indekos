<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.userlist.index', [
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.userlist.create');
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
            'nama' => 'required',
            'nim' => 'required',
            'jenis_kelamin' => 'required',
            'asal_pt' => 'required',
            'prodi' => 'required',
            'alamat_asal' => 'required',
            'no_telp' => 'required',
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'max:255'],
            'role' => 'required'
        ]);
        
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('/admin/userlist/index')->with('success', 'User berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($nama)
    {
        return view('admin.userlist.show', [
            'user' => User::where('nama', $nama)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mhsw = User::find($id);
        return view('admin.userlist.edit', compact('mhsw'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $mhsw = User::find($id);
        $rules = [
            'nama' => 'required',
            'nim' => 'required',
            'jenis_kelamin' => 'required',
            'asal_pt' => 'required',
            'prodi' => 'required',
            'alamat_asal' => 'required',
            'no_telp' => 'required',
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8', 'max:255'],
            'role' => 'required'
        ];

        if($request->nama != $mhsw->nama) {
            $rules['nama'] = 'unique:users';
        }

        $validatedData = $request->validate($rules);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::where('id', $mhsw->id)->update($validatedData);

        return redirect('/admin/userlist/index')->with('success', 'Data Kost berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mhsw = User::find($id);
        $mhsw->delete();
        return redirect('/admin/userlist/index')->with('success', 'Data Kost berhasil dihapus!');
    }
}
