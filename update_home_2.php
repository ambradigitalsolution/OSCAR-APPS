<?php
$file = 'c:/OSCARAPP/resources/views/home.blade.php';
$content = file_get_contents($file);

// 1. Remove the link from the "Produk Terbaru" section
$content = preg_replace(
    '/(<h2 class="section-title">Produk Terbaru<\/h2>)\s*<a href="[^"]*" class="see-all-link">.*?<\/svg><\/a>/s',
    '$1',
    $content
);

// 2. Change the text in the "Product Listing" section to "Tampilkan semua produk"
$content = preg_replace(
    '/(<h2 class="section-title">Product Listing<\/h2>)\s*<a href="([^"]*)" class="see-all-link">Menuju Product List.*?<\/svg><\/a>/s',
    '$1
              <a href="$2" class="see-all-link">Tampilkan semua produk <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" width="16" height="16"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg></a>',
    $content
);

// 3. Replace the massive hardcoded block in the second section (Product Listing) with a foreach loop.
// We can find the start of the second grid using '<!-- Product Listing Grid Section -->' and the end before '<!-- Pagination UI -->'
$start_marker = '<!-- Product Listing Grid Section -->';
$end_marker = '<!-- Pagination UI -->';

$start_pos = strpos($content, $start_marker);
if ($start_pos !== false) {
    // find the start of the expandable-grid inside it
    $grid_start = strpos($content, '<div class="expandable-grid product-grid">', $start_pos);
    $end_pos = strpos($content, $end_marker, $grid_start);
    
    if ($grid_start !== false && $end_pos !== false) {
        $replacement = '<div class="expandable-grid product-grid">
            @foreach($products as $product)
            <div class="card-item" onclick="window.location.href=\'/product/detail\'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: \'Inter\', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow=\'0 4px 12px rgba(0,0,0,0.1)\'" onmouseout="this.style.boxShadow=\'none\'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    @if(!empty($product[\'discount\']))
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">{{ $product[\'discount\'] }}</div>
                    @endif

                    <img src="{{ asset($product[\'image\']) }}" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        {{ $product[\'name\'] }}
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">{{ $product[\'price\'] }}</span>
                    </div>
                    @if(!empty($product[\'price_max\']))
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">{{ $product[\'price_max\'] }}</div>
                    @endif
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> {{ $product[\'rating\'] ?? \'4.9\' }} &middot; {{ $product[\'sales\'] ?? \'0\' }}+ terjual
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        ';
        
        $content = substr($content, 0, $grid_start) . $replacement . substr($content, $end_pos);
    }
}

file_put_contents($file, $content);
echo "Done\n";
