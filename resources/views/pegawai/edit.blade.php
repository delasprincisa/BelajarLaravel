<h2>Edit Pegawai</h2>
<form action="{{ route('pegawai.update', $data->id) }}" method="POST">
    @csrf
    @method('PUT')
    Nama: <input type="text" name="name" value="{{ $data->name }}"><br>
    NIP: <input type="text" name="nip" value="{{ $data->nip }}"><br>
    <button type="submit">Update</button>
</form>