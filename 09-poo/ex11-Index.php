<?php

require_once ("config.php");

use Cliente\Cadastro;
$cad = new Cadastro();
$cad->setNome("Jose");
$cad->setEmail("jose@jose.com");
$cad->setSenha("123456");

echo $cad->registraVenda();