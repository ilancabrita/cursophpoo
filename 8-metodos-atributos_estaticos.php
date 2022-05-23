<?php
// Motodos e atributos estaticos

use Login as GlobalLogin;

class Login
{
    public static $user;

    public static function verificaLogin()
    {
        echo "o usuario ".self::$user." esta logado!";
    }

    public function sairSistema()
    {
        echo "o usuario deslogou";
    }
}

Login::$user = "admin";
Login::verificaLogin();
echo "<hr>";
//$login = new Login();
//$login_>sairSistema();