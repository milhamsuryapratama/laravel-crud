@extends('template')

@section('konten')
    <h3>JURUSAN</h3>

    <br/>

    <a href="/jurusan/tambah"> + Tambah Jurusan Baru</a>

    <table border="1">
            <tr colspan='2'>
                <th>Nama Jurusan</th>
                <th>Action</th>
            </tr>

            @foreach($jurusan as $p)
                <tr>
                    <td>{{ $p->jurusan_nama }}</td>
                    <td>
                        <a href="/jurusan/edit/{{ $p->jurusan_id }}">Edit</a>
                        |
                        <a href="/jurusan/hapus/{{ $p->jurusan_id }}">Hapus</a>
                    </td>
                </tr>
            @endforeach
    </table>
@endsection
