@extends('master2')
@section('title', 'Database Sepatu')

    @section('judul_halaman')

		<h3>Data Sepatu</h3>

	<a href="/sepatu/tambah"> + Tambah Sepatu Baru</a>

	<br/>
	<br/>
    @endsection
    @section('konten')
    <p>Cari Data Sepatu :</p>
	<form action="/sepatu/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari sepatu berdasarkan kode ..." value="{{ old('cari') }}">
		<input type="submit" value="CARI" class="btn btn-primary">
	</form>
	<table class="table table-striped table-hover">

		<tr>
			<th>Kode Sepatu</th>
			<th>Merk</th>
			<th>Stock</th>
			<th>Tersedia</th>

		</tr>
		@foreach($sepatu as $s)
		<tr>
			<td>{{ $s->kodesepatu }}</td>
			<td>{{ $s->merksepatu }}</td>
            <td>{{ $s->stocksepatu }}</td>
			<td
            @if ($s->tersedia = 'y')
                class="bg-success text-white"
            @elseif ($s->tersedia = 'n')
                class="bg-warning text-danger"
            @endif
            >{{ $s->tersedia }}</td>
			<td>
				<a href="/sepatu/view/{{ $s->kodesepatu }}" class="btn btn-success">View </a>
                |
                <a href="/sepatu/edit/{{ $s->kodesepatu }}" class="btn btn-warning">Edit </a>
				|
				<a href="/sepatu/hapus/{{ $s->kodesepatu }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{$sepatu -> links()}}

    @endsection
