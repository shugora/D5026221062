@extends('master2')
@section('title', 'Database Sepatu')

    @section('judul_halaman')

		<h3>Data Nilai</h3>

	<br/>
	<br/>
    @endsection
    @section('konten')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Tambah Data Nilai Kuliah</h1>

                <form action="{{ route('nilaikuliah.store') }}" method="post">
                    @csrf

                    <div

    class="form-group">


    <label

    for="nrp">NRP:</label>


    <input

    type="text"

    name="nrp"

    id="nrp"

    class="form-control"

    required>


    </div>



    <div

    class="form-group">


    <label

    for="nilai_angka">Nilai Angka:</label>
                        <input type="number" name="nilai_angka" id="nilai_angka" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="sks">SKS:</label>
                        <input type="number" name="sks" id="sks" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    @endsection
