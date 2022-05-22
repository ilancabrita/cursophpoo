<?php
// Herança
// Ela é un recurso que permite que classes compartilhem atributos e métodos, afim reaproveiter codigos ou comportamentos generalizados

class Veiculo
{
    public $modelo;
    public $cor;
    public $ano;

    public function Andar()
    {
        echo "andou";
    }

    public function Parar()
    {
        echo "parou";
    }
}

class Carro extends Veiculo
{
    public function ligarLmpador()
    {
        echo "limpando em 321";
    }
}

class Moto extends Veiculo
{
    public function darGrau()
    {
        echo "dando grau em 321";
    }
}

$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "vermelho";
$carro->ano = 2018;
$carro->Andar();
echo "<br>";
$carro->ligarLmpador();
var_dump($carro);

$moto = new Moto();
$moto->modelo = "Honda Biz";
$carro->cor = "azul";
$carro->ano = 2017;
$carro->Parar();
echo "<br>";
$moto->darGrau();
var_dump($moto);