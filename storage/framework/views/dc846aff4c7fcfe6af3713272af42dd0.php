<?php $__env->startSection('content'); ?>
<style>
    :root {
        --pk-green: #03ac0e;
        --pk-green-dark: #028a0b;
        --pk-green-light: rgba(3, 172, 14, 0.08);
        --pk-border: #e5e7eb;
        --pk-bg: #f3f4f6;
        --pk-text: #1e293b;
        --pk-text-sec: #64748b;
        --pk-shadow: 0 1px 3px rgba(0,0,0,0.06), 0 1px 2px rgba(0,0,0,0.04);
        --pk-shadow-lg: 0 10px 30px rgba(0,0,0,0.08);
        --pk-radius: 16px;
    }

    .payment-page {
        background: var(--pk-bg);
        min-height: 80vh;
        padding-bottom: 60px;
    }

    /* Top Status Bar */
    .payment-status-bar {
        background: linear-gradient(135deg, #03ac0e 0%, #00c853 100%);
        padding: 28px 0 60px;
        position: relative;
        overflow: hidden;
    }
    .payment-status-bar::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -10%;
        width: 300px;
        height: 300px;
        background: rgba(255,255,255,0.06);
        border-radius: 50%;
    }
    .payment-status-bar::after {
        content: '';
        position: absolute;
        bottom: -40%;
        left: -5%;
        width: 200px;
        height: 200px;
        background: rgba(255,255,255,0.04);
        border-radius: 50%;
    }
    .status-bar-inner {
        max-width: 760px;
        margin: 0 auto;
        padding: 0 24px;
        text-align: center;
        position: relative;
        z-index: 1;
    }
    .status-icon {
        width: 56px;
        height: 56px;
        background: rgba(255,255,255,0.2);
        backdrop-filter: blur(10px);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 16px;
        animation: pulseIcon 2s ease-in-out infinite;
    }
    @keyframes pulseIcon {
        0%, 100% { transform: scale(1); box-shadow: 0 0 0 0 rgba(255,255,255,0.3); }
        50% { transform: scale(1.05); box-shadow: 0 0 0 12px rgba(255,255,255,0); }
    }
    .status-title {
        color: #fff;
        font-size: 1.35rem;
        font-weight: 800;
        margin-bottom: 6px;
    }
    .status-subtitle {
        color: rgba(255,255,255,0.85);
        font-size: 0.95rem;
        font-weight: 500;
    }

    /* Main Content Card */
    .payment-content {
        max-width: 760px;
        margin: -36px auto 0;
        padding: 0 24px;
        position: relative;
        z-index: 2;
    }

    .pay-card {
        background: #fff;
        border-radius: var(--pk-radius);
        box-shadow: var(--pk-shadow-lg);
        overflow: hidden;
        margin-bottom: 16px;
    }
    .pay-card-header {
        padding: 20px 24px;
        border-bottom: 1px solid var(--pk-border);
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .pay-card-title {
        font-weight: 700;
        font-size: 1rem;
        color: var(--pk-text);
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .pay-card-body {
        padding: 24px;
    }

    /* Countdown Timer */
    .countdown-card {
        background: #fff;
        border-radius: var(--pk-radius);
        box-shadow: var(--pk-shadow-lg);
        margin-bottom: 16px;
        overflow: hidden;
    }
    .countdown-header {
        padding: 16px 24px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-bottom: 1px solid var(--pk-border);
    }
    .countdown-label {
        font-size: 0.9rem;
        color: var(--pk-text-sec);
        font-weight: 600;
    }
    .countdown-timer {
        display: flex;
        align-items: center;
        gap: 4px;
    }
    .countdown-unit {
        background: #fee2e2;
        color: #dc2626;
        font-weight: 800;
        font-size: 1rem;
        padding: 4px 8px;
        border-radius: 6px;
        min-width: 36px;
        text-align: center;
        font-variant-numeric: tabular-nums;
    }
    .countdown-sep {
        color: #dc2626;
        font-weight: 800;
        font-size: 1rem;
    }
    .countdown-body {
        padding: 20px 24px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .countdown-deadline {
        font-size: 0.85rem;
        color: var(--pk-text-sec);
    }
    .countdown-deadline strong {
        color: var(--pk-text);
    }

    /* Order ID */
    .order-id-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 14px 24px;
        background: var(--pk-green-light);
        border-bottom: 1px solid rgba(3,172,14,0.1);
    }
    .order-id-label {
        font-size: 0.85rem;
        color: var(--pk-text-sec);
        font-weight: 500;
    }
    .order-id-value {
        font-weight: 700;
        font-size: 0.9rem;
        color: var(--pk-green-dark);
        letter-spacing: 0.5px;
    }

    /* VA Number Display */
    .va-section {
        text-align: center;
        padding: 28px 24px;
    }
    .va-method-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #f8fafc;
        border: 1px solid var(--pk-border);
        border-radius: 10px;
        padding: 10px 18px;
        margin-bottom: 20px;
        font-weight: 600;
        font-size: 0.95rem;
        color: var(--pk-text);
    }
    .va-method-icon {
        width: 28px;
        height: 28px;
        border-radius: 6px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        font-size: 0.7rem;
        color: #fff;
    }
    .va-label {
        font-size: 0.85rem;
        color: var(--pk-text-sec);
        margin-bottom: 10px;
        font-weight: 500;
    }
    .va-number {
        font-size: 1.8rem;
        font-weight: 800;
        color: var(--pk-text);
        letter-spacing: 3px;
        margin-bottom: 16px;
        font-variant-numeric: tabular-nums;
        word-break: break-all;
    }
    .va-copy-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 24px;
        background: #fff;
        border: 2px solid var(--pk-green);
        border-radius: 10px;
        color: var(--pk-green);
        font-weight: 700;
        font-size: 0.9rem;
        cursor: pointer;
        transition: all 0.25s ease;
    }
    .va-copy-btn:hover {
        background: var(--pk-green);
        color: #fff;
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(3,172,14,0.3);
    }
    .va-copy-btn.copied {
        background: var(--pk-green);
        color: #fff;
        border-color: var(--pk-green);
    }

    /* Total Amount */
    .total-amount-section {
        border-top: 1px dashed var(--pk-border);
        padding: 20px 24px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .total-label {
        font-size: 0.9rem;
        color: var(--pk-text-sec);
        font-weight: 500;
    }
    .total-value {
        font-size: 1.3rem;
        font-weight: 800;
        color: var(--pk-green-dark);
    }
    .total-copy-btn {
        background: none;
        border: none;
        color: var(--pk-green);
        font-weight: 600;
        font-size: 0.8rem;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 4px;
        margin-left: 8px;
        padding: 4px 8px;
        border-radius: 6px;
        transition: background 0.2s;
    }
    .total-copy-btn:hover {
        background: var(--pk-green-light);
    }
    .total-right {
        display: flex;
        align-items: center;
    }

    /* Instructions Accordion */
    .instructions-card {
        margin-bottom: 16px;
    }
    .instruction-item {
        border-bottom: 1px solid var(--pk-border);
    }
    .instruction-item:last-child {
        border-bottom: none;
    }
    .instruction-toggle {
        width: 100%;
        padding: 16px 24px;
        background: none;
        border: none;
        display: flex;
        align-items: center;
        justify-content: space-between;
        cursor: pointer;
        font-weight: 600;
        font-size: 0.95rem;
        color: var(--pk-text);
        transition: background 0.2s;
    }
    .instruction-toggle:hover {
        background: #fafafa;
    }
    .instruction-toggle svg {
        transition: transform 0.3s ease;
        color: var(--pk-text-sec);
    }
    .instruction-toggle.active svg {
        transform: rotate(180deg);
    }
    .instruction-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.35s ease;
    }
    .instruction-content.open {
        max-height: 600px;
    }
    .instruction-steps {
        padding: 0 24px 20px;
        list-style: none;
        margin: 0;
    }
    .instruction-steps li {
        position: relative;
        padding: 8px 0 8px 28px;
        font-size: 0.9rem;
        color: #475569;
        line-height: 1.5;
    }
    .instruction-steps li::before {
        content: attr(data-step);
        position: absolute;
        left: 0;
        top: 8px;
        width: 20px;
        height: 20px;
        background: var(--pk-green-light);
        color: var(--pk-green);
        font-size: 0.7rem;
        font-weight: 800;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Order Detail Section */
    .order-detail-row {
        display: flex;
        justify-content: space-between;
        padding: 10px 0;
        font-size: 0.9rem;
        color: var(--pk-text-sec);
    }
    .order-detail-row:not(:last-child) {
        border-bottom: 1px solid #f1f5f9;
    }
    .order-detail-row span:last-child {
        font-weight: 600;
        color: var(--pk-text);
    }
    .order-items-list {
        list-style: none;
        padding: 0;
        margin: 0 0 16px;
    }
    .order-items-list li {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 10px 0;
        border-bottom: 1px solid #f8fafc;
    }
    .order-items-list li:last-child {
        border-bottom: none;
    }
    .order-item-thumb {
        width: 44px;
        height: 44px;
        border-radius: 8px;
        object-fit: contain;
        background: #f8fafc;
        border: 1px solid var(--pk-border);
        flex-shrink: 0;
    }
    .order-item-info {
        flex: 1;
        min-width: 0;
    }
    .order-item-name {
        font-size: 0.85rem;
        font-weight: 600;
        color: var(--pk-text);
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .order-item-qty {
        font-size: 0.8rem;
        color: var(--pk-text-sec);
    }
    .order-item-price {
        font-weight: 700;
        font-size: 0.85rem;
        color: var(--pk-text);
        flex-shrink: 0;
    }

    /* Action Buttons */
    .payment-actions {
        display: flex;
        gap: 12px;
        margin-top: 8px;
    }
    .btn-primary-pay {
        flex: 1;
        padding: 14px 24px;
        background: var(--pk-green);
        color: #fff;
        border: none;
        border-radius: 12px;
        font-weight: 700;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.25s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }
    .btn-primary-pay:hover {
        background: var(--pk-green-dark);
        transform: translateY(-1px);
        box-shadow: 0 6px 20px rgba(3,172,14,0.35);
    }
    .btn-secondary-pay {
        flex: 1;
        padding: 14px 24px;
        background: #fff;
        color: var(--pk-text);
        border: 1px solid var(--pk-border);
        border-radius: 12px;
        font-weight: 600;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.2s;
    }
    .btn-secondary-pay:hover {
        border-color: #cbd5e1;
        background: #f8fafc;
    }

    /* Success Modal */
    .success-overlay {
        position: fixed;
        inset: 0;
        background: rgba(0,0,0,0.5);
        backdrop-filter: blur(4px);
        z-index: 1000;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.3s ease;
    }
    .success-overlay.show {
        opacity: 1;
        pointer-events: all;
    }
    .success-modal {
        background: #fff;
        border-radius: 20px;
        padding: 40px 36px;
        text-align: center;
        max-width: 400px;
        width: 90%;
        transform: scale(0.9);
        transition: transform 0.35s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    .success-overlay.show .success-modal {
        transform: scale(1);
    }
    .success-check {
        width: 72px;
        height: 72px;
        background: var(--pk-green-light);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
    }
    .success-check svg {
        width: 36px;
        height: 36px;
        color: var(--pk-green);
    }
    .success-title {
        font-size: 1.25rem;
        font-weight: 800;
        color: var(--pk-text);
        margin-bottom: 8px;
    }
    .success-desc {
        font-size: 0.9rem;
        color: var(--pk-text-sec);
        line-height: 1.5;
        margin-bottom: 24px;
    }
    .success-btn {
        width: 100%;
        padding: 14px;
        background: var(--pk-green);
        color: #fff;
        border: none;
        border-radius: 12px;
        font-weight: 700;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.2s;
    }
    .success-btn:hover {
        background: var(--pk-green-dark);
    }

    /* Help Banner */
    .help-banner {
        background: #fff;
        border-radius: var(--pk-radius);
        box-shadow: var(--pk-shadow);
        padding: 20px 24px;
        display: flex;
        align-items: center;
        gap: 16px;
        margin-bottom: 16px;
    }
    .help-icon {
        width: 44px;
        height: 44px;
        background: #eff6ff;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
    .help-text {
        flex: 1;
    }
    .help-text strong {
        display: block;
        font-size: 0.9rem;
        color: var(--pk-text);
        margin-bottom: 2px;
    }
    .help-text span {
        font-size: 0.8rem;
        color: var(--pk-text-sec);
    }

    /* Responsive */
    @media (max-width: 640px) {
        .payment-status-bar { padding: 20px 0 48px; }
        .status-title { font-size: 1.15rem; }
        .va-number { font-size: 1.4rem; letter-spacing: 2px; }
        .payment-actions { flex-direction: column; }
        .countdown-body { flex-direction: column; gap: 10px; text-align: center; }
        .total-amount-section { flex-direction: column; gap: 8px; align-items: flex-start; }
    }
</style>

<div class="payment-page">
    <!-- Status Bar -->
    <div class="payment-status-bar">
        <div class="status-bar-inner">
            <div class="status-icon">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            <div class="status-title">Menunggu Pembayaran</div>
            <div class="status-subtitle">Segera selesaikan pembayaran sebelum batas waktu berakhir</div>
        </div>
    </div>

    <div class="payment-content">
        <!-- Countdown Timer -->
        <div class="countdown-card">
            <div class="countdown-header">
                <span class="countdown-label">Batas Akhir Pembayaran</span>
                <div class="countdown-timer">
                    <span class="countdown-unit" id="cd-hours">23</span>
                    <span class="countdown-sep">:</span>
                    <span class="countdown-unit" id="cd-minutes">59</span>
                    <span class="countdown-sep">:</span>
                    <span class="countdown-unit" id="cd-seconds">59</span>
                </div>
            </div>
            <div class="countdown-body">
                <div class="countdown-deadline">
                    Bayar sebelum <strong id="deadline-text">-</strong>
                </div>
            </div>
        </div>

        <!-- Order ID -->
        <div class="pay-card" style="margin-bottom:16px;">
            <div class="order-id-row">
                <span class="order-id-label">No. Pesanan</span>
                <span class="order-id-value" id="order-id-display">-</span>
            </div>
        </div>

        <!-- Payment Method & VA Number -->
        <div class="pay-card">
            <div class="va-section">
                <div class="va-method-badge" id="va-method-badge">
                    <span class="va-method-icon" id="va-method-icon" style="background:#0060af;">BCA</span>
                    <span id="va-method-name">BCA Virtual Account</span>
                </div>
                <div class="va-label">Nomor Virtual Account</div>
                <div class="va-number" id="va-number">8077 0811 2345 6789</div>
                <button class="va-copy-btn" id="copy-va-btn" onclick="copyVA()">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <rect x="9" y="9" width="13" height="13" rx="2" ry="2"/>
                        <path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/>
                    </svg>
                    Salin Nomor
                </button>
            </div>
            <div class="total-amount-section">
                <span class="total-label">Total Pembayaran</span>
                <div class="total-right">
                    <span class="total-value" id="total-amount">Rp 0</span>
                    <button class="total-copy-btn" onclick="copyTotal()">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <rect x="9" y="9" width="13" height="13" rx="2" ry="2"/>
                            <path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/>
                        </svg>
                        Salin
                    </button>
                </div>
            </div>
        </div>

        <!-- Payment Instructions -->
        <div class="pay-card instructions-card">
            <div class="pay-card-header">
                <div class="pay-card-title">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color:var(--pk-green)">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    Cara Pembayaran
                </div>
            </div>

            <!-- ATM -->
            <div class="instruction-item">
                <button class="instruction-toggle active" onclick="toggleInstruction(this)">
                    <span>Transfer ATM</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div class="instruction-content open">
                    <ol class="instruction-steps">
                        <li data-step="1">Masukkan kartu ATM dan PIN Anda</li>
                        <li data-step="2">Pilih menu <strong>Transaksi Lainnya</strong> → <strong>Transfer</strong> → <strong>Ke Rek Virtual Account</strong></li>
                        <li data-step="3">Masukkan nomor Virtual Account yang tertera di atas</li>
                        <li data-step="4">Pastikan nominal pembayaran sudah sesuai, lalu konfirmasi</li>
                        <li data-step="5">Simpan struk sebagai bukti pembayaran</li>
                    </ol>
                </div>
            </div>

            <!-- Mobile Banking -->
            <div class="instruction-item">
                <button class="instruction-toggle" onclick="toggleInstruction(this)">
                    <span>Mobile Banking</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div class="instruction-content">
                    <ol class="instruction-steps">
                        <li data-step="1">Login ke aplikasi Mobile Banking Anda</li>
                        <li data-step="2">Pilih menu <strong>m-Transfer</strong> → <strong>Transfer Virtual Account</strong></li>
                        <li data-step="3">Masukkan nomor Virtual Account yang tertera</li>
                        <li data-step="4">Periksa detail pembayaran, lalu masukkan PIN untuk konfirmasi</li>
                        <li data-step="5">Pembayaran selesai, simpan notifikasi sebagai bukti</li>
                    </ol>
                </div>
            </div>

            <!-- Internet Banking -->
            <div class="instruction-item">
                <button class="instruction-toggle" onclick="toggleInstruction(this)">
                    <span>Internet Banking</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div class="instruction-content">
                    <ol class="instruction-steps">
                        <li data-step="1">Login ke situs Internet Banking Anda</li>
                        <li data-step="2">Pilih menu <strong>Transfer Dana</strong> → <strong>Virtual Account</strong></li>
                        <li data-step="3">Masukkan nomor Virtual Account yang tertera</li>
                        <li data-step="4">Periksa detail transaksi dan nominal pembayaran</li>
                        <li data-step="5">Masukkan token/OTP untuk konfirmasi, lalu simpan bukti bayar</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- Order Summary -->
        <div class="pay-card">
            <div class="pay-card-header">
                <div class="pay-card-title">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color:var(--pk-green)">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                    </svg>
                    Detail Pesanan
                </div>
            </div>
            <div class="pay-card-body">
                <ul class="order-items-list" id="order-items-list">
                    <!-- Injected via JS -->
                </ul>
                <div class="order-detail-row">
                    <span>Subtotal Produk</span>
                    <span id="detail-subtotal">-</span>
                </div>
                <div class="order-detail-row">
                    <span>Ongkos Kirim</span>
                    <span id="detail-shipping">-</span>
                </div>
                <div class="order-detail-row" style="padding-top:14px; border-top: 1px dashed var(--pk-border); margin-top: 4px;">
                    <span style="font-weight:700; color:var(--pk-text);">Total Pembayaran</span>
                    <span style="font-weight:800; color:var(--pk-green-dark); font-size:1.05rem;" id="detail-total">-</span>
                </div>
            </div>
        </div>

        <!-- Help Banner -->
        <div class="help-banner">
            <div class="help-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2">
                    <circle cx="12" cy="12" r="10"/>
                    <path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3"/>
                    <circle cx="12" cy="17" r="0.5" fill="#3b82f6"/>
                </svg>
            </div>
            <div class="help-text">
                <strong>Butuh Bantuan?</strong>
                <span>Hubungi Customer Service kami di <strong style="color:var(--pk-green);">0800-123-4567</strong> (24 jam)</span>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="payment-actions">
            <button class="btn-primary-pay" onclick="checkPaymentStatus()">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Cek Status Pembayaran
            </button>
            <button class="btn-secondary-pay" onclick="window.location.href='/dashboard?role=member'">
                Kembali ke Beranda
            </button>
        </div>
    </div>
</div>

<!-- Success Modal -->
<div class="success-overlay" id="successModal">
    <div class="success-modal">
        <div class="success-check">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
            </svg>
        </div>
        <div class="success-title">Pembayaran Berhasil! 🎉</div>
        <div class="success-desc">Pesanan Anda telah dikonfirmasi dan sedang diproses oleh penjual. Terima kasih telah berbelanja di App Oscar!</div>
        <button class="success-btn" onclick="window.location.href='/dashboard?role=member'">Kembali ke Beranda</button>
    </div>
</div>

<script>
    // Payment method configs
    const methodConfig = {
        bca: { name: 'BCA Virtual Account', color: '#0060af', short: 'BCA', prefix: '8077 0811' },
        mandiri: { name: 'Mandiri Virtual Account', color: '#003d79', short: 'MDR', prefix: '8899 0812' },
        gopay: { name: 'GoPay', color: '#00aed6', short: 'GP', prefix: '' },
        qris: { name: 'QRIS', color: '#e4002b', short: 'QR', prefix: '' },
        cc: { name: 'Kartu Kredit / Cicilan', color: '#1a1a2e', short: 'CC', prefix: '' },
    };

    let paymentData = null;
    let countdownInterval = null;

    document.addEventListener('DOMContentLoaded', () => {
        paymentData = JSON.parse(localStorage.getItem('paymentData'));
        if (!paymentData) {
            // No payment data, redirect to dashboard
            window.location.href = '/dashboard?role=member';
            return;
        }
        initPaymentPage();
    });

    function initPaymentPage() {
        const method = paymentData.method || 'bca';
        const config = methodConfig[method] || methodConfig.bca;

        // Set method badge
        document.getElementById('va-method-icon').textContent = config.short;
        document.getElementById('va-method-icon').style.background = config.color;
        document.getElementById('va-method-name').textContent = config.name;

        // Set order ID
        document.getElementById('order-id-display').textContent = paymentData.orderId || '-';

        // Generate VA number
        if (method === 'gopay' || method === 'qris') {
            document.querySelector('.va-label').textContent = method === 'qris' ? 'Scan QR Code di Aplikasi E-Wallet' : 'Nomor GoPay Tujuan';
            const randomNum = '0812 ' + Math.floor(1000 + Math.random() * 9000) + ' ' + Math.floor(1000 + Math.random() * 9000);
            document.getElementById('va-number').textContent = randomNum;
        } else if (method === 'cc') {
            document.querySelector('.va-label').textContent = 'Nomor Referensi';
            document.getElementById('va-number').textContent = 'REF-' + Math.floor(100000 + Math.random() * 900000);
        } else {
            const randomSuffix = Math.floor(10000000 + Math.random() * 90000000).toString().replace(/(\d{4})(\d{4})/, '$1 $2');
            document.getElementById('va-number').textContent = config.prefix + ' ' + randomSuffix;
        }

        // Set total amount
        document.getElementById('total-amount').textContent = paymentData.total || 'Rp 0';

        // Set order details
        document.getElementById('detail-subtotal').textContent = paymentData.itemsPrice || '-';
        document.getElementById('detail-shipping').textContent = paymentData.shipping || 'Rp 0';
        document.getElementById('detail-total').textContent = paymentData.total || '-';

        // Render order items
        const itemsList = document.getElementById('order-items-list');
        if (paymentData.items && paymentData.items.length > 0) {
            itemsList.innerHTML = paymentData.items.map(item => `
                <li>
                    <img src="${item.image}" class="order-item-thumb" alt="">
                    <div class="order-item-info">
                        <div class="order-item-name">${item.name}</div>
                        <div class="order-item-qty">${item.qty}x barang</div>
                    </div>
                    <div class="order-item-price">${formatRupiah(item.price * item.qty)}</div>
                </li>
            `).join('');
        } else {
            itemsList.innerHTML = '<li style="justify-content:center;color:var(--pk-text-sec);">Tidak ada data item</li>';
        }

        // Start countdown (24 hours from order creation)
        startCountdown();
    }

    function formatRupiah(number) {
        return new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
            minimumFractionDigits: 0
        }).format(number).replace('Rp', 'Rp ');
    }

    function startCountdown() {
        const createdAt = new Date(paymentData.createdAt || Date.now());
        const deadline = new Date(createdAt.getTime() + 24 * 60 * 60 * 1000);

        // Display deadline
        const deadlineText = deadline.toLocaleDateString('id-ID', {
            weekday: 'long', day: 'numeric', month: 'long', year: 'numeric'
        }) + ', ' + deadline.toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit' }) + ' WIB';
        document.getElementById('deadline-text').textContent = deadlineText;

        function update() {
            const now = new Date();
            const diff = deadline - now;

            if (diff <= 0) {
                document.getElementById('cd-hours').textContent = '00';
                document.getElementById('cd-minutes').textContent = '00';
                document.getElementById('cd-seconds').textContent = '00';
                clearInterval(countdownInterval);
                return;
            }

            const hours = Math.floor(diff / (1000 * 60 * 60));
            const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((diff % (1000 * 60)) / 1000);

            document.getElementById('cd-hours').textContent = String(hours).padStart(2, '0');
            document.getElementById('cd-minutes').textContent = String(minutes).padStart(2, '0');
            document.getElementById('cd-seconds').textContent = String(seconds).padStart(2, '0');
        }

        update();
        countdownInterval = setInterval(update, 1000);
    }

    function copyVA() {
        const vaNum = document.getElementById('va-number').textContent.replace(/\s/g, '');
        navigator.clipboard.writeText(vaNum).then(() => {
            const btn = document.getElementById('copy-va-btn');
            btn.classList.add('copied');
            btn.innerHTML = `
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                </svg>
                Tersalin!
            `;
            setTimeout(() => {
                btn.classList.remove('copied');
                btn.innerHTML = `
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <rect x="9" y="9" width="13" height="13" rx="2" ry="2"/>
                        <path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/>
                    </svg>
                    Salin Nomor
                `;
            }, 2000);
        });
    }

    function copyTotal() {
        const total = document.getElementById('total-amount').textContent;
        const numericTotal = total.replace(/[^\d]/g, '');
        navigator.clipboard.writeText(numericTotal);
    }

    function toggleInstruction(btn) {
        const content = btn.nextElementSibling;
        const isOpen = content.classList.contains('open');

        // Close all
        document.querySelectorAll('.instruction-content').forEach(c => c.classList.remove('open'));
        document.querySelectorAll('.instruction-toggle').forEach(t => t.classList.remove('active'));

        // Open clicked if it was closed
        if (!isOpen) {
            content.classList.add('open');
            btn.classList.add('active');
        }
    }

    function checkPaymentStatus() {
        const modal = document.getElementById('successModal');
        // Simulate a check, then show success after a brief delay
        const btn = document.querySelector('.btn-primary-pay');
        btn.innerHTML = `
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="animation: spin 1s linear infinite;">
                <path d="M12 2v4m0 12v4m-7.07-3.93l2.83-2.83m8.48-8.48l2.83-2.83M2 12h4m12 0h4m-3.93 7.07l-2.83-2.83M7.76 7.76L4.93 4.93"/>
            </svg>
            Mengecek...
        `;
        btn.disabled = true;

        setTimeout(() => {
            btn.disabled = false;
            btn.innerHTML = `
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Cek Status Pembayaran
            `;
            modal.classList.add('show');
            // Clear payment data
            localStorage.removeItem('paymentData');
        }, 2000);
    }
</script>

<style>
    @keyframes spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\OSCARAPP\resources\views/payment.blade.php ENDPATH**/ ?>