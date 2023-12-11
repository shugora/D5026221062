@extends('master2')

@section('konten')

<form action="{{ route('karyawan.simpan') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="kodepegawai" class="form-label">Kode Pegawai</label>
        <input type="text" name="kodepegawai" id="kodepegawai" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="namalengkap" class="form-label">Nama Lengkap</label>
        <input type="text" name="namalengkap" id="namalengkap" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="divisi" class="form-label">Divisi</label>
        <input type="text" name="divisi" id="divisi" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="departemen" class="form-label">Departemen</label>
        <input type="text" name="departemen" id="departemen" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
