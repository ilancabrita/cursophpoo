<?php
// Modificadores de acesso
/**
 * public - fera com que não haje ocultação nenhuma, toda propriedade ou método declarado com public serão acessiveis por todos que quiserem acessà-los
 * 
 * protected - visibilidade protected faz com que todos os herdeiros vejam as propriededas ou metodos protegidos como se fossem publicos
 * 
 * private - ao contrario do publico, esse modificadores faz com que qualquer método ou propriedades seja visivel so e somente so pela classe que a declarou
*/

class Veiculo
{
    private $modelo;
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

    public function getModelo($m)
    {
        return $this->modelo = $m;
    }

    public function setModelo()
    {
        return $this->modelo;
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

$carro = new Veiculo();
$carro->setModelo("Gol");
echo $carro->setModelo();
var_dump($carro);