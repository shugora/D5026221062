@extends('master2')
@section('konten')

	<h3>Data Sepatu</h3>

	<a href="/sepatu" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>
    <div class='row'>
        <div class='col-6 bg-primary'>
        </div>
	    @foreach($sepatu as $s)
	    <form method="get" class='col-6'>
        <div class="form-group">
            <label for="nama" class="col-sm-2 control-label">Merk</label>
            <div class="col">
                <input name="nama" type="text" class="form-control w-100" id="nama" value="{{ $s->merksepatu }}" required="required" disabled>
            </div>
        </div>

        <div class="form-group">
            <label for="jabatan" class="col-sm-2 control-label">Kode</label>
            <div class="col">
                <input name="jabatan" type="text" class="form-control w-100" id="jabatan" value="{{ $s->kodesepatu }}" required="required" disabled>
            </div>
        </div>

        <div class="form-group">
            <label for="umur" class="col-sm-2 control-label">Stock</label>
            <div class="col">
                <input name="umur" type="text" class="form-control w-100" id="umur" value="{{ $s->stocksepatu }}" required="required" disabled>
            </div>
        </div>

        <div class="form-group">
            <label for="alamat" class="col-sm-2 control-label">Tersedia? y/n</label>
            <div class="col">
                <textarea name="alamat"  class="form-control w-100" id="alamat" required="required" disabled>{{ $s->tersedia }}</textarea>
            </div>
        </div>


        <a href="/sepatu" class='form-control btn btn-primary '> Ok</a>
	    </form>

	    @endforeach
    </div>

@endsection
