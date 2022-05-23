<?php
// Agragação
// Na agregação, uma classe precisa da outra para executar sua ação, ou seja, uma classe utiliza a outra como parte de si propria.

class Produtos
{
    public $nome;
    public $valor;

    function __construct($nome, $valor)
    {
        $this->nome = $nome;
        $this->vzlor = $valor;
    }
}

class Carrinho
{
    public $produtos;

    public function addiciona(Produtos $produto)
    {
        $this->produtos[] = $produto;
    }

    public function exibe()
    {
        foreach($this->produtos as $produto)
        {
            echo $produto->nome."<br>";
            echo $produto->valor."<hr>";
        }
    }
}

$produto1 = new Produtos("Notebook", "1500");
$produto2 = new Produtos("Mouse", "50");

$carrinho = new Carrinho();
$carrinho->addiciona($produto1);
$carrinho->addiciona($produto2);

$carrinho->exibe();