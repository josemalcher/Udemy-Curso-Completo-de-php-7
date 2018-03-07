<?php
$conn = new PDO("mysql:dbname=cursophp7;host=localhost", "root", "");
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE id_usuario = ?");

$conn->beginTransaction();
$id = 2;
$stmt->execute(array($id));

//$conn->rollBack(); //cancela
$conn->commit();

echo "DELETE ok!";
