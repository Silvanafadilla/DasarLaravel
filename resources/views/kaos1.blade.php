<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Daftar Kaos</center>
    @foreach($data as $value)
    Code Kaos : {{ $value->code_kaos }}<br>
    Merk Kaos : {{ $value->merk_kaos }}<br>
    Warna Kaos : {{ $value->warna_kaos }}<br>
    Size Kaos : {{ $value->size_kaos }}<br>
    Bahan Kaos : {{ $value->bahan_kaos }}<br>
    Harga Kaos : {{ $value->harga_kaos }}<br>
    Jenis Kaos : {{ $value->jenis_kaos }}<br>
    <hr>
    @endforeach
</body>
</html>