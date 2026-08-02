<?php $__env->startSection('content'); ?>
<style>
    /* Product Detail specific styles */
    .product-detail-section {
        padding: 40px 0 80px 0;
        background-color: var(--light-gray);
        min-height: 100vh;
    }
    
    .breadcrumb {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 0.9rem;
        color: var(--gray);
        margin-bottom: 24px;
    }
    
    .breadcrumb a {
        color: var(--primary);
        font-weight: 500;
    }
    
    .breadcrumb a:hover {
        text-decoration: underline;
    }

    .bento-product-grid {
        display: grid;
        grid-template-columns: 480px 1fr 340px;
        gap: 24px;
        align-items: start;
    }

    .bento-card {
        background: var(--white);
        border-radius: 24px;
        padding: 32px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.03);
        border: 1px solid rgba(226, 232, 240, 0.6);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .bento-card:hover {
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        transform: translateY(-2px);
        border-color: rgba(0, 176, 80, 0.2);
    }

    /* Mobile Responsive Bento Grid */
    @media (max-width: 1150px) {
        .bento-product-grid {
            grid-template-columns: 1fr 340px;
        }
        .bento-gallery {
            grid-column: 1 / 2;
        }
        .bento-info {
            grid-column: 1 / 3;
            order: 3;
        }
        .bento-checkout {
            grid-column: 2 / 3;
        }
    }

    @media (max-width: 850px) {
        .bento-product-grid {
            grid-template-columns: 1fr;
            gap: 16px;
        }
        .bento-card {
            padding: 24px;
            border-radius: 20px;
        }
        .bento-gallery, .bento-info, .bento-checkout {
            grid-column: 1 / -1;
            order: unset;
        }
        .main-image-container {
            border-radius: 16px;
        }
        .checkout-box {
            position: static;
        }
        .price-current {
            font-size: 2rem;
        }
        .product-title {
            font-size: 1.5rem;
        }
    }

    /* Left: Image Gallery */
    .product-gallery {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .main-image-container {
        position: relative;
        width: 100%;
        aspect-ratio: 1/1;
        border-radius: 16px;
        background: linear-gradient(145deg, #0f172a 0%, #1e293b 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        box-shadow: inset 0 0 40px rgba(0,0,0,0.5);
    }

    .main-image-container img {
        max-width: 95%;
        max-height: 95%;
        object-fit: contain;
        filter: drop-shadow(0 20px 30px rgba(0,0,0,0.4));
        transition: transform 0.3s ease;
    }

    .main-image-container:hover img {
        transform: scale(1.05);
    }

    .badge-premium {
        position: absolute;
        bottom: 20px;
        left: 20px;
        background: rgba(0, 0, 0, 0.6);
        backdrop-filter: blur(8px);
        color: white;
        padding: 8px 16px;
        border-radius: 12px;
        font-size: 0.85rem;
        font-weight: 700;
        border: 1px solid rgba(255,255,255,0.1);
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .thumbnails-wrapper {
        position: relative;
        margin-top: 12px;
    }

    .thumbnail-list {
        display: flex;
        gap: 12px;
        overflow-x: auto;
        scrollbar-width: none;
        scroll-behavior: smooth;
        padding: 4px; /* Give room for active shadow/border */
        margin: -4px;
    }
    
    .thumbnail-list::-webkit-scrollbar {
        display: none;
    }

    .thumbnail-item {
        flex: 0 0 calc(20% - 9.6px); /* Show exactly 5 items if gap is 12px */
        aspect-ratio: 1/1;
        border-radius: 12px;
        background: #1e293b;
        cursor: pointer;
        border: 2px solid transparent;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.2s;
        overflow: hidden;
        position: relative;
    }
    
    .thumbnail-item img {
        max-width: 80%;
        max-height: 80%;
        object-fit: contain;
        transition: transform 0.3s ease;
    }
    
    .thumbnail-item:hover img {
        transform: scale(1.1);
    }

    .thumbnail-item.active {
        border-color: var(--primary);
        box-shadow: 0 0 0 2px rgba(0, 176, 80, 0.2);
    }

    .thumb-nav-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(4px);
        border: 1px solid var(--border-color);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        color: var(--dark);
        transition: all 0.2s;
        z-index: 10;
    }

    .thumb-nav-btn:hover {
        background: var(--primary);
        color: white;
        border-color: var(--primary);
    }

    .thumb-nav-btn.prev { left: -10px; }
    .thumb-nav-btn.next { right: -10px; }

    /* Middle: Product Info */
    .product-info {
        display: flex;
        flex-direction: column;
    }

    .product-title {
        font-size: 1.8rem;
        font-weight: 800;
        color: var(--dark);
        line-height: 1.3;
        margin-bottom: 12px;
    }

    .product-meta {
        display: flex;
        align-items: center;
        gap: 16px;
        font-size: 0.9rem;
        color: var(--gray);
        margin-bottom: 24px;
        padding-bottom: 24px;
        border-bottom: 1px solid var(--border-color);
    }

    .rating-badge {
        display: flex;
        align-items: center;
        gap: 4px;
        font-weight: 700;
        color: var(--dark);
    }

    .rating-badge svg {
        color: #F59E0B;
    }

    .price-section {
        margin-bottom: 32px;
        background: linear-gradient(135deg, rgba(0,176,80,0.05) 0%, rgba(0,176,80,0.01) 100%);
        padding: 20px;
        border-radius: 16px;
        border: 1px solid rgba(0,176,80,0.1);
    }

    .price-current {
        font-size: 1.5rem;
        font-weight: 800;
        color: var(--dark);
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        gap: 12px;
        flex-wrap: wrap; /* allow wrapping if truly no space, but keep words intact */
    }

    .price-discount {
        background: #FEF2F2;
        color: #EF4444;
        padding: 4px 8px;
        border-radius: 8px;
        font-size: 0.85rem;
        font-weight: 700;
        white-space: nowrap;
    }

    .price-original {
        font-size: 1.1rem;
        color: var(--gray);
        text-decoration: line-through;
    }

    .product-variants {
        margin-bottom: 32px;
    }

    .variant-title {
        font-size: 1rem;
        font-weight: 700;
        margin-bottom: 12px;
        color: var(--dark);
    }

    .variant-options {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
    }

    .variant-btn {
        padding: 8px 20px;
        border: 1px solid var(--border-color);
        border-radius: 12px;
        background: var(--white);
        font-weight: 600;
        color: var(--gray);
        cursor: pointer;
        transition: all 0.2s;
    }

    .variant-btn:hover {
        border-color: var(--primary);
        color: var(--primary);
    }

    .variant-btn.active {
        background: var(--primary-light);
        border-color: var(--primary);
        color: var(--primary);
    }

    .product-description {
        margin-bottom: 24px;
    }

    .desc-tabs {
        display: flex;
        gap: 24px;
        border-bottom: 1px solid var(--border-color);
        margin-bottom: 20px;
    }

    .desc-tab {
        padding: 12px 0;
        font-weight: 700;
        color: var(--gray);
        cursor: pointer;
        position: relative;
    }

    .desc-tab.active {
        color: var(--primary);
    }

    .desc-tab.active::after {
        content: '';
        position: absolute;
        bottom: -1px;
        left: 0;
        width: 100%;
        height: 3px;
        background: var(--primary);
        border-radius: 3px 3px 0 0;
    }

    .desc-content {
        font-size: 0.95rem;
        color: var(--gray);
        line-height: 1.7;
    }
    
    .desc-content ul {
        list-style-type: disc;
        padding-left: 20px;
        margin-top: 12px;
    }
    
    .desc-content li {
        margin-bottom: 8px;
    }

    /* Right: Checkout Box */
    .checkout-box {
        position: sticky;
        top: 100px;
        display: flex;
        flex-direction: column;
    }

    .checkout-title {
        font-weight: 700;
        font-size: 1.1rem;
        margin-bottom: 16px;
    }

    .qty-selector {
        display: flex;
        align-items: center;
        border: 1px solid var(--border-color);
        border-radius: 12px;
        overflow: hidden;
        margin-bottom: 24px;
        width: fit-content;
    }

    .qty-btn {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--light-gray);
        border: none;
        cursor: pointer;
        font-size: 1.2rem;
        color: var(--dark);
        transition: background 0.2s;
    }

    .qty-btn:hover {
        background: #e2e8f0;
    }

    .qty-input {
        width: 50px;
        height: 40px;
        border: none;
        text-align: center;
        font-weight: 700;
        font-size: 1rem;
        -moz-appearance: textfield;
    }
    
    .qty-input::-webkit-outer-spin-button,
    .qty-input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .checkout-stock {
        font-size: 0.9rem;
        color: var(--gray);
        display: flex;
        align-items: center;
        gap: 6px;
        margin-left: 12px;
    }
    
    .stock-highlight {
        color: #EF4444;
        font-weight: 700;
    }

    .subtotal-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 24px;
    }

    .subtotal-label {
        color: var(--gray);
        font-size: 0.95rem;
    }

    .subtotal-value {
        font-weight: 800;
        font-size: 1.3rem;
        color: var(--dark);
    }

    .action-buttons {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .btn-buy {
        width: 100%;
        padding: 14px;
        background: var(--primary);
        color: white;
        border: none;
        border-radius: 12px;
        font-weight: 700;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.2s;
    }

    .btn-buy:hover {
        background: var(--primary-hover);
        transform: translateY(-2px);
        box-shadow: 0 8px 15px rgba(0, 176, 80, 0.2);
    }

    .btn-cart {
        width: 100%;
        padding: 14px;
        background: var(--white);
        color: var(--primary);
        border: 1px solid var(--primary);
        border-radius: 12px;
        font-weight: 700;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.2s;
    }

    .btn-cart:hover {
        background: var(--primary-light);
    }
    
    .store-info {
        margin-top: 24px;
        padding-top: 24px;
        border-top: 1px solid var(--border-color);
        display: flex;
        align-items: center;
        gap: 12px;
    }
    
    .store-avatar {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background: var(--primary-light);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary);
    }
    
    .store-details h4 {
        font-size: 0.95rem;
        font-weight: 700;
        color: var(--dark);
        margin-bottom: 2px;
    }
    
    .store-details p {
        font-size: 0.8rem;
        color: var(--gray);
    }
