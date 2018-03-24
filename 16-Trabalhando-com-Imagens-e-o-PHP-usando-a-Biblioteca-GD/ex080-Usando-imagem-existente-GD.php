<?php

$image = imagecreatefromjpeg("img/certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5 , 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 440, 350, utf8_decode("José Malcher Junior"), $titleColor);
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ") . date("d/m/Y"), $titleColor);

header("Content-type: image/jpeg");

//imagejpeg($image); // em tela
imagejpeg($image, "img".DIRECTORY_SEPARATOR."certificado".date("Y-m-d").".jpg", 90); // salvando em disco

imagedestroy($image);