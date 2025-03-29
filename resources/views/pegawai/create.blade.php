<h2>Tambah User</h2>
<form action="{{ route('pegawai.store') }}" method="POST">
    @csrf
    Nama: <input type="text" name="name"><br>
    Email: <input type="text" name="nip"><br>
    <button type="submit">Simpan</button>
</form>