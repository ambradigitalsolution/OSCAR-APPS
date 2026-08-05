@extends('layouts.app')

@section('content')
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
                                </div>
                                <img src="{{ asset('assets/server.png') }}" alt="ERP System" class="banner-image">
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
                                </div>
                                <img src="{{ asset('assets/pc.png') }}" alt="Manajemen Gudang" class="banner-image">
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
                    <img src="{{ asset('assets/laptop.png') }}" alt="Stok Alert" class="bento-side-img">
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
                    <img src="{{ asset('assets/infokus.png') }}" alt="Laporan" class="bento-side-img bento-img-center">
                </div>
            </a>
        </div>

    </div>
</section>

<!-- Search Bar Section -->
<section class="search-section" style="margin-top: 2rem !important; transform: none !important;">
    <div class="search-container">
        <form class="search-form" id="searchForm" onsubmit="event.preventDefault(); performSearch();">
            <!-- Search Input -->
            <div class="search-field">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#9CA3AF" width="20" height="20">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.637 10.637z" />
                </svg>
                <input type="text" id="searchInput" placeholder="Cari produk, kategori, atau lokasi..." oninput="performSearch()">
            </div>
            <div class="search-divider" style="width: 1px; height: 28px; background-color: #E2E8F0; margin: 0 12px;"></div>
            <!-- Submit Button -->
            <button type="button" class="btn btn-primary" onclick="performSearch()">Cari Sekarang</button>
        </form>
        <!-- Search Results Dropdown -->
        <div id="searchResultsDropdown" style="display: none; padding-top: 24px; border-top: 1px solid #E2E8F0; margin-top: 24px; max-height: 65vh; overflow-y: auto; padding-right: 8px;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                <h3 style="font-size: 1.1rem; font-weight: 700; color: #0F172A; margin: 0;">Hasil Pencarian</h3>
                <button onclick="clearSearch()" style="background: none; border: none; color: #ef4444; font-size: 0.85rem; font-weight: 600; cursor: pointer; text-decoration: underline;">Tutup Pencarian</button>
            </div>
            <div class="product-grid" id="searchResultsGrid"></div>
            <div id="noSearchResults" style="display: none; text-align: center; padding: 40px 20px;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#9CA3AF" width="48" height="48" style="margin-bottom:16px; margin-left:auto; margin-right:auto;">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.637 10.637z" />
                </svg>
                <p style="font-size:1.1rem; font-weight:600; color:#334155; margin-bottom:8px;">Tidak ada hasil untuk "<span id="noSearchQuery"></span>"</p>
                <p style="font-size:0.9rem; color:#64748b;">Coba kata kunci lain.</p>
            </div>
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
            @foreach($categories as $category)
                <div style="position: relative;">
                    <a href="#kategori-{{ strtolower($category['name']) }}" class="category-card">
                        <div class="category-img-wrapper" style="background-color: {{ $category['bg'] }}">
                            <img src="{{ asset($category['icon']) }}" alt="{{ $category['name'] }}">
                        </div>
                        <h3 class="category-name">{{ $category['name'] }}</h3>
                        <p class="category-count">{{ $category['count'] }}</p>
                    </a>
                </div>
            @endforeach
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
        </div>
        
                <div class="expandable-grid product-grid">
            @foreach(collect($products)->take(12) as $product)
            <div class="card-item" onclick="window.location.href='/product/detail?id={{ $product->id ?? 1 }}&role={{ $role }}'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; width: 100%; padding-bottom: 100%; background-color: #f8fafc; overflow: hidden;">
                    <!-- New Tag -->
                    <div style="position: absolute; top: 0; right: 0; background-color: #0ea5e9; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-left-radius: 8px; z-index: 2;">BARU</div>

                    @php $img = is_array($product->images) && count($product->images) > 0 ? $product->images[0] : 'https://placehold.co/150'; @endphp
                    <img src="{{ asset($img) }}" alt="Product" style="position: absolute; top: 10px; left: 10px; width: calc(100% - 20px); height: calc(100% - 20px); object-fit: contain; object-position: center;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        {{ $product->name }}
                    </h3>
                    
                    <!-- Call to action -->
                    <div style="margin-top: auto; padding-top: 12px;">
                        <div style="width: 100%; text-align: center; padding: 8px 0; border: 1px solid #00AA5B; color: #00AA5B; background: transparent; border-radius: 6px; font-size: 0.8rem; font-weight: 600; transition: all 0.2s ease;" onmouseover="this.style.background='#00AA5B'; this.style.color='white';" onmouseout="this.style.background='transparent'; this.style.color='#00AA5B';">
                            Lihat Produk
                        </div>
                    </div>

                    

                    

                </div>
            </div>
            @endforeach
