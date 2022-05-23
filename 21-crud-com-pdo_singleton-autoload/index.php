<?php
// CRUD com PDO, Singleton e autoload
require_once 'vendor/autoload.php';

$produto = new \App\Model\Produto();
$produto->setId(1);
$produto->setNome("Notebook DELL");
$produto->setDescricao('i5, 4gb');

var_dump($produto);

$produtoDao = new \App\Model\ProdutoDao();
$produtoDao->create($produto);
$produtoDao->read();
$produtoDao->update($produto);
$produtoDao->delete(2);

foreach($produtoDao->read() as $produto):
    echo $produto['nome']."<br>".$produto['descricao']."<hr>";
endforeach;