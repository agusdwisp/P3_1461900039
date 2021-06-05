<!DOCTYPE html>
<html>
<head>
	<title>Tampil Pelanggan</title>
</head>
<body>
	<h3>Data Pelanggan</h3>
 
	<a href="/pelanggan/tambah"> + Tambah Pelanggan Baru</a>
    <h2>Cari Pelanggan : </h2>
	<form action="/pelanggan/cari" method="GET">
    <input type="text" name="lihat" placeholder="Masukkan disini" value="{{ old('cari') }}">
    <input type="submit" value="CARI">
</form>
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Konfigurasi</th>
		</tr>
		@foreach($pelanggan as $p)
		<tr>
			<td>{{ $p->id }}</td>
			<td>{{ $p->nama }}</td>
			<td>{{ $p->alamat }}</td>
			<td>
				<a href="/pelanggan/edit/{{ $p->id }}">Edit</a>
				|
				<a href="/pelanggan/hapus/{{ $p->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>