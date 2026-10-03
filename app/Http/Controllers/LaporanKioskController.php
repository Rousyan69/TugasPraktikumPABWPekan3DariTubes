<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanKioskController extends Controller
{
    // Menampilkan Form Laporan
    public function create()
    {
        return view('kiosk.create');
    }

    // Memproses Simpan Laporan
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_warga' => 'required|string|max:255',
            'judul_laporan' => 'required|string|max:255',
            'kategori' => 'required|string',
            'deskripsi' => 'required|string',
            'status' => 'required|string',
        ]);

        return view('kiosk.confirmation', ['laporan' => $validatedData]);
    }

    // Menampilkan Daftar Laporan Warga (Data Dummy SmartResident)
    public function index()
    {
        $laporanList = [
            [
                'nama_warga' => 'Ahmad Subagja',
                'judul_laporan' => 'Lampu Jalan Padam di RT 03',
                'kategori' => 'Fasilitas Umum',
                'deskripsi' => 'Lampu penerangan jalan utama mati total sejak 2 hari lalu.',
                'status' => 'Pending'
            ],
            [
                'nama_warga' => 'Siti Nurhaliza',
                'judul_laporan' => 'Penumpukan Sampah',
                'kategori' => 'Kebersihan',
                'deskripsi' => 'Bak sampah di depan pos ronda sudah penuh belum diangkut.',
                'status' => 'Proses'
            ],
            [
                'nama_warga' => 'Budi Pratama',
                'judul_laporan' => 'Saluran Air Mampet',
                'kategori' => 'Infrastruktur',
                'deskripsi' => 'Got tersumbat sampah plastik berpotensi meluap saat hujan.',
                'status' => 'Selesai'
            ]
        ];

        return view('kiosk.index', compact('laporanList'));
    }
}