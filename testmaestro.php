<?php
require('materia.php');
require_once('conexion.php');
require('header.php');
$materia=new Materia();
//$materia->datosMaestro(4);

//$materia->seleccionaMaestro();
//$accion=$_REQUEST['accion'];
//echo $accion;

//switch($accion){
  //  case 0:
        $materia->seleccionaMaestro();
      // break;
    //case 1:
        //$id_materia=$_REQUEST['materia'];
        //$id_usuario=$_REQUEST['id_maestro'];
        //$materia->AgregarMateria($id_materia, $id_usuario );

//}



require('footer.php');


?>