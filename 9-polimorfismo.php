<?php
// Polimorfismo

class Animal
{
    public function Andar()
    {
        echo "o animal andou";
    }

    public function Correr()
    {
        echo "o animal correu";
    }
}

class Cavalo extends Animal
{
    public function Andar()
    {
        $this->Correr();
    }
}

$animal = new Cavalo();
$animal->Andar();