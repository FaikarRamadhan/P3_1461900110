<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tambah Data</title>
</head>
<body>
  <form action="{{route('dokter.store')}}" method="post">
    @csrf
    nama : <input type="text" name="nama">
    jabatan : <input type="text" nama="jabatan">
    <button type="submit">Simpan</button>
  </form>
</body>
</html>