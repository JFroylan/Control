<?php
require('conexion.php');
require('materia.php');
require('header.php');
$id_materia=$_REQUEST['materia'];
$id_usuario=$_REQUEST['id_maestro'];

$agregar = new Materia();
$agregar->AgregarMateria($id_materia, $id_usuario );
echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=http://localhost/prueba2/testmaestro.php'>";

require('footer.php');
?>
