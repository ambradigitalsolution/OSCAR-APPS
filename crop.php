<?php
$src = imagecreatefrompng('c:/OSCARAPP/lp.png');
$rect = ['x' => 370, 'y' => 30, 'width' => 480, 'height' => 480];
$dest = imagecrop($src, $rect);
imagepng($dest, 'c:/OSCARAPP/public/assets/hero_crop.png');
imagedestroy($src);
imagedestroy($dest);
echo "Cropped hero image saved.";
