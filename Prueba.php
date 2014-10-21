<?php
/**
 * Created by PhpStorm.
 * User: MAQ22-LAB2-TIC
 * Date: 12/09/14
 * Time: 06:24 PM
 */
require("Alumno.php");
require("bd.php");
$usuario = new Alumno();

$usuario->createUsuario();
$usuario->deleteUsuario();
$usuario->showUsuario();
$usuario->readUsuario();
$usuario->updateUsuario();



?>