@extends('layouts.app')

@section('title', 'Detail Pegawai')

@section('content')
<div class="detail-container">
    <h2 class="detail-title">Detail Pegawai</h2>
    <div class="detail-info">
        <p><strong>Nama:</strong> {{ $data->name }}</p>
        <p><strong>NIP:</strong> {{ $data->nip }}</p>
    </div>
    <a href="{{ route('pegawai.index') }}" class="btn">Kembali</a>
</div>
@endsection

