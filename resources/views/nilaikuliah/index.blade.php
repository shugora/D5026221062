@extends('master2')
@section('title', 'Database Sepatu')

    @section('judul_halaman')

		<h3>Data Nilai</h3>

	<br/>
	<br/>
    @endsection
    @section('konten')
    <div

    class="container">


    <div

    class="row">


    <div

    class="col-md-12">


    <table

    class="table table-bordered">


    <thead>


    <tr>


    <th>ID</th>
                            <th>NRP</th>
                            <th>Nilai Angka</th>
                            <th>SKS</th>
                            <th>Nilai Huruf</th>
                            <th>Bobot</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($nilaikuliahs as $nilaikuliah)
                        <tr>
                            <td>{{ $nilaikuliah->id }}</td>
                            <td>{{ $nilaikuliah->nrp }}</td>
                            <td>{{ $nilaikuliah->nilai_angka }}</td>
                            <td>{{ $nilaikuliah->sks }}</td>
                            <td>{{ $nilaikuliah->getNilaiHuruf() }}</td>
                            <td>{{ $nilaikuliah->getBobot() }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <a href="{{ route('nilaikuliah.create') }}" class="btn btn-primary">Tambah Data</a>
            </div>
        </div>
    </div>
    @endsection
