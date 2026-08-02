@extends('layouts.app')

@section('content')
<style>
    :root {
        --tk-green: #03ac0e;
        --tk-border: #e2e8f0;
        --shadow-sm: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
    }
    .checkout-container {
        max-width: 1200px;
        margin: 2rem auto;
        padding: 0 24px;
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 24px;
    }
    
    .checkout-title {
        font-size: 1.5rem;
        font-weight: 800;
        margin-bottom: 24px;
        color: #0f172a;
        grid-column: 1 / -1;
    }

    .checkout-left {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .checkout-card {
        background: #fff;
        border-radius: 12px;
        box-shadow: var(--shadow-sm);
        padding: 24px;
    }

    .checkout-section-title {
        font-size: 1.1rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 16px;
    }

    /* Address Section */
    .address-details {
        border-top: 1px solid var(--tk-border);
        padding-top: 16px;
    }
    .address-name {
        font-weight: 700;
        margin-bottom: 4px;
    }
    .address-text {
        font-size: 0.95rem;
        color: #475569;
        line-height: 1.5;
        margin-bottom: 12px;
    }
    .btn-outline {
        display: inline-block;
        padding: 8px 16px;
        border: 1px solid var(--tk-border);
        border-radius: 8px;
        font-weight: 600;
        font-size: 0.9rem;
        color: #475569;
        background: #fff;
        cursor: pointer;
        transition: all 0.2s;
    }
    .btn-outline:hover {
        border-color: var(--tk-green);
        color: var(--tk-green);
    }

    /* Order Items */
    .order-store-name {
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .order-item {
        display: flex;
        gap: 16px;
        margin-bottom: 16px;
    }
    .order-item-img {
        width: 60px;
        height: 60px;
        border-radius: 8px;
        object-fit: contain;
        background: #f8fafc;
        border: 1px solid var(--tk-border);
    }
    .order-item-info {
        flex: 1;
    }
    .order-item-name {
        font-weight: 600;
        color: #334155;
        margin-bottom: 4px;
    }
    .order-item-price {
        font-weight: 700;
        color: #0f172a;
    }

    /* Shipping & Payment Options */
    .option-select {
        width: 100%;
        padding: 12px 16px;
        border: 1px solid var(--tk-border);
        border-radius: 8px;
        font-size: 0.95rem;
        color: #334155;
        background-color: #fff;
        cursor: pointer;
        outline: none;
    }
    .option-select:focus {
        border-color: var(--tk-green);
        box-shadow: 0 0 0 2px rgba(3,172,14,0.1);
    }

    /* Right Column Sticky */
    .checkout-right {
        position: sticky;
        top: 100px;
        height: max-content;
    }
    
    .summary-card {
        background: #fff;
        border-radius: 12px;
        box-shadow: var(--shadow-sm);
        padding: 24px;
    }

    .summary-title {
        font-size: 1.1rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 16px;
    }

    .summary-row {
        display: flex;
        justify-content: space-between;
        margin-bottom: 12px;
        font-size: 0.95rem;
        color: #475569;
    }

    .summary-total {
        display: flex;
        justify-content: space-between;
        margin-top: 16px;
        padding-top: 16px;
        border-top: 1px dashed var(--tk-border);
        font-size: 1.2rem;
        font-weight: 800;
        color: #0f172a;
        margin-bottom: 24px;
    }

    @media (max-width: 768px) {
        .checkout-container {
            grid-template-columns: 1fr;
        }
        .checkout-right {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            top: auto;
            z-index: 50;
            padding: 16px;
            background: #fff;
            box-shadow: 0 -4px 15px rgba(0,0,0,0.05);
            border-radius: 16px 16px 0 0;
            margin: 0;
            width: 100%;
        }
        .checkout-container {
            padding-bottom: 180px;
        }
        .summary-card {
            padding: 0;
            box-shadow: none;
        }
    }
    
    /* Missing Styles */
    .btn-buy {
        width: 100%;
        padding: 12px 24px;
        background: var(--tk-green);
        color: white;
        border: none;
        border-radius: 8px;
        font-weight: 700;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.2s;
    }
    .btn-buy:hover {
        background: #028e0b;
    }
    .btn-buy:disabled {
        background: #e2e8f0;
        color: #94a3b8;
        cursor: not-allowed;
    }
</style>

<div class="checkout-container">
    <div class="checkout-title">Form Pesanan Produk</div>
    
    <!-- Left: Checkout Details -->
    <div class="checkout-left">
        
        <!-- Address -->
        <div class="checkout-card">
            <div class="checkout-section-title">Informasi Mitra / Prospek</div>
            <div style="margin-top: 16px;">
                <label style="display:block; margin-bottom:8px; font-weight:600; font-size:0.9rem; color:#1e293b;">Nama Mitra / Klien</label>
                <input type="text" id="buyerName" class="option-select" placeholder="Contoh: PT. Maju Jaya (Bpk. Budi)" style="width:100%; box-sizing:border-box; padding:10px 14px; border:1px solid #cbd5e1; border-radius:8px; font-family:inherit;" required>
            </div>
            <div style="margin-top: 16px;">
                <label style="display:block; margin-bottom:8px; font-weight:600; font-size:0.9rem; color:#1e293b;">Kota / Lokasi</label>
                <input type="text" id="buyerCity" class="option-select" placeholder="Contoh: Jakarta Selatan" style="width:100%; box-sizing:border-box; padding:10px 14px; border:1px solid #cbd5e1; border-radius:8px; font-family:inherit;" required>
            </div>
        </div>

        <!-- Order Items & Shipping -->
        <div class="checkout-card" id="checkout-items-card">
            <!-- Injected via JS -->
        </div>


        
    </div>
    
    <!-- Right: Summary -->
    <div class="checkout-right">
        <div class="summary-card">
            <div class="summary-title">Ringkasan Pesanan</div>
            <div class="summary-row">
                <span id="summary-items-count">Total Barang: 0</span>
            </div>
            
            <button class="btn-buy" id="btn-pay" style="width: 100%; margin-top: 16px;" onclick="processRequest()">Simpan Prospek</button>
        </div>
    </div>
</div>

<style>
    /* Toast Notification */
    .toast-notification {
        position: fixed;
        top: 24px;
        left: 50%;
        transform: translateX(-50%) translateY(-100px);
        background: #0f172a;
        color: #fff;
        padding: 12px 24px;
        border-radius: 8px;
        font-weight: 600;
        font-size: 0.95rem;
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        opacity: 0;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        z-index: 1000;
        display: flex;
        align-items: center;
        gap: 12px;
    }
    
    .toast-notification.show {
        transform: translateX(-50%) translateY(0);
        opacity: 1;
    }
</style>

<div id="checkoutToast" class="toast-notification">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color:#22c55e"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
    <span id="checkoutToastMsg">Memproses pembayaran... Simulasi Berhasil!</span>
</div>

<script>
    let cartItems = [];
    let subtotal = 0;
    
    document.addEventListener('DOMContentLoaded', () => {
        cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
        renderCheckout();
    });

    function formatRupiah(number) {
        return new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
            minimumFractionDigits: 0
        }).format(number).replace('Rp', 'Rp ');
    }

    function renderCheckout() {
        const container = document.getElementById('checkout-items-card');
        
        if (cartItems.length === 0) {
            container.innerHTML = '<div style="padding:20px; text-align:center;">Tidak ada barang untuk di simpan.</div>';
            return;
        }

        const grouped = {};
        cartItems.forEach(item => {
            if (!grouped[item.store]) grouped[item.store] = [];
            grouped[item.store].push(item);
        });

        let html = '';
        let totalQty = 0;
        subtotal = 0;
        
        for (const store in grouped) {
            html += `
            <div class="order-store-name" style="margin-top: ${html === '' ? '0' : '20px'};">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color:var(--tk-green)"><path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                ${store}
            </div>
            `;
            
            grouped[store].forEach(item => {
                totalQty += item.qty;
                subtotal += (item.qty * item.price);
                
                html += `
                <div class="order-item">
                    <img src="${item.image}" class="order-item-img">
                    <div class="order-item-info">
                        <div class="order-item-name">${item.name}</div>
                        <div style="font-size: 0.85rem; color:#64748b; margin-bottom: 4px;">${item.qty} barang</div>
                    </div>
                </div>
                `;
            });
        }
        
        html += `
            <!-- Shipping Selection -->
            <div style="border-top: 1px solid var(--tk-border); margin-top: 20px; padding-top: 20px;">
                <div class="checkout-section-title" style="font-size:1rem;">Nama Proyek / Catatan Tambahan</div>
                <textarea class="option-select" id="requestReason" rows="3" placeholder="Contoh: Pesanan untuk Klien PT. ABC. Mohon berikan harga terbaik karena berpotensi ambil kuantiti banyak..." style="resize: vertical;"></textarea>
            </div>
        `;
        
        container.innerHTML = html;
        
        document.getElementById('summary-items-count').textContent = 'Total Barang: ' + totalQty;
        // updateShipping is no longer needed
    }

    function processRequest() {
        const toast = document.getElementById('checkoutToast');
        document.getElementById('checkoutToastMsg').textContent = 'Menyimpan prospek...';
        toast.classList.add('show');
        
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = '/checkout/submit?role={{ $role ?? 'member' }}';
        
        const csrfInput = document.createElement('input');
        csrfInput.type = 'hidden';
        csrfInput.name = '_token';
        csrfInput.value = '{{ csrf_token() }}';
        form.appendChild(csrfInput);
        
        const buyerNameInput = document.createElement('input');
        buyerNameInput.type = 'hidden';
        buyerNameInput.name = 'buyer_name';
        buyerNameInput.value = document.getElementById('buyerName').value;
        form.appendChild(buyerNameInput);
        
        const buyerCityInput = document.createElement('input');
        buyerCityInput.type = 'hidden';
        buyerCityInput.name = 'buyer_city';
        buyerCityInput.value = document.getElementById('buyerCity').value;
        form.appendChild(buyerCityInput);
        
        const notesInput = document.createElement('input');
        notesInput.type = 'hidden';
        notesInput.name = 'notes';
        notesInput.value = document.getElementById('requestReason').value;
        form.appendChild(notesInput);
        
        const cartInput = document.createElement('input');
        cartInput.type = 'hidden';
        cartInput.name = 'cart_data';
        cartInput.value = JSON.stringify(cartItems);
        form.appendChild(cartInput);
        
        document.body.appendChild(form);

        // Clear cart from local storage before submitting
        localStorage.removeItem('cartItems');
        localStorage.removeItem('cartCount');
        
        form.submit();
    }
</script>
@endsection
