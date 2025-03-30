@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')
<div class="detail-container">
    <h2 class="detail-title">Detail Mahasiswa</h2>
    <div class="detail-info">
        <p><strong>Nama:</strong> {{ $data->name }}</p>
        <p><strong>NIM:</strong> {{ $data->nim }}</p>
        <p><strong>Prodi:</strong> {{ $data->prodi }}</p>
    </div>
    <a href="{{ route('mahasiswa.index') }}" class="btn">Kembali</a>
</div>
@endsection

