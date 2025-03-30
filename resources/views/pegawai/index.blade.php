@extends('layouts.app')

@section('title', 'Data Pegawai')

@section('content')
<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1>Manajemen Data Pegawai</h1>
        <p>Kelola data pegawai dengan mudah dan efisien.</p>
        <a href="{{ route('pegawai.create') }}" class="btn">+ Tambah Pegawai</a>
    </div>
</section>

<!-- Kontainer Data Pegawai -->
<div class="container">
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $pegawai)
                    <tr>
                        <td>{{ $pegawai->name }}</td>
                        <td>{{ $pegawai->nip }}</td>
                        <td class="action-buttons">
                            <a href="{{ route('pegawai.show', $pegawai->id) }}" class="btn">Lihat</a>
                            <a href="{{ route('pegawai.edit', $pegawai->id) }}" class="btn btn-edit">Edit</a>
                            <form action="{{ route('pegawai.destroy', $pegawai->id) }}" method="POST" class="delete-form" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-delete">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection