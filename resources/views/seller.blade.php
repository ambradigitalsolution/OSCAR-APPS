<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Center - App Oscar</title>
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
        .sidebar{width:216px;background:var(--tk-white);border-right:1px solid var(--tk-border);overflow-y:auto;flex-shrink:0;padding:8px 0;scrollbar-width:none; /* Firefox */}
        .sidebar::-webkit-scrollbar{display:none; /* Chrome/Safari */}

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
        .pg-row h1 .info-icon{color:var(--tk-teal);cursor:help;}
        .pg-tabs{display:flex;gap:0;border-bottom:2px solid var(--tk-border);}
        .pg-tab{padding:10px 16px 12px;font-size:13px;color:var(--tk-text-sec);text-decoration:none;font-weight:500;border-bottom:2px solid transparent;margin-bottom:-2px;transition:all 0.15s;white-space:nowrap;}
        .pg-tab:hover{color:var(--tk-text);}
        .pg-tab.active{color:var(--tk-text);border-bottom-color:var(--tk-text);font-weight:600;}
        .pg-actions{display:flex;gap:8px;align-items:flex-start;flex-shrink:0;}
        .btn{padding:7px 14px;border-radius:4px;font-size:13px;font-weight:500;cursor:pointer;border:1px solid var(--tk-border);background:var(--tk-white);color:var(--tk-text);display:inline-flex;align-items:center;gap:6px;transition:all 0.15s;text-decoration:none;white-space:nowrap;}
        .btn:hover{background:#f8f9fa;border-color:#dadce0;}
        .btn-teal{background:var(--tk-teal);color:#fff;border-color:var(--tk-teal);}
        .btn-teal:hover{background:#00796B;border-color:#00796B;}

        /* Rekomendasi */
        .rek-section{background:var(--tk-white);border:1px solid var(--tk-border);border-radius:8px;padding:16px 20px;margin-bottom:20px;}
        .rek-title{font-size:14px;font-weight:600;margin-bottom:14px;}
        .rek-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:12px;}
        .rek-card{border:1px solid var(--tk-border);border-radius:6px;padding:14px;display:flex;flex-direction:column;gap:6px;}
        .rek-card-head{display:flex;align-items:flex-start;gap:10px;}
        .rek-icon{width:32px;height:32px;border-radius:6px;display:flex;align-items:center;justify-content:center;flex-shrink:0;}
        .rek-card h4{font-size:13px;font-weight:600;line-height:1.4;}
        .rek-card p{font-size:12px;color:var(--tk-text-sec);line-height:1.5;}
        .rek-card .rek-link{font-size:12px;color:var(--tk-teal);text-decoration:none;font-weight:500;margin-top:auto;}
        .rek-card .rek-link:hover{text-decoration:underline;}

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
        .f-select{border:1px solid var(--tk-border);padding:7px 28px 7px 10px;border-radius:4px;font-size:12px;outline:none;background:var(--tk-white);color:var(--tk-text);cursor:pointer; text-overflow: ellipsis; white-space: nowrap; overflow: hidden; max-width: 100%;}
        .f-spacer{flex:1;}
        .f-btn{padding:7px 12px;border:1px solid var(--tk-border);border-radius:4px;background:var(--tk-white);color:var(--tk-text-sec);font-size:12px;cursor:pointer;display:inline-flex;align-items:center;gap:4px;font-weight:500;transition:all 0.15s; white-space: nowrap;}
        .f-btn:hover{background:#f8f9fa;color:var(--tk-text);}
        .f-btn svg{width:14px;height:14px;flex-shrink:0;}

        /* Table */
        table{width:100%;border-collapse:collapse;}
        thead th{background:#FAFBFC;padding:10px 16px;text-align:left;font-size:11px;font-weight:600;color:var(--tk-text-sec);text-transform:uppercase;letter-spacing:0.3px;border-bottom:1px solid var(--tk-border);white-space:nowrap;}
        tbody td{padding:14px 16px;border-bottom:1px solid #f1f3f4;vertical-align:middle;font-size:13px;}
        tbody tr:hover{background:#fafbfc;}
        tbody tr:last-child td{border-bottom:none;}

        .p-cell{display:flex;gap:10px;align-items:flex-start;}
        .p-img{width:52px;height:52px;border-radius:4px;border:1px solid var(--tk-border);background:#f8f9fa;display:flex;align-items:center;justify-content:center;flex-shrink:0;overflow:hidden;}
        .p-img svg{color:var(--tk-text-third);width:22px;height:22px;}
        .p-detail{display:flex;flex-direction:column;gap:3px;min-width:0;}
        .p-name{font-size:13px;font-weight:500;color:var(--tk-text);line-height:1.4;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;}
        .p-meta{font-size:11px;color:var(--tk-text-third);display:flex;align-items:center;gap:6px;}
        .p-meta span{display:flex;align-items:center;gap:3px;}

        .td-stack{display:flex;flex-direction:column;gap:2px;}
        .td-label{font-size:11px;color:var(--tk-text-third);}
        .td-val{font-size:13px;font-weight:500;color:var(--tk-text);}
        .td-sub{font-size:11px;color:var(--tk-text-third);}

        .status-dot{display:inline-flex;align-items:center;gap:4px;font-size:12px;font-weight:500;}
        .status-dot::before{content:'';width:6px;height:6px;border-radius:50%;}
        .status-dot.s-aktif{color:#1E8E3E;}
        .status-dot.s-aktif::before{background:#1E8E3E;}
        .status-dot.s-habis{color:var(--tk-red);}
        .status-dot.s-habis::before{background:var(--tk-red);}

        .act-cell{display:flex;gap:6px;align-items:center;justify-content:flex-end;position:relative;}
        .act-link{font-size:12px;color:var(--tk-teal);text-decoration:none;font-weight:500;padding:4px 8px;border-radius:4px;transition:background 0.15s;}
        .act-link:hover{background:var(--tk-teal-light);}
        .act-more{width:28px;height:28px;display:flex;align-items:center;justify-content:center;border-radius:4px;color:var(--tk-text-sec);cursor:pointer;transition:background 0.15s;}
        .act-more:hover{background:#f1f3f4;}
        .dropdown-menu { display: none; position: absolute; right: 0; top: 100%; background: #fff; border: 1px solid var(--tk-border); border-radius: 6px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); min-width: 120px; z-index: 10; flex-direction: column; padding: 4px 0; margin-top: 4px;}
        .dropdown-menu.show { display: flex; }
        .dropdown-item { padding: 8px 16px; font-size: 13px; color: var(--tk-text); text-decoration: none; cursor: pointer; transition: background 0.15s; text-align: left; }
        .dropdown-item:hover { background: #f8f9fa; }

        /* Pagination */
        .tbl-footer{display:flex;align-items:center;justify-content:space-between;padding:12px 16px;border-top:1px solid var(--tk-border);background:#fafbfc;}
        .tbl-footer-left{font-size:12px;color:var(--tk-text-sec);}
        .pagination{display:flex;align-items:center;gap:4px;flex-wrap:wrap;justify-content:center;}
        .pg-btn{width:30px;height:30px;border:1px solid var(--tk-border);border-radius:4px;display:flex;align-items:center;justify-content:center;background:var(--tk-white);color:var(--tk-text-sec);cursor:pointer;font-size:12px;font-weight:500;transition:all 0.15s;}
        .pg-btn:hover{background:#f1f3f4;}
        .pg-btn.active{background:var(--tk-teal);color:#fff;border-color:var(--tk-teal);}
        .pg-btn.disabled{opacity:0.4;cursor:default;}

        /* Custom Checkbox */
        .cb{width:16px;height:16px;accent-color:var(--tk-teal);cursor:pointer;}

        /* Hamburger */
        .hamburger{display:none;width:36px;height:36px;align-items:center;justify-content:center;border:none;background:rgba(255,255,255,0.15);border-radius:6px;color:#fff;cursor:pointer;flex-shrink:0;}
        .sidebar-overlay{display:none;position:fixed;inset:0;background:rgba(0,0,0,0.4);z-index:199;}

        /* Mobile product card (hidden on desktop) */
        .mobile-cards{display:none;}
        .m-card{background:var(--tk-white);border:1px solid var(--tk-border);border-radius:8px;padding:14px;display:flex;flex-direction:column;gap:10px;}
        .m-card-top{display:flex;gap:10px;align-items:flex-start;}
        .m-card-img{width:56px;height:56px;border-radius:6px;border:1px solid var(--tk-border);background:#f8f9fa;display:flex;align-items:center;justify-content:center;flex-shrink:0;}
        .m-card-img svg{color:var(--tk-text-third);width:22px;height:22px;}
        .m-card-info{flex:1;min-width:0;}
        .m-card-name{font-size:13px;font-weight:600;line-height:1.4;margin-bottom:4px;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;}
        .m-card-sku{font-size:11px;color:var(--tk-text-third);}
        .m-card-grid{display:grid;grid-template-columns:1fr 1fr;gap:8px;}
        .m-card-stat{background:#f8f9fa;border-radius:6px;padding:8px 10px;}
        .m-card-stat .label{font-size:10px;color:var(--tk-text-third);text-transform:uppercase;font-weight:600;letter-spacing:0.3px;margin-bottom:2px;}
        .m-card-stat .value{font-size:13px;font-weight:600;color:var(--tk-text);}
        .m-card-footer{display:flex;align-items:center;justify-content:space-between;padding-top:8px;border-top:1px solid #f1f3f4;}
        .m-card-status{display:inline-flex;align-items:center;gap:4px;font-size:12px;font-weight:500;}
        .m-card-status::before{content:'';width:6px;height:6px;border-radius:50%;}
        .m-card-status.s-aktif{color:#1E8E3E;}
        .m-card-status.s-aktif::before{background:#1E8E3E;}
        .m-card-status.s-habis{color:var(--tk-red);}
        .m-card-status.s-habis::before{background:var(--tk-red);}

        /* ========== RESPONSIVE ========== */
        @media(max-width:1024px){
            .rek-grid{grid-template-columns:repeat(2,1fr);}
            .pg-row{flex-direction:column;gap:14px;}
            .pg-actions{align-self:flex-start;}
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

            .pg-tabs{overflow-x:auto;-webkit-overflow-scrolling:touch;}
            .pg-tab{padding:8px 12px;font-size:12px;white-space:nowrap;}
            .pg-actions{flex-wrap:wrap;}
            .pg-actions .btn{font-size:12px;padding:6px 10px;}
            .pg-row h1{font-size:17px;}

            .rek-grid{grid-template-columns:1fr 1fr;}
            .rek-card p{display:none;}
            .rek-card{padding:10px;}
            .rek-card h4{font-size:12px;}

            /* Table → Cards on mobile */
            .tbl-box table,.tbl-box thead,.tbl-box tbody{display:none;}
            .mobile-cards{display:flex;flex-direction:column;gap:12px;padding:12px 14px;}

            .tbl-tabs{padding:0 12px;gap:0;}
            .tbl-tab{padding:10px 10px;font-size:12px;}

            .tbl-filters{padding:10px 12px;gap:8px;flex-direction:column;align-items:stretch;}
            .tbl-filters .f-input{width:100%;flex:unset;}
            .tbl-filters .f-select{width:100%;flex:unset;min-width:0;}
            .f-spacer{display:none;}

            .tbl-footer{flex-direction:column;gap:12px;align-items:center;text-align:center;}
            .tbl-footer > div { justify-content: center; width: 100%; }
        }

        @media(max-width:480px){
            .rek-grid{grid-template-columns:1fr;}
            .m-card-grid{grid-template-columns:1fr 1fr;}
            .pg-actions{width:100%;}
            .pg-actions .btn{flex:1;justify-content:center;}
            .breadcrumb{font-size:11px;}
        }
    </style>
</head>
<body>

<!-- ========== TOP HEADER ========== -->
<header class="top-header">
    <!-- Hamburger (mobile only) -->
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
        <input type="text" placeholder="Cari &quot;Hasil pencarian&quot;">
    </div>

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

    <!-- Sidebar Overlay (mobile) -->
    <div class="sidebar-overlay" onclick="document.querySelector('.sidebar').classList.remove('open');this.classList.remove('show');"></div>

    <!-- ========== SIDEBAR ========== -->
    <aside class="sidebar">
        <a href="/dashboard?role={{ $role }}" class="sb-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" stroke-linecap="round" stroke-linejoin="round"/><polyline points="9,22 9,12 15,12 15,22" stroke-linecap="round" stroke-linejoin="round"/></svg>
            Beranda
        </a>

        <a href="/orders?role={{ $role }}" class="sb-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 5H7a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-2" stroke-linecap="round" stroke-linejoin="round"/><rect x="9" y="3" width="6" height="4" rx="1" stroke-linecap="round" stroke-linejoin="round"/><line x1="9" y1="12" x2="15" y2="12" stroke-linecap="round"/><line x1="9" y1="16" x2="13" y2="16" stroke-linecap="round"/></svg>
            Pesanan
        </a>

        <div class="sb-section">Toko</div>

        <div class="sb-item active" onclick="this.classList.toggle('active');this.nextElementSibling.classList.toggle('open');" style="cursor:pointer;">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z" stroke-linecap="round" stroke-linejoin="round"/><line x1="7" y1="7" x2="7.01" y2="7" stroke-linecap="round" stroke-width="2"/></svg>
            Produk
            <svg class="arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <div class="sb-sub open">
            <a href="/seller?role={{ $role }}" class="active">Kelola produk</a>
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
                <a href="#">Produk</a>
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                <span>Kelola produk</span>
            </div>
            <div class="pg-row">
                <div>
                    <h1>Kelola produk
                        <svg class="info-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12" stroke-linecap="round"/><line x1="12" y1="8" x2="12.01" y2="8" stroke-linecap="round"/></svg>
                    </h1>

                </div>
                <div class="pg-actions">
                    @if($role == 'owner')
                    <a href="/product/form?role={{ $role }}" class="btn btn-teal">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19" stroke-linecap="round"/><line x1="5" y1="12" x2="19" y2="12" stroke-linecap="round"/></svg>
                        Tambah produk
                    </a>
                    @endif
                </div>
            </div>
        </div>



        <!-- Products Table -->
        <div class="tbl-box">
            <!-- Tabs -->
            <div class="tbl-tabs" id="status-tabs">
                <div class="tbl-tab active" data-target="semua">Semua</div>
                <div class="tbl-tab" data-target="aktif">Aktif <span class="cnt">{{ collect($products)->where('status','Aktif')->count() }}</span></div>
                <div class="tbl-tab" data-target="nonaktif">Nonaktif <span class="cnt">{{ collect($products)->where('status','Nonaktif')->count() }}</span></div>
            </div>

            <!-- Filters -->
            <div class="tbl-filters">
                <input type="text" id="search-input" class="f-input" placeholder="Nama produk, ID, SKU">
                <select class="f-select"><option>Perlu tindak lanjut</option></select>
                <select class="f-select"><option>Semua kategori</option></select>
                <select class="f-select"><option>Stok habis: {{ collect($products)->where('stock', 0)->count() }}</option></select>
                <div class="f-spacer"></div>

            </div>

            <!-- Table -->
            <table>
                <thead>
                    <tr>
                        <th style="width:36px;"><input type="checkbox" class="cb"></th>
                        <th>Produk</th>
                        <th style="width:100px;">Performa</th>
                        <th style="width:90px;">Status</th>
                        <th style="width:70px;">Stok</th>
                        <th style="width:160px;">Harga Jual</th>
                        <th style="width:110px;text-align:right;">Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr class="product-row" data-status="{{ strtolower($product->status ?? '') }}" data-search="{{ strtolower($product->name . ' ' . ($product->etalase ?? '')) }}">
                        <td><input type="checkbox" class="cb"></td>
                        <td>
                            <div class="p-cell">
                                @php $img = is_array($product->images) && count($product->images) > 0 ? $product->images[0] : 'https://placehold.co/150'; @endphp
                                <img src="{{ asset($img) }}" class="p-img" alt="{{ $product->name }}" style="object-fit:cover;">
                                <div class="p-detail">
                                    <div class="p-name">{{ $product->name }}</div>
                                    <div class="p-meta">
                                        <span>{{ $product->category }}</span>
                                        <span>&middot;</span>
                                        <span>{{ $product->etalase }}</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="td-stack">
                                <div class="td-val">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="vertical-align:-1px;color:var(--tk-text-third);margin-right:2px;"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                                    {{ number_format($product->views) }}
                                </div>
                                <div class="td-sub">Penjualan: {{ number_format($product->sales) }}</div>
                            </div>
                        </td>
                        <td>
                            @if($product->status == 'Aktif')
                                <div class="status-dot">Aktif</div>
                            @else
                                <div class="status-dot" style="color: var(--tk-red);"><span style="background: var(--tk-red); width:6px; height:6px; border-radius:50%; display:inline-block; margin-right:4px;"></span>Nonaktif</div>
                            @endif
                        </td>
                        <td>
                            <div class="td-val">{{ number_format($product->stock) }}</div>
                        </td>
                        <td>
                            <div class="td-val">Rp{{ number_format($product->price, 0, ',', '.') }}</div>
                        </td>
                        <td>
                            <div class="act-cell">
                                @if($role == 'owner')
                                <a href="/product/form?role={{ $role }}&id={{ $product->id }}" class="act-link">Ubah</a>
                                @else
                                <span style="font-size:12px;color:var(--tk-text-third);">Lihat</span>
                                @endif
                                @if($role == 'owner')
                                <div class="act-more" title="Lainnya" onclick="toggleDropdown(this)">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="5" r="1.5"/><circle cx="12" cy="12" r="1.5"/><circle cx="12" cy="19" r="1.5"/></svg>
                                </div>
                                <div class="dropdown-menu">
                                    <div class="dropdown-item" onclick="changeStatus({{ $product->id }}, 'Aktif', this)">Aktifkan</div>
                                    <div class="dropdown-item" onclick="changeStatus({{ $product->id }}, 'Nonaktif', this)">Nonaktifkan</div>
                                    <div class="dropdown-item" style="color: #ef4444;" onclick="deleteItem({{ $product->id }}, this)">Hapus</div>
                                </div>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Mobile Cards (shown on <=768px, replaces table) -->
            <div class="mobile-cards">
                @foreach($products as $product)
                @php $img = is_array($product->images) && count($product->images) > 0 ? $product->images[0] : 'https://placehold.co/150'; @endphp
                <div class="m-card product-row" data-status="{{ strtolower($product->status ?? '') }}" data-search="{{ strtolower($product->name . ' ' . ($product->etalase ?? '')) }}">
                    <div class="m-card-top">
                        <img src="{{ asset($img) }}" class="m-card-img" alt="{{ $product->name }}" style="object-fit:cover;">
                        <div class="m-card-info">
                            <div class="m-card-name">{{ $product->name }}</div>
                            <div class="m-card-sku">{{ $product->etalase }}</div>
                        </div>
                    </div>
                    <div class="m-card-grid">
                        <div class="m-card-stat">
                            <div class="label">Harga</div>
                            <div class="value">Rp{{ number_format($product->price, 0, ',', '.') }}</div>
                        </div>
                        <div class="m-card-stat">
                            <div class="label">Stok</div>
                            <div class="value">{{ number_format($product->stock) }}</div>
                        </div>
                        <div class="m-card-stat">
                            <div class="label">Tayangan</div>
                            <div class="value">{{ number_format($product->views) }}</div>
                        </div>
                        <div class="m-card-stat">
                            <div class="label">Penjualan</div>
                            <div class="value">{{ number_format($product->sales) }}</div>
                        </div>
                    </div>
                    <div class="m-card-footer">
                        @if($product->status == 'Aktif')
                            <div class="m-card-status">Aktif</div>
                        @else
                            <div class="m-card-status" style="color: var(--tk-red);"><span style="background: var(--tk-red); width:6px; height:6px; border-radius:50%; display:inline-block; margin-right:4px;"></span>Nonaktif</div>
                        @endif
                        <div class="act-cell">
                            @if($role == 'owner')
                            <a href="/product/form?role={{ $role }}&id={{ $product->id }}" class="act-link" style="font-size:13px;">Ubah</a>
                            @else
                            <span style="font-size:12px;color:var(--tk-text-third);">Lihat</span>
                            @endif
                            @if($role == 'owner')
                            <div class="act-more" title="Lainnya" onclick="toggleDropdown(this)">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="5" r="1.5"/><circle cx="12" cy="12" r="1.5"/><circle cx="12" cy="19" r="1.5"/></svg>
                            </div>
                            <div class="dropdown-menu" style="bottom: 100%; top: auto; margin-bottom: 4px;">
                                <div class="dropdown-item" onclick="changeStatus({{ $product->id }}, 'Aktif', this)">Aktifkan</div>
                                <div class="dropdown-item" onclick="changeStatus({{ $product->id }}, 'Nonaktif', this)">Nonaktifkan</div>
                                <div class="dropdown-item" style="color: #ef4444;" onclick="deleteItem({{ $product->id }}, this)">Hapus</div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="tbl-footer">
                <div class="tbl-footer-left">Total item: <strong>{{ count($products) }}</strong></div>
                <div style="display:flex;align-items:center;gap:12px;">
                    <select class="f-select" style="font-size:12px;">
                        <option>50/halaman</option>
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
    function toggleDropdown(el) {
        document.querySelectorAll('.dropdown-menu').forEach(menu => {
            if (menu !== el.nextElementSibling) {
                menu.classList.remove('show');
            }
        });
        el.nextElementSibling.classList.toggle('show');
    }

    document.addEventListener('click', function(event) {
        if (!event.target.closest('.act-cell')) {
            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                menu.classList.remove('show');
            });
        }
    });

    function changeStatus(id, status, el) {
        if (confirm('Ubah status produk menjadi ' + status + '?')) {
            fetch('/product/toggle-status/' + id + '?role={{ request('role') ?? "owner" }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ status: status })
            })
            .then(res => res.json())
            .then(data => {
                if(data.success) {
                    alert('Status produk berhasil diubah menjadi: ' + status);
                    window.location.reload();
                } else {
                    alert('Error: ' + data.error);
                }
            })
            .catch(err => console.error(err));
            el.closest('.dropdown-menu').classList.remove('show');
        }
    }

    function deleteItem(id, el) {
        if (confirm('Apakah Anda yakin ingin menghapus produk ini?')) {
            fetch('/product/delete/' + id + '?role={{ request('role') ?? "owner" }}', {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(res => res.json())
            .then(data => {
                if(data.success) {
                    alert('Produk berhasil dihapus');
                    window.location.reload();
                } else {
                    alert('Error: ' + data.error);
                }
            })
            .catch(err => console.error(err));
            el.closest('.dropdown-menu').classList.remove('show');
        }
    }

    // Filter functionality
    document.addEventListener('DOMContentLoaded', () => {
        const searchInput = document.getElementById('search-input');
        const tabs = document.querySelectorAll('#status-tabs .tbl-tab');
        const productRows = document.querySelectorAll('.product-row');
        
        let currentStatus = 'semua';
        
        function filterProducts() {
            const query = searchInput.value.toLowerCase();
            
            productRows.forEach(row => {
                const status = row.getAttribute('data-status');
                const searchData = row.getAttribute('data-search');
                
                const matchStatus = (currentStatus === 'semua') || (status === currentStatus);
                const matchSearch = searchData.includes(query);
                
                if (matchStatus && matchSearch) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }

        if (searchInput) {
            searchInput.addEventListener('input', filterProducts);
        }
        
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
                currentStatus = tab.getAttribute('data-target');
                filterProducts();
            });
        });

        // LocalStorage fallback for new items has been removed since we use actual Database now.
    });
</script>
</body>
</html>
