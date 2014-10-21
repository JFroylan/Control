<?php
require('conexion.php');
require('materia.php');
require('header.php');

$id_u=$_REQUEST['id_usuario'];
$id_m=$_REQUEST['id_materia'];

$eliminar = new Materia();
$eliminar->Eliminar_materia($id_u, $id_m );
echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=http://localhost/prueba2/testmaestro.php'>";
?>