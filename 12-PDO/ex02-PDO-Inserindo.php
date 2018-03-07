<?php
$conn = new PDO("mysql:dbname=cursophp7;host=localhost", "root", "");

$stmt = $conn->prepare("INSERT INTO tb_usuarios(login, senha, cadastro) VALUES (:LOGIN, :SENHA, CURRENT_DATE )");
$login = "josemalcher";
$senha = "123456";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":SENHA", $senha);

$stmt->execute();

echo "Inserido ok";