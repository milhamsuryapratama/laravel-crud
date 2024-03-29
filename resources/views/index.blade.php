@extends('template')

@section('konten')
<h3>Data Pegawai</h3>

<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

<br />
<br />

<table border="1">
    @if ($message = Session::get('sukses'))
        <tr>
            <td colspan="5"><p><i><strong>{{ $message }}</strong></i></p></td>
        </tr>
    @elseif ($message = Session::get('edit'))
        <tr>
            <td colspan="5"><p><i><strong>{{ $message }}</strong></i></p></td>
        </tr>
    @elseif ($message = Session::get('hapus'))
        <tr>
            <td colspan="5"><p><i><strong>{{ $message }}</strong></i></p></td>
        </tr>
    @endif


    <tr>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Jurusan</th>
        <th>Umur</th>
        <th>Alamat</th>
        <th>Opsi</th>
    </tr>

    @foreach($pegawai as $p)
    <tr>
        <td>{{ $p->pegawai_nama }}</td>
        <td>{{ $p->pegawai_jabatan }}</td>
        <td>{{ $p->jurusan->jurusan_nama }}</td>
        <td>{{ $p->pegawai_umur }}</td>
        <td>{{ $p->pegawai_alamat }}</td>
        <td>
            <a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
            |
            <a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
