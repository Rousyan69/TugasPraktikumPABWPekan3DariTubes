<div class="card">
    <h3>{{ $laporan['judul_laporan'] }}</h3>
    <p><strong>Pelapor:</strong> {{ $laporan['nama_warga'] }} | <strong>Kategori:</strong> {{ $laporan['kategori'] }}</p>
    <p>{{ $laporan['deskripsi'] }}</p>
    
    <p><strong>Status Penanganan:</strong> 
        @if($laporan['status'] === 'Pending')
            <span class="badge badge-pending">Menunggu Konfirmasi</span>
        @elseif($laporan['status'] === 'Proses')
            <span class="badge badge-proses">Sedang Diproses</span>
        @else
            <span class="badge badge-selesai">Selesai Ditangani</span>
        @endif
    </p>
</div>