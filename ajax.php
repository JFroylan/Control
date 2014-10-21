<?php
require('conexion.php');
require('materia.php');
require('header.php');
$id_maestro=$_POST['idmae'];
$materia=new materia();

$materia->datosMaestro($id_maestro);
$materia->AsignarMaterias($id_maestro);
$materia->MateriasAsignadas($id_maestro);
//Froylan Rosales
//echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=http://localhost/prueba2/testmaestro.php'>";
require('footer.php');
?>

