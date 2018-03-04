<?php

/*function __autoload($nomedaClasse){
    require_once ("$nomedaClasse.php");
}*/

function incluirClasses($nomeClasse){
    if(file_exists($nomeClasse.".php")===true){
        require_once ($nomeClasse.".php");
    }
}
spl_autoload_register("incluirClasses");
spl_autoload_register(function ($nomeClasse){
    if(file_exists("NomePastaDaClasses".DIRECTORY_SEPARATOR.$nomeClasse.".php")===true){
        require_once ("NomePastaDaClasses".DIRECTORY_SEPARATOR.$nomeClasse.".php");
    }
});

$carro = new DelRey();
echo $carro->acelerar(200);