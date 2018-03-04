<?php

interface Veiculo{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo{
    public function acelerar($velocidade)
    {
        echo "O veículo acelerou até " . $velocidade . " km/h";
    }

    public function frenar($velocidade)
    {
        echo "O veiculo frenou até " . $velocidade . " KM/h";
    }

    public function trocarMarcha($marcha)
    {
        echo "O veículo engatou a marcha " . $marcha;
    }
}

class DelRey extends Automovel{
    public function empurrar(){

    }
}

//$carro = new Automovel(); // não rola!
$carro = new DelRey();
$carro->acelerar(50);
$carro->empurrar();

