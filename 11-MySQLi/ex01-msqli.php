<?php

$conn = new mysqli("localhost", "root", "","cursophp7");
if($conn->connect_error){
    echo "Erro: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (login, senha) VALUES (?,?)");

$stmt->bind_param("ss", $login, $senha); //  String String (ss)

$login="jose2";
$senha="1234567";
$stmt->execute();

$login="jose3";
$senha="1234568";

$stmt->execute();
