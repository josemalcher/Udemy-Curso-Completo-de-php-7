<?php
require_once("config.php");
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY login");

//print_r($usuario);

$headers = array();
foreach ($usuarios[0] as $key => $value) {
    array_push($headers, ucfirst($key));
}

$file = fopen("usuario.csv", "w+");
fwrite($file, implode(",", $headers) . "\r\n");

//dados
foreach ($usuarios as $row) {
    $data = array();
    foreach ($row as $key => $value) {
        array_push($data, $value);
    }
    fwrite($file, implode(",", $data) . "\r\n");
}

fclose($file);

//print_r($headers);
//echo implode(",", $headers);
