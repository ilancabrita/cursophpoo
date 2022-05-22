<?php
// Classes e atributos
class Pessoa
{
    public $nome;
    public $idade;

    public function Falar()
    {
        echo $this->nome."de".$this->idade."acabou de falar";
        echo "<hr>";
    }
}

$rodrigo = new Pessoa();
$rodrigo->nome = "Rodrigo Santos de Oliveira";
$rodrigo->idade = 25;
$rodrigo->Falar();
echo $rodrigo->nome;