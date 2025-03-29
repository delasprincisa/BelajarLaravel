<h2>Tambah Mahasiswa</h2>
<form action="{{ route('mahasiswa.store') }}" method="POST">
    @csrf
    Nama: <input type="text" name="name"><br>
    NIM: <input type="text" name="nim"><br>
    Prodi: <input type="text" name="prodi"><br>
    <button type="submit">Simpan</button>
</form>