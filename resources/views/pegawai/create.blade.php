@extends('layouts.app')

@section('title', 'Tambah Pegawai')

@section('content')
<div class="form-container">
    <h2 class="form-title">Tambah Pegawai</h2>
    <form action="{{ route('pegawai.store') }}" method="POST" class="form">
        @csrf
        <div class="form-group">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required class="input-field">
        </div>
        <div class="form-group">
            <label for="nip">NIP:</label>
            <input type="text" id="nip" name="nip" required class="input-field">
        </div>
        <button type="submit" class="btn">Simpan</button>
    </form>
</div>
@endsection
