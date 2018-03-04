<?php

class Documento{
    private $numero;

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero): void
    {
        $this->numero = $numero;
    }
}

class CPF extends Documento{
    public function validar(): bool{
        $numeroCPF = $this->getNumero();
        //VALIDAÇÃO DO CPF
        return true;
    }
}

$doc = new CPF();
$doc->setNumero("12312312312");
var_dump($doc->validar());
echo "<br>";
echo $doc->getNumero();
