@extends('master2')

@section('konten')
<h1>Hapus Data Mahasiswa</h1>
<p>Apakah Anda yakin ingin menghapus data mahasiswa ini?</p>
<form action="{{ route('mahasiswa.delete', $id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Hapus</button>
    <a href="{{ route('mahasiswa') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection
