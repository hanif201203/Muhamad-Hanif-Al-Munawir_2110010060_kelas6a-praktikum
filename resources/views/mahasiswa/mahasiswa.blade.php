@extends('layout.master')
@section('content')

<div class="row " style="padding-left: 25px">
<div class="col-cl-6 col-md-6">
    <br>
    <a class="btn btn-success " href="/mahasiswa/tambah"><i class="fas fa-plus"></i> Tambah Data</a>
    <a class="btn btn-primary " href="/mahasiswa/cetak-pdf" target="_blank"><i class="fas fa-print" ></i> Cetak PDF</a>
    
</div>

<br><br>

<div class="card mb-4">
<div class="card-header">
    <i class="fas fa-table me-1"></i>
    Data mahasiswa
</div>
<div class="card-body">
    <table id="datatablesSimple">
        <thead>
            <tr>
                <th>No</ths>
                <th>NPM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Aksi/Button</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $key => $item)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$item->npm}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->jurusan}}</td>
                <td>
                    <a href="/mahasiswa/edit/{{$item->id}}">Edit</a> |
                    <a href="/mahasiswa/delete/{{$item->id}}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
</div>
</div>
@endsection