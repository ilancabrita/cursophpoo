<?php
// Getters e setters
class Login
{
    private $email;
    private $senha;

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($e)
    {
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        return $this->email =$email;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($e)
    {
        return $this->senha =$e;
    }

    public function Logar()
    {
        if($this->email == "teste@teste.com" and $this->senha == "123456"):
            echo "logado com sucasso";
        else:
            echo "dados invalidos";
        endif;
    }
}


$logar = new Login("teste@teste.com", "123456", "Rodrigo Oliveira");
$logar->Logar();
echo "<hr>";
echo $logar->getEmail();