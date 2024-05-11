<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::get();
        return view('mahasiswa.mahasiswa', compact('mahasiswa'));
    }
    public function tambah()
    {
        return view('mahasiswa.tambah');
    }
    public function simpan(Request $req)
    {
        Mahasiswa::create($req->all());
        return redirect('/mahasiswa');
    }
    public function edit($id)
    {
        $data = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('data'));
    }
    public function update(Request $req, $id)
    {
        Mahasiswa::find($id)->update($req->all());
        return redirect('/mahasiswa');
    }
    public function delete($id)
    {
        Mahasiswa::find($id)->delete();
        return redirect('/mahasiswa');
    }
    public function cetak()
    {
        $mahasiswa = Mahasiswa::get();
        $pdf = Pdf::loadView('mahasiswa.cetak', compact('mahasiswa'));
        return $pdf->stream('mahasiswa.pdf');
    }
}
