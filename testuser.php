<?php
require_once('usuario.php');
require_once('header.php');
require_once('menu.php');




echo "<div>
    <form name='usuario' action='testuser.php' method='POST'>
        <table>
            <tr><td>Nombre(s)</td><td><input type='text' name='nombre'></td>
            <tr><td>Apellido paterno</td><td><input type='text' name='apep'></td>
            <tr><td>Apellido materno</td><td><input type='text' name='apem'></td>
            <tr><td>nivel</td><td><select  name='nivel'>
                        <option value='1'>Administrador</option>
                        <option value='2'>Alumno</option>
                        <option value='3'>Maestro</option>
                    </select></td>
                       <tr><td><br><input type='submit' name='submit' value='Alta'></td></tr>
                    <tr><td>ID: <input type=text name=idm></td><td><input type=submit name=submit value=Modificar> </input></td>
                    <td><input type=submit name=submit value=Buscar> </input></td>
                    <td><input type=submit name=submit value=Borrar> </input></td></tr>
            </table>

       <!-- <br><input type='submit' name='submit' value='Modificar'>
        <!--<br><input><input type='submit' name='detele' value='update'>
        <br><input><input type='submit' name='submit' value='Borrar'>-->

        </form>
    </div>";

$new=new usuario();





if(isset($_POST['submit'])){
    switch ($_POST['submit']){


        case "Alta";

            echo"<div class=\"alert alert-danger\" role=alert>";
            echo"<br>Button".$_POST['submit'];
            echo"</div>";
            $new->create("$_POST[nombre]","$_POST[apep]","$_POST[apem]",$_POST['nivel']);

            //$name=$_POST['name'];
            //$apep=$_POST['apep'];
            //$apem=$_POST['apem'];
            //$nivel=$_POST['nivel'];

            //$new->create($name,$apep,$apem,$nivel);
            //$new->create("$_POST['name']","$_POST['apep']","$_POST['apem']","$_POST['nivel']");
            break;
        case "Modificar";

            echo "<div class=\"alert alert-success\" role=alert>";
            echo "<br>Bot&oacute;n: " . $_POST['submit'];
            echo "</div>";
            $new->update($_POST['idm'],"$_POST[nombre]","$_POST[apep]","$_POST[apem]",$_POST['nivel']);

            break;
        case "Borrar";

        echo "<div class=\"alert alert-success\" role=alert>";
        echo "<br>Bot&oacute;n: " . $_POST['submit'];
        echo "</div>";
        $new->delete($_POST['idm']);

        break;
        case "Buscar";

            echo "<div class=\"alert alert-success\" role=alert>";
            echo "<br>Bot&oacute;n: " . $_POST['submit'];
            echo "</div>";
            $new->readuS($_POST['idm']);

            break;

        //case "delete";

           // $id=$_POST['idusuario'];

            //$new->delete($idusuario);
        //$new->create("$_POST['name']","$_POST['apep']","$_POST['apem']","$_POST['nivel']");
    }


}




//$new->create('nydia','america','martinez',1);
$new->readuG();
//$new->delete(25);
//$new->update(1);



?>

