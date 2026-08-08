<?php
$dir = 'C:\Users\lenovo\.gemini\antigravity-ide\brain\ccbf73bf-140c-4713-ba0d-565caba88020';
$files = glob($dir . '\*.png');
foreach($files as $f) {
    if (file_exists($f)) {
        list($w, $h) = getimagesize($f);
        echo basename($f) . ": {$w}x{$h}" . PHP_EOL;
    }
}
