<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | SmartResident Kiosk System</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 0; padding: 0; background-color: #eef2f7; color: #333; }
        header { background-color: #1e293b; color: white; padding: 20px; text-align: center; }
        nav { background-color: #0f172a; padding: 12px; text-align: center; }
        nav a { color: #f8fafc; margin: 0 15px; text-decoration: none; font-weight: 600; }
        nav a:hover { color: #38bdf8; }
        main { max-width: 850px; margin: 30px auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }
        footer { text-align: center; padding: 15px; background: #cbd5e1; margin-top: 40px; font-size: 14px; color: #475569; }
        .form-group { margin-bottom: 18px; }
        .form-group label { display: block; margin-bottom: 6px; font-weight: bold; }
        .form-group input, .form-group select, .form-group textarea { width: 100%; padding: 10px; box-sizing: border-box; border: 1px solid #cbd5e1; border-radius: 6px; }
        .btn { background-color: #2563eb; color: white; padding: 10px 20px; border: none; border-radius: 6px; cursor: pointer; font-weight: bold; }
        .btn:hover { background-color: #1d4ed8; }
        .card { border-left: 5px solid #2563eb; background: #f8fafc; padding: 18px; margin-bottom: 15px; border-radius: 6px; border-top: 1px solid #e2e8f0; border-right: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0; }
        .badge { padding: 4px 10px; border-radius: 12px; color: white; font-weight: bold; font-size: 12px; display: inline-block; }
        .badge-pending { background-color: #ef4444; }
        .badge-proses { background-color: #f59e0b; }
        .badge-selesai { background-color: #10b981; }
    </style>
</head>
<body>
    <header>
        <h1>SmartResident - Anjungan Warga (Kiosk)</h1>
        <p>Layanan Pengaduan & Pelaporan Warga Mandiri</p>
    </header>

    <nav>
        <a href="{{ route('kiosk.create') }}">Buat Laporan Warga</a>
        <a href="{{ route('kiosk.index') }}">Daftar Pengaduan Masuk</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 SmartResident System - Tugas Akhir Pemrograman Web Semester 2</p>
    </footer>
</body>
</html>