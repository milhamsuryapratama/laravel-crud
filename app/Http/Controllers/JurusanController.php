<?php

namespace App\Http\Controllers;

use App\JurusanModel;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusan = JurusanModel::all();

        return view('jurusan_index', ['jurusan' => $jurusan]);
    }

    public function tambah()
    {
        return view('jurusan_tambah');
    }

    public function simpan(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required'
        ]);

        JurusanModel::create([
            'jurusan_nama' => $request->nama
        ]);

        return redirect('/jurusan');
    }

    public function edit($id)
    {
        $jurusan = JurusanModel::find($id);

        return view('jurusan_edit', ['jurusan' => $jurusan]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'jurusan_nama' => 'required'
        ]);

        $jurusan = JurusanModel::find($request->jurusan_id);
        $jurusan->jurusan_nama = $request->jurusan_nama;
        $jurusan->save();

        return redirect('/jurusan');
    }

    public function hapus($id)
    {
        $jurusan = JurusanModel::where('jurusan_id', $id)->delete();

        return redirect('/jurusan');
    }
}
