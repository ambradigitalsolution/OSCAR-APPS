<?php $__env->startSection('content'); ?>
<style>
    :root {
        --tk-green: #03ac0e;
        --tk-border: #e2e8f0;
        --shadow-sm: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
    }
    .cart-container {
        max-width: 1200px;
        margin: 2rem auto;
        padding: 0 24px;
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 24px;
    }
    
    .cart-title {
        font-size: 1.5rem;
        font-weight: 800;
        margin-bottom: 24px;
        color: #0f172a;
        grid-column: 1 / -1;
    }

    .cart-left {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .cart-card {
        background: #fff;
        border-radius: 12px;
        box-shadow: var(--shadow-sm);
        padding: 20px;
    }

    .cart-store {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 16px;
        padding-bottom: 12px;
        border-bottom: 1px solid var(--tk-border);
    }
    
    .cart-store-name {
        font-weight: 700;
        font-size: 1rem;
        color: #1e293b;
    }

    .cart-item {
        display: flex;
        gap: 16px;
        align-items: flex-start;
        margin-bottom: 16px;
    }

    .cart-item-checkbox {
        margin-top: 24px;
        width: 18px;
        height: 18px;
        cursor: pointer;
    }

    .cart-item-img {
        width: 80px;
        height: 80px;
        border-radius: 8px;
        object-fit: contain;
        background: #f8fafc;
        padding: 4px;
        border: 1px solid var(--tk-border);
    }

    .cart-item-details {
        flex: 1;
    }

    .cart-item-name {
        font-size: 1rem;
        font-weight: 600;
        color: #334155;
        margin-bottom: 4px;
        text-decoration: none;
    }
    .cart-item-name:hover {
        color: var(--tk-green);
    }

    .cart-item-price {
        font-size: 1.1rem;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 12px;
    }

    .cart-item-actions {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        gap: 24px;
    }

    .cart-item-del {
        color: #94a3b8;
        cursor: pointer;
        transition: color 0.2s;
    }
    .cart-item-del:hover {
        color: #ef4444;
    }

    /* Right Column Sticky */
    .cart-right {
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
        .cart-container {
            grid-template-columns: 1fr;
        }
        .cart-right {
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
        .cart-container {
            padding-bottom: 150px;
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

    .qty-selector {
        display: flex;
        align-items: center;
        border: 1px solid var(--tk-border);
        border-radius: 6px;
        overflow: hidden;
        height: 28px;
    }
    .qty-btn {
        width: 28px;
        height: 100%;
        background: #fff;
        border: none;
        color: var(--tk-green);
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .qty-btn:hover {
        background: #f1f5f9;
    }
    .qty-input {
        width: 40px;
        height: 100%;
        border: none;
        border-left: 1px solid var(--tk-border);
        border-right: 1px solid var(--tk-border);
        text-align: center;
        font-weight: 600;
        font-size: 0.9rem;
        outline: none;
        -moz-appearance: textfield;
    }
    .qty-input::-webkit-outer-spin-button,
    .qty-input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    
    .cart-item-checkbox, .store-cb {
        accent-color: var(--tk-green);
    }
</style>

<div class="cart-container">
    <div class="cart-title">Keranjang</div>
    
    <!-- Left: Cart Items -->
    <div class="cart-left">
        <!-- Select All -->
        <div class="cart-card" style="display:flex; align-items:center; gap:12px; padding: 16px 20px;">
            <input type="checkbox" class="cart-item-checkbox" id="selectAll" checked onchange="toggleAll(this)" style="margin:0;">
            <label for="selectAll" style="font-weight:600; cursor:pointer; color:#475569;">Pilih Semua</label>
        </div>

        <!-- Store Block -->
        <div id="cart-items-container">
            <!-- Items will be injected here via JS -->
        </div>
    </div>
    
    <!-- Right: Summary -->
    <div class="cart-right">
        <div class="summary-card">
            <div class="summary-title">Ringkasan Pesanan</div>
            <div class="summary-row">
                <span id="summary-items">Total Barang: 1</span>
            </div>
            
            <button class="btn-buy" style="width: 100%;" onclick="window.location.href='/checkout?role=<?php echo e($role ?? 'member'); ?>'">Buat Pesanan</button>
        </div>
    </div>
</div>

<script>
    let cartItems = [];

    document.addEventListener('DOMContentLoaded', () => {
        cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
        renderCart();
    });

    function formatRupiah(number) {
        return new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
            minimumFractionDigits: 0
        }).format(number).replace('Rp', 'Rp ');
    }

    function renderCart() {
        const container = document.getElementById('cart-items-container');
        if (cartItems.length === 0) {
            container.innerHTML = '<div style="padding:40px; text-align:center; color:var(--tk-text-sec)">Keranjang Anda kosong.</div>';
            updateTotal();
            return;
        }

        // Group by store
        const grouped = {};
        cartItems.forEach(item => {
            if (!grouped[item.store]) grouped[item.store] = [];
            grouped[item.store].push(item);
        });

        let html = '';
        for (const store in grouped) {
            html += `
            <div class="cart-card" style="margin-bottom:16px;">
                <div class="cart-store">
                    <input type="checkbox" class="cart-item-checkbox store-cb" checked onchange="updateTotal()" style="margin:0;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color:var(--tk-green)"><path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                    <div class="cart-store-name">${store}</div>
                </div>
            `;
            
            grouped[store].forEach(item => {
                html += `
                <div class="cart-item" data-id="${item.id}">
                    <input type="checkbox" class="cart-item-checkbox item-cb" checked onchange="updateTotal()">
                    <img src="${item.image}" class="cart-item-img">
                    <div class="cart-item-details">
                        <a href="/product/detail?id=${item.id}&role=<?php echo e($role ?? 'member'); ?>" class="cart-item-name">${item.name}</a>
                        
                        <div class="cart-item-actions">
                            <svg class="cart-item-del" onclick="removeItem(${item.id})" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="cursor:pointer;"><path d="M3 6h18M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"/></svg>
                            <div class="qty-selector" style="transform: scale(0.9); margin-bottom:0;">
                                <button class="qty-btn" onclick="updateItemQty(${item.id}, -1)">-</button>
                                <input type="number" class="qty-input item-qty" value="${item.qty}" min="1" max="99" onchange="setItemQty(${item.id}, this.value)">
                                <button class="qty-btn" onclick="updateItemQty(${item.id}, 1)">+</button>
                            </div>
                        </div>
                    </div>
                </div>
                `;
            });
            html += `</div>`;
        }
        
        container.innerHTML = html;
        updateTotal();
    }
    
    function removeItem(id) {
        cartItems = cartItems.filter(item => item.id !== id);
        saveCart();
        renderCart();
    }

    function updateItemQty(id, change) {
        const item = cartItems.find(i => i.id === id);
        if (item) {
            let newVal = item.qty + change;
            if (newVal < 1) newVal = 1;
            item.qty = newVal;
            saveCart();
            renderCart();
        }
    }
    
    function setItemQty(id, val) {
        const item = cartItems.find(i => i.id === id);
        if (item) {
            let newVal = parseInt(val);
            if (isNaN(newVal) || newVal < 1) newVal = 1;
            item.qty = newVal;
            saveCart();
            renderCart();
        }
    }
    
    function saveCart() {
        localStorage.setItem('cartItems', JSON.stringify(cartItems));
        let totalCount = cartItems.reduce((sum, i) => sum + i.qty, 0);
        localStorage.setItem('cartCount', totalCount);
        if(typeof updateCartBadge === 'function') updateCartBadge();
    }

    function toggleAll(selectAllCb) {
        const checkboxes = document.querySelectorAll('.item-cb, .store-cb');
        checkboxes.forEach(cb => {
            cb.checked = selectAllCb.checked;
        });
        updateTotal();
    }

    function updateTotal() {
        const itemsDom = document.querySelectorAll('.cart-item');
        let totalItems = 0;
        
        itemsDom.forEach(itemNode => {
            const isChecked = itemNode.querySelector('.item-cb').checked;
            if (isChecked) {
                const qty = parseInt(itemNode.querySelector('.item-qty').value) || 0;
                totalItems += qty;
            }
        });
        
        const summaryItems = document.getElementById('summary-items');
        if (summaryItems) summaryItems.textContent = 'Total Barang: ' + totalItems;
        
        const buyBtn = document.querySelector('.cart-right .btn-buy');
        buyBtn.textContent = 'Buat Pesanan (' + totalItems + ')';
        buyBtn.style.opacity = totalItems > 0 ? '1' : '0.5';
        buyBtn.disabled = totalItems === 0;
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\OSCARAPP\resources\views/cart.blade.php ENDPATH**/ ?>