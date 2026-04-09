<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna; // WAJIB ditambahkan

class DashboardController extends Controller
{
    public function index()
    {
        if (!session()->has('username')) {
            return redirect('/');
        }

        $data = Pengguna::all(); // ambil data pengguna

        return view('daftarpengguna', compact('data'));
    }
}
