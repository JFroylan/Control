<?php
require('conexion.php');
require('grupo.php');
require('header.php');
$id_alumno=$_POST['alumno'];

echo "$id_alumno";
require('footer.php');
?>