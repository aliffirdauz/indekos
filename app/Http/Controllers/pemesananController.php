<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kosan;
use App\Models\User;

class pemesananController extends Controller
{
    public function index()
    {
        return view('admin.pemesanan.index', [
            // get user data join with kosan data
            'users' => User::join('kosans', 'users.id', '=', 'kosans.id')->where('role', 'user')->get(),
        ]);
    }
}
