<?php $__env->startSection('content'); ?>
<!-- Hero Section -->
<section class="hero-section" style="padding: 0; position: relative; margin-top: 2rem; margin-bottom: 2rem;">
    <style>
        /* Bento Grid Layout */
        .bento-hero-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            grid-template-rows: 1fr 1fr;
            gap: 20px;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
        }

        .bento-main {
            grid-column: 1 / 2;
            grid-row: 1 / 3;
            height: 100%;
            min-height: 420px;
            border-radius: 16px;
            box-shadow: var(--shadow-md);
            overflow: hidden;
        }
        
        .bento-main .hero-swiper {
            width: 100%;
            height: 100%;
            border-radius: 0;
            box-shadow: none;
        }

        .banner-slide {
            position: relative;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            padding: 0 5%;
        }
        
        .banner-content {
            position: relative;
            z-index: 2;
            max-width: 55%;
        }
        
        .banner-image {
            position: absolute;
            right: 2%;
            top: 50%;
            transform: translateY(-50%);
            height: 75%;
            width: 40%;
            z-index: 1;
            object-fit: contain;
            object-position: right center;
            filter: drop-shadow(-10px 10px 20px rgba(0,0,0,0.15));
        }

        .banner-badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 999px;
            font-weight: 700;
            font-size: 14px;
            margin-bottom: 12px;
        }

        .banner-title {
            font-size: 2.8rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 12px;
            color: #0F172A;
        }

        .banner-subtitle {
            font-size: 1.1rem;
            color: #475569;
            margin-bottom: 24px;
        }
        
        /* Bento Side Blocks */
        .bento-link {
            text-decoration: none;
            display: block;
            height: 100%;
        }

        .bento-box {
            position: relative;
            height: 100%;
            min-height: 200px;
            border-radius: 16px;
            padding: 24px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .bento-box:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-md);
        }

        .bento-box-blue {
            background: linear-gradient(135deg, #e0f2fe 0%, #bae6fd 100%);
        }

        .bento-box-dark {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            color: white;
        }
        
        .bento-box-dark h3, .bento-box-dark p {
            color: white !important;
        }

        .bento-side-content {
            position: relative;
            z-index: 2;
            max-width: 65%;
        }

        .bento-tag {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 6px;
            font-size: 11px;
            font-weight: 700;
            background: #0ea5e9;
            color: white;
            margin-bottom: 10px;
        }

        .bento-tag-red {
            background: #ef4444;
        }

        .bento-box h3 {
            font-size: 1.5rem;
            font-weight: 800;
            margin-bottom: 6px;
            color: #0f172a;
            line-height: 1.2;
        }

        .bento-box p {
            font-size: 0.95rem;
            color: #475569;
            margin: 0;
            line-height: 1.4;
        }

        .bento-side-img {
            position: absolute;
            right: -10px;
            bottom: -10px;
            height: 120px;
            z-index: 1;
            filter: drop-shadow(-5px 5px 10px rgba(0,0,0,0.1));
            transition: transform 0.3s ease;
        }
        
        .bento-box:hover .bento-side-img {
            transform: scale(1.08) translateY(-5px);
        }

        .bento-img-center {
            right: 15px;
            bottom: 15px;
            height: 100px;
        }
        
        /* Custom Navigation Arrows */
        .hero-swiper { overflow: hidden !important; border-radius: 16px; }
        .hero-swiper .swiper-button-prev,
        .hero-swiper .swiper-button-next {
            background-color: #ffffff !important;
            color: #64748b !important;
            width: 40px !important;
            height: 40px !important;
            border-radius: 50% !important;
            box-shadow: 0 4px 15px rgba(0,0,0,0.15) !important;
            opacity: 0 !important;
            visibility: hidden !important;
            transition: all 0.3s ease !important;
            margin-top: -20px !important;
        }
        .hero-swiper .swiper-button-prev:after,
        .hero-swiper .swiper-button-next:after {
            font-size: 18px !important;
            font-weight: 900 !important;
        }
        
        .hero-swiper .swiper-button-prev { left: 20px !important; transform: translateX(-20px) !important; }
        .hero-swiper .swiper-button-next { right: 20px !important; transform: translateX(20px) !important; }

        .bento-main:hover .swiper-button-prev,
        .bento-main:hover .swiper-button-next {
            opacity: 1 !important;
            visibility: visible !important;
            transform: translateX(0) !important;
        }

        /* Responsive Grid */
        @media (max-width: 1024px) {
            .bento-hero-grid {
                grid-template-columns: 1fr;
                grid-template-rows: auto auto auto;
            }
            .bento-main {
                grid-column: 1 / -1;
                grid-row: 1 / 2;
                min-height: 380px;
            }
            .banner-title { font-size: 2.2rem; }
        }

        @media (max-width: 768px) {
            .bento-hero-grid {
                padding: 0 16px;
                gap: 16px;
            }
            .bento-main {
                min-height: 320px;
            }
            .banner-slide {
                padding: 25px 20px;
                align-items: flex-start;
            }
            .banner-content {
                max-width: 90%;
            }
            .banner-image {
                right: 0;
                top: auto;
                bottom: -5%;
                transform: none;
                height: 140px;
                width: 90%;
                object-position: bottom right;
            }
            .banner-title {
                font-size: 1.6rem !important;
                line-height: 1.3 !important;
            }
            .banner-subtitle {
                font-size: 0.9rem !important;
                margin-bottom: 15px;
                max-width: 75%;
            }
            .hero-swiper .swiper-button-prev,
            .hero-swiper .swiper-button-next {
                display: none !important; 
            }
        }
    </style>
    
    <div class="bento-hero-grid">
        
        <!-- Main Bento Box (Swiper Slider) -->
        <div class="bento-main">
            <div class="swiper hero-swiper">
                <div class="swiper-wrapper">
                    
                    <!-- Slide 1: Promo Spesial -> ERP Update -->
                    <div class="swiper-slide">
                        <a href="#inventory" style="text-decoration: none;">
                            <div class="banner-slide" style="background: linear-gradient(135deg, #e0e7ff 0%, #c7d2fe 100%);">
                                <div class="banner-content">
                                    <span class="banner-badge" style="background: #4f46e5; color: white;">SYSTEM UPDATE</span>
                                    <h2 class="banner-title">
                                        ERP Dashboard <br><span style="color: #4f46e5;">Versi 2.0</span>
                                    </h2>
                                    <p class="banner-subtitle">Pembaruan sistem manajemen inventaris terpadu untuk efisiensi operasional.</p>
                                    <span class="btn btn-primary" style="background-color: #0f172a; border-color: #0f172a; padding: 10px 24px; font-size: 15px; border-radius: 10px;">Lihat Laporan</span>
                                </div>
                                <img src="<?php echo e(asset('assets/server.png')); ?>" alt="ERP System" class="banner-image">
                            </div>
                        </a>
                    </div>

                    <!-- Slide 2: Jadi Seller -> Manajemen Aset -->
                    <div class="swiper-slide">
                        <a href="#assets" style="text-decoration: none;">
                            <div class="banner-slide" style="background: linear-gradient(135deg, #bbf7d0 0%, #86efac 100%);">
                                <div class="banner-content">
                                    <span class="banner-badge" style="background: #16a34a; color: white;">MANAJEMEN ASET</span>
                                    <h2 class="banner-title">
                                        Kontrol Penuh <br><span style="color: #16a34a;">Semua Gudang</span>
                                    </h2>
                                    <p class="banner-subtitle">Pantau ketersediaan stok barang dan status pengiriman secara real-time.</p>
                                    <span class="btn btn-primary" style="background-color: #16a34a; border-color: #16a34a; padding: 10px 24px; font-size: 15px; border-radius: 10px;">Cek Gudang</span>
                                </div>
                                <img src="<?php echo e(asset('assets/pc.png')); ?>" alt="Manajemen Gudang" class="banner-image">
                            </div>
                        </a>
                    </div>

                </div>
                
                <!-- Swiper Pagination -->
                <div class="swiper-pagination hero-swiper-pagination"></div>
                
                <!-- Swiper Navigation -->
                <div class="swiper-button-prev hero-swiper-prev"></div>
                <div class="swiper-button-next hero-swiper-next"></div>
            </div>
        </div>

        <!-- Right Side Bento Box 1: Gratis Ongkir -> Stok Alert -->
        <div class="bento-side bento-top">
            <a href="#alert" class="bento-link">
                <div class="bento-box bento-box-blue">
                    <div class="bento-side-content">
                        <span class="bento-tag" style="background: #ef4444;">ALERT</span>
                        <h3>Stok<br>Menipis</h3>
                        <p>12 Barang butuh restock</p>
                    </div>
                    <img src="<?php echo e(asset('assets/laptop.png')); ?>" alt="Stok Alert" class="bento-side-img">
                </div>
            </a>
        </div>

        <!-- Right Side Bento Box 2: Flash Sale -> Laporan Bulanan -->
        <div class="bento-side bento-bottom">
            <a href="#reports" class="bento-link">
                <div class="bento-box bento-box-dark">
                    <div class="bento-side-content">
                        <span class="bento-tag" style="background: #10b981;">REPORT</span>
                        <h3>Laporan<br>Bulanan</h3>
                        <p>Status: <strong>Selesai</strong></p>
                    </div>
                    <img src="<?php echo e(asset('assets/infokus.png')); ?>" alt="Laporan" class="bento-side-img bento-img-center">
                </div>
            </a>
        </div>

    </div>
</section>

<!-- Search Bar Section -->
<section class="search-section" style="margin-top: 2rem !important; transform: none !important;">
    <div class="search-container">
        <form class="search-form">
            <!-- Search Input -->
            <div class="search-field">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#9CA3AF" width="20" height="20">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.637 10.637z" />
                </svg>
                <input type="text" placeholder="Cari produk, kategori, atau lokasi..." required>
            </div>
            
            <!-- Category Dropdown -->
            <div class="search-dropdown">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#4B5563" width="18" height="18">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                </svg>
                <div class="custom-select-container" id="categoryDropdown">
                    <div class="custom-select-trigger">
                        <span class="custom-select-text">Semua Kategori</span>
                        <svg class="dropdown-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                    <div class="custom-select-options">
                        <div class="custom-option selected" data-value="">Semua Kategori</div>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="custom-option" data-value="<?php echo e(strtolower($category['name'])); ?>"><?php echo e($category['name']); ?></div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <input type="hidden" name="category" id="category-input" value="">
            </div>
            
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Cari Sekarang</button>
        </form>
        
        <!-- Popular Keywords -->
        <div class="popular-keywords">
            <span>Populer:</span>
            <a href="#iphone">iPhone</a>
            <a href="#laptop">Laptop</a>
            <a href="#motor">Motor</a>
            <a href="#sepatu">Sepatu</a>
            <a href="#kamera">Kamera</a>
            <a href="#tas">Tas</a>
            <a href="#jam">Jam Tangan</a>
        </div>
</div>
</section>

<!-- Popular Categories Section -->
<section id="kategori" class="categories-section section-padding">
    <div class="section-container">
        <div class="section-header" style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 24px;">
            <h2 class="section-title" style="margin: 0;">Kategori Populer</h2>
        </div>
        
        <style>
            .categories-carousel-wrapper {
                position: relative;
            }
            .categories-arrow {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                background-color: #ffffff;
                color: #64748b;
                width: 40px;
                height: 40px;
                border-radius: 50%;
                box-shadow: 0 4px 15px rgba(0,0,0,0.15);
                border: none;
                cursor: pointer;
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 10;
                opacity: 0;
                visibility: hidden;
                transition: all 0.3s ease;
            }
            .categories-arrow.prev {
                left: -20px;
                transform: translateY(-50%) translateX(-20px);
            }
            .categories-arrow.next {
                right: -20px;
                transform: translateY(-50%) translateX(20px);
            }
            .categories-carousel-wrapper:hover .categories-arrow.prev {
                opacity: 1;
                visibility: visible;
                transform: translateY(-50%) translateX(0);
            }
            .categories-carousel-wrapper:hover .categories-arrow.next {
                opacity: 1;
                visibility: visible;
                transform: translateY(-50%) translateX(0);
            }
            .categories-arrow:hover {
                color: #0f172a;
            }
            
            .categories-grid-scroll {
                display: flex !important;
                overflow-x: auto;
                scrollbar-width: none;
                -ms-overflow-style: none;
                gap: 16px;
                padding: 12px 8px 16px 8px;
                margin: -12px -8px 0 -8px;
                scroll-behavior: smooth;
            }
            .categories-grid-scroll::-webkit-scrollbar {
                display: none;
            }
            .categories-grid-scroll > div {
                flex: 0 0 calc((100% - (16px * 5)) / 6);
                min-width: 120px;
            }
            @media (max-width: 1024px) {
                .categories-grid-scroll > div {
                    flex: 0 0 calc(20% - 13px);
                }
            }
            @media (max-width: 768px) {
                .categories-grid-scroll > div {
                    flex: 0 0 calc(33.333% - 11px);
                    min-width: 100px;
                }
            }
            @media (max-width: 480px) {
                .categories-grid-scroll > div {
                    flex: 0 0 calc(40% - 10px);
                    min-width: 90px;
                }
            }
        </style>

        <div class="categories-carousel-wrapper">
            <button class="categories-arrow prev" onclick="scrollCategories('left')">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" width="20" height="20">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </button>
            <button class="categories-arrow next" onclick="scrollCategories('right')">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" width="20" height="20">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </button>
            
            <div class="categories-grid categories-grid-scroll">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div style="position: relative;">
                    <a href="#kategori-<?php echo e(strtolower($category['name'])); ?>" class="category-card">
                        <div class="category-img-wrapper" style="background-color: <?php echo e($category['bg']); ?>">
                            <img src="<?php echo e(asset($category['icon'])); ?>" alt="<?php echo e($category['name']); ?>">
                        </div>
                        <h3 class="category-name"><?php echo e($category['name']); ?></h3>
                        <p class="category-count"><?php echo e($category['count']); ?></p>
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        </div>
        
        <script>
            function scrollCategories(direction) {
                const grid = document.querySelector('.categories-grid-scroll');
                const scrollAmount = 300;
                if (direction === 'left') {
                    grid.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
                } else {
                    grid.scrollBy({ left: scrollAmount, behavior: 'smooth' });
                }
            }
        </script>
</div>
</section>

<!-- Latest Products Section -->
<section class="products-section section-padding">
    <div class="section-container">
        <div class="section-header">
            <h2 class="section-title">Produk Terbaru</h2>
            <a href="#" class="see-all-link" onclick="toggleGrid(this); return false;">
                Lihat Semua
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" width="16" height="16">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </a>
        </div>
        
                <div class="expandable-grid product-grid">
            <!-- Card 1 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/laptop.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Laptop ASUS ROG Strix G15 - Garansi Resmi
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp15.000.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp18.000.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 125+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/hp.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        iPhone 13 128GB - Garansi Resmi Apple Indonesia
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp12.500.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp15.000.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 250+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/camera.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Canon EOS M50 Mark II Kit 15-45mm
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp9.500.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp11.000.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 80+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/tv.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Smart TV LED 4K Ultra HD 55 Inch
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp6.200.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp8.500.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 45+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/earphone.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        TWS Bluetooth Earphone v5.3 Noise Cancelling
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp250.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp500.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 1rb+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/tablet.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Tablet Android 10 Inch RAM 4GB ROM 64GB
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp2.100.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp3.500.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 150+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 7 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/laptop.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Laptop ASUS ROG Strix G15 - Garansi Resmi
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp15.000.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp18.000.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 125+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 8 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/hp.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        iPhone 13 128GB - Garansi Resmi Apple Indonesia
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp12.500.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp15.000.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 250+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 9 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/camera.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Canon EOS M50 Mark II Kit 15-45mm
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp9.500.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp11.000.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 80+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 10 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/tv.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Smart TV LED 4K Ultra HD 55 Inch
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp6.200.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp8.500.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 45+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 11 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/earphone.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        TWS Bluetooth Earphone v5.3 Noise Cancelling
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp250.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp500.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 1rb+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 12 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/tablet.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Tablet Android 10 Inch RAM 4GB ROM 64GB
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp2.100.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp3.500.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 150+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 13 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/laptop.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Laptop ASUS ROG Strix G15 - Garansi Resmi
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp15.000.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp18.000.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 125+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 14 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/hp.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        iPhone 13 128GB - Garansi Resmi Apple Indonesia
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp12.500.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp15.000.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 250+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 15 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/camera.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Canon EOS M50 Mark II Kit 15-45mm
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp9.500.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp11.000.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 80+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 16 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/tv.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Smart TV LED 4K Ultra HD 55 Inch
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp6.200.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp8.500.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 45+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 17 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/earphone.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        TWS Bluetooth Earphone v5.3 Noise Cancelling
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp250.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp500.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 1rb+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 18 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/tablet.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Tablet Android 10 Inch RAM 4GB ROM 64GB
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp2.100.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp3.500.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 150+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 19 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/laptop.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Laptop ASUS ROG Strix G15 - Garansi Resmi
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp15.000.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp18.000.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 125+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 20 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/hp.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        iPhone 13 128GB - Garansi Resmi Apple Indonesia
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp12.500.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp15.000.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 250+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 21 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/camera.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Canon EOS M50 Mark II Kit 15-45mm
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp9.500.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp11.000.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 80+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 22 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/tv.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Smart TV LED 4K Ultra HD 55 Inch
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp6.200.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp8.500.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 45+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 23 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/earphone.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        TWS Bluetooth Earphone v5.3 Noise Cancelling
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp250.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp500.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 1rb+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 24 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/tablet.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Tablet Android 10 Inch RAM 4GB ROM 64GB
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp2.100.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp3.500.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 150+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 25 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/laptop.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Laptop ASUS ROG Strix G15 - Garansi Resmi
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp15.000.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp18.000.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 125+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 26 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/hp.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        iPhone 13 128GB - Garansi Resmi Apple Indonesia
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp12.500.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp15.000.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 250+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 27 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/camera.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Canon EOS M50 Mark II Kit 15-45mm
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp9.500.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp11.000.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 80+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 28 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/tv.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Smart TV LED 4K Ultra HD 55 Inch
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp6.200.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp8.500.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 45+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 29 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/earphone.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        TWS Bluetooth Earphone v5.3 Noise Cancelling
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp250.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp500.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 1rb+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 30 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/tablet.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Tablet Android 10 Inch RAM 4GB ROM 64GB
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp2.100.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp3.500.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 150+ terjual
                    </div>
                </div>
            </div>

        </div>
        <!-- Pagination UI -->
        <div class="pagination-container" style="display: flex; justify-content: center; align-items: center; margin-top: 30px; margin-bottom: 10px; gap: 15px; font-family: 'Inter', sans-serif;">
            <span style="color: #64748b; font-size: 0.95rem;">Jumlah produk per halaman</span>
            <div style="display: flex; gap: 8px;">
                <button style="border: none; background: transparent; color: #475569; font-size: 0.95rem; cursor: pointer; padding: 6px 12px;">20</button>
                <button style="border: none; background: transparent; color: #475569; font-size: 0.95rem; cursor: pointer; padding: 6px 12px;">40</button>
                <button style="border: none; background: #8292a5; color: white; font-size: 0.95rem; cursor: pointer; padding: 6px 12px; border-radius: 4px;">80</button>
            </div>
        </div>

</div>
</section>

<!-- Product Listing Grid Section -->
<section id="product-listing" class="listing-section section-padding" style="background-color: white;">
    <div class="section-container">
        <div class="section-header" style="margin-bottom: 30px;">
            <h2 class="section-title">Product Listing</h2>
            <a href="#" class="see-all-link" onclick="toggleGrid(this); return false;">
                Lihat Semua
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" width="16" height="16">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </a>
        </div>
        
                        <div class="expandable-grid product-grid">
            <!-- Card 1 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/laptop.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Laptop ASUS ROG Strix G15 - Garansi Resmi
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp15.000.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp18.000.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 125+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/hp.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        iPhone 13 128GB - Garansi Resmi Apple Indonesia
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp12.500.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp15.000.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 250+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/camera.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Canon EOS M50 Mark II Kit 15-45mm
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp9.500.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp11.000.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 80+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/tv.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Smart TV LED 4K Ultra HD 55 Inch
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp6.200.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp8.500.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 45+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/earphone.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        TWS Bluetooth Earphone v5.3 Noise Cancelling
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp250.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp500.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 1rb+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/tablet.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Tablet Android 10 Inch RAM 4GB ROM 64GB
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp2.100.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp3.500.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 150+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 7 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/laptop.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Laptop ASUS ROG Strix G15 - Garansi Resmi
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp15.000.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp18.000.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 125+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 8 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/hp.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        iPhone 13 128GB - Garansi Resmi Apple Indonesia
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp12.500.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp15.000.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 250+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 9 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/camera.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Canon EOS M50 Mark II Kit 15-45mm
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp9.500.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp11.000.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 80+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 10 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/tv.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Smart TV LED 4K Ultra HD 55 Inch
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp6.200.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp8.500.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 45+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 11 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/earphone.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        TWS Bluetooth Earphone v5.3 Noise Cancelling
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp250.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp500.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 1rb+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 12 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/tablet.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Tablet Android 10 Inch RAM 4GB ROM 64GB
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp2.100.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp3.500.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 150+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 13 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/laptop.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Laptop ASUS ROG Strix G15 - Garansi Resmi
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp15.000.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp18.000.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 125+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 14 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/hp.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        iPhone 13 128GB - Garansi Resmi Apple Indonesia
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp12.500.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp15.000.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 250+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 15 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/camera.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Canon EOS M50 Mark II Kit 15-45mm
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp9.500.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp11.000.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 80+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 16 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/tv.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Smart TV LED 4K Ultra HD 55 Inch
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp6.200.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp8.500.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 45+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 17 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/earphone.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        TWS Bluetooth Earphone v5.3 Noise Cancelling
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp250.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp500.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 1rb+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 18 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/tablet.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Tablet Android 10 Inch RAM 4GB ROM 64GB
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp2.100.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp3.500.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 150+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 19 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/laptop.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Laptop ASUS ROG Strix G15 - Garansi Resmi
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp15.000.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp18.000.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 125+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 20 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/hp.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        iPhone 13 128GB - Garansi Resmi Apple Indonesia
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp12.500.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp15.000.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 250+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 21 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/camera.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Canon EOS M50 Mark II Kit 15-45mm
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp9.500.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp11.000.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 80+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 22 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/tv.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Smart TV LED 4K Ultra HD 55 Inch
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp6.200.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp8.500.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 45+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 23 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/earphone.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        TWS Bluetooth Earphone v5.3 Noise Cancelling
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp250.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp500.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 1rb+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 24 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/tablet.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Tablet Android 10 Inch RAM 4GB ROM 64GB
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp2.100.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp3.500.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 150+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 25 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/laptop.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Laptop ASUS ROG Strix G15 - Garansi Resmi
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp15.000.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp18.000.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 125+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 26 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/hp.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        iPhone 13 128GB - Garansi Resmi Apple Indonesia
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp12.500.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp15.000.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 250+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 27 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/camera.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Canon EOS M50 Mark II Kit 15-45mm
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp9.500.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp11.000.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 80+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 28 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/tv.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Smart TV LED 4K Ultra HD 55 Inch
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp6.200.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp8.500.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 45+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 29 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/earphone.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        TWS Bluetooth Earphone v5.3 Noise Cancelling
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp250.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp500.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 1rb+ terjual
                    </div>
                </div>
            </div>
            <!-- Card 30 -->
            <div class="card-item" onclick="window.location.href='/product/detail'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">>54%</div>
                    


                    <img src="<?php echo e(asset('assets/tablet.png')); ?>" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        Tablet Android 10 Inch RAM 4GB ROM 64GB
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">Rp2.100.000</span>
                    </div>
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">Rp3.500.000</div>
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> 4.9 &middot; 150+ terjual
                    </div>
                </div>
            </div>

        </div>
        <!-- Pagination UI -->
        <div class="pagination-container" style="display: flex; justify-content: center; align-items: center; margin-top: 30px; margin-bottom: 10px; gap: 15px; font-family: 'Inter', sans-serif;">
            <span style="color: #64748b; font-size: 0.95rem;">Jumlah produk per halaman</span>
            <div style="display: flex; gap: 8px;">
                <button style="border: none; background: transparent; color: #475569; font-size: 0.95rem; cursor: pointer; padding: 6px 12px;">20</button>
                <button style="border: none; background: transparent; color: #475569; font-size: 0.95rem; cursor: pointer; padding: 6px 12px;">40</button>
                <button style="border: none; background: #8292a5; color: white; font-size: 0.95rem; cursor: pointer; padding: 6px 12px; border-radius: 4px;">80</button>
            </div>
        </div>
</div>
</section>



<!-- Custom Dropdown Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const dropdown = document.getElementById('categoryDropdown');
        if (dropdown) {
            const trigger = dropdown.querySelector('.custom-select-trigger');
            const options = dropdown.querySelectorAll('.custom-option');
            const textElement = dropdown.querySelector('.custom-select-text');
            const hiddenInput = document.getElementById('category-input');

            // Toggle dropdown
            trigger.addEventListener('click', function(e) {
                e.stopPropagation();
                dropdown.classList.toggle('open');
            });

            // Handle option selection
            options.forEach(option => {
                option.addEventListener('click', function(e) {
                    e.stopPropagation();
                    // Update text and input value
                    textElement.textContent = this.textContent;
                    hiddenInput.value = this.dataset.value;
                    
                    // Update selected class
                    options.forEach(opt => opt.classList.remove('selected'));
                    this.classList.add('selected');
                    
                    // Close dropdown
                    dropdown.classList.remove('open');
                });
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!dropdown.contains(e.target)) {
                    dropdown.classList.remove('open');
                }
            });
        }
    });
