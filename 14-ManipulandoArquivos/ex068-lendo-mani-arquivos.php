<?php

$name = "img2";
if(!is_dir($name)){
    mkdir($name);
    echo "Diretório criado com sucesso";

}else{
    //rmdir($name); // remover diretorio
    echo "Ja existe o diretorio $name";
}