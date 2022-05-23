<?php
// Interfaces

interface Crud
{
    public function create($data);
    public function read();
    public function update();
    public function delete();
}

class Noticias implements Crud
{
    public function create($data)
    {
        // logica para criar uma moticia
    }
    
    public function read()
    {
        // logica para ler uma moticia
    }

    public function update()
    {
        // logica para atualizar uma moticia
    }

    public function delete()
    {
        // logica para deletar uma moticia
    }
}

