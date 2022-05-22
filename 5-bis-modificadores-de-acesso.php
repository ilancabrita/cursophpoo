<?php
// Modificadores de acesso

class Veiculo
{
    public $modelo;
    public $cor;
    public $ano;

    protected function Andar()
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

    public function mostrarAcao()
    {
        $this->Andar();
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
$carro->mostrarAcao();
