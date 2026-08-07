<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pengajuan - Seller Center</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --tk-green: #00AA5B;
            --tk-green-hover: #008f4c;
            --tk-bg: #F3F4F5;
            --tk-surface: #FFFFFF;
            --tk-text-primary: #31353B;
            --tk-text-secondary: #6D7588;
            --tk-border: #E5E7E9;
        }
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: var(--tk-bg);
            color: var(--tk-text-primary);
            display: flex;
            min-height: 100vh;
        }
        /* Sidebar (Copied from orders.blade.php) */
        .sidebar {
            width: 240px;
            background: var(--tk-surface);
            border-right: 1px solid var(--tk-border);
            flex-shrink: 0;
            display: flex;
            flex-direction: column;
        }
        .sidebar-header {
            height: 60px;
            display: flex;
            align-items: center;
            padding: 0 20px;
            background: var(--tk-green);
            color: white;
            font-weight: 700;
            font-size: 1.1rem;
            gap: 12px;
        }
        .nav-group {
            padding: 16px 0;
            border-bottom: 1px solid var(--tk-border);
        }
        .nav-group-title {
            padding: 0 20px;
            font-size: 0.75rem;
            font-weight: 700;
            color: var(--tk-text-secondary);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
        }
        .nav-item {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            color: var(--tk-text-primary);
            text-decoration: none;
            font-size: 0.95rem;
            gap: 12px;
            transition: all 0.2s;
        }
        .nav-item:hover {
            background: #f1f1f1;
        }
        .nav-item.active {
            color: var(--tk-green);
            background: #E8F7F0;
            font-weight: 600;
            border-left: 3px solid var(--tk-green);
        }
        .nav-sub {
            padding: 8px 20px 8px 52px;
            color: var(--tk-text-secondary);
            text-decoration: none;
            font-size: 0.9rem;
            display: block;
        }
        .nav-sub:hover {
            color: var(--tk-green);
        }

        /* Main Content */
        .main-content {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }
        .topbar {
            height: 60px;
            background: var(--tk-green);
            display: flex;
            align-items: center;
            padding: 0 24px;
            justify-content: space-between;
            color: white;
            flex-shrink: 0;
        }
        .search-bar {
            background: rgba(255,255,255,0.2);
            border: 1px solid rgba(255,255,255,0.3);
            border-radius: 8px;
            padding: 8px 16px;
            width: 400px;
            color: white;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .search-bar input {
            background: transparent;
            border: none;
            color: white;
            outline: none;
            width: 100%;
        }
        .search-bar input::placeholder {
            color: rgba(255,255,255,0.7);
        }
        .user-menu {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 0.95rem;
            font-weight: 600;
        }
        .avatar {
            width: 32px;
            height: 32px;
            background: white;
            color: var(--tk-green);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
        }
        
        .content-scroll {
            padding: 24px;
            overflow-y: auto;
            flex-grow: 1;
        }
        
        .breadcrumb {
            display: flex;
            gap: 8px;
            font-size: 0.85rem;
            color: var(--tk-text-secondary);
            margin-bottom: 24px;
        }
        .breadcrumb a {
            color: var(--tk-text-secondary);
            text-decoration: none;
        }
        .breadcrumb a:hover {
            color: var(--tk-green);
        }
        
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 24px;
        }
        
        .page-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--tk-text-primary);
            margin: 0 0 8px 0;
        }
        
        .order-meta {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 0.95rem;
            color: var(--tk-text-secondary);
        }

        .badge {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 0.8rem;
            font-weight: 700;
        }
        .badge-new { background: #FFF4E5; color: #E57300; }
        .badge-process { background: #E8F7F0; color: #00AA5B; }
        .badge-shipped { background: #E5F3FF; color: #0064D2; }
        .badge-done { background: #E5E7E9; color: #6D7588; }
        .badge-cancel { background: #FFEAEA; color: #EF144A; }

        .detail-grid {
            display: grid;
            grid-template-columns: 1fr 350px;
            gap: 24px;
        }

        .card {
            background: var(--tk-surface);
            border-radius: 12px;
            border: 1px solid var(--tk-border);
            padding: 24px;
            margin-bottom: 24px;
        }
        
        .card-title {
            font-size: 1.1rem;
            font-weight: 700;
            margin: 0 0 16px 0;
            padding-bottom: 12px;
            border-bottom: 1px solid var(--tk-border);
        }

        .info-row {
            display: flex;
            margin-bottom: 16px;
        }
        .info-label {
            width: 140px;
            color: var(--tk-text-secondary);
            font-size: 0.95rem;
        }
        .info-value {
            flex: 1;
            font-weight: 600;
            font-size: 0.95rem;
        }
        
        .notes-box {
            background: #F9FAFB;
            border: 1px dashed var(--tk-border);
            border-radius: 8px;
            padding: 16px;
            color: #475569;
            font-style: italic;
            margin-top: 16px;
        }

        /* Products Table */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 16px;
            text-align: left;
            border-bottom: 1px solid var(--tk-border);
            font-size: 0.95rem;
        }
        th {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--tk-text-secondary);
            text-transform: uppercase;
        }
        
        .product-cell {
            display: flex;
            gap: 16px;
            align-items: center;
        }
        .product-img {
            width: 60px;
            height: 60px;
            border-radius: 8px;
            object-fit: cover;
            border: 1px solid var(--tk-border);
        }
        .product-name {
            font-weight: 600;
            margin-bottom: 4px;
        }
        .product-store {
            font-size: 0.85rem;
            color: var(--tk-text-secondary);
        }
        
        .btn {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.95rem;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            border: none;
        }
        .btn-primary {
            background: var(--tk-green);
            color: white;
        }
        .btn-primary:hover { background: var(--tk-green-hover); }
        .btn-outline {
            background: white;
            border: 1px solid var(--tk-border);
            color: var(--tk-text-primary);
        }
        .btn-outline:hover { background: #f8f9fa; }

        .action-buttons {
            display: flex;
            gap: 12px;
        }
        
        .status-form {
            display: flex;
            gap: 8px;
        }

        .select-status {
            padding: 10px 14px;
            border: 1px solid transparent;
            border-radius: 8px;
            font-family: inherit;
            outline: none;
            font-weight: 700;
            cursor: pointer;
        }

        .btn-save-status {
            padding: 10px 16px;
        }

        @media (max-width: 1024px) {
            .detail-grid {
                grid-template-columns: 1fr;
            }
        }
        @media (max-width: 768px) {
            .sidebar { display: none; }
            .search-bar { display: none; }
            .content-scroll { padding: 16px; }
            .card { padding: 16px; }
            
            .page-header {
                flex-direction: column;
                gap: 16px;
            }
            .action-buttons {
                flex-direction: column;
                width: 100%;
                gap: 8px;
            }
            .status-form {
                flex-direction: row;
                width: 100%;
                gap: 8px;
            }
            .status-form select {
                flex: 1;
                width: auto;
            }
            .status-form button {
                width: auto;
                flex-shrink: 0;
            }
            .page-title {
                font-size: 1rem;
                word-break: break-word;
            }
            .order-meta {
                flex-direction: column;
                align-items: flex-start;
                gap: 8px;
            }
            .product-cell {
                flex-direction: column;
                align-items: flex-start;
                gap: 8px;
            }
            .product-img {
                width: 100%;
                height: auto;
                max-width: 120px;
            }
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
            Seller Center
        </div>
        
        <div class="nav-group">
            <a href="/orders?role={{ $role }}" class="nav-item" style="color: var(--tk-text-secondary);">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
                Kembali ke Daftar
            </a>
        </div>

        <div class="nav-group">
            <div class="nav-group-title">Menu Saat Ini</div>
            <div class="nav-item active">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
                Detail Pesanan
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Topbar -->
        <div class="topbar">
            <div style="font-weight:700;letter-spacing:1px;font-size:0.9rem;">APP OSCAR</div>
            <div class="search-bar">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
                <input type="text" placeholder="Cari pesanan...">
            </div>
            <div class="user-menu">
                <div class="avatar">O</div>
                Admin Owner
            </div>
        </div>

        <div class="content-scroll">
            <div class="breadcrumb">
                <a href="/orders?role={{ $role }}">Seller Center</a>
                <span>&rsaquo;</span>
                <a href="/orders?role={{ $role }}">Pengajuan</a>
                <span>&rsaquo;</span>
                <span>Detail</span>
            </div>
            
            <div style="margin-bottom: 16px;">
                <a href="/orders?role={{ $role }}" class="btn btn-primary" style="display: inline-flex; align-items: center; gap: 6px; padding: 8px 16px; font-size: 0.9rem;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
                    Kembali
                </a>
            </div>
            
            <div class="page-header">
                <div>
                    <h1 class="page-title">Detail Pengajuan: {{ $order->order_id }}</h1>
                    <div class="order-meta">
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
                        <span>Dibuat pada {{ $order->created_at->format('d M Y, H:i') }}</span>
                    </div>
                </div>
                <div class="action-buttons">
                    @if($role == 'owner')
                    <form action="/orders/{{ $order->id }}/status" method="POST" class="status-form">
                        @csrf
                        @php
                            $statusRanks = ['Pengajuan Baru' => 1, 'Dikonfirmasi' => 2, 'Dalam Pengiriman' => 3, 'Selesai' => 4, 'Ditolak' => 4];
                            $currRank = $statusRanks[$order->status] ?? 1;
                            $isTerminal = in_array($order->status, ['Selesai', 'Ditolak']);
                            $statusOptions = [
                                'Pengajuan Baru' => 'badge-new',
                                'Dikonfirmasi' => 'badge-process',
                                'Dalam Pengiriman' => 'badge-shipped',
                                'Selesai' => 'badge-done',
                                'Ditolak' => 'badge-cancel'
                            ];
                        @endphp
                        <select name="status" class="select-status option-select {{ $badgeClass }}" onchange="updateSelectColor(this)">
                            @foreach($statusOptions as $val => $class)
                                @php
                                    $optRank = $statusRanks[$val];
                                    $show = true;
                                    if ($isTerminal && $order->status !== $val) $show = false;
                                    elseif (!$isTerminal && $optRank < $currRank) $show = false;
                                @endphp
                                @if($show)
                                    <option value="{{ $val }}" class="{{ $class }}" {{ $order->status == $val ? 'selected' : '' }}>{{ $val }}</option>
                                @endif
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-primary btn-save-status">Simpan Status</button>
                    </form>
                    @endif
                </div>
            </div>

            <div class="detail-grid">
                <!-- Left: Items -->
                <div class="items-column">
                    <div class="card">
                        <h2 class="card-title">Daftar Barang ({{ $order->items->sum('qty') }} item)</h2>
                        
                        <table>
                            <thead>
                                <tr>
                                    <th>Produk</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($order->items as $item)
                                <tr>
                                    <td>
                                        <div class="product-cell">
                                            <img src="{{ $item->image_url ?? 'https://via.placeholder.com/60' }}" class="product-img" alt="Produk">
                                            <div>
                                                <div class="product-name">{{ $item->product_name }}</div>
                                                <div class="product-store">Toko: {{ $item->store ?? 'Mitra B2B' }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="font-size:1.1rem; font-weight:700;">{{ $item->qty }} x</div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Right: Info -->
                <div class="info-column">
                    <div class="card">
                        <h2 class="card-title">Informasi Mitra / Klien</h2>
                        
                        <div class="info-row">
                            <div class="info-label">Nama Mitra</div>
                            <div class="info-value">{{ $order->buyer_name }}</div>
                        </div>
                        
                        <div class="info-row">
                            <div class="info-label">Lokasi / Kota</div>
                            <div class="info-value">{{ $order->buyer_city }}</div>
                        </div>

                        @if($order->notes)
                        <div style="margin-top: 24px;">
                            <div class="info-label">Catatan Pengajuan:</div>
                            <div class="notes-box">
                                "{{ $order->notes }}"
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
    function updateSelectColor(select) {
        select.classList.remove('badge-new', 'badge-process', 'badge-shipped', 'badge-done', 'badge-cancel');
        const selectedOption = select.options[select.selectedIndex];
        if(selectedOption.className) {
            select.classList.add(selectedOption.className);
        }
    }
    </script>
</body>
</html>
