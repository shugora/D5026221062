@extends('master2')

@section('konten')
<table class="table table-bordered">
    <thead>
        <tr>
            <th>NRP</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>IPK</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mahasiswa as $mhs)
        <tr>
            <td>{{ $mhs->nrp }}</td>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->jurusan }}</td>
            <td>{{ $mhs->ipk }}</td>
            <td>
                <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="btn btn-info">Edit</a>
                <a href="{{ route('mahasiswa.delete', $mhs->id) }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">Tambah</a>

@endsection
