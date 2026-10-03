    @extends('layouts.app')

    @section('title', 'Form Laporan Warga')

    @section('content')
        <h2>Form Layanan Pengaduan Warga</h2>
        <form action="{{ route('kiosk.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_warga">Nama Lengkap Warga:</label>
                <input type="text" id="nama_warga" name="nama_warga" required>
            </div>

            <div class="form-group">
                <label for="judul_laporan">Judul Laporan / Pengaduan:</label>
                <input type="text" id="judul_laporan" name="judul_laporan" required>
            </div>

            <div class="form-group">
                <label for="kategori">Kategori Pengaduan:</label>
                <select id="kategori" name="kategori" required>
                    <option value="Fasilitas Umum">Fasilitas Umum</option>
                    <option value="Kebersihan">Kebersihan & Lingkungan</option>
                    <option value="Infrastruktur">Infrastruktur & Jalan</option>
                    <option value="Keamanan">Keamanan & Ketertiban</option>
                </select>
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi Detail Kejadian:</label>
                <textarea id="deskripsi" name="deskripsi" rows="4" required></textarea>
            </div>

            <input type="hidden" name="status" value="Pending">

            <button type="submit" class="btn">Kirimkan Pengaduan</button>
        </form>
    @endsection