</div>
        

</div>
</section>

<!-- Product Listing Grid Section -->
<section id="product-listing" class="listing-section section-padding" style="background-color: white;">
    <div class="section-container">
        <div class="section-header" style="margin-bottom: 30px;">
            <h2 class="section-title">Semua Produk</h2>
        </div>
        
                        <div class="expandable-grid product-grid">
            @foreach(collect($products)->take(36) as $product)
            <div class="card-item" onclick="window.location.href='/product/detail?id={{ $product->id ?? 1 }}&role={{ $role }}'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                
                <!-- Image Area -->
                <div style="position: relative; width: 100%; padding-bottom: 100%; background-color: #f8fafc; overflow: hidden;">
                    @php $img = is_array($product->images) && count($product->images) > 0 ? $product->images[0] : 'https://placehold.co/150'; @endphp
                    <img src="{{ asset($img) }}" alt="Product" style="position: absolute; top: 10px; left: 10px; width: calc(100% - 20px); height: calc(100% - 20px); object-fit: contain; object-position: center;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        {{ $product->name }}
                    </h3>
                    
                    <!-- Call to action -->
                    <div style="margin-top: auto; padding-top: 12px;">
                        <div style="width: 100%; text-align: center; padding: 8px 0; border: 1px solid #00AA5B; color: #00AA5B; background: transparent; border-radius: 6px; font-size: 0.8rem; font-weight: 600; transition: all 0.2s ease;" onmouseover="this.style.background='#00AA5B'; this.style.color='white';" onmouseout="this.style.background='transparent'; this.style.color='#00AA5B';">
                            Lihat Produk
                        </div>
                    </div>

                    

                    

                </div>
            </div>
            @endforeach
        </div>
        <!-- Pagination UI -->
          <div class="pagination-container" style="display: flex; justify-content: center; align-items: center; flex-wrap: wrap; gap: 15px; margin-top: 30px; font-family: 'Inter', sans-serif;">
              <button style="border: 1px solid #cbd5e1; background: white; color: #475569; font-weight: 500; padding: 8px 16px; border-radius: 6px; cursor: pointer;">&laquo; Kembali</button>
              
              <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 8px; align-items: center;">
                  <button style="border: none; background: #0ea5e9; color: white; font-weight: 600; width: 36px; height: 36px; border-radius: 6px; cursor: pointer; display: flex; align-items: center; justify-content: center;">1</button>
                  <button style="border: 1px solid #e2e8f0; background: white; color: #475569; font-weight: 500; width: 36px; height: 36px; border-radius: 6px; cursor: pointer; display: flex; align-items: center; justify-content: center;">2</button>
                  <button style="border: 1px solid #e2e8f0; background: white; color: #475569; font-weight: 500; width: 36px; height: 36px; border-radius: 6px; cursor: pointer; display: flex; align-items: center; justify-content: center;">3</button>
                  <span style="color: #94a3b8; font-weight: 500;">...</span>
                  <button style="border: 1px solid #e2e8f0; background: white; color: #475569; font-weight: 500; width: 36px; height: 36px; border-radius: 6px; cursor: pointer; display: flex; align-items: center; justify-content: center;">10</button>
              </div>

              <button style="border: 1px solid #0ea5e9; background: #0ea5e9; color: white; font-weight: 500; padding: 8px 16px; border-radius: 6px; cursor: pointer;">Berikutnya &raquo;</button>
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
    /* visible by default */
}
.expandable-grid.expanded ~ .pagination-container,
.expandable-grid.expanded + .pagination-container {
    display: flex !important;
}

/* Base logic for hiding elements after the 6th child */
/* CSS removed to show 12 items */
/* CSS removed */
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

/* ========== SEARCH FUNCTIONALITY ========== */
function searchKeyword(keyword) {
    const input = document.getElementById('searchInput');
    if (input) {
        input.value = keyword;
        input.focus();
        performSearch();
    }
}

