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

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Nunito Sans', sans-serif; }
        body { background-color: var(--tk-bg); color: var(--tk-text); overflow-x: hidden; scrollbar-width: none; }
        body::-webkit-scrollbar { display: none; }

        .header { position: fixed; top: 0; left: 0; right: 0; height: 64px; background: var(--tk-green); color: #fff; display: flex; align-items: center; padding: 0 24px; z-index: 100; box-shadow: 0 1px 4px rgba(0,0,0,0.1); }
        .header-left { display: flex; align-items: center; gap: 16px; }
        .back-btn { background: rgba(255,255,255,0.2); border: none; width: 36px; height: 36px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; cursor: pointer; text-decoration: none; transition: 0.2s; }
        .back-btn:hover { background: rgba(255,255,255,0.3); }
        .page-title { font-size: 18px; font-weight: 700; }
        .header-right { margin-left: auto; display: flex; align-items: center; gap: 12px; }
        
        .btn { padding: 8px 16px; border-radius: 8px; font-size: 14px; font-weight: 700; cursor: pointer; border: 1px solid transparent; display: inline-flex; align-items: center; justify-content: center; transition: all 0.2s; text-decoration: none; }
        .btn-white { background: #fff; color: var(--tk-green); box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .btn-white:hover { background: #f8f9fa; }

        .container { display: flex; max-width: 1200px; margin: 88px auto 60px; gap: 24px; padding: 0 24px; align-items: flex-start; justify-content: center; }
        .form-main { width: 100%; max-width: 800px; display: flex; flex-direction: column; gap: 20px; }
        
        .card { background: var(--tk-white); border-radius: 12px; box-shadow: 0 1px 6px rgba(0,0,0,0.04); overflow: hidden; border: 1px solid var(--tk-border); }
        .card-header { padding: 20px 24px 16px; font-size: 18px; font-weight: 800; color: var(--tk-text); border-bottom: 1px solid var(--tk-border); display: flex; justify-content: space-between; align-items: center; }
        .card-body { padding: 24px; }
        
        .form-group { margin-bottom: 24px; }
        .form-group:last-child { margin-bottom: 0; }
        .form-label { display: block; font-size: 13px; font-weight: 700; color: var(--tk-text); margin-bottom: 8px; }
        .form-hint { font-size: 12px; color: var(--tk-text-sec); margin-top: 6px; }
        .form-input { width: 100%; padding: 10px 14px; border: 1px solid var(--tk-border); border-radius: 8px; font-size: 14px; color: var(--tk-text); transition: all 0.2s; outline: none; background: #fff; }
        .form-input:focus { border-color: var(--tk-green); box-shadow: 0 0 0 3px rgba(0,170,91,0.1); }

        .photo-box { width: 100%; height: 100px; border: 2px dashed var(--tk-border); border-radius: 8px; display: flex; flex-direction: column; align-items: center; justify-content: center; background: #fafafa; color: var(--tk-text-third); transition: all 0.2s; position: relative; overflow: hidden; }
        .photo-box img { position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: contain; }
        
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

    <header class="header">
        <div class="header-left">
            <a href="/seller?role={{ request('role') ?? 'owner' }}" class="back-btn">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M19 12H5M12 19l-7-7 7-7" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
            <div class="page-title">Pengaturan Kategori</div>
        </div>
        <div class="header-right">
            <button type="submit" form="categoryForm" class="btn btn-white">Simpan Perubahan</button>
        </div>
    </header>

    <div class="container">
        <main class="form-main">
            @if(session('success'))
                <div style="background:#d4edda; color:#155724; padding:12px; border-radius:8px; margin-bottom:20px; font-weight:bold;">
                    {{ session('success') }}
                </div>
            @endif

            <form id="categoryForm" action="/settings/category?role={{ request('role') ?? 'owner' }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div id="category-container" style="display: flex; flex-direction: column; gap: 20px;">
                    @forelse($categories as $index => $cat)
                        <div class="card category-item" data-index="{{ $index }}">
                            <div class="card-header">
                                <span class="cat-title">Kategori {{ $index + 1 }}</span>
                                <button type="button" class="btn btn-white btn-hapus" style="color: var(--tk-danger); padding: 4px 8px; font-size: 12px;">Hapus</button>
                            </div>
                            <div class="card-body">
                                <input type="hidden" name="categories[{{ $index }}][id]" value="{{ $cat->id }}">
                                
                                <div class="form-group">
                                    <label class="form-label">Nama Kategori</label>
                                    <input type="text" name="categories[{{ $index }}][name]" class="form-input" value="{{ $cat->name }}">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Jumlah Unit</label>
                                    <input type="number" name="categories[{{ $index }}][count]" class="form-input" value="{{ $cat->count }}">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Ikon Kategori</label>
                                    <div class="form-hint" style="margin-bottom:12px;">Format gambar .png transparan. Ukuran direkomendasikan 64 x 64px.</div>
                                    <div style="display: flex; gap: 12px; align-items: flex-end;">
                                        <div class="photo-box" style="width: 80px; height: 80px; position: relative;">
                                            <img id="preview-cat-{{ $index }}" src="{{ asset($cat->icon ?? 'assets/earphone.png') }}" alt="Preview" style="padding: 15px; background: {{ $cat->bg ?? 'rgba(0, 176, 80, 0.08)' }};">
                                        </div>
                                        <div style="display: flex; flex-direction: column; gap: 8px;">
                                            <button type="button" class="btn btn-white" style="padding: 6px 12px; font-size: 12px; border: 1px solid var(--tk-border);" onclick="document.getElementById('img-input-cat-{{ $index }}').click()">Pilih Icon</button>
                                            <button type="button" class="btn btn-white" style="padding: 6px 12px; font-size: 12px; color: var(--tk-danger); border: 1px solid var(--tk-border);" onclick="deleteImage('cat-{{ $index }}', '{{ asset('assets/earphone.png') }}')">Hapus Icon</button>
                                        </div>
                                    </div>
                                    <input type="file" id="img-input-cat-{{ $index }}" name="categories[{{ $index }}][icon]" accept="image/*" style="display:none;" onchange="previewImage(this, 'cat-{{ $index }}')">
                                    <input type="hidden" id="delete-input-cat-{{ $index }}" name="categories[{{ $index }}][delete_image]" value="0">
                                </div>
                            </div>
                        </div>
                    @empty
                        <!-- Default empty state if no categories exist -->
                        <div class="card category-item" data-index="0">
                            <div class="card-header">
                                <span class="cat-title">Kategori 1</span>
                                <button type="button" class="btn btn-white btn-hapus" style="color: var(--tk-danger); padding: 4px 8px; font-size: 12px;">Hapus</button>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Nama Kategori</label>
                                    <input type="text" name="categories[0][name]" class="form-input" value="">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Jumlah Unit</label>
                                    <input type="number" name="categories[0][count]" class="form-input" value="0">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Ikon Kategori</label>
                                    <div class="form-hint" style="margin-bottom:12px;">Format gambar .png transparan. Ukuran direkomendasikan 64 x 64px.</div>
                                    <div style="display: flex; gap: 12px; align-items: flex-end;">
                                        <div class="photo-box" style="width: 80px; height: 80px; position: relative;">
                                            <img id="preview-cat-0" src="{{ asset('assets/earphone.png') }}" alt="Preview" style="padding: 15px; background: rgba(0, 176, 80, 0.08);">
                                        </div>
                                        <div style="display: flex; flex-direction: column; gap: 8px;">
                                            <button type="button" class="btn btn-white" style="padding: 6px 12px; font-size: 12px; border: 1px solid var(--tk-border);" onclick="document.getElementById('img-input-cat-0').click()">Pilih Icon</button>
                                            <button type="button" class="btn btn-white" style="padding: 6px 12px; font-size: 12px; color: var(--tk-danger); border: 1px solid var(--tk-border);" onclick="deleteImage('cat-0', '{{ asset('assets/earphone.png') }}')">Hapus Icon</button>
                                        </div>
                                    </div>
                                    <input type="file" id="img-input-cat-0" name="categories[0][icon]" accept="image/*" style="display:none;" onchange="previewImage(this, 'cat-0')">
                                    <input type="hidden" id="delete-input-cat-0" name="categories[0][delete_image]" value="0">
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>

                <button type="button" id="btn-add-category" class="btn btn-white" style="width: 100%; border: 1px dashed var(--tk-green); color: var(--tk-green); background: transparent; padding: 16px; margin-top: 20px;">
                    + Tambah Kategori Baru
                </button>
            </form>
        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.getElementById('category-container');
            const btnAdd = document.getElementById('btn-add-category');

            function updateTitles() {
                const items = container.querySelectorAll('.category-item');
                items.forEach((item, idx) => {
                    item.querySelector('.cat-title').textContent = 'Kategori ' + (idx + 1);
                });
            }

            container.addEventListener('click', function(e) {
                if (e.target.classList.contains('btn-hapus')) {
                    const item = e.target.closest('.category-item');
                    item.remove();
                    updateTitles();
                }
            });

            btnAdd.addEventListener('click', function() {
                const items = container.querySelectorAll('.category-item');
                let nextIndex = 0;
                if(items.length > 0) {
                    nextIndex = parseInt(items[items.length - 1].getAttribute('data-index')) + 1;
                }

                const template = `
                    <div class="card category-item" data-index="${nextIndex}">
                        <div class="card-header">
                            <span class="cat-title">Kategori Baru</span>
                            <button type="button" class="btn btn-white btn-hapus" style="color: var(--tk-danger); padding: 4px 8px; font-size: 12px;">Hapus</button>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-label">Nama Kategori</label>
                                <input type="text" name="categories[${nextIndex}][name]" class="form-input" value="">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Jumlah Unit</label>
                                <input type="number" name="categories[${nextIndex}][count]" class="form-input" value="0">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Ikon Kategori</label>
                                <div class="form-hint" style="margin-bottom:12px;">Format gambar .png transparan. Ukuran direkomendasikan 64 x 64px.</div>
                                <div style="display: flex; gap: 12px; align-items: flex-end;">
                                    <div class="photo-box" style="width: 80px; height: 80px; position: relative;">
                                        <img id="preview-cat-${nextIndex}" src="{{ asset('assets/earphone.png') }}" alt="Preview" style="padding: 15px; background: rgba(0, 176, 80, 0.08);">
                                    </div>
                                    <div style="display: flex; flex-direction: column; gap: 8px;">
                                        <button type="button" class="btn btn-white" style="padding: 6px 12px; font-size: 12px; border: 1px solid var(--tk-border);" onclick="document.getElementById('img-input-cat-${nextIndex}').click()">Pilih Icon</button>
                                        <button type="button" class="btn btn-white" style="padding: 6px 12px; font-size: 12px; color: var(--tk-danger); border: 1px solid var(--tk-border);" onclick="deleteImage('cat-${nextIndex}', '{{ asset('assets/earphone.png') }}')">Hapus Icon</button>
                                    </div>
                                </div>
                                <input type="file" id="img-input-cat-${nextIndex}" name="categories[${nextIndex}][icon]" accept="image/*" style="display:none;" onchange="previewImage(this, 'cat-${nextIndex}')">
                                <input type="hidden" id="delete-input-cat-${nextIndex}" name="categories[${nextIndex}][delete_image]" value="0">
                            </div>
                        </div>
                    </div>
                `;
                container.insertAdjacentHTML('beforeend', template);
                updateTitles();
            });
        });

        function previewImage(input, placement) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('preview-' + placement).src = e.target.result;
                    document.getElementById('delete-input-' + placement).value = '0';
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        function deleteImage(placement, defaultSrc) {
            document.getElementById('preview-' + placement).src = defaultSrc;
            document.getElementById('img-input-' + placement).value = '';
            document.getElementById('delete-input-' + placement).value = '1';
        }
    </script>
</body>
</html>
