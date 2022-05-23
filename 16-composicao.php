<?php
// Composição
// Na composição, uma classe cria a intância de outra classe dentro de si propria, sendo assim, quando ela for destruida, a outra classe também sera.

class Pessoa
{
    public function atribuiNome($nome)
    {
        return "o nome da pessoa é ".$nome;
    }
}

class Exibe
{
    public $pessoa;
    public $nome;

    function __construct($nome)
    {
        $this->pessoa = new Pessoa();
        $this->nome =$nome;
    }

    public function exibeNome()
    {
        echo $this->pessoa->atribuiNome($this->nome);
    }
}

$exibe = new Exibe("José");
$exibe->exibeNome();