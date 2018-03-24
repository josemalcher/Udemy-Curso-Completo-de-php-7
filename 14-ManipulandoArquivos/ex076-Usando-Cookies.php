<?php

$data = array("empresa" => "JoseMalcher.net" );

setcookie("Nome_DO_COOKIE", json_encode($data), time() + 3600);

echo "Criado!";