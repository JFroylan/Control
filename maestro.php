<?php
require_once('usuario.php');
require_once('conexion.php');
/**
 * Created by PhpStorm.
 * User: MAQ23-LAB2-TIC
 * Date: 12/09/14
 * Time: 06:31 PM
 */
class Materia{
    private $id;
private $nombre;
private $avatar;
private $orden;
private $estatus;

    public function seleccionaMaestro() {
        echo "<div class=table-responsive>";
        echo "<form action=ajax.php method='POST' name='materia>";
        echo "<table class=\"table table-striped\">";
        echo"<tr><td>Maestro:</td><td><select name=idmae>";
        $sql="Select * from usuario where estatus= 1 and nivel=3";
        $result=mysql_query($sql)or die ("Error $sql");
        while($field=mysql_fetch_array($result)){
            $id_maestro=$field['idmaestro'];
            $opcion=utf8_decode($field['id'].")".$field['apaterno']." ".$field['amaterno']);
            echo "<option value=$id_maestro>$opcion</option>";
         }
        echo"</select></td></tr>";
        echo"<tr><td colspan=2 align=center>";
        echo"<input type=submit id=submit value=Seleccionar></td></tr>";
        echo"</table";
        echo"</form>";
        echo"</div>";

    }
}

?>