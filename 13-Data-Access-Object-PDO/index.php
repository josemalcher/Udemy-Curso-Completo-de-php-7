<?php
require_once "config.php";
/*
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuario);
*/

/* Carrega um usuário
$jose = new Usuario();
$jose->loadById(2);
echo $jose;
*/

/*
//Carrega [[]]uma lista de usuparios
$lista = Usuario::getList();
echo json_encode($lista);
*/

/*
//Carrega uma lista de usuários buscando pelo login
$busca = Usuario::search("mari");
echo json_encode($busca);
*/

//Carrega um usuario com login e senha
/*$usuario = new Usuario();
$usuario->login("jose","123457");
echo $usuario;*/

// insert usuários
/*$usuario = new Usuario("josemalcherLogin","987654");
//$usuario->setDeslogin("JoseLotin");
//$usuario->setDessenha("123456789");
$usuario->insert();
echo $usuario;*/

// Update
/*$usuario = new Usuario();
$usuario->loadById(6);
$usuario->update('luciana barbosa','789');
echo $usuario;*/

// DELETE
$usuario = new Usuario();
$usuario->loadById(11);
$usuario->delete();
echo $usuario;
