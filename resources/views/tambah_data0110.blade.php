<form action="{{ route('dokter.pasien') }}" method="post">
    @csrf
    id: <input type="text" name="id">
    nama: <input type="text" name=nama>
    jabatan: <input type="text" name="jabatan">
    <button type="submit">Simpan</button>

</form>