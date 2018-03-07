<?php
$conn = new PDO("mysql:dbname=cursophp7;host=localhost", "root", "");
$stmt = $conn->prepare("UPDATE tb_usuarios SET login = :LOGIN, senha = :SENHA, cadastro = CURRENT_DATE  WHERE id_usuario = :ID");

$login = "JOSEMALCHER ALTERADO";
$senha = "987654321";
$id = 1;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":SENHA", $senha);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Alterado ok!";
