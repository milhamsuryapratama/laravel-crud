@extends('template')

@section('konten')
<h3>Edit Data Jurusan</h3>

<a href="/jurusan"> Kembali</a>

<br/>
<br/>

<form action="/jurusan/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="jurusan_id" value="{{ $jurusan->jurusan_id }}"> <br/>
    Nama <input type="text" name="jurusan_nama" required="required" value="{{$jurusan->jurusan_nama}}"> <br/>
    <input type="submit" value="Edit Data">
</form>
@endsection
