<?php

class Endereco{
    private $rua;
    private $numero;
    private $cidade;

    public function __construct($a,$b,$c)
    {
        $this->rua = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }
    public function __destruct()
    {
        //var_dump("DESTRUIR");
    }
    public function __toString()
    {
        return $this->rua.", " . $this->numero. ", ". $this->cidade;
    }

}

$meuendereco = new Endereco("Rua tal tal tal", 609, "Belém");
echo $meuendereco;


?>