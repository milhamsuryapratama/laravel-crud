<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\PegawaiModel;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = PegawaiModel::all();

        return view('index', ['pegawai' => $pegawai]);
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function store(Request $request)
    {
        PegawaiModel::create([
            'pegawai_nama' => $request->nama,
            'pegawai_jk' => $request->gender,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        // DB::table('pegawai')->insert([
        //     'pegawai_nama' => $request->nama,
        //     'pegawai_jk' => $request->gender,
        //     'pegawai_jabatan' => $request->jabatan,
        //     'pegawai_umur' => $request->umur,
        //     'pegawai_alamat' => $request->alamat
        // ]);

        return redirect('/pegawai');
    }

    public function edit($id)
    {
        // $pegawai = PegawaiModel::where('pegawai_id', $id)->get();
        $pegawai = PegawaiModel::find($id);

        return view('edit', ['pegawai' => $pegawai]);
    }

    public function update(Request $request)
    {
        $pegawai = PegawaiModel::find($request->id);
        $pegawai->pegawai_nama = $request->nama;
        $pegawai->pegawai_jk = $request->gender;
        $pegawai->pegawai_jabatan = $request->jabatan;
        $pegawai->pegawai_umur = $request->umur;
        $pegawai->pegawai_alamat = $request->alamat;
        $pegawai->save();
        // DB::table('pegawai')->where('pegawai_id', $request->id)->update([
        //     'pegawai_nama' => $request->nama,
        //     'pegawai_jabatan' => $request->jabatan,
        //     'pegawai_umur' => $request->umur,
        //     'pegawai_alamat' => $request->alamat
        // ]);

        return redirect('/pegawai');
    }

    public function hapus($id)
    {
        // DB::table('pegawai')->where('pegawai_id', $id)->delete();
        $pegawai = PegawaiModel::where('pegawai_id', $id)->delete();

        return redirect('/pegawai');
    }
}
