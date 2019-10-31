<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>

    <h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	{{-- @foreach($pegawai as $p) --}}
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $pegawai->pegawai_id }}"> <br/>
        Nama <input type="text" required="required" name="nama" value="{{ $pegawai->pegawai_nama }}"> <br/>
        Jenis Kelamin <br> <input type="radio" name="gender" value="L" {{ ($pegawai->pegawai_jk == "L") ? "checked" : "" }}> L<br>
        <input type="radio" name="gender" value="P" {{ ($pegawai->pegawai_jk == "P") ? "checked" : "" }}> P<br>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $pegawai->pegawai_jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $pegawai->pegawai_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $pegawai->pegawai_alamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	{{-- @endforeach --}}

</body>
</html>
