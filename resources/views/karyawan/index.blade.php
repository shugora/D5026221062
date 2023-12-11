@extends('master2')

@section('konten')

<h1>Data Karyawan</h1>

<table class="table table-striped">
  <thead>
    <tr>
      <th>Kode Pegawai</th>
      <th>Nama Lengkap</th>
      <th>Divisi</th>
      <th>Departemen</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($karyawan as $karyawan)
      <tr>
        <td>{{ $karyawan->kodepegawai }}</td>
        <td>{{ $karyawan->namalengkap }}</td>
        <td>{{ $karyawan->divisi }}</td>
        <td>{{ strtolower($karyawan->departemen) }}</td>
        <td>
          <a href="{{ route('karyawan.edit', $karyawan->kodepegawai) }}" class="btn btn-primary">Edit</a>
          <form action="{{ route('karyawan.destroy', $karyawan->kodepegawai) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Hapus</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

@if (count($karyawan) == 0)
<div class="alert alert-danger">
Tidak ada data karyawan yang ditemukan.
</div>
@endif

<a href="{{ route('karyawan.tambah') }}" class="btn btn-primary">Tambah Data</a>

@endsection
