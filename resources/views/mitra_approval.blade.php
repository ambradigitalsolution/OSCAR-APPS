<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persetujuan Mitra - App Oscar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --tk-header: #00B050;
            --tk-teal: #00897B;
            --tk-teal-light: #E0F2F1;
            --tk-bg: #F4F6F8;
            --tk-white: #FFFFFF;
            --tk-border: #E8EAED;
            --tk-text: #202124;
            --tk-text-sec: #5F6368;
            --tk-text-third: #9AA0A6;
            --tk-red: #D93025;
            --tk-blue: #1A73E8;
            --tk-green: #1E8E3E;
        }
        *{margin:0;padding:0;box-sizing:border-box;font-family:'Inter',sans-serif;}
        body{background:var(--tk-bg);color:var(--tk-text);display:flex;flex-direction:column;height:100vh;overflow:hidden;font-size:13px;-webkit-font-smoothing:antialiased;}

        /* ========== TOP HEADER ========== */
        .top-header{height:56px;background:#00AA5B;color:#fff;display:flex;align-items:center;padding:0 20px;gap:12px;z-index:100;flex-shrink:0;border-bottom:1px solid rgba(0,0,0,0.05);}
        .header-brand{display:flex;align-items:center;gap:10px;text-decoration:none;color:#fff;flex-shrink:0;}
        .header-brand svg{flex-shrink:0;}
        .brand-text{font-size:16px;font-weight:700;letter-spacing:-0.3px;white-space:nowrap;color:#fff;}
        .brand-divider{width:1px;height:22px;background:rgba(255,255,255,0.3);margin:0 6px;}
        .brand-label{font-size:11px;font-weight:700;color:rgba(255,255,255,0.85);text-transform:uppercase;letter-spacing:1px;}
        
        .header-actions{display:flex;align-items:center;gap:4px;margin-left:auto;}
        .header-user{display:flex;align-items:center;gap:10px;padding:5px 12px 5px 5px;border-radius:6px;cursor:pointer;transition:background 0.15s;}
        .header-user:hover{background:rgba(255,255,255,0.2);}
        .user-avatar{width:30px;height:30px;border-radius:50%;background:#fff;color:#00AA5B;display:flex;align-items:center;justify-content:center;font-size:12px;font-weight:700;}
        .user-name{font-size:13px;color:#fff;font-weight:600;}

        /* ========== LAYOUT ========== */
        .layout{display:flex;flex:1;overflow:hidden;}

        /* ========== SIDEBAR ========== */
        .sidebar{width:216px;background:var(--tk-white);border-right:1px solid var(--tk-border);overflow-y:auto;flex-shrink:0;padding:8px 0;scrollbar-width:none;}
        .sidebar::-webkit-scrollbar{display:none;}

        .sb-item{display:flex;align-items:center;gap:10px;padding:9px 16px;color:var(--tk-text-sec);text-decoration:none;font-size:13px;font-weight:500;cursor:pointer;transition:all 0.12s;border-left:3px solid transparent;position:relative;}
        .sb-item:hover{background:#f8f9fa;color:var(--tk-text);}
        .sb-item.active{color:var(--tk-teal);background:#E0F7F5;border-left-color:var(--tk-teal);font-weight:600;}
        .sb-item svg{width:18px;height:18px;flex-shrink:0;color:inherit;opacity:0.7;}
        .sb-item.active svg{opacity:1;}
        .sb-item .arrow{margin-left:auto;transition:transform 0.2s;}
        .sb-item.active .arrow{transform:rotate(180deg);}

        .sb-sub{display:none;flex-direction:column;padding:2px 0 6px 0;}
        .sb-sub.open{display:flex;}
        .sb-sub a{padding:7px 16px 7px 46px;font-size:13px;color:var(--tk-text-sec);text-decoration:none;font-weight:500;transition:all 0.15s;}
        .sb-sub a:hover{color:var(--tk-green);background:#f8f9fa;}
        .sb-sub a.active{color:var(--tk-green);font-weight:700;background:transparent;}

        .sb-section{padding:20px 16px 6px;font-size:10px;font-weight:700;color:var(--tk-text-third);text-transform:uppercase;letter-spacing:0.8px;}

        /* ========== MAIN ========== */
        .main{flex:1;overflow-y:auto;padding:20px 24px 40px;scrollbar-width:none;}
        .main::-webkit-scrollbar{display:none;}

        .pg-head{margin-bottom:20px;}
        .breadcrumb{font-size:12px;color:var(--tk-text-sec);margin-bottom:12px;display:flex;align-items:center;gap:4px;}
        .breadcrumb a{color:var(--tk-text-sec);text-decoration:none;}
        .breadcrumb a:hover{color:var(--tk-teal);}
        .breadcrumb span{color:var(--tk-text);}
        .pg-row{display:flex;justify-content:space-between;align-items:flex-start;}
        .pg-row h1{font-size:20px;font-weight:700;margin-bottom:14px;display:flex;align-items:center;gap:6px;}
        
        .tbl-box{background:var(--tk-white);border:1px solid var(--tk-border);border-radius:8px;overflow:hidden;}
        
        table{width:100%;border-collapse:collapse;}
        thead th{background:#FAFBFC;padding:12px 16px;text-align:left;font-size:11px;font-weight:600;color:var(--tk-text-sec);text-transform:uppercase;letter-spacing:0.3px;border-bottom:1px solid var(--tk-border);white-space:nowrap;}
        tbody td{padding:14px 16px;border-bottom:1px solid #f1f3f4;vertical-align:top;font-size:13px;}
        tbody tr:hover{background:#fafbfc;}
        tbody tr:last-child td{border-bottom:none;}

        .badge {
            display: inline-block;
            padding: 4px 8px;
            font-size: 11px;
            font-weight: 600;
            border-radius: 4px;
            text-transform: uppercase;
        }
        .badge-pending { background: #fef3c7; color: #d97706; }
        .badge-approved { background: #dcfce7; color: #15803d; }
        .badge-rejected { background: #fee2e2; color: #b91c1c; }

        .btn-act {
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 600;
            cursor: pointer;
            transition: opacity 0.2s;
            color: white;
        }
        .btn-act:hover { opacity: 0.9; }
        .btn-approve { background: var(--tk-green); }
        .btn-reject { background: var(--tk-red); }
        .btn-delete { background: var(--tk-text-sec); }

        .actions-group {
            display: flex;
            gap: 8px;
        }
        
        /* Hamburger */
        .hamburger{display:none;width:36px;height:36px;align-items:center;justify-content:center;border:none;background:rgba(255,255,255,0.15);border-radius:6px;color:#fff;cursor:pointer;flex-shrink:0;}
        .sidebar-overlay{display:none;position:fixed;inset:0;background:rgba(0,0,0,0.4);z-index:199;}
        
        .empty-state { padding: 40px; text-align: center; color: var(--tk-text-sec); font-size: 14px; }
    </style>
</head>
<body>

<!-- ========== TOP HEADER ========== -->
<header class="top-header">
    <button class="hamburger" onclick="document.querySelector('.sidebar').classList.toggle('open');document.querySelector('.sidebar-overlay').classList.toggle('show');">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
    </button>
    <a href="/dashboard?role={{ $role }}" class="header-brand">
        <svg viewBox="0 0 24 24" width="24" height="24" fill="none">
            <path d="M8 9V7C8 4.79 9.79 3 12 3C14.2 3 16 4.79 16 7V9" stroke="#fff" stroke-width="2.5" stroke-linecap="round"/>
            <rect x="3" y="9" width="18" height="12" rx="2" fill="#fff"/>
            <path d="M8 12V14M16 12V14" stroke="#00AA5B" stroke-width="2" stroke-linecap="round"/>
        </svg>
        <span class="brand-text">Seller Center</span>
    </a>
    <div class="brand-divider"></div>
    <span class="brand-label">App Oscar</span>

    <div class="header-actions">
        <!-- User -->
        <div class="header-user">
            <div class="user-avatar">{{ strtoupper(substr($role, 0, 1)) }}</div>
            <span class="user-name">{{ $role == 'owner' ? 'Admin Owner' : 'Member' }}</span>
        </div>
    </div>
</header>

<!-- ========== LAYOUT ========== -->
<div class="layout">
    <div class="sidebar-overlay" onclick="document.querySelector('.sidebar').classList.remove('open');this.classList.remove('show');"></div>

    <!-- ========== SIDEBAR ========== -->
    <aside class="sidebar">
        <a href="/dashboard?role={{ $role }}" class="sb-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9,22 9,12 15,12 15,22"/></svg>
            Beranda
        </a>
        <a href="/orders?role={{ $role }}" class="sb-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 5H7a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-2"/><rect x="9" y="3" width="6" height="4" rx="1"/><line x1="9" y1="12" x2="15" y2="12"/><line x1="9" y1="16" x2="13" y2="16"/></svg>
            Pesanan
        </a>
        <div class="sb-section">Toko</div>
        <div class="sb-item" onclick="this.classList.toggle('active');this.nextElementSibling.classList.toggle('open');" style="cursor:pointer;">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/><line x1="7" y1="7" x2="7.01" y2="7" stroke-width="2"/></svg>
            Produk
            <svg class="arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6"/></svg>
        </div>
        <div class="sb-sub">
            <a href="/seller?role={{ $role }}">Kelola produk</a>
            @if($role == 'owner')
            <a href="/product/form?role={{ $role }}">Tambahkan produk</a>
            <a href="/settings/banner?role={{ $role }}">Pengaturan banner</a>
            <a href="/settings/category?role={{ $role }}">Pengaturan kategori</a>
            @endif
        </div>
        @if($role == 'owner')
        <div class="sb-section">Mitra</div>
        <a href="/mitra?role={{ $role }}" class="sb-item active">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            Data Mitra
        </a>
        @endif
    </aside>

    <!-- ========== MAIN CONTENT ========== -->
    <main class="main">
        <div class="pg-head">
            <div class="breadcrumb">
                <a href="#">Mitra</a>
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6"/></svg>
                <span>Data Mitra</span>
            </div>
            <div class="pg-row">
                <h1>Persetujuan Data Mitra</h1>
            </div>
        </div>

        <div class="tbl-box">
            @if(count($mitras) > 0)
            <table>
                <thead>
                    <tr>
                        <th>Pemohon</th>
                        <th>Kontak</th>
                        <th>Bisnis & Alamat</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Status</th>
                        <th style="text-align: right;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mitras as $mitra)
                    <tr>
                        <td>
                            <div style="font-weight: 600; color: var(--tk-text);">{{ $mitra->name }}</div>
                        </td>
                        <td>
                            <div style="color: var(--tk-text);">{{ $mitra->email }}</div>
                            <div style="color: var(--tk-text-sec); font-size: 12px; margin-top: 2px;">{{ $mitra->phone }}</div>
                        </td>
                        <td>
                            <div style="font-weight: 500;">{{ $mitra->business_name }}</div>
                            <div style="color: var(--tk-text-sec); font-size: 12px; margin-top: 2px; max-width: 250px;">{{ $mitra->address }}</div>
                        </td>
                        <td>
                            <div style="color: var(--tk-text-sec);">{{ $mitra->created_at->format('d M Y') }}</div>
                            <div style="color: var(--tk-text-third); font-size: 11px;">{{ $mitra->created_at->format('H:i') }}</div>
                        </td>
                        <td>
                            @if($mitra->status == 'pending')
                                <span class="badge badge-pending">Menunggu</span>
                            @elseif($mitra->status == 'approved')
                                <span class="badge badge-approved">Disetujui</span>
                            @else
                                <span class="badge badge-rejected">Ditolak</span>
                            @endif
                        </td>
                        <td style="text-align: right;">
                            <div class="actions-group" style="justify-content: flex-end;">
                                @if($mitra->status == 'pending')
                                    <button class="btn-act btn-approve" onclick="actionMitra({{ $mitra->id }}, 'approve')">Setujui</button>
                                    <button class="btn-act btn-reject" onclick="actionMitra({{ $mitra->id }}, 'reject')">Tolak</button>
                                @else
                                    <span style="color: var(--tk-text-third); font-size: 12px; margin-top: 6px; margin-right: 8px;">Telah diproses</span>
                                @endif
                                <button class="btn-act btn-delete" onclick="deleteMitra({{ $mitra->id }})">Hapus</button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <div class="empty-state">
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="margin-bottom: 16px; color: var(--tk-text-third);"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                <p>Belum ada data pengajuan mitra.</p>
            </div>
            @endif
        </div>
    </main>
</div>

<script>
    function actionMitra(id, type) {
        let confirmMsg = type === 'approve' ? 'Anda yakin ingin menyetujui pengajuan mitra ini?' : 'Anda yakin ingin menolak pengajuan mitra ini?';
        if (confirm(confirmMsg)) {
            fetch(`/mitra/${id}/${type}?role={{ $role }}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    alert('Berhasil memperbarui status mitra.');
                    window.location.reload();
                } else {
                    alert('Terjadi kesalahan: ' + data.error);
                }
            })
            .catch(err => {
                console.error(err);
                alert('Gagal menghubungi server.');
            });
        }
    }

    function deleteMitra(id) {
        if (confirm('Anda yakin ingin menghapus data mitra ini secara permanen?')) {
            fetch(`/mitra/${id}/delete?role={{ $role }}`, {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    alert('Data mitra berhasil dihapus.');
                    window.location.reload();
                } else {
                    alert('Terjadi kesalahan: ' + data.error);
                }
            })
            .catch(err => {
                console.error(err);
                alert('Gagal menghubungi server.');
            });
        }
    }
</script>
</body>
</html>
