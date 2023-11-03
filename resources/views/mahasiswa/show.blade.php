<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="/beranda">KEMBALI KE BERANDA</a>
    <H1>HALAMAN MAHASISWA</H1>

    <table border=1 cellpadding="10" cellspacing="2">
      <tr style="font-size: 20px; font-weight:bold">
        <td>No</td>
        <td>Jurusan</td>
        <td>NPM</td>
        <td>Nama Mahasiswa</td>
        <td>Tanggal Lahir</td>
        <td>Jenis Kelamin</td>
        <td>Alamat</td>
        <td>Hoby</td>
        <td>Foto</td>
      </tr>  

      @php
          $no=1;
      @endphp
      @foreach ($data as $item)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$item->jurusan}}</td>
            <td>{{$item->npm}}</td>
            <td>{{$item->nama_mahasiswa}}</td>
            <td>{{$item->tanggal_lahir}}</td>
            <td>{{$item->jenis_kelamin}}</td>
            <td>{{$item->alamat}}</td>
            <td>{{$item->hoby}}</td>
            <td>{{$item->foto}}</td>
          </tr>
      @endforeach

    </table>
</body>
</html>