</style>

<div class="product-detail-section">
    <div class="section-container">
        <!-- Breadcrumb -->
        <div class="breadcrumb">
            <a href="/dashboard?role=<?php echo e($role ?? 'member'); ?>">Home</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <a href="#">Kategori</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <span>App Oscar Premium Product</span>
        </div>

        <div class="bento-product-grid">
            <!-- Left: Image Gallery (Bento Card 1) -->
            <div class="bento-card bento-gallery product-gallery">
                <div class="main-image-container">
                    <img id="mainImage" src="<?php echo e(asset($product['image'] ?? 'assets/hp.png')); ?>" alt="Product Image">
                    <div class="badge-premium">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" fill="#F59E0B"/>
                        </svg>
                        Urban XDP
                    </div>
                </div>

                <div class="thumbnails-wrapper">
                    <button class="thumb-nav-btn prev" onclick="scrollThumbs('left')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    
                    <div class="thumbnail-list" id="thumbnailList">
                        <div class="thumbnail-item active" onclick="changeImage(this, '<?php echo e(asset('assets/hp.png')); ?>')">
                            <img src="<?php echo e(asset('assets/hp.png')); ?>" alt="Thumb 1">
                        </div>
                        <div class="thumbnail-item" onclick="changeImage(this, '<?php echo e(asset('assets/laptop.png')); ?>')">
                            <img src="<?php echo e(asset('assets/laptop.png')); ?>" alt="Thumb 2">
                        </div>
                        <div class="thumbnail-item" onclick="changeImage(this, '<?php echo e(asset('assets/camera.png')); ?>')">
                            <img src="<?php echo e(asset('assets/camera.png')); ?>" alt="Thumb 3">
                        </div>
                        <div class="thumbnail-item" onclick="changeImage(this, '<?php echo e(asset('assets/tv.png')); ?>')">
                            <img src="<?php echo e(asset('assets/tv.png')); ?>" alt="Thumb 4">
                        </div>
                        <div class="thumbnail-item" onclick="changeImage(this, '<?php echo e(asset('assets/earphone.png')); ?>')">
                            <img src="<?php echo e(asset('assets/earphone.png')); ?>" alt="Thumb 5">
                        </div>
                        <div class="thumbnail-item" onclick="changeImage(this, '<?php echo e(asset('assets/server.png')); ?>')">
                            <img src="<?php echo e(asset('assets/server.png')); ?>" alt="Thumb 6">
                        </div>
                        <div class="thumbnail-item" onclick="changeImage(this, '<?php echo e(asset('assets/pc.png')); ?>')">
                            <img src="<?php echo e(asset('assets/pc.png')); ?>" alt="Thumb 7">
                        </div>
                        <div class="thumbnail-item" onclick="changeImage(this, '<?php echo e(asset('assets/infokus.png')); ?>')">
                            <img src="<?php echo e(asset('assets/infokus.png')); ?>" alt="Thumb 8">
                        </div>
                    </div>

                    <button class="thumb-nav-btn next" onclick="scrollThumbs('right')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Middle: Product Info (Bento Card 2) -->
            <div class="bento-card bento-info product-info">
                <h1 class="product-title"><?php echo e($product['name']); ?></h1>
                
                <div class="price-section" style="margin-top: 16px; margin-bottom: 24px;">
                    <div class="price-current" id="detailPrice"><?php echo e($product['price'] ?? 'Rp16.500.000'); ?></div>
                    <div style="font-size: 0.9rem; color: var(--gray); margin-top: 8px;">Stok Tersedia: <strong id="detailStock"><?php echo e($product['stock'] ?? 15); ?></strong></div>
                </div>
                <div class="product-description">
                    <div class="desc-tabs">
                        <div class="desc-tab active">Deskripsi Produk</div>
                    </div>
                    <div class="desc-content">
                        <p><strong>App Oscar Produk Unggulan</strong> dirancang khusus untuk operasional perusahaan yang menginginkan kualitas tahan lama dan berkelas. Terinspirasi dari kehidupan kota yang dinamis, produk ini memadukan fungsionalitas terbaik dengan sentuhan premium.</p>
                        <ul>
                            <li><strong>Top Notes:</strong> Bergamot, Green Apple, Mint</li>
                            <li><strong>Middle Notes:</strong> Lavender, Cedarwood, Geranium</li>
                            <li><strong>Base Notes:</strong> Vetiver, Amber, Musk</li>
                            <li><strong>Ketahanan:</strong> 8 - 12 Jam (Tergantung aktivitas)</li>
                            <li><strong>Volume:</strong> 100 ml</li>
                        </ul>
                        <p>Cocok digunakan untuk aktivitas sehari-hari, meeting kantor, hingga acara formal di malam hari. Dikemas dalam botol eksklusif berwarna hijau gelap yang memberikan kesan premium.</p>
                    </div>
                </div>
            </div>

            <!-- Right: Checkout Box (Bento Card 3) -->
            <div class="bento-card bento-checkout checkout-box">
                <h3 class="checkout-title">Atur Jumlah dan Catatan</h3>
                
                <div style="display: flex; align-items: center;">
                    <div class="qty-selector">
                        <button class="qty-btn" onclick="updateQty(-1)">-</button>
                        <input type="number" class="qty-input" id="qtyInput" value="1" min="1" max="<?php echo e($product['stock'] ?? 24); ?>" oninput="updateQty(0)">
                        <button class="qty-btn" onclick="updateQty(1)">+</button>
                    </div>

                </div>
                


                <div class="action-buttons">
                    <button class="btn-buy" onclick="addToCart()">+ Keranjang</button>
                    <button class="btn-cart" onclick="contactAdmin()">Hubungi Admin</button>
                </div>
                
                <div class="store-info">
                    <div class="store-avatar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                    </div>
                    <div class="store-details">
                        <h4>App Oscar Official Store</h4>
                    </div>
                </div>
            </div>
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

