<?php
$file = 'c:/OSCARAPP/resources/views/home.blade.php';
$content = file_get_contents($file);

// 1. Remove the "Tampilkan semua produk" link from Product Listing header
$content = preg_replace(
    '/(<h2 class="section-title">Product Listing<\/h2>)\s*<a href="[^"]*" class="see-all-link">.*?<\/svg><\/a>/s',
    '$1',
    $content
);

// 2. Remove the Pagination UI under the first grid ("Produk Terbaru")
// We can find the first one by looking for the first occurrence of '<div class="pagination-container"'
// and replacing it up to its closing </div></div> (it has a nested div).
$pag_start = strpos($content, '<!-- Pagination UI -->');
if ($pag_start !== false) {
    // find the end of this pagination block (it closes after </div>\n          </div>)
    $pag_end = strpos($content, '</div>', $pag_start);
    $pag_end = strpos($content, '</div>', $pag_end + 1); // nested div
    $pag_end = strpos($content, '</div>', $pag_end + 1); // container div
    
    // Actually, I'll just use regex to remove the first occurrence of the pagination container
    $content = preg_replace('/<!-- Pagination UI -->\s*<div class="pagination-container".*?<\/div>\s*<\/div>/s', '', $content, 1);
}

// 3. Replace the remaining Pagination UI (under Product Listing) with "Kembali" and "Berikutnya"
$new_pagination = '<!-- Pagination UI -->
          <div class="pagination-container" style="display: flex; justify-content: center; gap: 15px; margin-top: 30px; font-family: \'Inter\', sans-serif;">
              <button style="border: 1px solid #cbd5e1; background: white; color: #475569; font-weight: 500; padding: 8px 16px; border-radius: 6px; cursor: pointer;">&laquo; Kembali</button>
              <button style="border: 1px solid #0ea5e9; background: #0ea5e9; color: white; font-weight: 500; padding: 8px 16px; border-radius: 6px; cursor: pointer;">Berikutnya &raquo;</button>
          </div>';

$content = preg_replace('/<!-- Pagination UI -->\s*<div class="pagination-container".*?<\/div>\s*<\/div>/s', $new_pagination, $content);

file_put_contents($file, $content);
echo "Done\n";
