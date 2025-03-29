<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Selamat Datang di Website Saya</h1>
        <nav>
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Tentang</a></li>
                <li><a href="#">Kontak</a></li>
                <li><a href="pegawai/create">+ Tambah User</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <section>
            <h2>Biodata</h2>
                <table border="1" cellpadding="10">
                    <tr>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($data as $pegawai)
                    <tr>
                        <td>{{ $pegawai->name }}</td>
                        <td>{{ $pegawai->nip }}</td>
                        <td>
                            <a href="{{ route('pegawai.show', $pegawai->id) }}">Show</a>
                            <a href="{{ route('pegawai.edit', $pegawai->id) }}">Edit</a>
                            <form method="POST" action="{{ route('pegawai.destroy', $pegawai->id) }}" style="display:inline" 
                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                @csrf 
                                @method('DELETE')
                                <button type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </table>
        </section>
    </main>
    
    <footer>
        <p>&copy; 2025 Delas Princia Hakim. Semua Hak Cipta Dilindungi.</p>
    </footer>
</body>
</html>
