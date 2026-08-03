<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan Banner - Seller Center</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --tk-green: #00AA5B;
            --tk-green-hover: #00964e;
            --tk-white: #ffffff;
            --tk-bg: #f3f4f5;
            --tk-text: #31353B;
            --tk-text-sec: #6D7588;
            --tk-text-third: #AAB4C8;
            --tk-border: #E5E7E9;
            --tk-danger: #EF144A;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Nunito Sans', sans-serif;
        }

        body {
            background-color: var(--tk-bg);
            color: var(--tk-text);
            overflow-x: hidden;
            scrollbar-width: none;
        }
        body::-webkit-scrollbar { display: none; }

        /* HEADER */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 64px;
            background: var(--tk-green);
            color: #fff;
            display: flex;
            align-items: center;
            padding: 0 24px;
            z-index: 100;
            box-shadow: 0 1px 4px rgba(0,0,0,0.1);
        }
        .header-left {
            display: flex;
            align-items: center;
            gap: 16px;
        }
        .back-btn {
            background: rgba(255,255,255,0.2);
            border: none;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            cursor: pointer;
            text-decoration: none;
            transition: 0.2s;
        }
        .back-btn:hover { background: rgba(255,255,255,0.3); }
        .page-title {
            font-size: 18px;
            font-weight: 700;
        }
        .header-right {
            margin-left: auto;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .btn {
            padding: 8px 16px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            border: 1px solid transparent;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s;
            text-decoration: none;
        }
        .btn-white {
            background: #fff;
            color: var(--tk-green);
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .btn-white:hover {
            background: #f8f9fa;
        }

        /* CONTAINER */
        .container {
            display: flex;
            max-width: 1200px;
            margin: 88px auto 60px;
            gap: 24px;
            padding: 0 24px;
            align-items: flex-start;
            justify-content: center;
        }

        /* MAIN FORM */
        .form-main {
            width: 100%;
            max-width: 800px;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .card {
            background: var(--tk-white);
            border-radius: 12px;
            box-shadow: 0 1px 6px rgba(0,0,0,0.04);
            overflow: hidden;
            border: 1px solid var(--tk-border);
        }
        .card-header {
            padding: 20px 24px 16px;
            font-size: 18px;
            font-weight: 800;
            color: var(--tk-text);
            border-bottom: 1px solid var(--tk-border);
        }
        .card-body {
            padding: 24px;
        }

        /* Form Group */
        .form-group {
            margin-bottom: 24px;
        }
        .form-group:last-child {
            margin-bottom: 0;
        }
        .form-label {
            display: block;
            font-size: 13px;
            font-weight: 700;
            color: var(--tk-text);
            margin-bottom: 8px;
        }
        .form-hint {
            font-size: 12px;
            color: var(--tk-text-sec);
            margin-top: 6px;
        }
        
        .form-input {
            width: 100%;
            padding: 10px 14px;
            border: 1px solid var(--tk-border);
            border-radius: 8px;
            font-size: 14px;
            color: var(--tk-text);
            transition: all 0.2s;
            outline: none;
            background: #fff;
        }
        .form-input:focus {
            border-color: var(--tk-green);
            box-shadow: 0 0 0 3px rgba(0,170,91,0.1);
        }

        /* Foto Uploader */
        .photo-box {
            width: 100%;
            height: 200px;
            border: 2px dashed var(--tk-border);
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            background: #fafafa;
            color: var(--tk-text-third);
            transition: all 0.2s;
            position: relative;
            overflow: hidden;
        }
        .photo-box:hover {
            border-color: var(--tk-green);
            color: var(--tk-green);
            background: rgba(0,170,91,0.02);
        }
        .photo-box svg {
            width: 32px;
            height: 32px;
            margin-bottom: 8px;
        }
        .photo-box span {
            font-size: 14px;
            font-weight: 600;
        }
        .photo-box img {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            object-fit: contain;
            background: #e0e7ff; /* match slide 1 bg */
        }
        
        .preview-alert {
            background: #fff3cd;
            color: #856404;
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* Responsive */
        @media (max-width: 600px) {
            .header { padding: 0 12px; }
            .header-left { gap: 8px; }
            .page-title { font-size: 15px; white-space: nowrap; }
            .header-right { gap: 8px; }
            .container { padding: 0 12px; gap: 16px; margin-top: 76px; }
            .card-header { padding: 14px; font-size: 15px; }
            .card-body { padding: 14px; }
            .btn { padding: 6px 10px; font-size: 12px; white-space: nowrap; }
        }

    </style>
</head>
<body>

    <!-- HEADER -->
    <header class="header">
        <div class="header-left">
            <a href="/seller?role={{ request('role') ?? 'owner' }}" class="back-btn">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M19 12H5M12 19l-7-7 7-7" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
            <div class="page-title">Pengaturan Banner</div>
        </div>
        <div class="header-right">
            <button type="submit" form="bannerForm" class="btn btn-white">Simpan Perubahan</button>
        </div>
    </header>

    <div class="container">
        <!-- MAIN FORM -->
        <main class="form-main">
            
            @if(session('success'))
                <div style="background:#d4edda; color:#155724; padding:12px; border-radius:8px; margin-bottom:20px; font-weight:bold;">
                    {{ session('success') }}
                </div>
            @endif
            <form id="bannerForm" action="/settings/banner?role={{ request('role') ?? 'owner' }}" method="POST" enctype="multipart/form-data">
                @csrf

            <!-- 1. Banner Utama -->
            <div class="card">
                <div class="card-header">Banner Promosi Utama (Slide 1)</div>
                <div class="card-body">
                    
                    <div class="form-group">
                        <label class="form-label">Badge Label</label>
                        <input type="text" name="banners[slide_1][badge]" class="form-input" value="{{ $banners['slide_1']->badge ?? 'SYSTEM UPDATE' }}">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Judul Banner Utama (Baris 1)</label>
                        <input type="text" name="banners[slide_1][title_1]" class="form-input" value="{{ $banners['slide_1']->title_1 ?? 'ERP Dashboard' }}">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Judul Banner Utama (Baris 2 - Warna Berbeda)</label>
                        <input type="text" name="banners[slide_1][title_2]" class="form-input" value="{{ $banners['slide_1']->title_2 ?? 'Versi 2.0' }}">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Subjudul (Deskripsi)</label>
                        <input type="text" name="banners[slide_1][description]" class="form-input" value="{{ $banners['slide_1']->description ?? 'Pembaruan sistem manajemen inventaris terpadu untuk efisiensi operasional.' }}">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Gambar Banner</label>
                        <div class="form-hint" style="margin-bottom:12px;">Format gambar .png transparan. Disarankan ukuran 800 x 600px.</div>
                        <div class="photo-box">
                            <img src="{{ isset($banners['slide_1']->image) ? asset($banners['slide_1']->image) : asset('assets/server.png') }}" alt="Preview">
                            <input type="file" name="banners[slide_1][image]" style="position:absolute; bottom:10px; left:10px; z-index:10; background:white; padding:4px; border-radius:4px; font-size:11px; max-width:90%;">
                        </div>
                    </div>

                </div>
            </div>

            <!-- 2. Banner Utama 2 -->
            <div class="card">
                <div class="card-header">Banner Promosi (Slide 2)</div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label">Badge Label</label>
                        <input type="text" name="banners[slide_2][badge]" class="form-input" value="{{ $banners['slide_2']->badge ?? 'MANAJEMEN ASET' }}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Judul Banner Utama</label>
                        <input type="text" name="banners[slide_2][title_1]" class="form-input" value="{{ $banners['slide_2']->title_1 ?? 'Kontrol Penuh Semua Gudang' }}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Gambar Banner</label>
                        <div class="form-hint" style="margin-bottom:12px;">Format gambar .png transparan. Disarankan ukuran 800 x 600px.</div>
                        <div class="photo-box">
                            <img src="{{ isset($banners['slide_2']->image) ? asset($banners['slide_2']->image) : asset('assets/pc.png') }}" alt="Preview" style="background:#bbf7d0;">
                            <input type="file" name="banners[slide_2][image]" style="position:absolute; bottom:10px; left:10px; z-index:10; background:white; padding:4px; border-radius:4px; font-size:11px; max-width:90%;">
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. Banner Samping Atas -->
            <div class="card">
                <div class="card-header">Banner Samping Atas (Kotak Biru)</div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label">Badge Label</label>
                        <input type="text" name="banners[side_top][badge]" class="form-input" value="{{ $banners['side_top']->badge ?? 'ALERT' }}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Judul (Baris 1)</label>
                        <input type="text" name="banners[side_top][title_1]" class="form-input" value="{{ $banners['side_top']->title_1 ?? 'Stok' }}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Judul (Baris 2)</label>
                        <input type="text" name="banners[side_top][title_2]" class="form-input" value="{{ $banners['side_top']->title_2 ?? 'Menipis' }}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Keterangan / Subjudul</label>
                        <input type="text" name="banners[side_top][description]" class="form-input" value="{{ $banners['side_top']->description ?? '12 Barang butuh restock' }}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Gambar Banner</label>
                        <div class="form-hint" style="margin-bottom:12px;">Format gambar .png transparan. Disarankan ukuran 400 x 300px.</div>
                        <div class="photo-box" style="height: 150px;">
                            <img src="{{ isset($banners['side_top']->image) ? asset($banners['side_top']->image) : asset('assets/laptop.png') }}" alt="Preview" style="background:#e0f2fe; object-position: right bottom;">
                            <input type="file" name="banners[side_top][image]" style="position:absolute; bottom:10px; left:10px; z-index:10; background:white; padding:4px; border-radius:4px; font-size:11px; max-width:90%;">
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4. Banner Samping Bawah -->
            <div class="card">
                <div class="card-header">Banner Samping Bawah (Kotak Gelap)</div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label">Badge Label</label>
                        <input type="text" name="banners[side_bottom][badge]" class="form-input" value="{{ $banners['side_bottom']->badge ?? 'REPORT' }}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Judul (Baris 1)</label>
                        <input type="text" name="banners[side_bottom][title_1]" class="form-input" value="{{ $banners['side_bottom']->title_1 ?? 'Laporan' }}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Judul (Baris 2)</label>
                        <input type="text" name="banners[side_bottom][title_2]" class="form-input" value="{{ $banners['side_bottom']->title_2 ?? 'Bulanan' }}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Keterangan / Subjudul</label>
                        <input type="text" name="banners[side_bottom][description]" class="form-input" value="{{ $banners['side_bottom']->description ?? 'Status: Selesai' }}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Gambar Banner</label>
                        <div class="form-hint" style="margin-bottom:12px;">Format gambar .png transparan. Disarankan ukuran 400 x 300px.</div>
                        <div class="photo-box" style="height: 150px;">
                            <img src="{{ isset($banners['side_bottom']->image) ? asset($banners['side_bottom']->image) : asset('assets/infokus.png') }}" alt="Preview" style="background:#0f172a; object-position: right bottom;">
                            <input type="file" name="banners[side_bottom][image]" style="position:absolute; bottom:10px; left:10px; z-index:10; background:white; padding:4px; border-radius:4px; font-size:11px; max-width:90%;">
                        </div>
                    </div>
                </div>
            </div>

            </form>
        </main>
    </div>

    <script>
        // Form now handles file uploads natively. 
        // Photo box interactions removed to prevent conflicts with native file input click.
    </script>
</body>
</html>
