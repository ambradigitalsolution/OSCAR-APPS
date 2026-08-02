<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk - Seller Center</title>
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
        .btn-outline-white {
            background: transparent;
            color: #fff;
            border-color: #fff;
        }
        .btn-outline-white:hover {
            background: rgba(255,255,255,0.1);
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
        }

        /* SIDEBAR (TOC) */
        .toc {
            width: 220px;
            flex-shrink: 0;
            position: sticky;
            top: 88px;
        }
        .toc-title {
            font-size: 14px;
            font-weight: 700;
            color: var(--tk-text);
            margin-bottom: 12px;
        }
        .toc-list {
            list-style: none;
        }
        .toc-item {
            display: block;
            padding: 8px 12px;
            font-size: 13px;
            font-weight: 600;
            color: var(--tk-text-sec);
            text-decoration: none;
            border-radius: 6px;
            transition: all 0.2s;
            border-left: 3px solid transparent;
        }
        .toc-item:hover {
            color: var(--tk-green);
            background: rgba(0,170,91,0.05);
        }
        .toc-item.active {
            color: var(--tk-green);
            border-left-color: var(--tk-green);
            background: rgba(0,170,91,0.08);
        }

        /* MAIN FORM */
        .form-main {
            flex: 1;
            min-width: 0;
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
        .form-label span.req {
            color: var(--tk-danger);
            margin-left: 2px;
        }
        .form-hint {
            font-size: 12px;
            color: var(--tk-text-sec);
            margin-top: 6px;
        }
        
        .form-input, .form-select {
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
        .form-input:focus, .form-select:focus {
            border-color: var(--tk-green);
            box-shadow: 0 0 0 3px rgba(0,170,91,0.1);
        }
        .input-group {
            display: flex;
            align-items: center;
        }
        .input-group-text {
            padding: 10px 14px;
            background: var(--tk-bg);
            border: 1px solid var(--tk-border);
            border-right: none;
            border-radius: 8px 0 0 8px;
            font-size: 14px;
            color: var(--tk-text-sec);
        }
        .input-group .form-input {
            border-radius: 0 8px 8px 0;
            flex: 1;
        }

        /* Foto Uploader */
        .photo-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            padding-bottom: 8px;
        }
        .photo-box {
            width: 120px;
            height: 120px;
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
            flex-shrink: 0;
            position: relative;
        }
        .photo-box:hover {
            border-color: var(--tk-green);
            color: var(--tk-green);
            background: rgba(0,170,91,0.02);
        }
        .photo-box svg {
            width: 28px;
            height: 28px;
            margin-bottom: 8px;
        }
        .photo-box span {
            font-size: 12px;
            font-weight: 600;
        }
        .photo-box.main {
            border-style: solid;
            border-color: var(--tk-green);
        }
        .photo-box.main::after {
            content: 'Foto Utama';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: var(--tk-green);
            color: #fff;
            font-size: 10px;
            text-align: center;
            padding: 3px 0;
            border-radius: 0 0 6px 6px;
            font-weight: 700;
        }
        .photo-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 6px;
        }

        /* Rich Text Toolbar Mockup */
        .rt-toolbar {
            border: 1px solid var(--tk-border);
            border-bottom: none;
            border-radius: 8px 8px 0 0;
            background: #fafbfc;
            padding: 8px 12px;
            display: flex;
            gap: 12px;
            align-items: center;
        }
        .rt-icon {
            color: var(--tk-text-sec);
            cursor: pointer;
        }
        .rt-icon:hover { color: var(--tk-text); }
        .rt-area {
            border: 1px solid var(--tk-border);
            border-radius: 0 0 8px 8px;
            min-height: 200px;
            padding: 16px;
            font-size: 14px;
            color: var(--tk-text);
            outline: none;
        }
        .rt-area:focus {
            border-color: var(--tk-green);
        }

        /* Variant Table Mockup */
        .v-table-wrapper {
            border: 1px solid var(--tk-border);
            border-radius: 8px;
            overflow: hidden;
            margin-top: 16px;
        }
        .v-table {
            width: 100%;
            border-collapse: collapse;
        }
        .v-table th {
            background: #fafbfc;
            padding: 12px 16px;
            text-align: left;
            font-size: 12px;
            font-weight: 700;
            color: var(--tk-text-sec);
            border-bottom: 1px solid var(--tk-border);
        }
        .v-table td {
            padding: 12px 16px;
            border-bottom: 1px solid var(--tk-border);
            vertical-align: middle;
        }
        .v-table tr:last-child td {
            border-bottom: none;
        }
        .v-img {
            width: 40px;
            height: 40px;
            border-radius: 4px;
            border: 1px solid var(--tk-border);
            object-fit: cover;
        }

        /* Checkbox & Switch */
        .cb-label {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            color: var(--tk-text);
            cursor: pointer;
        }
        .cb {
            width: 18px;
            height: 18px;
            accent-color: var(--tk-green);
        }
        
        .switch {
            position: relative;
            display: inline-block;
            width: 36px;
            height: 20px;
        }
        .switch input { opacity: 0; width: 0; height: 0; }
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0; left: 0; right: 0; bottom: 0;
            background-color: #ccc;
            transition: .2s;
            border-radius: 34px;
        }
        .slider:before {
            position: absolute;
            content: "";
            height: 14px;
            width: 14px;
            left: 3px;
            bottom: 3px;
            background-color: white;
            transition: .2s;
            border-radius: 50%;
        }
        input:checked + .slider {
            background-color: var(--tk-green);
        }
        input:checked + .slider:before {
            transform: translateX(16px);
        }

        /* Responsive */
        @media (max-width: 992px) {
            .container { flex-direction: column; margin-top: 80px; }
            .toc { display: none; } /* Hide TOC on mobile */
            .form-main { width: 100%; }
            .v-table-wrapper { overflow-x: auto; }
        }
        @media (max-width: 600px) {
            .header { padding: 0 16px; }
            .container { padding: 0 16px; gap: 16px; }
            .card-header { padding: 16px; font-size: 16px; }
            .card-body { padding: 16px; }
            .btn { padding: 8px 12px; font-size: 13px; }
        }
    </style>
