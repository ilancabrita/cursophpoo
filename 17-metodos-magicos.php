<?php
// Métodos magicos

class Pessoa
{
    private $dados = array();

    public function __set($nome, $valor)
    {
        $this->dados[$nome] = $valor;
    }

    public function __get($nome)
    {
        return  $this->dados[$nome];
    }

    public function __toString()
    {
        return "tentei imprimir o objeto";
    }

    public function __invoke()
    {
        return "objeto como fução";
    }
}

$pessoa = new Pessoa();
$pessoa->nome = "Danilo";
$pessoa->idade = 50;
$pessoa->sexo = "M";

var_dump($pessoa);

echo $pessoa->nome."<br>";
echo $pessoa->idade."<br>";
echo $pessoa->sexo."<br>";

echo $pessoa;