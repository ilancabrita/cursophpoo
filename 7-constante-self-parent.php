<?php
// Constante, self e parent

class Pessoa
{
    const nome = "Rodrigo";

    public function exibirNome()
    {
        echo self::nome;
    }
}

class Rodrigo extends Pessoa
{
    const nome = "Oliveira";

    public function exibirNome()
    {
        echo parent::nome;
    }
}

$rodrigo = new Rodrigo();
$rodrigo->exibirNome();