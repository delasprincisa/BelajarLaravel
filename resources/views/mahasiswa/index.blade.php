@extends('layouts.app')

@section('title', 'Data Mahasiswa')

@section('content')
<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1>Manajemen Data Mahasiswa</h1>
        <p>Kelola data Mahasiswa dengan mudah dan efisien.</p>
        <a href="{{ route('mahasiswa.create') }}" class="btn">+ Tambah Mahasiswa</a>
    </div>
</section>
<!-- Kontainer Data mahasiswa -->
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
                @foreach ($data as $mahasiswa)
                    <tr>
                        <td>{{ $mahasiswa->name }}</td>
                        <td>{{ $mahasiswa->nim }}</td>
                        <td>{{ $mahasiswa->prodi }}</td>
                        <td class="action-buttons">
                            <a href="{{ route('mahasiswa.show', $mahasiswa->id) }}" class="btn">Lihat</a>
                            <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-edit">Edit</a>
                            <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" class="delete-form" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
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