@extends('layouts.app')

@section('title', 'Tambah Mahasiswa')

@section('content')
<div class="form-container">
    <h2 class="form-title">Tambah Mahasiswa</h2>
    <form action="{{ route('mahasiswa.store') }}" method="POST" class="form">
        @csrf
        <div class="form-group">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required class="input-field">
        </div>
        <div class="form-group">
            <label for="nip">NIM:</label>
            <input type="text" id="nim" name="nim" required class="input-field">
        </div>
        <div class="form-group">
            <label for="nip">Prodi:</label>
            <input type="text" id="prodi" name="prodi" required class="input-field">
        </div>
        <button type="submit" class="btn">Simpan</button>
    </form>
</div>
@endsection
