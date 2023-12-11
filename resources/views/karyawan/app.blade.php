@extends('master2')

@section('konten')

<li class="nav-item">
    <a class="nav-link" href="{{ route('karyawan.index') }}">Karyawan</a>
</li>

@if (session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@endsection
