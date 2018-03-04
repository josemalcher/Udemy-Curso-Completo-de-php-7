<?php

spl_autoload_register(function ($nomeClass){

    var_dump($nomeClass); //verificar o nameSpace

    $dirCLass = "class"; //Pasta do arquivo
    $filename = $dirCLass . DIRECTORY_SEPARATOR . $nomeClass .".php";
    if(file_exists($filename)){
        require_once ($filename);
    }
});