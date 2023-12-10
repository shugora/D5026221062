@extends('master2')
@section('title', 'Database sepatu')

    @section('judul_halaman')


	<h3>Data sepatu</h3>

	<a href="/sepatu/tambah"> + Tambah sepatu Baru</a>

	<br/>
	<br/>
    @endsection
    @section('konten')
    <p>Cari Data sepatu :</p>
	<form action="/sepatu/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari sepatu berdasarkan kode ..." value="{{ old('cari') }}">
		<input type="submit" value="CARI" class="btn btn-primary">
	</form>
	<table class="table table-striped table-hover">

		<tr>
			<th>Kode</th>
			<th>Merk</th>
			<th>Stock</th>
			<th>Tersedia</th>

		</tr>
		@foreach($sepatu as $p)
		<tr>
			<td>{{ $p->kodesepatu }}</td>
			<td>{{ $p->merksepatu }}</td>
			<td
            @if ($p->stocksepatu <= 20)
                class="bg-success text-white"
            @elseif ($p->stocksepatu >= 21 && $p->stocksepatu <= 30)
                class="bg-warning text-danger"
            @elseif ($p->stocksepatu >= 31)
                class="bg-primary text-white"
            @endif
            >{{ $p->stocksepatu }}</td>
			<td>{{ $p->tersedia }}</td>
			<td>
				<a href="/sepatu/view/{{ $p->kodesepatu }}" class="btn btn-success">View </a>
                |
                <a href="/sepatu/edit/{{ $p->kodesepatu }}" class="btn btn-warning">Edit </a>
				|
				<a href="/sepatu/hapus/{{ $p->kodesepatu }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{$sepatu -> links()}}

    @endsection
