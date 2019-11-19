@extends('template')

@section('konten')
    <h3>Data Jurusan</h3>

    <a href="/jurusan"> Kembali</a>

    <br/>
    <br/>

    <form action="/jurusan/simpan" method="post">
        {{ csrf_field() }}
        Nama <input type="text" name="nama" required="required"> <br/>
        <input type="submit" value="Simpan Data">
    </form>
@endsection
