<?php
$email = $_POST["inputEmail"];
//var_dump($_POST);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
    "secret" => "6Lf9uE4UAAAAAKxFAsLT9cB_TqLp8mveRYi93JaE",
    "response" => $_POST["g-recaptcha-response"],
    "remoteip" => $_SERVER["REMOTE_ADDR"]
)));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$recaptch = json_decode(curl_exec($ch), true);

curl_close($ch);

//var_dump($recaptch);
if ($recaptch["success"] === true) {
    echo "OK " . $_POST["inputEmail"];
}else{
    header("Location: ex092-Usando-o-reCaptcha-para-impedir-Robos.php");
}