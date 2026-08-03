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
            transition: all 0.3s cubic-bezier(.4,0,.2,1);
            flex-shrink: 0;
            position: relative;
            overflow: hidden;
        }
        .photo-box:hover {
            border-color: var(--tk-green);
            color: var(--tk-green);
            background: rgba(0,170,91,0.04);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,170,91,0.12);
        }
        .photo-box.dragging {
            border-color: var(--tk-green);
            background: rgba(0,170,91,0.08);
            transform: scale(1.05);
        }
        .photo-box svg.plus-icon {
            width: 28px;
            height: 28px;
            margin-bottom: 8px;
            transition: transform 0.2s;
        }
        .photo-box:hover svg.plus-icon {
            transform: scale(1.15);
        }
        .photo-box span.photo-label {
            font-size: 12px;
            font-weight: 600;
        }
        .photo-box.has-photo {
            border-style: solid;
            border-color: var(--tk-border);
            cursor: default;
        }
        .photo-box.has-photo:hover {
            transform: none;
            box-shadow: none;
        }
        .photo-box.main.has-photo {
            border-color: var(--tk-green);
        }
        .photo-box .foto-utama-badge {
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
            z-index: 3;
        }
        .photo-box img.photo-preview {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 6px;
            position: absolute;
            top: 0;
            left: 0;
        }
        .photo-box input[type="file"] {
            display: none;
        }

        /* Delete button on photo */
        .photo-box .photo-delete-btn {
            position: absolute;
            top: 4px;
            right: 4px;
            width: 22px;
            height: 22px;
            border-radius: 50%;
            background: rgba(0,0,0,0.55);
            color: #fff;
            border: none;
            cursor: pointer;
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 5;
            transition: all 0.15s;
            padding: 0;
            line-height: 1;
        }
        .photo-box .photo-delete-btn svg {
            width: 12px;
            height: 12px;
            margin: 0;
        }
        .photo-box .photo-delete-btn:hover {
            background: var(--tk-danger);
            transform: scale(1.15);
        }
        .photo-box.has-photo .photo-delete-btn {
            display: flex;
        }

        /* Compression progress bar */
        .photo-box .compress-progress {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: rgba(0,0,0,0.1);
            z-index: 4;
            border-radius: 0 0 6px 6px;
            overflow: hidden;
        }
        .photo-box .compress-progress .bar {
            height: 100%;
            width: 0%;
            background: linear-gradient(90deg, var(--tk-green), #00d46a);
            border-radius: 0 0 6px 6px;
            transition: width 0.3s ease;
        }

        /* Compress spinner overlay */
        .photo-box .compress-overlay {
            position: absolute;
            inset: 0;
            background: rgba(255,255,255,0.85);
            display: none;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            z-index: 6;
            border-radius: 6px;
            gap: 6px;
        }
        .photo-box .compress-overlay.active {
            display: flex;
        }
        .compress-spinner {
            width: 24px;
            height: 24px;
            border: 3px solid var(--tk-border);
            border-top-color: var(--tk-green);
            border-radius: 50%;
            animation: spin 0.7s linear infinite;
        }
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        .compress-text {
            font-size: 10px;
            font-weight: 700;
            color: var(--tk-green);
        }

        /* File size badge */
        .photo-box .size-badge {
            position: absolute;
            bottom: 4px;
            left: 4px;
            background: rgba(0,0,0,0.6);
            color: #fff;
            font-size: 9px;
            font-weight: 700;
            padding: 2px 5px;
            border-radius: 4px;
            z-index: 3;
            display: none;
            backdrop-filter: blur(4px);
        }
        .photo-box.has-photo .size-badge {
            display: block;
        }
        .photo-box.main.has-photo .size-badge {
            bottom: 22px;
        }

        /* Compression toast notification */
        .compress-toast {
            position: fixed;
            bottom: 24px;
            right: 24px;
            background: #1a1a2e;
            color: #fff;
            padding: 14px 20px;
            border-radius: 12px;
            font-size: 13px;
            font-weight: 600;
            box-shadow: 0 8px 30px rgba(0,0,0,0.2);
            z-index: 999;
            display: flex;
            align-items: center;
            gap: 10px;
            transform: translateY(100px);
            opacity: 0;
            transition: all 0.4s cubic-bezier(.4,0,.2,1);
            max-width: 400px;
        }
        .compress-toast.show {
            transform: translateY(0);
            opacity: 1;
        }
        .compress-toast .toast-icon {
            width: 28px;
            height: 28px;
            background: var(--tk-green);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        .compress-toast .toast-icon svg {
            width: 14px;
            height: 14px;
            margin: 0;
        }
        .compress-toast .toast-content {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }
        .compress-toast .toast-title {
            font-weight: 700;
            font-size: 13px;
        }
        .compress-toast .toast-detail {
            font-weight: 400;
            font-size: 11px;
            color: #aaa;
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
            .header { padding: 0 12px; }
            .header-left { gap: 8px; }
            .page-title { font-size: 15px; white-space: nowrap; }
            .header-right { gap: 8px; }
            .container { padding: 0 12px; gap: 16px; margin-top: 76px; }
            .card-header { padding: 14px; font-size: 15px; }
            .card-body { padding: 14px; }
            .btn { padding: 6px 10px; font-size: 12px; white-space: nowrap; }
            .btn-outline-white { display: none; } /* Hide secondary button on mobile to save space */
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
            <div class="page-title">Tambah Produk</div>
        </div>
        <div class="header-right">
            <a href="javascript:void(0)" onclick="handleSave(true)" class="btn btn-outline-white">Simpan & Tambah Baru</a>
            <a href="javascript:void(0)" onclick="handleSave(false)" class="btn btn-white">Simpan</a>
        </div>
    </header>

    <div class="container">
        <!-- SIDEBAR (TOC) -->
        <aside class="toc">
            <div class="toc-title">Daftar Isi</div>
            <ul class="toc-list">
                <li><a href="#info-dasar" class="toc-item active">Informasi Dasar</a></li>
                <li><a href="#detail-produk" class="toc-item">Detail Produk</a></li>

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
                        <div class="form-hint" style="margin-bottom:6px;">Format gambar .jpg .jpeg .png dan ukuran minimum 300 x 300px (Untuk gambar optimal gunakan ukuran minimum 700 x 700px).</div>
                        <div class="form-hint" style="margin-bottom:12px; color: var(--tk-green); font-weight: 600;">
                            <svg style="width:13px;height:13px;vertical-align:-2px;margin-right:3px;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                            Foto otomatis di-compress oleh sistem (max 800×800px, kualitas 80%)
                        </div>
                        
                        <div class="photo-grid" id="photoGrid">
                            <!-- Photo boxes will be generated by JavaScript -->
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Nama Produk <span class="req">*</span></label>
                        <input type="text" id="productNameInput" class="form-input" placeholder="Contoh: Sepatu Sneakers Pria Hitam 42" value="{{ $product->name ?? '' }}">
                        <div class="form-hint">Nama produk min. 5 karakter, maks. 70 karakter. Disarankan mengandung merek, tipe, dan warna.</div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Kategori <span class="req">*</span></label>
                        <select class="form-select" id="productCategoryInput" onchange="toggleNewCategoryInput(this)">
                            <option {{ !isset($product) ? 'selected' : '' }} disabled hidden value="">Pilih Kategori</option>
                            <option value="Rumah Tangga" {{ (isset($product) && $product->category == 'Rumah Tangga') ? 'selected' : '' }}>Rumah Tangga</option>
                            <option value="Elektronik" {{ (isset($product) && $product->category == 'Elektronik') ? 'selected' : '' }}>Elektronik</option>
                            <option value="Pakaian" {{ (isset($product) && $product->category == 'Pakaian') ? 'selected' : '' }}>Pakaian</option>
                            <option value="Kesehatan" {{ (isset($product) && $product->category == 'Kesehatan') ? 'selected' : '' }}>Kesehatan</option>
                            <option value="Hobi & Koleksi" {{ (isset($product) && $product->category == 'Hobi & Koleksi') ? 'selected' : '' }}>Hobi & Koleksi</option>
                            @if(isset($product) && !in_array($product->category, ['Rumah Tangga', 'Elektronik', 'Pakaian', 'Kesehatan', 'Hobi & Koleksi']))
                                <option value="{{ $product->category }}" selected>{{ $product->category }}</option>
                            @endif
                            <option value="new" style="font-weight: bold; color: var(--tk-green);">+ Tambah Kategori Baru</option>
                        </select>
                        <input type="text" id="newCategoryInput" class="form-input" placeholder="Ketik nama kategori baru..." style="display: none; margin-top: 10px;">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Etalase</label>
                        <select class="form-select" id="productEtalaseInput" onchange="toggleNewEtalaseInput(this)">
                            <option {{ !isset($product) || !$product->etalase ? 'selected' : '' }} disabled hidden value="">Pilih Etalase</option>
                            @if(isset($product) && $product->etalase)
                                <option value="{{ $product->etalase }}" selected>{{ $product->etalase }}</option>
                            @endif
                            <option value="new" style="font-weight: bold; color: var(--tk-green);">+ Tambah Etalase Baru</option>
                        </select>
                        <input type="text" id="newEtalaseInput" class="form-input" placeholder="Ketik nama etalase baru..." style="display: none; margin-top: 10px;">
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
                                <input type="radio" name="kondisi" value="Baru" class="cb" {{ (!isset($product) || $product->kondisi == 'Baru') ? 'checked' : '' }}> Baru
                            </label>
                            <label class="cb-label">
                                <input type="radio" name="kondisi" value="Bekas" class="cb" {{ (isset($product) && $product->kondisi == 'Bekas') ? 'checked' : '' }}> Bekas
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Deskripsi <span class="req">*</span></label>
                        <div class="form-hint" style="margin-bottom:8px;">Pastikan deskripsi memuat spesifikasi produk.</div>
                        
                        <div class="rt-toolbar">
                            <button type="button" onclick="document.execCommand('bold',false,null)" style="background:none;border:none;cursor:pointer;font-weight:bold;font-size:16px;color:var(--tk-text-sec);padding:0 8px;font-family:serif;" title="Bold">B</button>
                            <button type="button" onclick="document.execCommand('italic',false,null)" style="background:none;border:none;cursor:pointer;font-style:italic;font-size:16px;color:var(--tk-text-sec);padding:0 8px;font-family:serif;" title="Italic">I</button>
                            <button type="button" onclick="document.execCommand('underline',false,null)" style="background:none;border:none;cursor:pointer;text-decoration:underline;font-size:16px;color:var(--tk-text-sec);padding:0 8px;font-family:serif;" title="Underline">U</button>
                            <span style="color:var(--tk-border);margin:0 4px;">|</span>
                            <button type="button" onclick="document.execCommand('insertUnorderedList',false,null)" style="background:none;border:none;cursor:pointer;color:var(--tk-text-sec);padding:0 8px;display:flex;align-items:center;" title="Bullet List">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
                            </button>
                        </div>
                        <div class="rt-area" contenteditable="true">{!! $product->description ?? '' !!}</div>
                    </div>

                    <div class="form-group" style="margin-top: 24px; max-width: 300px;">
                        <label class="form-label">Harga <span class="req">*</span></label>
                        <input type="number" id="productPriceInput" class="form-input" placeholder="0" value="{{ $product->price ?? '' }}">
                    </div>

                    <div class="form-group" style="margin-top: 24px; max-width: 300px;">
                        <label class="form-label">Stok <span class="req">*</span></label>
                        <input type="number" id="productStockInput" class="form-input" placeholder="0" value="{{ $product->stock ?? '' }}">
                    </div>

                </div>
            </div>



        </main>
    </div>

    <!-- Script for sticky sidebar active state (Optional mock behavior) -->
    <!-- Toast notification for compression result -->
    <div class="compress-toast" id="compressToast">
        <div class="toast-icon">
            <svg fill="none" stroke="#fff" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
        </div>
        <div class="toast-content">
            <div class="toast-title" id="toastTitle">Foto berhasil di-compress!</div>
            <div class="toast-detail" id="toastDetail">1.2 MB → 85 KB (hemat 93%)</div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            
            // Load custom categories and etalase from local storage
            const customCats = JSON.parse(localStorage.getItem('customCategories') || '[]');
            const catSelect = document.getElementById('productCategoryInput');
            if (customCats.length > 0 && catSelect) {
                const newOptionCat = catSelect.querySelector('option[value="new"]');
                customCats.forEach(cat => {
                    const opt = document.createElement('option');
                    opt.value = cat;
                    opt.textContent = cat;
                    catSelect.insertBefore(opt, newOptionCat);
                });
            }

            const customEtas = JSON.parse(localStorage.getItem('customEtalases') || '[]');
            const etaSelect = document.getElementById('productEtalaseInput');
            if (customEtas.length > 0 && etaSelect) {
                const newOptionEta = etaSelect.querySelector('option[value="new"]');
                customEtas.forEach(eta => {
                    const opt = document.createElement('option');
                    opt.value = eta;
                    opt.textContent = eta;
                    etaSelect.insertBefore(opt, newOptionEta);
                });
            }

            // ========== TABLE OF CONTENTS SCROLL SPY ==========
            const sections = document.querySelectorAll('.card');
            const navItems = document.querySelectorAll('.toc-item');

            navItems.forEach(item => {
                item.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href').substring(1);
                    const targetEl = document.getElementById(targetId);
                    if (targetEl) {
                        window.scrollTo({
                            top: targetEl.offsetTop - 88,
                            behavior: 'smooth'
                        });
                    }
                });
            });

            window.addEventListener('scroll', () => {
                let current = '';
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    if (scrollY >= sectionTop - 150) {
                        current = section.getAttribute('id');
                    }
                });
                if ((window.innerHeight + Math.ceil(window.pageYOffset)) >= document.body.offsetHeight - 2) {
                    current = sections[sections.length - 1].getAttribute('id');
                }
                navItems.forEach(item => {
                    item.classList.remove('active');
                    if (current && item.getAttribute('href') === '#' + current) {
                        item.classList.add('active');
                    }
                });
            });

            // ========== TOGGLE INFO PENJUALAN ==========
            const toggleSalesInfo = document.getElementById('toggle-sales-info');
            const salesFieldset = document.getElementById('sales-fieldset');
            if (toggleSalesInfo) {
                toggleSalesInfo.addEventListener('change', function() {
                    if (salesFieldset) salesFieldset.disabled = !this.checked;
                });
            }

            // ========== AUTO COMPRESS PHOTO UPLOAD SYSTEM ==========
            const TOTAL_SLOTS = 20;
            const MAX_WIDTH = 800;
            const MAX_HEIGHT = 800;
            const QUALITY = 0.8;
            const ACCEPTED_TYPES = ['image/jpeg', 'image/jpg', 'image/png', 'image/webp'];
            const MIN_DIMENSION = 300;

            const photoGrid = document.getElementById('photoGrid');
            const compressedPhotos = new Array(TOTAL_SLOTS).fill(null); // Store compressed blobs

            // Generate photo boxes
            function createPhotoBox(index) {
                const isMain = index === 0;
                const box = document.createElement('div');
                box.className = `photo-box ${isMain ? 'main' : ''}`;
                box.dataset.index = index;
                box.innerHTML = `
                    <svg class="plus-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                    </svg>
                    <span class="photo-label">${isMain ? 'Foto Utama' : 'Foto ' + (index + 1)}</span>
                    <input type="file" accept="image/*" capture="environment" id="photoInput${index}">
                    <div class="compress-overlay">
                        <div class="compress-spinner"></div>
                        <span class="compress-text">Compressing...</span>
                    </div>
                    <div class="compress-progress"><div class="bar"></div></div>
                    <span class="size-badge"></span>
                    <button type="button" class="photo-delete-btn" title="Hapus foto">
                        <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                    ${isMain ? '<div class="foto-utama-badge">Foto Utama</div>' : ''}
                `;
                return box;
            }

            // Initialize all photo boxes
            for (let i = 0; i < TOTAL_SLOTS; i++) {
                photoGrid.appendChild(createPhotoBox(i));
            }

            // Format file size
            function formatSize(bytes) {
                if (bytes < 1024) return bytes + ' B';
                if (bytes < 1048576) return (bytes / 1024).toFixed(1) + ' KB';
                return (bytes / 1048576).toFixed(1) + ' MB';
            }

            // Show compression toast notification
            function showToast(originalSize, compressedSize) {
                const toast = document.getElementById('compressToast');
                const saved = Math.round((1 - compressedSize / originalSize) * 100);
                document.getElementById('toastTitle').textContent = 'Foto berhasil di-compress!';
                document.getElementById('toastDetail').textContent = 
                    `${formatSize(originalSize)} → ${formatSize(compressedSize)} (hemat ${saved}%)`;
                toast.classList.add('show');
                setTimeout(() => toast.classList.remove('show'), 3500);
            }

            // Compress image using Canvas API
            function compressImage(file) {
                return new Promise((resolve, reject) => {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const img = new Image();
                        img.onload = function() {
                            // Validate minimum dimensions
                            if (img.width < MIN_DIMENSION || img.height < MIN_DIMENSION) {
                                reject(new Error(`Ukuran gambar terlalu kecil (${img.width}×${img.height}). Minimum ${MIN_DIMENSION}×${MIN_DIMENSION}px.`));
                                return;
                            }

                            // Calculate new dimensions maintaining aspect ratio
                            let newWidth = img.width;
                            let newHeight = img.height;

                            if (newWidth > MAX_WIDTH || newHeight > MAX_HEIGHT) {
                                const ratio = Math.min(MAX_WIDTH / newWidth, MAX_HEIGHT / newHeight);
                                newWidth = Math.round(newWidth * ratio);
                                newHeight = Math.round(newHeight * ratio);
                            }

                            // Create canvas and draw resized image
                            const canvas = document.createElement('canvas');
                            canvas.width = newWidth;
                            canvas.height = newHeight;
                            const ctx = canvas.getContext('2d');

                            // Use high quality image smoothing
                            ctx.imageSmoothingEnabled = true;
                            ctx.imageSmoothingQuality = 'high';
                            ctx.drawImage(img, 0, 0, newWidth, newHeight);

                            // Try WebP first, fallback to JPEG
                            let outputType = 'image/webp';
                            canvas.toBlob(function(blob) {
                                if (!blob || blob.size === 0) {
                                    // WebP not supported, fallback to JPEG
                                    outputType = 'image/jpeg';
                                    canvas.toBlob(function(jpegBlob) {
                                        resolve({
                                            blob: jpegBlob,
                                            url: URL.createObjectURL(jpegBlob),
                                            base64: canvas.toDataURL('image/jpeg', QUALITY),
                                            originalSize: file.size,
                                            compressedSize: jpegBlob.size,
                                            width: newWidth,
                                            height: newHeight,
                                            type: outputType
                                        });
                                    }, 'image/jpeg', QUALITY);
                                } else {
                                    resolve({
                                        blob: blob,
                                        url: URL.createObjectURL(blob),
                                        base64: canvas.toDataURL(outputType, QUALITY),
                                        originalSize: file.size,
                                        compressedSize: blob.size,
                                        width: newWidth,
                                        height: newHeight,
                                        type: outputType
                                    });
                                }
                            }, outputType, QUALITY);
                        };
                        img.onerror = () => reject(new Error('Gagal memuat gambar. Pastikan file adalah gambar yang valid.'));
                        img.src = e.target.result;
                    };
                    reader.onerror = () => reject(new Error('Gagal membaca file.'));
                    reader.readAsDataURL(file);
                });
            }

            // Handle file selection for a photo box
            async function handleFileSelect(box, file) {
                const index = parseInt(box.dataset.index);

                // Validate file type
                if (!ACCEPTED_TYPES.includes(file.type)) {
                    alert('Format file tidak didukung. Gunakan .jpg, .jpeg, .png, atau .webp');
                    return;
                }

                // Validate file size (max 10MB before compression)
                if (file.size > 10 * 1024 * 1024) {
                    alert('Ukuran file terlalu besar. Maksimal 10MB.');
                    return;
                }

                // Show compression overlay
                const overlay = box.querySelector('.compress-overlay');
                const progressBar = box.querySelector('.compress-progress .bar');
                overlay.classList.add('active');
                progressBar.style.width = '30%';

                try {
                    // Simulate progress steps for UX
                    await new Promise(r => setTimeout(r, 200));
                    progressBar.style.width = '60%';

                    const result = await compressImage(file);

                    progressBar.style.width = '90%';
                    await new Promise(r => setTimeout(r, 150));
                    progressBar.style.width = '100%';

                    // Store compressed blob
                    compressedPhotos[index] = result;

                    // Update UI - show preview
                    // Remove existing preview if any
                    const existingImg = box.querySelector('img.photo-preview');
                    if (existingImg) existingImg.remove();

                    const img = document.createElement('img');
                    img.className = 'photo-preview';
                    img.src = result.url;
                    img.alt = `Foto ${index + 1}`;
                    box.insertBefore(img, box.firstChild);

                    // Hide plus icon & label
                    const plusIcon = box.querySelector('.plus-icon');
                    const label = box.querySelector('.photo-label');
                    if (plusIcon) plusIcon.style.display = 'none';
                    if (label) label.style.display = 'none';

                    // Show size badge
                    const sizeBadge = box.querySelector('.size-badge');
                    sizeBadge.textContent = formatSize(result.compressedSize);

                    // Mark as has-photo
                    box.classList.add('has-photo');

                    // Show toast
                    showToast(result.originalSize, result.compressedSize);

                } catch (error) {
                    alert(error.message);
                } finally {
                    overlay.classList.remove('active');
                    setTimeout(() => { progressBar.style.width = '0%'; }, 500);
                }
            }

            // Delete photo from a box
            function deletePhoto(box) {
                const index = parseInt(box.dataset.index);
                
                // Revoke object URL to free memory
                if (compressedPhotos[index] && compressedPhotos[index].url) {
                    URL.revokeObjectURL(compressedPhotos[index].url);
                }
                compressedPhotos[index] = null;

                // Remove preview image
                const img = box.querySelector('img.photo-preview');
                if (img) img.remove();

                // Show plus icon & label again
                const plusIcon = box.querySelector('.plus-icon');
                const label = box.querySelector('.photo-label');
                if (plusIcon) plusIcon.style.display = '';
                if (label) label.style.display = '';

                // Remove has-photo class
                box.classList.remove('has-photo');

                // Clear file input
                const fileInput = box.querySelector('input[type="file"]');
                if (fileInput) fileInput.value = '';
            }

            // Event delegation for photo grid
            photoGrid.addEventListener('click', function(e) {
                const box = e.target.closest('.photo-box');
                if (!box) return;

                // Handle delete button click
                if (e.target.closest('.photo-delete-btn')) {
                    e.stopPropagation();
                    deletePhoto(box);
                    return;
                }

                // Don't trigger file input if already has photo (must delete first)
                if (box.classList.contains('has-photo')) return;

                // Trigger file input
                const fileInput = box.querySelector('input[type="file"]');
                if (fileInput) fileInput.click();
            });

            // Handle file input change
            photoGrid.addEventListener('change', function(e) {
                if (e.target.type !== 'file') return;
                const box = e.target.closest('.photo-box');
                const file = e.target.files[0];
                if (box && file) handleFileSelect(box, file);
            });

            // Drag & drop support
            photoGrid.addEventListener('dragover', function(e) {
                e.preventDefault();
                const box = e.target.closest('.photo-box');
                if (box && !box.classList.contains('has-photo')) {
                    box.classList.add('dragging');
                }
            });

            photoGrid.addEventListener('dragleave', function(e) {
                const box = e.target.closest('.photo-box');
                if (box) box.classList.remove('dragging');
            });

            photoGrid.addEventListener('drop', function(e) {
                e.preventDefault();
                const box = e.target.closest('.photo-box');
                if (box) {
                    box.classList.remove('dragging');
                    if (!box.classList.contains('has-photo')) {
                        const file = e.dataTransfer.files[0];
                        if (file) handleFileSelect(box, file);
                    }
                }
            });

            let isSaving = false;
            window.handleSave = function(isNew) {
                if (isSaving) return;

                const btnSave = document.querySelector('.header-right .btn-white');
                const btnSaveNew = document.querySelector('.header-right .btn-outline-white');
                
                if (isNew && btnSaveNew) {
                    btnSaveNew.innerHTML = 'Menyimpan...';
                    btnSaveNew.style.opacity = '0.7';
                    btnSaveNew.style.pointerEvents = 'none';
                }
                if (!isNew && btnSave) {
                    btnSave.innerHTML = 'Menyimpan...';
                    btnSave.style.opacity = '0.7';
                    btnSave.style.pointerEvents = 'none';
                }
                
                isSaving = true;

                // Simpan produk ke localStorage
                const productName = document.getElementById('productNameInput').value;
                const productDesc = document.querySelector('.rt-area').innerHTML;
                const productPriceRaw = document.getElementById('productPriceInput') ? document.getElementById('productPriceInput').value : 0;
                const productStockRaw = document.getElementById('productStockInput') ? document.getElementById('productStockInput').value : 0;
                
                // Get Category
                let finalCategory = document.getElementById('productCategoryInput').value;
                if (finalCategory === 'new') {
                    finalCategory = document.getElementById('newCategoryInput').value;
                    if (finalCategory) {
                        let customCats = JSON.parse(localStorage.getItem('customCategories') || '[]');
                        if (!customCats.includes(finalCategory)) {
                            customCats.push(finalCategory);
                            localStorage.setItem('customCategories', JSON.stringify(customCats));
                        }
                    }
                }
                
                // Get Etalase
                let finalEtalase = document.getElementById('productEtalaseInput').value;
                if (finalEtalase === 'new') {
                    finalEtalase = document.getElementById('newEtalaseInput').value;
                    if (finalEtalase) {
                        let customEtas = JSON.parse(localStorage.getItem('customEtalases') || '[]');
                        if (!customEtas.includes(finalEtalase)) {
                            customEtas.push(finalEtalase);
                            localStorage.setItem('customEtalases', JSON.stringify(customEtas));
                        }
                    }
                }
                
                let prodImage = 'assets/hp.png'; // Default mock image
                let allImages = [];
                
                // Gunakan foto utama jika ada
                if (compressedPhotos[0] && compressedPhotos[0].base64) {
                    prodImage = compressedPhotos[0].base64;
                }
                
                // Kumpulkan semua foto yang diunggah
                for(let i=0; i<compressedPhotos.length; i++) {
                    if (compressedPhotos[i] && compressedPhotos[i].base64) {
                        allImages.push(compressedPhotos[i].base64);
                    }
                }

                // Format Rupiah
                const formattedPrice = "Rp " + new Intl.NumberFormat('id-ID').format(productPriceRaw || 0);

                const newProduct = {
                    _token: '{{ csrf_token() }}',
                    id: '{{ $product->id ?? '' }}',
                    name: productName,
                    images: allImages,
                    description: productDesc,
                    price: productPriceRaw,
                    stock: parseInt(productStockRaw) || 0,
                    category: finalCategory,
                    etalase: finalEtalase,
                    kondisi: document.querySelector('input[name="kondisi"]:checked') ? document.querySelector('input[name="kondisi"]:checked').value : 'Baru'
                };
                
                fetch('/product/store?role={{ request('role') ?? "owner" }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(newProduct)
                })
                .then(res => res.json())
                .then(data => {
                    if(data.success) {
                        // Tampilkan toast notifikasi berhasil
                        document.getElementById('toastTitle').textContent = 'Berhasil!';
                        document.getElementById('toastDetail').textContent = data.message;
                        
                        const toast = document.getElementById('compressToast');
                        toast.classList.add('show');
                        
                        setTimeout(() => {
                            toast.classList.remove('show');
                            setTimeout(() => {
                                if (isNew) {
                                    window.location.href = '/product/form?role={{ request('role') ?? "owner" }}';
                                } else {
                                    window.location.href = '/seller?role={{ request('role') ?? "owner" }}';
                                }
                            }, 300);
                        }, 2000);
                    } else {
                        alert('Error: ' + JSON.stringify(data));
                        isSaving = false;
                        const btnSave = document.querySelector('.header-right .btn-white');
                        const btnSaveNew = document.querySelector('.header-right .btn-outline-white');
                        if (isNew && btnSaveNew) { btnSaveNew.innerHTML = 'Simpan & Tambah Baru'; btnSaveNew.style.opacity = '1'; btnSaveNew.style.pointerEvents = 'auto'; }
                        if (!isNew && btnSave) { btnSave.innerHTML = 'Simpan'; btnSave.style.opacity = '1'; btnSave.style.pointerEvents = 'auto'; }
                    }
                })
                .catch(err => {
                    console.error(err);
                    alert('Gagal menyimpan produk');
                    isSaving = false;
                    const btnSave = document.querySelector('.header-right .btn-white');
                    const btnSaveNew = document.querySelector('.header-right .btn-outline-white');
                    if (isNew && btnSaveNew) { btnSaveNew.innerHTML = 'Simpan & Tambah Baru'; btnSaveNew.style.opacity = '1'; btnSaveNew.style.pointerEvents = 'auto'; }
                    if (!isNew && btnSave) { btnSave.innerHTML = 'Simpan'; btnSave.style.opacity = '1'; btnSave.style.pointerEvents = 'auto'; }
                });
            };
        });

        function toggleNewEtalaseInput(selectEl) {
            const newEtalaseInput = document.getElementById('newEtalaseInput');
            if (selectEl.value === 'new') {
                newEtalaseInput.style.display = 'block';
                newEtalaseInput.focus();
            } else {
                newEtalaseInput.style.display = 'none';
                newEtalaseInput.value = ''; // clear when not used
            }
        }

        function toggleNewCategoryInput(selectEl) {
            const newCategoryInput = document.getElementById('newCategoryInput');
            if (selectEl.value === 'new') {
                newCategoryInput.style.display = 'block';
                newCategoryInput.focus();
            } else {
                newCategoryInput.style.display = 'none';
                newCategoryInput.value = ''; // clear when not used
            }
        }
    </script>
</body>
</html>