</head>
<body>

    <!-- HEADER -->
    <header class="header">
        <div class="header-left">
            <a href="/dashboard?role=<?php echo e(request('role') ?? 'owner'); ?>" class="back-btn">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M19 12H5M12 19l-7-7 7-7" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
            <div class="page-title">Tambah Produk</div>
        </div>
        <div class="header-right">
            <a href="#" class="btn btn-outline-white">Simpan & Tambah Baru</a>
            <a href="/dashboard?role=<?php echo e(request('role') ?? 'owner'); ?>" class="btn btn-white">Simpan</a>
        </div>
    </header>

    <div class="container">
        <!-- SIDEBAR (TOC) -->
        <aside class="toc">
            <div class="toc-title">Daftar Isi</div>
            <ul class="toc-list">
                <li><a href="#info-dasar" class="toc-item active">Informasi Dasar</a></li>
                <li><a href="#detail-produk" class="toc-item">Detail Produk</a></li>
                <li><a href="#info-penjualan" class="toc-item">Info Penjualan</a></li>
                <li><a href="#pengiriman" class="toc-item">Pengiriman</a></li>
            </ul>
        </aside>

        <!-- MAIN FORM -->
        <main class="form-main">
            
            <!-- 1. INFORMASI DASAR -->
            <div class="card" id="info-dasar">
                <div class="card-header">Informasi Dasar</div>
                <div class="card-body">
                    
                    <div class="form-group">
                        <label class="form-label">Foto Produk <span class="req">*</span></label>
                        <div class="form-hint" style="margin-bottom:12px;">Format gambar .jpg .jpeg .png dan ukuran minimum 300 x 300px (Untuk gambar optimal gunakan ukuran minimum 700 x 700px).</div>
                        
                        <div class="photo-grid">
                            <div class="photo-box main">
                                <img src="https://picsum.photos/seed/p1/300/300" alt="Main Foto">
                            </div>
                            <div class="photo-box">
                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                                <span>Foto 2</span>
                            </div>
                            <div class="photo-box">
                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                                <span>Foto 3</span>
                            </div>
                            <div class="photo-box">
                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                                <span>Foto 4</span>
                            </div>
                            <div class="photo-box">
                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                                <span>Foto 5</span>
                            </div>
                            <div class="photo-box">
                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                                <span>Foto 6</span>
                            </div>
                            <div class="photo-box">
                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                                <span>Foto 7</span>
                            </div>
                            <div class="photo-box">
                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                                <span>Foto 8</span>
                            </div>
                            <div class="photo-box">
                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                                <span>Foto 9</span>
                            </div>
                            <div class="photo-box">
                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                                <span>Foto 10</span>
                            </div>
                            <div class="photo-box">
                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                                <span>Foto 11</span>
                            </div>
                            <div class="photo-box">
                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                                <span>Foto 12</span>
                            </div>
                            <div class="photo-box">
                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                                <span>Foto 13</span>
                            </div>
                            <div class="photo-box">
                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                                <span>Foto 14</span>
                            </div>
                            <div class="photo-box">
                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                                <span>Foto 15</span>
                            </div>
                            <div class="photo-box">
                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                                <span>Foto 16</span>
                            </div>
                            <div class="photo-box">
                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                                <span>Foto 17</span>
                            </div>
                            <div class="photo-box">
                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                                <span>Foto 18</span>
                            </div>
                            <div class="photo-box">
                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                                <span>Foto 19</span>
                            </div>
                            <div class="photo-box">
                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                                <span>Foto 20</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Nama Produk <span class="req">*</span></label>
                        <input type="text" class="form-input" placeholder="Contoh: Sepatu Sneakers Pria Hitam 42" value="Sprei anti air waterproof anti ompol polos fra...">
                        <div class="form-hint">Nama produk min. 5 karakter, maks. 70 karakter. Disarankan mengandung merek, tipe, dan warna.</div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Kategori <span class="req">*</span></label>
                        <select class="form-select">
                            <option>Pilih Kategori</option>
                            <option selected>Rumah Tangga > Kamar Tidur > Sprei & Bed Cover</option>
                            <option>Elektronik</option>
                            <option>Pakaian</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Etalase</label>
                        <select class="form-select">
                            <option>Pilih Etalase</option>
                            <option selected>SPREI</option>
                            <option>PROMO</option>
                        </select>
                    </div>

                </div>
            </div>

            <!-- 2. DETAIL PRODUK -->
            <div class="card" id="detail-produk">
                <div class="card-header">Detail Produk</div>
                <div class="card-body">
                    
                    <div class="form-group">
                        <label class="form-label">Kondisi <span class="req">*</span></label>
                        <div style="display:flex;gap:24px;margin-top:10px;">
                            <label class="cb-label">
                                <input type="radio" name="kondisi" class="cb" checked> Baru
                            </label>
                            <label class="cb-label">
                                <input type="radio" name="kondisi" class="cb"> Bekas
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Deskripsi <span class="req">*</span></label>
                        <div class="form-hint" style="margin-bottom:8px;">Pastikan deskripsi memuat spesifikasi produk.</div>
                        
                        <div class="rt-toolbar">
                            <svg class="rt-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 7V4h16v3M9 20h6M12 4v16"/></svg>
                            <svg class="rt-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 4v16a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V8l-6-6H8a2 2 0 0 0-2 2z"/></svg>
                            <span style="color:var(--tk-border);">|</span>
                            <svg class="rt-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="16"/><line x1="8" y1="12" x2="16" y2="12"/></svg>
                        </div>
                        <div class="rt-area" contenteditable="true">
                            Berikut link tambahan link ukuran spreinya:<br><br>
                            - Sprei Waterproof 180x200x20 (Kasur ukuran King)<br>
                            - Sprei Waterproof 160x200x20 (Kasur ukuran Queen)
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Video (Opsional)</label>
                        <div class="input-group">
                            <span class="input-group-text">Link URL</span>
                            <input type="text" class="form-input" placeholder="Masukkan URL video YouTube">
                        </div>
                    </div>

                </div>
            </div>

            <!-- 3. INFO PENJUALAN -->
            <div class="card" id="info-penjualan">
                <div class="card-header" style="display:flex;justify-content:space-between;align-items:center;">
                    Info Penjualan
                </div>
                <div class="card-body">
                    
                    <div class="form-group">
                        <label class="form-label">Varian Produk</label>
                        <div class="form-hint">Tambahkan varian agar pembeli dapat memilih produk yang sesuai.</div>
                        <button class="btn btn-outline-white" style="color:var(--tk-green);border-color:var(--tk-green);margin-top:12px;">+ Tambah Varian</button>
                    </div>

                    <div class="form-group">
                        <div style="font-size:14px;font-weight:700;margin-bottom:12px;">Daftar Varian</div>
                        
                        <!-- Variant Table -->
                        <div class="v-table-wrapper">
                            <table class="v-table">
                                <thead>
                                    <tr>
                                        <th>Varian</th>
                                        <th>Harga <span class="req">*</span></th>
                                        <th>Stok <span class="req">*</span></th>
                                        <th>SKU (Opsional)</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div style="display:flex;align-items:center;gap:8px;">
                                                <img src="https://picsum.photos/seed/v1/40" class="v-img">
                                                <span>Maroon</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input-group">
                                                <span class="input-group-text" style="padding:6px 10px;">Rp</span>
                                                <input type="text" class="form-input" style="padding:6px 10px;" value="145.000">
                                            </div>
                                        </td>
                                        <td>
                                            <input type="text" class="form-input" style="padding:6px 10px;width:70px;" value="12">
                                        </td>
                                        <td>
                                            <input type="text" class="form-input" style="padding:6px 10px;width:120px;" value="SP-MRN-01">
                                        </td>
                                        <td>
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div style="display:flex;align-items:center;gap:8px;">
                                                <img src="https://picsum.photos/seed/v2/40" class="v-img">
                                                <span>Navy</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input-group">
                                                <span class="input-group-text" style="padding:6px 10px;">Rp</span>
                                                <input type="text" class="form-input" style="padding:6px 10px;" value="145.000">
                                            </div>
                                        </td>
                                        <td>
                                            <input type="text" class="form-input" style="padding:6px 10px;width:70px;" value="8">
                                        </td>
                                        <td>
                                            <input type="text" class="form-input" style="padding:6px 10px;width:120px;" value="SP-NVY-01">
                                        </td>
                                        <td>
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider"></span>
                                            </label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

            <!-- 4. PENGIRIMAN -->
            <div class="card" id="pengiriman">
                <div class="card-header">Pengiriman</div>
                <div class="card-body">
                    
                    <div class="form-group">
                        <label class="form-label">Berat Produk <span class="req">*</span></label>
                        <div style="display:flex;gap:12px;max-width:300px;">
                            <select class="form-select" style="width:100px;">
                                <option>Gram</option>
                                <option selected>Kg</option>
                            </select>
                            <input type="text" class="form-input" value="1.2">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Asuransi Pengiriman <span class="req">*</span></label>
                        <div style="display:flex;gap:24px;margin-top:10px;">
                            <label class="cb-label">
                                <input type="radio" name="asuransi" class="cb"> Opsional
                            </label>
                            <label class="cb-label">
                                <input type="radio" name="asuransi" class="cb" checked> Ya
                            </label>
                        </div>
                        <div class="form-hint">Jika hilang/rusak saat pengiriman, dana akan diganti penuh.</div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Layanan Pengiriman <span class="req">*</span></label>
                        <select class="form-select">
                            <option selected>Standar (Reguler)</option>
                            <option>Kargo</option>
                            <option>Same Day</option>
                        </select>
                    </div>

                </div>
            </div>

        </main>
    </div>

    <!-- Script for sticky sidebar active state (Optional mock behavior) -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const sections = document.querySelectorAll('.card');
            const navItems = document.querySelectorAll('.toc-item');

            window.addEventListener('scroll', () => {
                let current = '';
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    if (scrollY >= sectionTop - 120) {
                        current = section.getAttribute('id');
                    }
                });

                navItems.forEach(item => {
                    item.classList.remove('active');
                    if (item.getAttribute('href').includes(current)) {
                        item.classList.add('active');
                    }
                });
            });
        });
    </script>
</body>
</html>
<?php /**PATH D:\0.PROJEK APPS !!!\OSCARAPP\resources\views/product_form.blade.php ENDPATH**/ ?>