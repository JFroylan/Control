<?php
/**
 * Created by PhpStorm.
 * User: Froylan
 * Date: 19/10/14
 * Time: 11:13 PM
 */
if($_POST)
{
    $usuario=$_POST["usuario"];
    $password=$_POST["password"];
}

require 'Login.php';
$login = new Login();
$login->validarUsuario($usuario,$password);
?>