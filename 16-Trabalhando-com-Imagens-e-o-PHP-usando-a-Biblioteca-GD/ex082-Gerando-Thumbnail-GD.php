<?php

header("Content-Type: image/jpeg");

$file = "img/wallpaper.jpg";

$new_w = 256;
$new_h = 256;

list($old_w, $old_h) = getimagesize($file);

$new_img = imagecreatetruecolor($new_w, $new_h);
$old_img = imagecreatefromjpeg($file);

imagecopyresampled($new_img, $old_img, 0,0,0,0, $new_w, $new_h, $old_w, $old_h);
imagejpeg($new_img);

imagedestroy($old_img);
imagedestroy($new_img);
