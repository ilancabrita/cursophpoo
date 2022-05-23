<?php
require 'classes/produto.php';
require 'models/produto.php';

$produto = new \classes\Produto();
$produto->mostrarDetalhes();
echo "<hr>";
$produto = new \models\Produto();
$produto->mostrarDetalhes();

use models\Produto;

$produto = new Produto();
$produto->mostrarDetalhes();

use models\Produto as productModel;
use classes\Produto as productClass;

$produto = new productModel();
$produto->mostrarDetalhes();
echo "<hr>";
$produto2 = new productClass();
$produto2->mostrarDetalhes();