function performSearch() {
    const input = document.getElementById('searchInput');
    const query = input ? input.value.trim().toLowerCase() : '';
    
    const resultsContainer = document.getElementById('searchResultsDropdown');
    const resultsGrid = document.getElementById('searchResultsGrid');
    const noResultsState = document.getElementById('noSearchResults');
    const noSearchQueryText = document.getElementById('noSearchQuery');
    
    if (query) {
        // We need to only search the original cards, not the cloned ones in the search results
        const originalCards = document.querySelectorAll('.products-section .card-item, .listing-section .card-item');
        
        resultsGrid.innerHTML = '';
        let visibleCount = 0;
        
        // Track added product names to prevent duplicates since there are multiple grids on the page
        const addedProducts = new Set();
        
        const categoryMap = {
            'elektronik': ['earphone', 'tws', 'bluetooth', 'speaker', 'charger', 'power bank', 'kabel'],
            'gadget': ['iphone', 'samsung', 'xiaomi', 'android', 'tablet', 'smartphone', 'hp'],
            'server': ['server', 'rack', 'dell', 'poweredge'],
            'proyektor': ['proyektor', 'projector', 'epson', 'infocus'],
            'laptop': ['laptop', 'asus', 'rog', 'thinkpad', 'macbook', 'notebook'],
            'kamera': ['kamera', 'camera', 'canon', 'eos', 'mirrorless', 'dslr'],
            'komputer pc': ['komputer', 'pc', 'desktop', 'monitor'],
            'furniture': ['kursi', 'meja', 'lemari', 'rak', 'furniture', 'ergonomis']
        };

        originalCards.forEach(card => {
            const h3 = card.querySelector('h3');
            const productName = h3 ? h3.textContent.trim().toLowerCase() : '';
            
            if (addedProducts.has(productName)) return; // Skip duplicates

            let matchesQuery = productName.includes(query);
            
            // Check if query matches a category name
            for (const [cat, keywords] of Object.entries(categoryMap)) {
                if (cat.includes(query) || query.includes(cat)) {
                    if (keywords.some(kw => productName.includes(kw))) {
                        matchesQuery = true;
                    }
                }
            }

            if (matchesQuery) {
                const clonedCard = card.cloneNode(true);
                clonedCard.style.display = 'flex';
                resultsGrid.appendChild(clonedCard);
                addedProducts.add(productName);
                visibleCount++;
            }
        });
        
        resultsContainer.style.display = 'block';
        
        if (visibleCount === 0) {
            noSearchQueryText.textContent = query;
            noResultsState.style.display = 'block';
            resultsGrid.style.display = 'none';
        } else {
            noResultsState.style.display = 'none';
            resultsGrid.style.display = 'grid'; 
        }
        
    } else {
        resultsContainer.style.display = 'none';
    }
}

function clearSearch() {
    const input = document.getElementById('searchInput');
    if (input) {
        input.value = '';
    }
    const resultsContainer = document.getElementById('searchResultsDropdown');
    if (resultsContainer) {
        resultsContainer.style.display = 'none';
    }
}

document.addEventListener('DOMContentLoaded', function() {
    // Tampilkan produk yang baru ditambahkan dari localStorage
    let addedProducts = JSON.parse(localStorage.getItem('addedProducts') || '[]');
    if (addedProducts.length > 0) {
        const grids = document.querySelectorAll('.products-section .product-grid, .listing-section .product-grid');
        
        // addedProducts disimpan di array dengan unshift (paling baru di indeks 0)
        // Kita ingin menambahkannya ke grid dari belakang (reverse) supaya yang paling baru berada paling awal (afterbegin)
        [...addedProducts].reverse().forEach(prod => {
            const cardHTML = `
            <div class="card-item" onclick="window.location.href='/product/detail?id=${prod.id}&role={{ $role }}'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: 'Inter', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    <div style="position: absolute; top: 0; right: 0; background-color: #0ea5e9; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-left-radius: 8px; z-index: 2;">BARU</div>
                    <img src="${prod.image}" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        ${prod.name}
                    </h3>
                    <div style="margin-top: auto; padding-top: 12px;">
                        <div style="width: 100%; text-align: center; padding: 8px 0; border: 1px solid #00AA5B; color: #00AA5B; background: transparent; border-radius: 6px; font-size: 0.8rem; font-weight: 600; transition: all 0.2s ease;" onmouseover="this.style.background='#00AA5B'; this.style.color='white';" onmouseout="this.style.background='transparent'; this.style.color='#00AA5B';">
                            Lihat Produk
                        </div>
                    </div>
                </div>
            </div>`;
            
            grids.forEach(grid => {
                grid.insertAdjacentHTML('afterbegin', cardHTML);
            });
        });
    }
});
</script>
@endsection
