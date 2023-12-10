<!DOCTYPE html>
<html>
<head>
    <title>Edit Sepatu</title>
</head>
<body>


    <h3>Edit Sepatu</h3>

    <a href="/sepatu"> Kembali</a>

    <br/>
    <br/>

    @foreach($sepatu as $s)
    <form action="/sepatu/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $s->kodesepatu }}"> <br/>
        Kode <input type="text" required="required" name="kodesepatu" value="{{ $s->kodesepatu }}"> <br/>
        Merk <input type="text" required="required" name="merksepatu" value="{{ $s->merksepatu }}"> <br/>
        Stock <input type="number" required="required" name="stocksepatu" value="{{ $s->stocksepatu }}"> <br/>
        Tersedia <textarea required="required" name="tersedia">{{ $s->tersedia }}</textarea> <br/>
        <input type="submit" value="Simpan Data">
    </form>
    @endforeach

</body>
</html>
