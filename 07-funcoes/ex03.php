<?php

function ola($nome = "Mundo", $periodo = "Bom dia"){
    return "Olá $nome, $periodo <br>";

}
echo ola();
echo ola("");
echo ola("José");
echo ola("Silva", "Boa noite");