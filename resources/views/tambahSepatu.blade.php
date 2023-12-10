@extends('master2')
@section('judul_halaman','Tambah Sepatu')
@section('title','Tambah Sepatu')
@section('konten')

<h3>Data Sepatu</h3>

<a href="/sepatu" class="btn btn-primary"> Kembali</a>

<br/>
<br/>

<form action="/sepatu/store" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="merk" class="col-sm-2 control-label">Merk</label>
        <div class="col-sm-10">
            <input name="merk" type="text" class="form-control" id="merk" placeholder="Masukkan Merk Sepatu">
        </div>
    </div>
    <div class="form-group">
        <label for="stock" class="col-sm-2 control-label">Stock</label>
        <div class="col-sm-10">
            <input name="stock" type="number" class="form-control" id="stock" placeholder="Masukkan Jumlah Stock">
        </div>
    </div>
    <div class="form-group">
        <label for="tersedia" class="col-sm-2 control-label">Tersedia</label>
        <div class="col-sm-10">
            <textarea name="tersedia" class="form-control" id="tersedia" placeholder="Masukkan Ketersediaan"></textarea>
        </div>
    </div>
    <input type="submit" value="Simpan Data" class="btn btn-success">
</form>
@endsection