</script>
<style>
.product-grid {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 12px;
    position: relative;
}

@media (max-width: 1200px) {
    .product-grid { grid-template-columns: repeat(4, 1fr); }
}

@media (max-width: 992px) {
    .product-grid { grid-template-columns: repeat(3, 1fr); }
}

@media (max-width: 768px) {
    .product-grid { grid-template-columns: repeat(2, 1fr); gap: 8px; }
}

.pagination-container {
    display: none !important;
}
.expandable-grid.expanded ~ .pagination-container,
.expandable-grid.expanded + .pagination-container {
    display: flex !important;
}

/* Base logic for hiding elements after the 6th child */
.expandable-grid .card-item:nth-child(n+7) {
    display: none !important;
}
.expandable-grid.expanded .card-item:nth-child(n+7) {
    display: flex !important;
}
</style>
<script>
function toggleGrid(linkElement) {
    const section = linkElement.closest('.section-container');
    const grid = section.querySelector('.expandable-grid');
    grid.classList.toggle('expanded');
    
    if (grid.classList.contains('expanded')) {
        linkElement.innerHTML = 'Tutup <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" /></svg>';
    } else {
        linkElement.innerHTML = 'Lihat Semua <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>';
    }
}
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\0.PROJEK APPS !!!\OSCARAPP\resources\views/home.blade.php ENDPATH**/ ?>