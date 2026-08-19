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
            object-fit: contain;
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

        /* Upload status badge */
        .photo-box .upload-status {
            position: absolute;
            top: 4px;
            left: 4px;
            font-size: 8px;
            font-weight: 700;
            padding: 2px 6px;
            border-radius: 4px;
            z-index: 7;
            display: none;
        }
        .photo-box.has-photo .upload-status {
            display: block;
        }
        .upload-status.uploading {
            background: #FF9800;
            color: #fff;
        }
        .upload-status.uploaded {
            background: var(--tk-green);
            color: #fff;
        }
        .upload-status.failed {
            background: var(--tk-danger);
            color: #fff;
            cursor: pointer;
        }

        /* Camera action buttons for mobile */
        .camera-action-btns {
            display: none;
            position: absolute;
            inset: 0;
            z-index: 8;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 6px;
            border-radius: 6px;
            background: rgba(255,255,255,0.97);
        }
        .camera-action-btns.show {
            display: flex;
        }
        .camera-action-btn {
            display: flex;
            align-items: center;
            gap: 6px;
            padding: 8px 14px;
            border: 1px solid var(--tk-border);
            border-radius: 8px;
            background: #fff;
            font-size: 12px;
            font-weight: 700;
            color: var(--tk-text);
            cursor: pointer;
            transition: all 0.15s;
            width: 85%;
            justify-content: center;
        }
        .camera-action-btn:hover {
            border-color: var(--tk-green);
            color: var(--tk-green);
            background: rgba(0,170,91,0.04);
        }
        .camera-action-btn svg {
            width: 16px;
            height: 16px;
            flex-shrink: 0;
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                        <div class="form-hint" style="margin-bottom:8px; color: var(--tk-green); font-weight: 600;">
                            <svg style="width:13px;height:13px;vertical-align:-2px;margin-right:3px;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                            Foto otomatis di-compress & upload langsung ke server (max 800×800px)
                        </div>
                        <div class="form-hint" style="margin-bottom:12px; color: var(--tk-text-sec);">
                            <svg style="width:13px;height:13px;vertical-align:-2px;margin-right:3px;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z"/><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z"/></svg>
                            Tap foto untuk ambil dari <strong>Kamera</strong> atau <strong>Galeri</strong>
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
                            @foreach($categories as $cat)
                                <option value="{{ $cat->name }}" data-custom="1" {{ (isset($product) && $product->category == $cat->name) ? 'selected' : '' }}>{{ $cat->name }}</option>
                            @endforeach
                            @if(isset($product) && $product->category && !$categories->contains('name', $product->category))
                                <option value="{{ $product->category }}" data-custom="1" selected>{{ $product->category }}</option>
                            @endif
                            <option value="new" style="font-weight: bold; color: var(--tk-green);">+ Tambah Kategori Baru</option>
                        </select>
                        <input type="text" id="newCategoryInput" class="form-input" placeholder="Ketik nama kategori baru..." style="display: none; margin-top: 10px;">
                        <button type="button" id="deleteCategoryBtn" style="display: none; margin-top: 10px; font-size: 13px; color: var(--tk-danger); background: transparent; border: 1px solid var(--tk-danger); padding: 4px 12px; border-radius: 6px; cursor: pointer; font-weight: 600;" onclick="deleteCustomCategory()">Hapus Kategori Ini</button>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Etalase</label>
                        <select class="form-select" id="productEtalaseInput" onchange="toggleNewEtalaseInput(this)">
                            <option {{ !isset($product) || !$product->etalase ? 'selected' : '' }} disabled hidden value="">Pilih Etalase</option>
                            @foreach($etalases as $eta)
                                <option value="{{ $eta->name }}" data-custom="1" {{ (isset($product) && $product->etalase == $eta->name) ? 'selected' : '' }}>{{ $eta->name }}</option>
                            @endforeach
                            @if(isset($product) && $product->etalase && !$etalases->contains('name', $product->etalase))
                                <option value="{{ $product->etalase }}" data-custom="1" selected>{{ $product->etalase }}</option>
                            @endif
                            <option value="new" style="font-weight: bold; color: var(--tk-green);">+ Tambah Etalase Baru</option>
                        </select>
                        <input type="text" id="newEtalaseInput" class="form-input" placeholder="Ketik nama etalase baru..." style="display: none; margin-top: 10px;">
                        <button type="button" id="deleteEtalaseBtn" style="display: none; margin-top: 10px; font-size: 13px; color: var(--tk-danger); background: transparent; border: 1px solid var(--tk-danger); padding: 4px 12px; border-radius: 6px; cursor: pointer; font-weight: 600;" onclick="deleteCustomEtalase()">Hapus Etalase Ini</button>
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
                        <input type="text" id="productPriceInput" class="form-input" placeholder="Rp. 0" value="{{ isset($product->price) ? 'Rp. ' . number_format($product->price, 0, ',', '.') : '' }}" oninput="formatRupiahInput(this)">
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
        function formatRupiahInput(input) {
            let value = input.value.replace(/[^0-9]/g, '');
            if (value) {
                let formatted = new Intl.NumberFormat('id-ID').format(value);
                input.value = 'Rp. ' + formatted;
            } else {
                input.value = '';
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            
            const catSelect = document.getElementById('productCategoryInput');
            if (catSelect) {
                const opt = catSelect.options[catSelect.selectedIndex];
                if (opt && opt.getAttribute('data-custom') === '1') {
                    const delBtn = document.getElementById('deleteCategoryBtn');
                    if (delBtn) delBtn.style.display = 'inline-block';
                }
            }

            const etaSelect = document.getElementById('productEtalaseInput');
            if (etaSelect) {
                const opt = etaSelect.options[etaSelect.selectedIndex];
                if (opt && opt.getAttribute('data-custom') === '1') {
                    const delBtn = document.getElementById('deleteEtalaseBtn');
                    if (delBtn) delBtn.style.display = 'inline-block';
                }
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

            // ========== AUTO COMPRESS + UPLOAD PHOTO SYSTEM ==========
            const TOTAL_SLOTS = 20;
            const MAX_WIDTH = 800;
            const MAX_HEIGHT = 800;
            const QUALITY = 0.8;
            const ACCEPTED_TYPES = ['image/jpeg', 'image/jpg', 'image/png', 'image/webp'];
            const MIN_DIMENSION = 300;
            const UPLOAD_URL = '/product/upload-image?role={{ request("role") ?? "owner" }}';
            const CSRF_TOKEN = '{{ csrf_token() }}';
            const MAX_RETRIES = 2;

            const photoGrid = document.getElementById('photoGrid');
            // Each slot stores: { serverPath, previewUrl, originalSize, compressedSize, uploaded } or null
            const photoSlots = new Array(TOTAL_SLOTS).fill(null);

            // Detect if device has camera (mobile)
            const isMobile = /Android|iPhone|iPad|iPod/i.test(navigator.userAgent) || ('ontouchstart' in window);

            // Generate photo boxes with camera + gallery options
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
                    <input type="file" accept="image/*" capture="environment" class="camera-input" style="display:none">
                    <input type="file" accept="image/*" class="gallery-input" style="display:none" multiple>
                    <div class="camera-action-btns" id="cameraActions${index}">
                        <button type="button" class="camera-action-btn" data-action="camera">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z"/><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0z"/></svg>
                            📷 Kamera
                        </button>
                        <button type="button" class="camera-action-btn" data-action="gallery">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909M3.75 21h16.5A2.25 2.25 0 0022.5 18.75V5.25A2.25 2.25 0 0020.25 3H3.75A2.25 2.25 0 001.5 5.25v13.5A2.25 2.25 0 003.75 21z"/></svg>
                            📁 Galeri
                        </button>
                    </div>
                    <div class="compress-overlay">
                        <div class="compress-spinner"></div>
                        <span class="compress-text">Mengupload...</span>
                    </div>
                    <div class="compress-progress"><div class="bar"></div></div>
                    <span class="upload-status"></span>
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

            const existingImages = {!! json_encode(isset($product) && is_array($product->images) ? $product->images : (isset($product) && $product->images && is_string($product->images) ? json_decode($product->images, true) : [])) !!} || [];

            // Initialize all photo boxes
            for (let i = 0; i < TOTAL_SLOTS; i++) {
                const box = createPhotoBox(i);
                photoGrid.appendChild(box);
                
                if (existingImages[i]) {
                    // Existing images are already server paths
                    photoSlots[i] = { serverPath: existingImages[i], uploaded: true };
                    
                    const img = document.createElement('img');
                    img.className = 'photo-preview';
                    img.src = existingImages[i].startsWith('data:image') || existingImages[i].startsWith('http') ? existingImages[i] : '/' + existingImages[i].replace(/^\//, '');
                    img.alt = `Foto ${i + 1}`;
                    box.insertBefore(img, box.firstChild);

                    const plusIcon = box.querySelector('.plus-icon');
                    const label = box.querySelector('.photo-label');
                    if (plusIcon) plusIcon.style.display = 'none';
                    if (label) label.style.display = 'none';

                    // Show uploaded status
                    const statusBadge = box.querySelector('.upload-status');
                    statusBadge.textContent = '✓ Tersimpan';
                    statusBadge.className = 'upload-status uploaded';

                    box.classList.add('has-photo');
                }
            }

            // Format file size
            function formatSize(bytes) {
                if (bytes < 1024) return bytes + ' B';
                if (bytes < 1048576) return (bytes / 1024).toFixed(1) + ' KB';
                return (bytes / 1048576).toFixed(1) + ' MB';
            }

            // Show compression toast notification
            function showToast(title, detail, isError) {
                const toast = document.getElementById('compressToast');
                const icon = toast.querySelector('.toast-icon');
                document.getElementById('toastTitle').textContent = title;
                document.getElementById('toastDetail').textContent = detail;
                if (isError) {
                    icon.style.background = 'var(--tk-danger)';
                } else {
                    icon.style.background = 'var(--tk-green)';
                }
                toast.classList.add('show');
                setTimeout(() => toast.classList.remove('show'), 3500);
            }

            // Compress image using Canvas API + auto-crop to 1:1 square
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

                            // Auto-pad to 1:1 square with white background
                            const maxDim = Math.max(img.width, img.height);
                            
                            // Calculate output size (max 800x800)
                            const outputSize = Math.min(maxDim, MAX_WIDTH);
                            const scale = outputSize / maxDim;

                            const drawWidth = img.width * scale;
                            const drawHeight = img.height * scale;
                            
                            const drawX = (outputSize - drawWidth) / 2;
                            const drawY = (outputSize - drawHeight) / 2;

                            // Create canvas and draw padded square image
                            const canvas = document.createElement('canvas');
                            canvas.width = outputSize;
                            canvas.height = outputSize;
                            const ctx = canvas.getContext('2d');

                            // Fill background with white
                            ctx.fillStyle = '#ffffff';
                            ctx.fillRect(0, 0, outputSize, outputSize);

                            // Use high quality image smoothing
                            ctx.imageSmoothingEnabled = true;
                            ctx.imageSmoothingQuality = 'high';
                            ctx.drawImage(img, 0, 0, img.width, img.height, drawX, drawY, drawWidth, drawHeight);

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
                                            originalSize: file.size,
                                            compressedSize: jpegBlob.size,
                                            type: outputType,
                                            extension: 'jpg'
                                        });
                                    }, 'image/jpeg', QUALITY);
                                } else {
                                    resolve({
                                        blob: blob,
                                        url: URL.createObjectURL(blob),
                                        originalSize: file.size,
                                        compressedSize: blob.size,
                                        type: outputType,
                                        extension: 'webp'
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

            // Upload compressed blob to server with retry
            async function uploadToServer(blob, extension, retries) {
                const formData = new FormData();
                const fileName = `photo_${Date.now()}.${extension}`;
                formData.append('photo', blob, fileName);
                formData.append('_token', CSRF_TOKEN);

                for (let attempt = 0; attempt <= (retries || MAX_RETRIES); attempt++) {
                    try {
                        const response = await fetch(UPLOAD_URL, {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'Accept': 'application/json'
                            }
                        });

                        if (!response.ok) {
                            const text = await response.text();
                            let errorMsg = `Server error ${response.status}`;
                            try {
                                const json = JSON.parse(text);
                                errorMsg = json.message || json.error || errorMsg;
                            } catch(e) {}
                            throw new Error(errorMsg);
                        }

                        const data = await response.json();
                        if (data.success) {
                            return data; // { success, path, size }
                        } else {
                            throw new Error(data.error || data.message || 'Upload gagal');
                        }
                    } catch (err) {
                        if (attempt < (retries || MAX_RETRIES)) {
                            // Wait before retry (exponential backoff)
                            await new Promise(r => setTimeout(r, 1000 * (attempt + 1)));
                            continue;
                        }
                        throw err;
                    }
                }
            }

            // Handle file selection for a photo box - compress then upload
            async function handleFileSelect(box, file) {
                const index = parseInt(box.dataset.index);

                // Hide camera action buttons
                const cameraActions = box.querySelector('.camera-action-btns');
                if (cameraActions) cameraActions.classList.remove('show');

                // Validate file type
                if (!ACCEPTED_TYPES.includes(file.type)) {
                    Swal.fire({
                        title: 'Format Tidak Didukung',
                        text: 'Gunakan format .jpg, .jpeg, .png, atau .webp',
                        icon: 'warning',
                        confirmButtonColor: '#00AA5B'
                    });
                    return;
                }

                // Validate file size (max 10MB before compression)
                if (file.size > 10 * 1024 * 1024) {
                    Swal.fire({
                        title: 'File Terlalu Besar',
                        text: 'Ukuran file maksimal 10MB sebelum kompresi.',
                        icon: 'warning',
                        confirmButtonColor: '#00AA5B'
                    });
                    return;
                }

                // Show processing overlay
                const overlay = box.querySelector('.compress-overlay');
                const overlayText = box.querySelector('.compress-text');
                const progressBar = box.querySelector('.compress-progress .bar');
                const statusBadge = box.querySelector('.upload-status');
                overlay.classList.add('active');
                overlayText.textContent = 'Compressing...';
                progressBar.style.width = '20%';

                try {
                    // Step 1: Compress
                    await new Promise(r => setTimeout(r, 150));
                    progressBar.style.width = '40%';

                    const result = await compressImage(file);

                    progressBar.style.width = '50%';
                    overlayText.textContent = 'Mengupload...';

                    // Step 2: Upload compressed blob to server
                    progressBar.style.width = '70%';
                    const uploadResult = await uploadToServer(result.blob, result.extension);
                    
                    progressBar.style.width = '100%';
                    await new Promise(r => setTimeout(r, 200));

                    // Step 3: Store server path (NOT base64!)
                    if (photoSlots[index] && photoSlots[index].previewUrl) {
                        URL.revokeObjectURL(photoSlots[index].previewUrl);
                    }
                    photoSlots[index] = {
                        serverPath: uploadResult.path,
                        previewUrl: result.url,
                        originalSize: result.originalSize,
                        compressedSize: result.compressedSize,
                        uploaded: true
                    };

                    // Update UI - show preview
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

                    // Show upload status
                    statusBadge.textContent = '✓ Uploaded';
                    statusBadge.className = 'upload-status uploaded';

                    // Mark as has-photo
                    box.classList.add('has-photo');

                    // Show success toast
                    const saved = Math.round((1 - result.compressedSize / result.originalSize) * 100);
                    showToast(
                        'Foto berhasil diupload!',
                        `${formatSize(result.originalSize)} → ${formatSize(result.compressedSize)} (hemat ${saved}%)`,
                        false
                    );

                } catch (error) {
                    console.error('Upload error:', error);
                    
                    // Show error status badge with retry
                    statusBadge.textContent = '✕ Gagal - Tap retry';
                    statusBadge.className = 'upload-status failed';
                    statusBadge.onclick = function() {
                        statusBadge.onclick = null;
                        handleFileSelect(box, file);
                    };

                    Swal.fire({
                        title: 'Gagal Upload Foto',
                        html: `<div style="text-align:left;font-size:13px;">
                            <p><strong>Error:</strong> ${error.message}</p>
                            <p style="margin-top:8px;color:#6D7588;">Kemungkinan penyebab:</p>
                            <ul style="color:#6D7588;margin-top:4px;">
                                <li>Koneksi internet tidak stabil</li>
                                <li>File gambar corrupt/rusak</li>
                                <li>Server sedang sibuk</li>
                            </ul>
                            <p style="margin-top:8px;">Anda bisa tap <strong>"✕ Gagal - Tap retry"</strong> pada foto untuk mencoba lagi.</p>
                        </div>`,
                        icon: 'error',
                        confirmButtonColor: '#EF144A',
                        confirmButtonText: 'OK'
                    });
                } finally {
                    overlay.classList.remove('active');
                    setTimeout(() => { progressBar.style.width = '0%'; }, 500);
                }
            }

            // Delete photo from a box
            function deletePhoto(box) {
                const index = parseInt(box.dataset.index);
                
                // Revoke object URL to free memory
                if (photoSlots[index] && photoSlots[index].previewUrl) {
                    URL.revokeObjectURL(photoSlots[index].previewUrl);
                }
                photoSlots[index] = null;

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

                // Reset status badge
                const statusBadge = box.querySelector('.upload-status');
                statusBadge.textContent = '';
                statusBadge.className = 'upload-status';
                statusBadge.onclick = null;

                // Clear file inputs
                box.querySelectorAll('input[type="file"]').forEach(inp => inp.value = '');

                // Hide camera actions
                const cameraActions = box.querySelector('.camera-action-btns');
                if (cameraActions) cameraActions.classList.remove('show');
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

                // Handle camera action button clicks
                const actionBtn = e.target.closest('.camera-action-btn');
                if (actionBtn) {
                    e.stopPropagation();
                    const action = actionBtn.dataset.action;
                    if (action === 'camera') {
                        const cameraInput = box.querySelector('.camera-input');
                        if (cameraInput) cameraInput.click();
                    } else if (action === 'gallery') {
                        const galleryInput = box.querySelector('.gallery-input');
                        if (galleryInput) galleryInput.click();
                    }
                    // Hide action buttons after selection
                    const cameraActions = box.querySelector('.camera-action-btns');
                    if (cameraActions) cameraActions.classList.remove('show');
                    return;
                }

                // Don't trigger if already has photo (must delete first)
                if (box.classList.contains('has-photo')) return;

                // On mobile: show camera/gallery choice. On desktop: open file picker
                if (isMobile) {
                    const cameraActions = box.querySelector('.camera-action-btns');
                    // Close all other open action menus
                    document.querySelectorAll('.camera-action-btns.show').forEach(el => {
                        if (el !== cameraActions) el.classList.remove('show');
                    });
                    if (cameraActions) cameraActions.classList.toggle('show');
                } else {
                    // Desktop: just open gallery input (no capture)
                    const galleryInput = box.querySelector('.gallery-input');
                    if (galleryInput) galleryInput.click();
                }
            });

            // Close camera action menus when clicking outside
            document.addEventListener('click', function(e) {
                if (!e.target.closest('.photo-box')) {
                    document.querySelectorAll('.camera-action-btns.show').forEach(el => el.classList.remove('show'));
                }
            });

            // Handle file input change (both camera-input and gallery-input)
            photoGrid.addEventListener('change', function(e) {
                if (e.target.type !== 'file') return;
                const startingBox = e.target.closest('.photo-box');
                const files = e.target.files;
                if (!startingBox || files.length === 0) return;

                let fileIndex = 0;

                if (!startingBox.classList.contains('has-photo')) {
                    handleFileSelect(startingBox, files[fileIndex]);
                    fileIndex++;
                }

                const allBoxes = Array.from(document.querySelectorAll('.photo-box'));
                let nextBoxIndex = allBoxes.indexOf(startingBox) + 1;

                while (fileIndex < files.length && nextBoxIndex < allBoxes.length) {
                    if (!allBoxes[nextBoxIndex].classList.contains('has-photo')) {
                        handleFileSelect(allBoxes[nextBoxIndex], files[fileIndex]);
                        fileIndex++;
                    }
                    nextBoxIndex++;
                }
                
                e.target.value = '';
            });

            // Drag & drop support (desktop)
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
                const startingBox = e.target.closest('.photo-box');
                if (startingBox) {
                    startingBox.classList.remove('dragging');
                    const files = e.dataTransfer.files;
                    if (files.length === 0) return;

                    let fileIndex = 0;

                    if (!startingBox.classList.contains('has-photo')) {
                        handleFileSelect(startingBox, files[fileIndex]);
                        fileIndex++;
                    }

                    const allBoxes = Array.from(document.querySelectorAll('.photo-box'));
                    let nextBoxIndex = allBoxes.indexOf(startingBox) + 1;

                    while (fileIndex < files.length && nextBoxIndex < allBoxes.length) {
                        if (!allBoxes[nextBoxIndex].classList.contains('has-photo')) {
                            handleFileSelect(allBoxes[nextBoxIndex], files[fileIndex]);
                            fileIndex++;
                        }
                        nextBoxIndex++;
                    }
                }
            });

            // ========== SAVE PRODUCT ==========
            let isSaving = false;
            window.handleSave = function(isNew) {
                if (isSaving) return;

                const btnSave = document.querySelector('.header-right .btn-white');
                const btnSaveNew = document.querySelector('.header-right .btn-outline-white');
                
                function resetButtons() {
                    isSaving = false;
                    if (isNew && btnSaveNew) { btnSaveNew.innerHTML = 'Simpan & Tambah Baru'; btnSaveNew.style.opacity = '1'; btnSaveNew.style.pointerEvents = 'auto'; }
                    if (!isNew && btnSave) { btnSave.innerHTML = 'Simpan'; btnSave.style.opacity = '1'; btnSave.style.pointerEvents = 'auto'; }
                }

                // Check if any photos are still uploading (failed)
                const failedUploads = photoSlots.filter(s => s && !s.uploaded);
                if (failedUploads.length > 0) {
                    Swal.fire({
                        title: 'Ada Foto Gagal Upload',
                        text: 'Beberapa foto belum berhasil diupload. Hapus atau retry foto yang gagal terlebih dahulu.',
                        icon: 'warning',
                        confirmButtonColor: '#00AA5B'
                    });
                    return;
                }

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

                const productName = document.getElementById('productNameInput').value;
                const productDesc = document.querySelector('.rt-area').innerHTML;
                const productPriceRaw = document.getElementById('productPriceInput') ? document.getElementById('productPriceInput').value.replace(/[^0-9]/g, '') : 0;
                const productStockRaw = document.getElementById('productStockInput') ? document.getElementById('productStockInput').value : 0;
                
                // Get Category
                let finalCategory = document.getElementById('productCategoryInput').value;
                if (finalCategory === 'new') {
                    finalCategory = document.getElementById('newCategoryInput').value;
                    if (finalCategory) {
                        fetch('/product/category/store?role={{ request("role") ?? "owner" }}', {
                            method: 'POST',
                            headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': CSRF_TOKEN },
                            body: JSON.stringify({ name: finalCategory })
                        }).catch(e => console.error(e));
                    }
                }
                
                // Get Etalase
                let finalEtalase = document.getElementById('productEtalaseInput').value;
                if (finalEtalase === 'new') {
                    finalEtalase = document.getElementById('newEtalaseInput').value;
                    if (finalEtalase) {
                        fetch('/product/etalase/store?role={{ request("role") ?? "owner" }}', {
                            method: 'POST',
                            headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': CSRF_TOKEN },
                            body: JSON.stringify({ name: finalEtalase })
                        }).catch(e => console.error(e));
                    }
                }
                
                // Collect server paths only (NOT base64!) — payload is now very small
                const allImagePaths = [];
                for (let i = 0; i < photoSlots.length; i++) {
                    if (photoSlots[i] && photoSlots[i].serverPath) {
                        allImagePaths.push(photoSlots[i].serverPath);
                    }
                }

                // --- VALIDASI FRONTEND ---
                let missingFields = [];
                
                if (allImagePaths.length === 0) missingFields.push("Foto Produk");
                if (!productName.trim()) missingFields.push("Nama Produk");
                if (!finalCategory || (finalCategory === 'new' && !document.getElementById('newCategoryInput').value.trim())) missingFields.push("Kategori");
                
                // Cek deskripsi kosong (menghapus tag html untuk memastikan benar-benar ada teks)
                let tempDiv = document.createElement("div");
                tempDiv.innerHTML = productDesc;
                let plainTextDesc = tempDiv.textContent || tempDiv.innerText || "";
                if (!plainTextDesc.trim()) missingFields.push("Deskripsi");

                if (!productPriceRaw || productPriceRaw == 0) missingFields.push("Harga");
                if (productStockRaw === "") missingFields.push("Stok"); // Stok bisa 0

                if (missingFields.length > 0) {
                    Swal.fire({
                        title: 'Data Belum Lengkap!',
                        html: `Mohon isi kolom yang bertanda bintang (*).<br><br><span style="color:#EF144A;font-weight:bold;">Yang masih kosong:</span><br>${missingFields.join(', ')}`,
                        icon: 'warning',
                        confirmButtonColor: '#FF9800'
                    });
                    resetButtons();
                    return; // Stop proses simpan
                }
                // --- END VALIDASI FRONTEND ---

                const newProduct = {
                    _token: CSRF_TOKEN,
                    id: '{{ $product->id ?? '' }}',
                    name: productName,
                    images: allImagePaths, // Just paths like "assets/products/prod_xxx.webp"
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
                        'Accept': 'application/json',
                    },
                    body: JSON.stringify(newProduct)
                })
                .then(res => {
                    if (!res.ok) {
                        return res.text().then(t => {
                            let msg = `Server error ${res.status}`;
                            try { msg = JSON.parse(t).message || msg; } catch(e) {}
                            throw new Error(msg);
                        });
                    }
                    return res.json();
                })
                .then(data => {
                    if(data.success) {
                        Swal.fire({
                            title: 'Berhasil!',
                            text: data.message,
                            icon: 'success',
                            confirmButtonColor: '#00AA5B',
                            timer: 2000,
                            showConfirmButton: false
                        }).then(() => {
                            if (isNew) {
                                window.location.href = '/product/form?role={{ request('role') ?? "owner" }}';
                            } else {
                                window.location.href = '/seller?role={{ request('role') ?? "owner" }}';
                            }
                        });
                    } else {
                        Swal.fire({
                            title: 'Gagal!',
                            text: data.error || data.message || 'Terjadi kesalahan saat menyimpan produk.',
                            icon: 'error',
                            confirmButtonColor: '#EF144A'
                        });
                        resetButtons();
                    }
                })
                .catch(err => {
                    console.error('Save error:', err);
                    Swal.fire({
                        title: 'Gagal!',
                        text: err.message || 'Terjadi kesalahan jaringan atau server saat menyimpan produk.',
                        icon: 'error',
                        confirmButtonColor: '#EF144A'
                    });
                    resetButtons();
                });
            };
        });

        function toggleNewEtalaseInput(selectEl) {
            const newEtalaseInput = document.getElementById('newEtalaseInput');
            const delBtn = document.getElementById('deleteEtalaseBtn');
            if (selectEl.value === 'new') {
                newEtalaseInput.style.display = 'block';
                newEtalaseInput.focus();
                if (delBtn) delBtn.style.display = 'none';
            } else {
                newEtalaseInput.style.display = 'none';
                newEtalaseInput.value = ''; // clear when not used
                if (delBtn) {
                    const opt = selectEl.options[selectEl.selectedIndex];
                    const isCustom = opt && opt.getAttribute('data-custom') === '1';
                    delBtn.style.display = isCustom ? 'inline-block' : 'none';
                }
            }
        }

        function toggleNewCategoryInput(selectEl) {
            const newCategoryInput = document.getElementById('newCategoryInput');
            const delBtn = document.getElementById('deleteCategoryBtn');
            if (selectEl.value === 'new') {
                newCategoryInput.style.display = 'block';
                newCategoryInput.focus();
                if (delBtn) delBtn.style.display = 'none';
            } else {
                newCategoryInput.style.display = 'none';
                newCategoryInput.value = ''; // clear when not used
                if (delBtn) {
                    const opt = selectEl.options[selectEl.selectedIndex];
                    const isCustom = opt && opt.getAttribute('data-custom') === '1';
                    delBtn.style.display = isCustom ? 'inline-block' : 'none';
                }
            }
        }

        function deleteCustomCategory() {
            const selectEl = document.getElementById('productCategoryInput');
            const val = selectEl.value;
            if (!val || val === 'new') return;
            
            Swal.fire({
                title: 'Hapus Kategori?',
                text: `Anda yakin ingin menghapus kategori "${val}"?`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#EF144A',
                cancelButtonColor: '#AAB4C8',
                confirmButtonText: 'Ya, hapus',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch('/product/category/delete?role={{ request("role") ?? "owner" }}', {
                        method: 'DELETE',
                        headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                        body: JSON.stringify({ name: val })
                    }).then(res => res.json()).then(data => {
                        if (data.success) {
                            const optionToRemove = selectEl.querySelector(`option[value="${val}"]`);
                            if (optionToRemove) optionToRemove.remove();
                            selectEl.value = '';
                            toggleNewCategoryInput(selectEl);
                            Swal.fire('Terhapus!', 'Kategori berhasil dihapus.', 'success');
                        } else {
                            Swal.fire('Gagal!', 'Gagal menghapus kategori.', 'error');
                        }
                    }).catch(err => {
                        console.error(err);
                        Swal.fire('Gagal!', 'Gagal menghapus kategori.', 'error');
                    });
                }
            });
        }

        function deleteCustomEtalase() {
            const selectEl = document.getElementById('productEtalaseInput');
            const val = selectEl.value;
            if (!val || val === 'new') return;
            
            Swal.fire({
                title: 'Hapus Etalase?',
                text: `Anda yakin ingin menghapus etalase "${val}"?`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#EF144A',
                cancelButtonColor: '#AAB4C8',
                confirmButtonText: 'Ya, hapus',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch('/product/etalase/delete?role={{ request("role") ?? "owner" }}', {
                        method: 'DELETE',
                        headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                        body: JSON.stringify({ name: val })
                    }).then(res => res.json()).then(data => {
                        if (data.success) {
                            const optionToRemove = selectEl.querySelector(`option[value="${val}"]`);
                            if (optionToRemove) optionToRemove.remove();
                            selectEl.value = '';
                            toggleNewEtalaseInput(selectEl);
                            Swal.fire('Terhapus!', 'Etalase berhasil dihapus.', 'success');
                        } else {
                            Swal.fire('Gagal!', 'Gagal menghapus etalase.', 'error');
                        }
                    }).catch(err => {
                        console.error(err);
                        Swal.fire('Gagal!', 'Gagal menghapus etalase.', 'error');
                    });
                }
            });
        }
    </script>
</body>
</html>
