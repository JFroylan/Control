
<?php

//error_reporting(E_ERROR);

//Incluímos librerías y archivos necesarios.
require 'usuario.php';
require("header.php");
//require 'bd.php';
require 'alumno.php';
//if($nivelUsuario == 1)//Administrador
//{
//  require("menu.php");
//}
//else
//   if($nivelUsuario == 2)//Maestro
// {
//     require("menu-maestro.php");
//}
//require 'header.php';
//require 'footer.php';

//Creamos un objeto.
//$alumno = new Alumno();
$alumno = new Alumno();
//Sólo si recibe el elemento del formulario 'add_alu_grup'.
if(isset($_REQUEST['add_alu_grup'])){
    //Recibimos la cantidad de alumnos.
    $cuantos = $_REQUEST['cuantos'];
    //Repetimos el proceso hasta $cuantos.
    echo"<div class='success_sok'>Alumnos agregados correctamente</div>";
    for($y = 0; $y < $cuantos; $y++){
        //Recibimos el checkbox de la posición [$y].
        $al = $_REQUEST["al$y"];
        //Va a llamar al método asignaGrupos sólo si el checkbox está lleno.
        if($al != ""){
            $alumno->asignaGrupos($al, $_REQUEST['grupo']);
        }
    }
}
//Sólo si recibe el id a eliminar 'desasignar'.
if(isset($_REQUEST['id'])){
    //Mandamos llamar al método desasignaGrupos.
    $alumno->desasignaGrupos($_REQUEST['id']);
    echo"<div class='error_sok'>Alumnos desasignados correctamente</div>";
}

//Creamos un formulario en el cual mostramos los alumnos y el combo dinámico de los grupos.
echo"<form action=TestAlumno.php method=POST>";
//Mostramos los alumnos ya sea asignados o desasignados de un grupo.
$alumno->muestraAlumnosGrupos();
//Mostramos el combo dinámico.
$alumno->muestraGrupos();
//Elemento del formulario 'add_alu_grup'.
echo"<input type=hidden name=add_alu_grup>";
echo"<input type=submit value=Agregar class=button_sok>";
echo"</form>";

?>