<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        // mengambil data dari database
        $mahasiswa = DB::table('mahasiswa')->paginate(8);


        // Mengirim data mahasiswa ke index view
        return view('index', ['mahasiswa' => $mahasiswa]);
    }

    public function tambah()
    {
        // menampilkan halaman form input
        return view('tambah');
    }

    public function store(Request $request)
    {
        // menyimpan hasil inputan ke database
        DB::table('mahasiswa')->insert([
            'nama' => $request->nama,
            'NIM' => $request->nim,
            'alamat' => $request->alamat,
            'kelas' => $request->kelas,
            'role' => $request->role
        ]);

        // alihkan ke halaman mahasiswa
        return redirect('/mahasiswa');

    }

    public function edit($id)
    {
        $mahasiswa = DB::table('mahasiswa')->where("id",$id )->get();
        return view('edit', ['mahasiswa' => $mahasiswa]);
    }

    public function update(Request $request)
    {
        DB::table('mahasiswa')->where("id",$request->id)->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'alamat' => $request->alamat,
            'kelas' => $request->kelas,
            'role' => $request->role
        ]);
        return redirect('/mahasiswa');
    }

    public function hapus($id)
    {
        // menghapus data mahasiswa berdasarkan id yang dipilih
        DB::table('mahasiswa')->where('id', $id)->delete();
        return redirect('/mahasiswa');
    }

    public function cari(Request $request)
    {
        // Menangkap data pencarian
        $cari = $request->cari;

        // Mengambil data dari table mahasiswa sesuai pencarian berdasarkan namanya
        $mahasiswa = DB::table('mahasiswa')->where('nama', 'like', "%".$cari."%")->paginate();

        // Mengirim data mahasiswa ke view "index"
        return view('index', ['mahasiswa' => $mahasiswa]);
    }
}
