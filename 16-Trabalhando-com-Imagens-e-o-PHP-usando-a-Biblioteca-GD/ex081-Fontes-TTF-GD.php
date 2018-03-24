<?php
$image = imagecreatefromjpeg("img/certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

//fonts/Bevan/Bevan-Regular.ttf
$bevan = "fonts/Bevan/Bevan-Regular.ttf";
//fonts/Playball/Playball-Regular.ttf
$plaball = "fonts/Playball/Playball-Regular.ttf";
/*
imagettftext($image, 32, 0, 320, 250, $titleColor, "fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");
imagettftext($image, 32, 0, 375, 350, $titleColor, "fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "José Malcher Junior");
*/
imagettftext($image, 32, 0, 320, 250, $titleColor, $bevan, "CERTIFICADO");
imagettftext($image, 32, 0, 375, 350, $titleColor, $plaball, "José Malcher Junior");
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ") . date("d/m/Y"), $titleColor);

header("Content-type: image/jpeg");

imagejpeg($image); // em tela
//imagejpeg($image, "img" . DIRECTORY_SEPARATOR . "certificado" . date("Y-m-d") . ".jpg", 90); // salvando em disco

imagedestroy($image);