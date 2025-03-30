@extends('layouts.app')

@section('title', 'Edit Mahasiswa')

@section('content')
<div class="form-container">
    <h2 class="form-title">Edit Mahasiswa</h2>
    <form action="{{ route('mahasiswa.update', $data->id) }}" method="POST">
        @csrf @method('PUT')
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" value="{{ $data->name }}" required><br>

        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" value="{{ $data->nim }}" required><br>

        <label for="prodi">Prodi:</label>
        <input type="text" id="prodi" name="prodi" value="{{ $data->prodi }}" required><br>

        <button type="submit" class="btn">Update</button>
    </form>
</div>
@endsection
