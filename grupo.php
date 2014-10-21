<?php
require_once('usuario.php');
require_once('conexion.php');
//descargar Git
//linea de comandos
//ubicar la carpeta del proyecto en la consola
//cd..
//git ini
//git status
//git add *
//git commit -m "index del proyecto escolar" son comentarios cosas nuevas
//git remote -v Listado de repositorios remotos
// git remote add etiqueta link
//git push arturo master
// usuario
//contraseña
//git pull actualizar
//git log historial



class Grupo {
    private $id;
    private $nombre;
    private $estatus;

    public function Showalumno(){
        echo"<table border=0 class='table-responsive'>";
        echo"<form action='asignargrupo.php' method='POST' name='alumno'>";
        $sql4="SELECT * FROM usuario WHERE nivel=2";
        $result4=mysql_query($sql4) or die ("Error $sql4");
        echo"<h1>Lista de alumnos</h1>";
        while($field=mysql_fetch_array($result4)){
            //$alumno = array($field['id']);
           echo"<tr><td><input type='checkbox' name='alumno[]' ></td><td>".$field['nombre']."</td><td> ".$field['a_p']."</td></tr>";

            echo"</tr>";
            // .=mysql_result($result4,0,'a_p');
           // $nombre .=" ".mysql_result($result4,0,'a_m');
            //$nombre .=" ".mysql_result($result4,0,'nombre');
            //$nombre=utf8_decode($nombre);
        }

        echo"<input type='submit' id='submit' value='Asignar'></td></tr>";
        echo"</table>";
        echo"</form>";



    // echo"<table><tr><th>Lista de alumnos</th></tr>";
      //      $nombre .=mysql_result($result4,0,'a_p');
        //    $nombre .=" ".mysql_result($result4,0,'a_m');
          //  $nombre .=" ".mysql_result($result4,0,'nombre');
            //$nombre=utf8_decode($nombre);


        //}
    }
    public function AsignarGr(){


    }
}
?>
