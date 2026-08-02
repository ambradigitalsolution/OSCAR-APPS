<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan Kategori - Seller Center</title>
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

    </style>
</head>
<body>

    <!-- HEADER -->
    <header class="header">
        <div class="header-left">
            <a href="/seller?role=<?php echo e(request('role') ?? 'owner'); ?>" class="back-btn">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M19 12H5M12 19l-7-7 7-7" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
            <div class="page-title">Pengaturan Kategori</div>
        </div>
        <div class="header-right">
            <a href="/seller?role=<?php echo e(request('role') ?? 'owner'); ?>" class="btn btn-white">Simpan Perubahan</a>
        </div>
    </header>

    <div class="container">
        <!-- MAIN FORM -->
        <main class="form-main">
            
            <div class="preview-alert">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                Halaman ini adalah prototipe (mockup). Saat ini pengaturan kategori belum terhubung ke database.
            </div>
            <!-- Kategori 1 -->
            <div class="card">
                <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                    <span>Kategori 1</span>
                    <button class="btn btn-white" style="color: var(--tk-danger); padding: 4px 8px; font-size: 12px;">Hapus</button>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label">Nama Kategori</label>
                        <input type="text" class="form-input" value="Elektronik">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Jumlah Unit</label>
                        <input type="number" class="form-input" value="125">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Ikon Kategori</label>
                        <div class="form-hint" style="margin-bottom:12px;">Format gambar .png transparan. Ukuran direkomendasikan 64 x 64px.</div>
                        <div class="photo-box" style="width: 80px; height: 80px;">
                            <img src="<?php echo e(asset('assets/earphone.png')); ?>" alt="Preview" style="padding: 15px; background: rgba(0, 176, 80, 0.08);">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kategori 2 -->
            <div class="card">
                <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                    <span>Kategori 2</span>
                    <button class="btn btn-white" style="color: var(--tk-danger); padding: 4px 8px; font-size: 12px;">Hapus</button>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label">Nama Kategori</label>
                        <input type="text" class="form-input" value="Gadget">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Jumlah Unit</label>
                        <input type="number" class="form-input" value="182">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Ikon Kategori</label>
                        <div class="form-hint" style="margin-bottom:12px;">Format gambar .png transparan. Ukuran direkomendasikan 64 x 64px.</div>
                        <div class="photo-box" style="width: 80px; height: 80px;">
                            <img src="<?php echo e(asset('assets/hp.png')); ?>" alt="Preview" style="padding: 15px; background: rgba(0, 176, 80, 0.08);">
                        </div>
                    </div>
                </div>
            </div>

            <button type="button" class="btn btn-white" style="width: 100%; border: 1px dashed var(--tk-green); color: var(--tk-green); background: transparent; padding: 16px;">
                + Tambah Kategori Baru
            </button>

        </main>
    </div>

</body>
</html>
<?php /**PATH C:\OSCARAPP\resources\views/category_settings.blade.php ENDPATH**/ ?>