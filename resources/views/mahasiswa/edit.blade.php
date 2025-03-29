<h2>Edit Mahasiswa</h2>
<form action="{{ route('mahasiswa.store', $data->id) }}" method="POST">
    @csrf
    @method('PUT')  
    Nama: <input type="text" name="name"value="{{ $data->name }}"><br>
    NIM: <input type="text" name="nim"value="{{ $data->nim }}"><br>
    Prodi: <input type="text" name="prodi"value="{{ $data->prodi }}"><br>
    <button type="submit">Simpan</button>
</form>

