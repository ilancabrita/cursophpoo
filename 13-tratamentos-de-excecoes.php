<?php
// Tratamentos de exceções
/**
 * Ocorencia anomal que afecta o functionamento da aplicação
 * Excption é uma classe bese para todas Exceptions
 * message, code, file, line
*/

class Newsletter
{
    public function cadastrarEmail($email)
    {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
            throw new Exception("este email é invalido", 1);
        else:
            echo "email cadastrado com sucesso!";
        endif;
    }
}

$newsletter = new Newsletter();

try
{
    $newsletter->cadastrarEmail("contact@");
}
catch(Exception $e)
{
    echo "mensagem: ".$e->getMessage()."<br>";
    echo "codige: ".$e->getCode()."<br>";
    echo "linhe: ".$e->getLine()."<br>";
    echo "arquivo: ".$e->getFile()."<br>";
}