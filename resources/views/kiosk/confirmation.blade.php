@extends('layouts.app')

@section('title', 'Konfirmasi Pengaduan')

@section('content')
    <h2>Konfirmasi Pengaduan Warga</h2>

    <x-alert type="success" message="Laporan pengaduan Anda berhasil dikirim ke sistem SmartResident!" />

    <div class="card">
        <h3>{{ $laporan['judul_laporan'] }}</h3>
        <p><strong>Pelapor:</strong> {{ $laporan['nama_warga'] }}</p>
        <p><strong>Kategori:</strong> {{ $laporan['kategori'] }}</p>
        <p><strong>Deskripsi:</strong> {{ $laporan['deskripsi'] }}</p>
        <p><strong>Status Awal:</strong> <span class="badge badge-pending">Menunggu Konfirmasi</span></p>
    </div>

    <a href="{{ route('kiosk.index') }}" class="btn" style="text-decoration: none; display: inline-block;">Lihat Semua Pengaduan</a>
@endsection