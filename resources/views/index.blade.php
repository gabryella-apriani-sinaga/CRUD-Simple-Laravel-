<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- icon -->
    <link href="{{asset('admin/css/elegant-icons-style.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/css/font-awesome.min.css')}}" rel="stylesheet" />
    <title>Data Mahasiswa Informatika</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid d-flex justify-content-center align-items-center p-2 pt-3">
        <h5 class="text-white fw-bold">Daftar Mahasiswa S1 Informatika</h5>
    </div>
</nav>

<div class="add mt-5 d-flex justify-content-end me-5">
    <a href="/mahasiswa/tambah" class="btn btn-primary"><i class="fa-solid fa-circle-plus pe-2"></i> Tambah Data</a>
</div>

<div class="container mt-5">
    <div class="row gx-10 ">
        <div class="bg-primary p-3 d-flex justify-content-between">
            <div class="text-white fw-bold">Data Mahasiswa</div>
            <form action="/mahasiswa/cari" method="GET">
                <input type="text" name="cari" class="rounded-pill border-0" placeholder="Cari Mahasiswa.." value="{{old('cari')}}">
{{--                <a href="/mahasiswa/cari" type="submit"><i class="fa-solid fa-magnifying-glass text-white"></i></a>--}}
                <button type="submit" class="btn"><i class="fa-solid fa-magnifying-glass text-white"></i></button>
            </form>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Alamat</th>
            <th>Kelas</th>
            <th>Role</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($mahasiswa as $mhs)
        <tr>
            <th scope="row">{{$mhs -> id}}</th>
            <td>{{$mhs->nama}}</td>
            <td>{{$mhs->NIM}}</td>
            <td>{{$mhs->alamat}}</td>
            <td>{{$mhs->kelas}}</td>
            <td>{{$mhs->role}}</td>
            <td>
                <a href="/mahasiswa/edit/{{$mhs->id}}"><i class="fa-solid fa-pen-to-square text-warning me-2"></i></a>
                <a href="/mahasiswa/hapus/{{$mhs->id}}"><i class="fa-solid fa-trash-can text-danger me-2"></i></a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

</div>


<script src="https://kit.fontawesome.com/2b4dd3a3c2.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
