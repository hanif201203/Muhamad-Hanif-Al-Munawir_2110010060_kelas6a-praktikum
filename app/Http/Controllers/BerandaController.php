<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();

        return view('beranda', compact('mahasiswa'));
    }
}
