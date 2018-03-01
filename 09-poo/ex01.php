<?php
class Pessoa {
    
    public $nome;
    function falar() {
        return "O meunome é ".$this->nome;
    }
}

$jose = new Pessoa();
$jose->nome = "Jose Malcher Jr.";
echo $jose->falar();
