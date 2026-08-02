<?php
$file = 'c:/OSCARAPP/resources/views/home.blade.php';
$content = file_get_contents($file);

// 1. Remove the CSS that hides the 7th-12th items so 12 items show by default
$content = preg_replace('/\.expandable-grid \.card-item:nth-child\(n\+7\)\s*\{\s*display:\s*none\s*!important;\s*\}/s', '/* CSS removed to show 12 items */', $content);
$content = preg_replace('/\.expandable-grid\.expanded \.card-item:nth-child\(n\+7\)\s*\{\s*display:\s*flex\s*!important;\s*\}/s', '/* CSS removed */', $content);

// 2. Change the BARU badge limit from 30 to 7
$content = str_replace('diffInDays(now()) < 30', 'diffInDays(now()) <= 7', $content);

// 3. Change 'Lihat Semua' button to go to /seller directly, but change the text
$pattern = '/<a href="([^"]*)" class="see-all-link"[^>]*>.*?<\/svg>\s*<\/a>/s';
$replacement = '<a href="/seller?role={{ $role }}" class="see-all-link">Menuju Product List <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" width="16" height="16"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M8.25 4.5l7.5 7.5-7.5 7.5\" /></svg></a>';
$content = preg_replace($pattern, $replacement, $content);

file_put_contents($file, $content);
echo "Done\n";
