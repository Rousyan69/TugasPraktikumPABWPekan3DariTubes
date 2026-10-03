@extends('layouts.app')

@section('title', 'Daftar Pengaduan Warga')

@section('content')
    <h2>Daftar Pengaduan Warga SmartResident</h2>

    @forelse($laporanList as $laporan)
        @include('partials.laporan-card', ['laporan' => $laporan])
    @empty
        <p>Belum ada pengaduan warga yang terdaftar dalam sistem.</p>
    @endforelse
@endsection