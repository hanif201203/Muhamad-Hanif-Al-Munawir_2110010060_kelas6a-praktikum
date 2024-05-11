<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <center>
    <h1>DINAS A</h1>
    JL.......</center>
    <table border="1" cellpadding="0" cellspacing="0" width="100%">
        <tr style="text-align: center">
            <td style="padding: 10px 25px; ">No</td>
            <td>NPM</td>
            <td>Nama</td>
            <td>Jurusan</td>
        </tr>

        @foreach ($mahasiswa as $key => $item)
        <tr style="text-align: center">
            <td style="padding: 10px 15px;">{{$key + 1}}</td>
            <td>{{$item->npm}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->jurusan}}</td>
        </tr>
        @endforeach

    </table>
</body>
</html>