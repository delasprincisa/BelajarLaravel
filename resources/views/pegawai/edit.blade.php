@extends('layouts.app')

@section('title', 'Edit Pegawai')

@section('content')
<div class="form-container">
    <h2 class="form-title">Edit Pegawai</h2>
    <form action="{{ route('pegawai.update', $data->id) }}" method="POST">
        @csrf @method('PUT')
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" value="{{ $data->name }}" required>

        <label for="nip">NIP:</label>
        <input type="text" id="nip" name="nip" value="{{ $data->nip }}" required>

        <button type="submit" class="btn">Update</button>
    </form>
</div>
@endsection
