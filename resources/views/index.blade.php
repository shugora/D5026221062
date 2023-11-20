<!DOCTYPE html>
<html>
<head>
	<title>Pegawai</title>
</head>
<body>

	<h2>Study Bounty</h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>


	<table border="1">
		<tr>
            <th>ID</th>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Alamat</th>
            <th>Umur</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
            <td>{{ $p->pegawai_id }}</td>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
            <td>{{ $p->pegawai_umur }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
