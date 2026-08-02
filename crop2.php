<?php
$src = imagecreatefrompng('c:/OSCARAPP/lp.png');
// Adjusting based on previous crop
// y from 30 -> 70 to remove navbar
// height from 480 -> 420 to remove search bar
// x from 370 -> 360, width to 504 to reach the edge
$rect = ['x' => 360, 'y' => 70, 'width' => 504, 'height' => 420];
$dest = imagecrop($src, $rect);
imagepng($dest, 'c:/OSCARAPP/public/assets/hero_mockup.png');
imagedestroy($src);
imagedestroy($dest);
echo "Cropped perfectly.";
