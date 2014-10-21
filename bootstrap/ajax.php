<?php
require('conexion.php');
require('maestro.php');
require('header.php');
$materia=new materia();
$id_maestro=$_POST['idmae'];
$materia->datosMaestro($id_maestro);
//$materia->materiasAsignadas($id_maestro);
//$materia->asignaMateriaMaestro($id_maestro);
require('footer.php');
?>

