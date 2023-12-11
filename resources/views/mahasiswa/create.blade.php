@extends('master2')

@section('konten')
<form action="{{ route('mahasiswa.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nrp">NRP</label>
        <input type="text" name="nrp" class="form-control" id="nrp" placeholder="NRP">
    </div>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
    </div>
    <div class="form-group">
        <label for="jurusan">Jurusan</label>
        <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Jurusan">
    </div>
    <div class="form-group">
        <label for="ipk">IPK</label>
        <input type="text" name="ipk" class="form-control" id="ipk" placeholder="IPK">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
