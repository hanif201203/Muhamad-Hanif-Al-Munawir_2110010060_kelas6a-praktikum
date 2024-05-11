<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>DATA MAHASISWA</h1>
    <a href="/">Ke Beranda</a>

    <a href="/mahasiswa/tambah">Tambah Data</a>
    <a href="/mahasiswa/cetak-pdf" target="_blank">Cetak PDF</a>
    <table border="1" cellpadding="10px">
        <tr>
            <td>No</td>
            <td>NPM</td>
            <td>Nama</td>
            <td>Jurusan</td>
            <td>Aksi/Button</td>
        </tr>

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

    </table>
</body>
</html>