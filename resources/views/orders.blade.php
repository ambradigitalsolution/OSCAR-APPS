<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengajuan Masuk - Seller Center</title>
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
            --tk-orange: #E37400;
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

        .header-search{flex:1;max-width:420px;position:relative;margin:0 16px;}
        .header-search input{width:100%;height:36px;background:rgba(255,255,255,0.2);border:1px solid rgba(255,255,255,0.3);border-radius:6px;padding:0 14px 0 38px;color:#fff;font-size:13px;outline:none;transition:all 0.2s;}
        .header-search input:focus{background:rgba(255,255,255,0.3);border-color:#fff;box-shadow:0 0 0 3px rgba(255,255,255,0.2);}
        .header-search input::placeholder{color:rgba(255,255,255,0.85);}
        .search-icon{position:absolute;left:12px;top:50%;transform:translateY(-50%);color:rgba(255,255,255,0.9);}

        .header-actions{display:flex;align-items:center;gap:4px;margin-left:auto;}
        .header-btn{width:36px;height:36px;border-radius:6px;display:flex;align-items:center;justify-content:center;color:#fff;cursor:pointer;transition:all 0.15s;text-decoration:none;position:relative;}
        .header-btn:hover{background:rgba(255,255,255,0.2);}
        .header-btn .badge-dot{position:absolute;top:7px;right:7px;width:8px;height:8px;background:#EF4444;border-radius:50%;border:1.5px solid #00AA5B;}
        .header-divider{width:1px;height:28px;background:rgba(255,255,255,0.3);margin:0 8px;}
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

        /* Page Header */
        .pg-head{margin-bottom:20px;}
        .breadcrumb{font-size:12px;color:var(--tk-text-sec);margin-bottom:12px;display:flex;align-items:center;gap:4px;}
        .breadcrumb a{color:var(--tk-text-sec);text-decoration:none;}
        .breadcrumb a:hover{color:var(--tk-teal);}
        .breadcrumb span{color:var(--tk-text);}
        .pg-row{display:flex;justify-content:space-between;align-items:flex-start;}
        .pg-row h1{font-size:20px;font-weight:700;margin-bottom:14px;display:flex;align-items:center;gap:6px;}

        /* Stat Cards */
        .stat-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:12px;margin-bottom:20px;}
        .stat-card{background:var(--tk-white);border:1px solid var(--tk-border);border-radius:8px;padding:16px 18px;display:flex;flex-direction:column;gap:6px;transition:box-shadow 0.2s;}
        .stat-card:hover{box-shadow:0 2px 8px rgba(0,0,0,0.06);}
        .stat-card .stat-label{font-size:12px;color:var(--tk-text-sec);font-weight:500;}
        .stat-card .stat-value{font-size:22px;font-weight:700;color:var(--tk-text);}
        .stat-card .stat-sub{font-size:11px;color:var(--tk-text-third);}
        .stat-card.highlight{border-left:3px solid var(--tk-teal);}

        /* Table Box */
        .tbl-box{background:var(--tk-white);border:1px solid var(--tk-border);border-radius:8px;overflow:hidden;}
        .tbl-tabs{display:flex;border-bottom:1px solid var(--tk-border);padding:0 16px;overflow-x:auto;scrollbar-width:none;}
        .tbl-tabs::-webkit-scrollbar{display:none;}
        .tbl-tab{padding:12px 16px;font-size:13px;font-weight:500;color:var(--tk-text-sec);cursor:pointer;border-bottom:2px solid transparent;margin-bottom:-1px;white-space:nowrap;transition:all 0.15s;}
        .tbl-tab:hover{color:var(--tk-text);}
        .tbl-tab.active{color:var(--tk-teal);border-bottom-color:var(--tk-teal);font-weight:600;}
        .tbl-tab .cnt{font-size:11px;background:#e8eaed;color:var(--tk-text-sec);padding:1px 6px;border-radius:10px;margin-left:4px;}
        .tbl-tab.active .cnt{background:var(--tk-teal-light);color:var(--tk-teal);}

        .tbl-filters{display:flex;align-items:center;padding:12px 16px;gap:8px;border-bottom:1px solid var(--tk-border);flex-wrap:wrap;}
        .f-input{border:1px solid var(--tk-border);padding:7px 10px;border-radius:4px;font-size:12px;width:220px;outline:none;transition:border 0.15s;}
        .f-input:focus{border-color:var(--tk-teal);}
        .f-select{border:1px solid var(--tk-border);padding:7px 28px 7px 10px;border-radius:4px;font-size:12px;outline:none;background:var(--tk-white);color:var(--tk-text);cursor:pointer;}
        .f-spacer{flex:1;}
        .f-btn{padding:7px 12px;border:1px solid var(--tk-border);border-radius:4px;background:var(--tk-white);color:var(--tk-text-sec);font-size:12px;cursor:pointer;display:inline-flex;align-items:center;gap:4px;font-weight:500;transition:all 0.15s;}
        .f-btn:hover{background:#f8f9fa;color:var(--tk-text);}
        .f-btn svg{width:14px;height:14px;}

        .btn{padding:7px 14px;border-radius:4px;font-size:13px;font-weight:500;cursor:pointer;border:1px solid var(--tk-border);background:var(--tk-white);color:var(--tk-text);display:inline-flex;align-items:center;gap:6px;transition:all 0.15s;text-decoration:none;white-space:nowrap;}
        .btn:hover{background:#f8f9fa;border-color:#dadce0;}
        .btn-teal{background:var(--tk-teal);color:#fff;border-color:var(--tk-teal);}
        .btn-teal:hover{background:#00796B;border-color:#00796B;}

        /* Table */
        table{width:100%;border-collapse:collapse;}
        thead th{background:#FAFBFC;padding:10px 16px;text-align:left;font-size:11px;font-weight:600;color:var(--tk-text-sec);text-transform:uppercase;letter-spacing:0.3px;border-bottom:1px solid var(--tk-border);white-space:nowrap;}
        tbody td{padding:14px 16px;border-bottom:1px solid #f1f3f4;vertical-align:middle;font-size:13px;}
        tbody tr:hover{background:#fafbfc;}
        tbody tr:last-child td{border-bottom:none;}

        .td-stack{display:flex;flex-direction:column;gap:2px;}
        .td-val{font-size:13px;font-weight:500;color:var(--tk-text);}
        .td-sub{font-size:11px;color:var(--tk-text-third);}

        /* Status Badges */
        .badge{display:inline-flex;align-items:center;gap:4px;padding:3px 10px;border-radius:12px;font-size:11px;font-weight:600;}
        .badge-new{background:#FFF3E0;color:#E65100;}
        .badge-process{background:#E3F2FD;color:#1565C0;}
        .badge-shipped{background:#E8F5E9;color:#2E7D32;}
        .badge-done{background:#F1F8E9;color:#558B2F;}
        .badge-cancel{background:#FFEBEE;color:#C62828;}

        .order-id{font-size:13px;font-weight:600;color:var(--tk-teal);text-decoration:none;}
        .order-id:hover{text-decoration:underline;}

        .buyer-cell{display:flex;align-items:center;gap:8px;}
        .buyer-avatar{width:28px;height:28px;border-radius:50%;background:var(--tk-teal-light);color:var(--tk-teal);display:flex;align-items:center;justify-content:center;font-size:11px;font-weight:700;flex-shrink:0;}

        .act-cell{display:flex;gap:6px;align-items:center;justify-content:flex-end;}
        .act-link{font-size:12px;color:var(--tk-teal);text-decoration:none;font-weight:500;padding:4px 8px;border-radius:4px;transition:background 0.15s;}
        .act-link:hover{background:var(--tk-teal-light);}

        /* Pagination */
        .tbl-footer{display:flex;align-items:center;justify-content:space-between;padding:12px 16px;border-top:1px solid var(--tk-border);background:#fafbfc;}
        .tbl-footer-left{font-size:12px;color:var(--tk-text-sec);}
        .pagination{display:flex;align-items:center;gap:4px;flex-wrap:wrap;justify-content:center;}
        .pg-btn{width:30px;height:30px;border:1px solid var(--tk-border);border-radius:4px;display:flex;align-items:center;justify-content:center;background:var(--tk-white);color:var(--tk-text-sec);cursor:pointer;font-size:12px;font-weight:500;transition:all 0.15s;}
        .pg-btn:hover{background:#f1f3f4;}
        .pg-btn.active{background:var(--tk-teal);color:#fff;border-color:var(--tk-teal);}
        .pg-btn.disabled{opacity:0.4;cursor:default;}

        .cb{width:16px;height:16px;accent-color:var(--tk-teal);cursor:pointer;}

        /* Mobile Cards */
        .mobile-cards{display:none;}
        .m-card{background:var(--tk-white);border:1px solid var(--tk-border);border-radius:8px;padding:14px;display:flex;flex-direction:column;gap:10px;}
        .m-card-header{display:flex;justify-content:space-between;align-items:center;}
        .m-card-grid{display:grid;grid-template-columns:1fr 1fr;gap:8px;}
        .m-card-stat{background:#f8f9fa;border-radius:6px;padding:8px 10px;}
        .m-card-stat .label{font-size:10px;color:var(--tk-text-third);text-transform:uppercase;font-weight:600;letter-spacing:0.3px;margin-bottom:2px;}
        .m-card-stat .value{font-size:13px;font-weight:600;color:var(--tk-text);}
        .m-card-footer{display:flex;align-items:center;justify-content:space-between;padding-top:8px;border-top:1px solid #f1f3f4;}

        /* Hamburger */
        .hamburger{display:none;width:36px;height:36px;align-items:center;justify-content:center;border:none;background:rgba(255,255,255,0.15);border-radius:6px;color:#fff;cursor:pointer;flex-shrink:0;}
        .sidebar-overlay{display:none;position:fixed;inset:0;background:rgba(0,0,0,0.4);z-index:199;}

        /* ========== RESPONSIVE ========== */
        @media(max-width:1024px){
            .stat-grid{grid-template-columns:repeat(2,1fr);}
            .pg-row{flex-direction:column;gap:14px;}
            .header-search{max-width:280px;}
        }

        @media(max-width:768px){
            .hamburger{display:flex;}
            .sidebar{position:fixed;left:-260px;top:56px;bottom:0;width:260px;z-index:200;transition:left 0.25s ease;box-shadow:none;}
            .sidebar.open{left:0;box-shadow:4px 0 20px rgba(0,0,0,0.15);}
            .sidebar-overlay.show{display:block;z-index:199;}

            .header-search{display:none;}
            .brand-divider,.brand-label{display:none;}
            .header-btn[title="Pusat Bantuan"],.header-btn[title="Pengaturan"]{display:none;}
            .header-divider{display:none;}
            .user-name{display:none;}

            .main{padding:16px 16px 80px 16px;}
            .stat-grid{grid-template-columns:1fr 1fr;}

            .tbl-box table,.tbl-box thead,.tbl-box tbody{display:none;}
            .mobile-cards{display:flex;flex-direction:column;gap:12px;padding:12px 14px;}

            .tbl-tabs{padding:0 12px;gap:0;}
            .tbl-tab{padding:10px 10px;font-size:12px;}

            .tbl-filters{padding:10px 12px;gap:6px;}
            .f-input{width:100%;flex:1;}
            .f-select{flex:1;min-width:0;}
            .f-spacer{display:none;}

            .tbl-footer{flex-direction:column;gap:10px;align-items:stretch;text-align:center;}
        }

        @media(max-width:480px){
            .stat-grid{grid-template-columns:1fr;}
            .m-card-grid{grid-template-columns:1fr 1fr;}
            .breadcrumb{font-size:11px;}
        }
    </style>
</head>
<body>

<!-- ========== TOP HEADER ========== -->
<header class="top-header">
    <button class="hamburger" onclick="document.querySelector('.sidebar').classList.toggle('open');document.querySelector('.sidebar-overlay').classList.toggle('show');">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="6" x2="21" y2="6" stroke-linecap="round"/><line x1="3" y1="12" x2="21" y2="12" stroke-linecap="round"/><line x1="3" y1="18" x2="21" y2="18" stroke-linecap="round"/></svg>
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

    <div class="header-search">
        <svg class="search-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3" stroke-linecap="round"/></svg>
        <input type="text" placeholder="Cari pesanan...">
    </div>

    <div class="header-actions">

        <div class="header-user">
            <div class="user-avatar">{{ strtoupper(substr($role, 0, 1)) }}</div>
            <span class="user-name">{{ $role == 'owner' ? 'Admin Owner' : 'Member' }}</span>

        </div>
    </div>
</header>

<!-- ========== LAYOUT ========== -->
<div class="layout">

    <!-- Sidebar Overlay (mobile) -->
    <div class="sidebar-overlay" onclick="document.querySelector('.sidebar').classList.remove('open');this.classList.remove('show');"></div>

    <!-- ========== SIDEBAR ========== -->
    <aside class="sidebar">
        <a href="/dashboard?role={{ $role }}" class="sb-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" stroke-linecap="round" stroke-linejoin="round"/><polyline points="9,22 9,12 15,12 15,22" stroke-linecap="round" stroke-linejoin="round"/></svg>
            Beranda
        </a>

        <a href="/orders?role={{ $role }}" class="sb-item active">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 5H7a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-2" stroke-linecap="round" stroke-linejoin="round"/><rect x="9" y="3" width="6" height="4" rx="1" stroke-linecap="round" stroke-linejoin="round"/><line x1="9" y1="12" x2="15" y2="12" stroke-linecap="round"/><line x1="9" y1="16" x2="13" y2="16" stroke-linecap="round"/></svg>
            Pesanan
        </a>

        <div class="sb-section">Toko</div>

        <div class="sb-item" onclick="this.classList.toggle('active');this.nextElementSibling.classList.toggle('open');" style="cursor:pointer;">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z" stroke-linecap="round" stroke-linejoin="round"/><line x1="7" y1="7" x2="7.01" y2="7" stroke-linecap="round" stroke-width="2"/></svg>
            Produk
            <svg class="arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <div class="sb-sub open">
            <a href="/seller?role={{ $role }}">Kelola produk</a>
            @if($role == 'owner')
            <a href="/product/form?role={{ $role }}">Tambahkan produk</a>
            <a href="/settings/banner?role={{ $role }}">Pengaturan banner</a>
            <a href="/settings/category?role={{ $role }}">Pengaturan kategori</a>
            @endif
        </div>
    </aside>

    <!-- ========== MAIN CONTENT ========== -->
    <main class="main">

        <!-- Page Header -->
        <div class="pg-head">
            <div class="breadcrumb">
                <a href="/seller?role={{ $role }}">Seller Center</a>
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                <span>Pengajuan</span>
            </div>
            <div class="pg-row" style="display: flex; justify-content: space-between; align-items: center;">
                <div>
                    <h1>Pengajuan Masuk</h1>
                </div>
                <div>
                    <a href="/orders/export" class="btn-primary" style="background-color: #10B981; color: white; padding: 10px 16px; border-radius: 6px; text-decoration: none; display: flex; align-items: center; gap: 8px; font-size: 14px; font-weight: 500;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                        Download Laporan Barang Keluar
                    </a>
                </div>
            </div>
        </div>

        <!-- Stats -->
        <div class="stat-grid">
            <div class="stat-card highlight">
                <div class="stat-label">Pengajuan Baru</div>
                <div class="stat-value">{{ $stats['pengajuan_baru'] }}</div>
                <div class="stat-sub">Perlu dikonfirmasi</div>
            </div>
            <div class="stat-card">
                <div class="stat-label">Dikonfirmasi</div>
                <div class="stat-value">{{ $stats['dikonfirmasi'] }}</div>
                <div class="stat-sub">Negosiasi harga selesai</div>
            </div>
            <div class="stat-card">
                <div class="stat-label">Dalam Pengiriman</div>
                <div class="stat-value">{{ $stats['dalam_kirim'] }}</div>
                <div class="stat-sub">Sedang dikirim ke mitra</div>
            </div>
            <div class="stat-card">
                <div class="stat-label">Selesai</div>
                <div class="stat-value">{{ $stats['selesai'] }}</div>
                <div class="stat-sub">Bulan ini</div>
            </div>
        </div>

        <!-- Orders Table -->
        <div class="tbl-box">
            <!-- Tabs -->
            <div class="tbl-tabs" id="status-tabs">
                <div class="tbl-tab active" data-target="semua">Semua <span class="cnt">{{ count($orders) }}</span></div>
                <div class="tbl-tab" data-target="pengajuan baru">Pengajuan Baru <span class="cnt">{{ collect($orders)->where('status','Pengajuan Baru')->count() }}</span></div>
                <div class="tbl-tab" data-target="dikonfirmasi">Dikonfirmasi <span class="cnt">{{ collect($orders)->where('status','Dikonfirmasi')->count() }}</span></div>
                <div class="tbl-tab" data-target="dalam pengiriman">Dalam Pengiriman <span class="cnt">{{ collect($orders)->where('status','Dalam Pengiriman')->count() }}</span></div>
                <div class="tbl-tab" data-target="selesai">Selesai <span class="cnt">{{ collect($orders)->where('status','Selesai')->count() }}</span></div>
                <div class="tbl-tab" data-target="ditolak">Ditolak <span class="cnt">{{ collect($orders)->where('status','Ditolak')->count() }}</span></div>
            </div>

            <!-- Filters -->
            <div class="tbl-filters">
                <input type="text" id="search-input" class="f-input" placeholder="Cari No. Pengajuan, Nama Mitra...">
                <select id="status-select" class="f-select">
                    <option value="semua">Semua Status</option>
                    <option value="pengajuan baru">Pengajuan Baru</option>
                    <option value="dikonfirmasi">Dikonfirmasi</option>
                    <option value="dalam pengiriman">Dalam Pengiriman</option>
                    <option value="selesai">Selesai</option>
                    <option value="ditolak">Ditolak</option>
                </select>
                <select id="date-select" class="f-select">
                    <option value="all">Semua Waktu</option>
                    <option value="7">7 Hari Terakhir</option>
                    <option value="30">30 Hari Terakhir</option>
                </select>
                <div class="f-spacer"></div>

            </div>

            <!-- Table -->
            <table>
                <thead>
                    <tr>
                        <th>No. Pengajuan</th>
                        <th>Mitra</th>
                        <th>Produk</th>
                        <th style="width:80px;">Jumlah</th>
                        <th style="width:130px;">Status</th>
                        <th style="width:100px;">Tanggal</th>
                        <th style="width:100px;text-align:right;">Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr class="order-row" data-status="{{ strtolower($order->status) }}" data-search="{{ strtolower(($order->order_id) . ' ' . ($order->buyer_name)) }}" data-date="{{ $order->created_at->format('Y-m-d') }}">
                        <td><a href="#" class="order-id">{{ $order->order_id }}</a></td>
                        <td>
                            <div class="buyer-cell">
                                <div class="buyer-avatar">{{ strtoupper(substr($order->buyer_name, 0, 1)) }}</div>
                                <div class="td-stack">
                                    <div class="td-val">{{ $order->buyer_name }}</div>
                                    <div class="td-sub">{{ $order->buyer_city }}</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="td-stack">
                                <div class="td-val">{{ $order->items->first()->product_name ?? 'Produk' }}</div>
                                <div class="td-sub">{{ $order->items->count() > 1 ? '+ ' . ($order->items->count() - 1) . ' barang lain' : '' }}</div>
                            </div>
                        </td>
                        <td><div class="td-val">{{ $order->items->sum('qty') }}</div></td>
                        <td>
                            @php
                                $badgeClass = match($order->status) {
                                    'Pengajuan Baru' => 'badge-new',
                                    'Dikonfirmasi' => 'badge-process',
                                    'Dalam Pengiriman' => 'badge-shipped',
                                    'Selesai' => 'badge-done',
                                    'Ditolak' => 'badge-cancel',
                                    default => 'badge-new',
                                };
                            @endphp
                            <span class="badge {{ $badgeClass }}">{{ $order->status }}</span>
                        </td>
                        <td><div class="td-sub">{{ $order->created_at->format('d/m/Y') }}</div></td>
                        <td>
                            <div class="act-cell">
                                @if($role == 'owner')
                                <a href="/orders/{{ $order->id }}?role={{ $role }}" class="act-link">Detail</a>
                                @else
                                <span style="font-size:12px;color:var(--tk-text-third);">Lihat</span>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Mobile Cards -->
            <div class="mobile-cards">
                @foreach($orders as $order)
                <div class="m-card order-row" data-status="{{ strtolower($order->status) }}" data-search="{{ strtolower(($order->order_id) . ' ' . ($order->buyer_name)) }}" data-date="{{ $order->created_at->format('Y-m-d') }}">
                    <div class="m-card-header">
                        <a href="#" class="order-id">{{ $order->order_id }}</a>
                        @php
                            $badgeClass = match($order->status) {
                                'Pengajuan Baru' => 'badge-new',
                                'Dikonfirmasi' => 'badge-process',
                                'Dalam Pengiriman' => 'badge-shipped',
                                'Selesai' => 'badge-done',
                                'Ditolak' => 'badge-cancel',
                                default => 'badge-new',
                            };
                        @endphp
                        <span class="badge {{ $badgeClass }}">{{ $order->status }}</span>
                    </div>
                    <div class="m-card-grid">
                        <div class="m-card-stat">
                            <div class="label">Mitra</div>
                            <div class="value">{{ $order->buyer_name }}</div>
                        </div>
                        <div class="m-card-stat">
                            <div class="label">Jumlah</div>
                            <div class="value">{{ $order->items->sum('qty') }} barang</div>
                        </div>
                        <div class="m-card-stat">
                            <div class="label">Produk</div>
                            <div class="value">{{ $order->items->first()->product_name ?? 'Produk' }}</div>
                        </div>
                        <div class="m-card-stat">
                            <div class="label">Tanggal</div>
                            <div class="value">{{ $order->created_at->format('d/m/Y') }}</div>
                        </div>
                    </div>
                    <div class="m-card-footer">
                        <div class="td-sub">{{ $order->buyer_city }}</div>
                        @if($role == 'owner')
                        <a href="/orders/{{ $order->id }}?role={{ $role }}" class="act-link" style="font-size:13px;">Detail</a>
                        @else
                        <span style="font-size:12px;color:var(--tk-text-third);">Lihat</span>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="tbl-footer">
                <div class="tbl-footer-left">Total pengajuan: <strong>{{ count($orders) }}</strong></div>
                <div style="display:flex;align-items:center;gap:12px;">
                    <select class="f-select" style="font-size:12px;">
                        <option>20/halaman</option>
                    </select>
                    <div class="pagination">
                        <div class="pg-btn disabled">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m15 18-6-6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </div>
                        <div class="pg-btn active">1</div>
                        <div class="pg-btn disabled">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const searchInput = document.getElementById('search-input');
        const statusSelect = document.getElementById('status-select');
        const dateSelect = document.getElementById('date-select');
        const tabs = document.querySelectorAll('#status-tabs .tbl-tab');
        const orderRows = document.querySelectorAll('.order-row');
        
        let currentStatus = 'semua';
        
        function filterOrders() {
            const query = searchInput ? searchInput.value.toLowerCase() : '';
            const selectDate = dateSelect ? dateSelect.value : 'all';
            
            const today = new Date();
            today.setHours(0, 0, 0, 0);
            
            orderRows.forEach(row => {
                const status = row.getAttribute('data-status');
                const searchData = row.getAttribute('data-search');
                const rowDateStr = row.getAttribute('data-date');
                const rowDate = new Date(rowDateStr);
                rowDate.setHours(0, 0, 0, 0);
                
                const matchStatus = (currentStatus === 'semua') || (status === currentStatus);
                const matchSearch = searchData.includes(query);
                
                let matchDate = true;
                if (selectDate !== 'all') {
                    const diffTime = today - rowDate;
                    const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); 
                    if (selectDate === '7') {
                        matchDate = diffDays <= 7 && diffDays >= -1;
                    } else if (selectDate === '30') {
                        matchDate = diffDays <= 30 && diffDays >= -1;
                    }
                }
                
                if (matchStatus && matchSearch && matchDate) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }

        if (searchInput) {
            searchInput.addEventListener('input', filterOrders);
        }
        
        if (statusSelect) {
            statusSelect.addEventListener('change', (e) => {
                const val = e.target.value;
                tabs.forEach(t => {
                    if (t.getAttribute('data-target') === val) {
                        t.classList.add('active');
                        currentStatus = val;
                    } else {
                        t.classList.remove('active');
                    }
                });
                if(val === 'semua') currentStatus = 'semua';
                filterOrders();
            });
        }
        
        if (dateSelect) {
            dateSelect.addEventListener('change', filterOrders);
        }
        
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
                currentStatus = tab.getAttribute('data-target');
                
                if(statusSelect) {
                    statusSelect.value = currentStatus;
                }
                
                filterOrders();
            });
        });
        
        // Initial filter
        filterOrders();
    });
</script>
</body>
</html>
