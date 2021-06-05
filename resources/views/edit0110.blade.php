<form action="{{ url('dokter/' . $dokter->id) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="patch">
    id: <input type="text" name="id"> value="{{ $dokter->nama_dokter }}">
    nama: <input type="text" name=nama>
    jabatan: <input type="text" name="jabatan">
    <button type="submit">Simpan</button>

</form>