<div id="cartToast" class="toast-notification">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color:#22c55e"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
    <span id="toastMsg">Barang berhasil ditambahkan!</span>
</div>

<script>
    const pricePerItem = <?php echo e(preg_replace('/[^0-9]/', '', $product['price'] ?? '0')); ?>;

    function formatRupiah(number) {
        return new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
            minimumFractionDigits: 0
        }).format(number).replace('Rp', 'Rp ');
    }

    function updateQty(change) {
        const input = document.getElementById('qtyInput');
        let val = parseInt(input.value);
        if (isNaN(val)) val = 1;
        let newVal = val + change;
        if (newVal < 1) newVal = 1;
        if (newVal > <?php echo e($product['stock'] ?? 24); ?>) newVal = <?php echo e($product['stock'] ?? 24); ?>; // Max stock
        input.value = newVal;
        
        // Subtotal element is removed
        const subtotalElem = document.getElementById('subtotalValue');
        if (subtotalElem) {
            const subtotal = newVal * pricePerItem;
            subtotalElem.textContent = formatRupiah(subtotal);
        }
    }

    function addToCart() {
        const qty = parseInt(document.getElementById('qtyInput').value) || 1;
        const productId = window.overrideProductId || <?php echo e($product['id'] ?? 1); ?>;
        const productName = window.overrideProductName || "<?php echo e($product['name'] ?? ''); ?>";
        const productPrice = pricePerItem;
        const productImage = window.overrideProductImage || "<?php echo e(asset($product['image'] ?? 'assets/hp.png')); ?>";
        const productStore = "<?php echo e($product['warehouse'] ?? 'App Oscar Official Store'); ?>";
        
        let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
        
        let existingItem = cartItems.find(item => item.id === productId);
        if (existingItem) {
            existingItem.qty += qty;
        } else {
            cartItems.push({
                id: productId,
                name: productName,
                price: productPrice,
                image: productImage,
                store: productStore,
                qty: qty
            });
        }
        
        localStorage.setItem('cartItems', JSON.stringify(cartItems));
        
        // Simpan ke local storage cartCount lama untuk kompatibilitas
        let totalCount = cartItems.reduce((sum, item) => sum + parseInt(item.qty), 0);
        localStorage.setItem('cartCount', totalCount);
        
        // Perbarui badge di navbar secara instan
        if(typeof updateCartBadge === 'function') {
            updateCartBadge();
        }
        
        const toast = document.getElementById('cartToast');
        document.getElementById('toastMsg').textContent = qty + ' barang berhasil ditambahkan ke keranjang!';
        
        toast.classList.add('show');
        
        setTimeout(() => {
            toast.classList.remove('show');
            setTimeout(() => {
                window.location.href = '/cart?role=<?php echo e($role ?? 'member'); ?>';
            }, 300);
        }, 1200);
    }

    function contactAdmin() {
        const qty = document.getElementById('qtyInput').value || 1;
        const productName = window.overrideProductName || "<?php echo e($product['name'] ?? 'Produk App Oscar'); ?>";
        const waNumber = "6285800436222";
        const text = `Halo Admin App Oscar, saya ingin bertanya tentang produk *${productName}* (Jumlah: ${qty}).`;
        window.open(`https://wa.me/${waNumber}?text=${encodeURIComponent(text)}`, '_blank');
    }

    function scrollThumbs(direction) {
        const list = document.getElementById('thumbnailList');
        const scrollAmount = 100;
        if (direction === 'left') {
            list.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        } else {
            list.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        }
    }

    function changeImage(element, src) {
        // Update main image
        document.getElementById('mainImage').src = src;
        
        // Update active class on thumbnails
        document.querySelectorAll('.thumbnail-item').forEach(el => {
            el.classList.remove('active');
        });
        element.classList.add('active');
    }

    document.addEventListener('DOMContentLoaded', () => {
        const params = new URLSearchParams(window.location.search);
        const productId = params.get('id');
        if (productId) {
            let addedProducts = JSON.parse(localStorage.getItem('addedProducts') || '[]');
            const found = addedProducts.find(p => p.id == productId);
            if (found) {
                // Update UI elements
                document.getElementById('mainImage').src = found.image;
                const titleEl = document.querySelector('.product-title');
                if (titleEl) titleEl.textContent = found.name;
                
                const breadcrumbSpan = document.querySelector('.breadcrumb span');
                if (breadcrumbSpan) breadcrumbSpan.textContent = found.name;

                // Update Thumbnail Gallery
                const thumbList = document.getElementById('thumbnailList');
                if (thumbList) {
                    const imagesToDisplay = (found.images && found.images.length > 0) ? found.images : [found.image];
                    let thumbHtml = '';
                    imagesToDisplay.forEach((imgSrc, index) => {
                        thumbHtml += `
                        <div class="thumbnail-item ${index === 0 ? 'active' : ''}" onclick="changeImage(this, '${imgSrc}')">
                            <img src="${imgSrc}" alt="Thumb ${index + 1}">
                        </div>`;
                    });
                    thumbList.innerHTML = thumbHtml;
                }

                const detailPrice = document.getElementById('detailPrice');
                if (detailPrice && found.price) detailPrice.textContent = found.price;

                const detailStock = document.getElementById('detailStock');
                if (detailStock && found.stock !== undefined) detailStock.textContent = found.stock;
                
                // Update quantity max
                const qtyInput = document.getElementById('qtyInput');
                if (qtyInput && found.stock !== undefined) qtyInput.max = found.stock;

                const descEl = document.querySelector('.desc-content');
                if (descEl && found.desc) descEl.innerHTML = found.desc;
                
                // Override global variables for functions
                window.overrideProductId = found.id;
                window.overrideProductName = found.name;
                window.overrideProductImage = found.image;
            }
        }
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\OSCARAPP\resources\views/product_detail.blade.php ENDPATH**/ ?>