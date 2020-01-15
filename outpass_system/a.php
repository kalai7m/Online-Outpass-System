<?php
session_start();
$random_alpha = md5(rand());
$captcha_code = substr($random_alpha,0,6);
$_SESSION['captcha_code'] = $captcha_code;
header('Content-Type: image/png');
$image = imagecreatetruecolor(400, 58);
$bg = imagecolorallocate($image, 231, 100, 18);
$fg = imagecolorallocate($image, 255, 255, 255);
imagefilledrectangle($image, 0, 0, 400, 58, $bg);
$font = dirname(__FILE__) . '/arial.ttf' ;
imagettftext($image, 25, 0, 150, 40, $fg, $font, $captcha_code);
imagepng($image);
imagedestroy($image);
?>