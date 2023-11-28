@extends('master2')
@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>
    <div class='row'>
        <div class='col-6 bg-primary'>
        </div>
	    @foreach($pegawai as $p)
	    <form method="get" class='col-6'>
        <div class="form-group">
            <label for="nama" class="col-sm-2 control-label">Nama</label>
            <div class="col">
                <input name="nama" type="text" class="form-control w-100" id="nama" value="{{ $p->pegawai_nama }}" required="required" disabled>
            </div>
        </div>

        <div class="form-group">
            <label for="jabatan" class="col-sm-2 control-label">Jabatan</label>
            <div class="col">
                <input name="jabatan" type="text" class="form-control w-100" id="jabatan" value="{{ $p->pegawai_jabatan }}" required="required" disabled>
            </div>
        </div>

        <div class="form-group">
            <label for="umur" class="col-sm-2 control-label">Umur</label>
            <div class="col">
                <input name="umur" type="text" class="form-control w-100" id="umur" value="{{ $p->pegawai_umur }}" required="required" disabled>
            </div>
        </div>

        <div class="form-group">
            <label for="alamat" class="col-sm-2 control-label">Alamat</label>
            <div class="col">
                <textarea name="alamat"  class="form-control w-100" id="alamat" required="required" disabled>{{ $p->pegawai_alamat }}</textarea>
            </div>
        </div>

		{{-- <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/> --}}
		{{-- Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/> --}}
        <a href="/pegawai" class='form-control btn btn-primary '> Ok</a>
	    </form>

	    @endforeach
    </div>
        {{-- Nama <input type="text" name="nama" required="required"> <br/> --}}
		{{-- Jabatan <input type="text" name="jabatan" required="required"> <br/> --}}
		{{-- Umur <input type="number" name="umur" required="required"> <br/> --}}
		{{-- Alamat <textarea name="alamat" required="required"></textarea> <br/> --}}
@endsection
