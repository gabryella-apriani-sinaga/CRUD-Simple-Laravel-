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
    <style>

        p{
            font-weight: bold;
        }
        .row{

        }
        input{
            width: 500px;
            /* padding: 5px; */
            border-radius: 5px;
        }
        .linkGoogleForm{
            color: blue;
            text-decoration: underline;
        }

        button{
            padding: 12px 25px;
        }
        .deskripsi{
            height: 90px;
        }
        @media screen and (max-width: 1200px) {
            /* rentang 768 px -> 1200 px */
            input{
                width: 500px;
            }
        }
    </style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid d-flex justify-content-center align-items-center p-2 pt-3">
        <h5 class="text-white fw-bold">Daftar Mahasiswa S1 Informatika</h5>
    </div>
</nav>

{{--<div class="add mt-5 d-flex justify-content-end me-5">--}}
{{--    <a href="" class="btn btn-primary"><i class="fa-solid fa-circle-plus pe-2"></i> Kembali</a>--}}
{{--</div>--}}

<div class="container mt-5">
    <div class="row gx-10 ">
        <div class="bg-primary p-3 d-flex justify-content-center">
            <div class="text-white fw-bold">Edit Data Mahasiswa</div>
        </div>
    </div>
    <div class="container d-flex justify-content-center">

        @foreach($mahasiswa as $mhs)
        <form class="mb-3 " action="/mahasiswa/update" method="post">

            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$mhs->id}}"><br>

            <p>Nama</p>
            <input name="nama" type="text" value="{{$mhs->nama}}">

            <br><br>

            <p>NIM</p>
            <input name="nim" type="text" value="{{$mhs->NIM}}">
            <br><br>

            <p>Alamat</p>
            <input name="alamat" type="text" value="{{$mhs->alamat}}">
            <br><br>

            <p>Kelas</p>
            <input name="kelas" type="text" value="{{$mhs->kelas}}">
            <br><br>

            <p>Role</p>
            <input name="role" type="text" value="{{$mhs->role}}">
            <!-- <br><br>

            <p>Tanggal akhir:</p>
            <input name="date" type="date"> -->

            <br><br>

            <div class="d-flex justify-content-center">
                <input type="submit" class="btn btn-primary" value="Simpan Data">
            </div>

        </form>
        @endforeach

    </div>
</div>




<script src="https://kit.fontawesome.com/2b4dd3a3c2.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
