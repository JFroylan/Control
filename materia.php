<?php
require_once('usuario.php');
require_once('conexion.php');

class Materia{
    private $id;
    private $nombre;
    private $avatar;
    private $orden;
    private $estatus;

    public function seleccionaMaestro() {

        echo "<div class=table-responsive>";
        echo "<form action=ajax.php method='POST' name='materia'>";
        echo "<table class=\"table table-striped\">";
        echo"<tr><td>Maestro:</td><td><select name='idmae'>";
        $sql="Select * from usuario where estatus= 1 and nivel=3";
        $result=mysql_query($sql)or die ("Error $sql");
        while($field=mysql_fetch_array($result)){
            $id_maestro=$field['id'];
            $opcion=utf8_decode($field['id'].")".$field['nombre']." ".$field['a_p']);
            echo "<option value=$id_maestro>$opcion</option>";
        }
        echo"</select></td></tr>";
        echo"<tr><td colspan=2 align=center>";
        echo"<input type='submit' id='submit' value='Seleccionar'></td></tr>";
        echo"</table>";
        echo"</form>";
        echo"</div>";

    }
    public function datosMaestro($id_maestro){
    $sql4="Select * from usuario where id=$id_maestro";
        $result4=mysql_query($sql4) or die ("Error $sql4");
        $existe= mysql_num_rows($result4);

        if($existe>0){
            $nombre=$id_maestro. " ) ";
            $nombre .=mysql_result($result4,0,'a_p');
            $nombre .=" ".mysql_result($result4,0,'a_m');
            $nombre .=" ".mysql_result($result4,0,'nombre');
            $nombre=utf8_decode($nombre);
            echo"<br>Maestro Seleccionado:<strong>".$nombre."</strong>";

        }
    }
    public function AsignarMaterias($idmaestro){

        echo "<div class='table-responsive'>";
        echo"<form action4='testmaestro.php' method='post'>";
        echo"<table align='center' border='1' width='30%'>";
        echo"<tr><td colspan='2' align='center'><b>Materias impartidas:</b></td></tr>";
        $sqlq="SELECT * FROM usuario WHERE id = '$idmaestro'";
        $conq=mysql_query($sqlq) or die ('error de información de maestro2');
        $folio=mysql_result($conq, 0, 'id');

        $sql1="select * from maestro_materia where id = $folio";
        $con1=mysql_query($sql1) or die ('error de asignar materias $sqll'.mysql_error());
        $num=mysql_num_rows($con1);
        for($y=0;$y<$num;$y++){
            $foliomateria=mysql_result($con1,$y, 'idmateria');

            $sql2="select * from materias where idmateria = $foliomateria";
            $con2=mysql_query($sql2) or die ('error de mostrar materias');
            $num2=mysql_num_rows($con2);

            for($z=0;$z<$num2;$z++){

                $nombremateria=mysql_result($con2, $z, 'nombre');
                echo"<tr><td align='center'>$nombremateria </td>
                <td align='center'>
                <form action='eliminar_materia.php' method='post'>
                <input type='submit' value='Eliminar'>
                <input type='hidden' name='id_usuario' value='$folio'>
                <input type='hidden' name='id_materia' value='$foliomateria'>
                 <input type='hidden' name='accion' value='1'>
                </form></td></tr>";

            }
        }

        echo"</table></form></div> <br><br><br>";
    }
    public function MateriasAsignadas($idmaestro){

        $sqlq="SELECT * FROM usuario WHERE id = '$idmaestro'";
        $conq=mysql_query($sqlq) or die ('error de información de maestro2 $sqlq');
        $folio=mysql_result($conq, 0, 'id');

        $sql2="SELECT * from materias";
        $con2=mysql_query($sql2) or die ("error de materia");
        $num2=mysql_num_rows($con2);

        echo"<form action='agregar_materia.php' method='post'>";
        echo"<table align='center'><tr><td><b>Materias por asignar:</b></td><td><select name='materia'>";
        for($y=0;$y<$num2;$y++){
            $id_mat=mysql_result($con2, $y, 'idmateria');
            $mate=mysql_result($con2, $y, 'nombre');

            $sql3=" select * from maestro_materia where id= $folio and idmateria = $id_mat";
            $con3=mysql_query($sql3) or die ("error 3");
            $num3=mysql_num_rows($con3);
            if ($num3 > 0){
                echo"<option>$mate No disponible</option>";
            }else{
                echo"<option>$mate</option>";
            }
        }
        echo"</select></td></tr>

        <tr><td colspan='2' align=center><input type='submit' value='Agregar'></td></tr></table>";
        echo"<input type='hidden' name='id_maestro' value='$folio'>";

        echo"</form>";

    }
    public function Eliminar_materia($id_u, $id_m){
        $sql="delete from maestro_materia where id=$id_u
        and idmateria = $id_m";

        $con=mysql_query($sql) or die ("error de eliminar materia asignada $sql");
        echo"La materia ha sido sustituida del profesor";
    }
    public function AgregarMateria($id_materia, $id_usuario){

        $sq="select * from materias where nombre = '$id_materia'";
        $co=mysql_query($sq) or die ("error de materia nombre");
        $id_m=mysql_result($co, 0, 'idmateria');

        $sql="insert into maestro_materia (id, idmateria)
              value ($id_usuario,$id_m)";
        $con=mysql_query($sql) or die ("error de insertar materia".mysql_error());
        echo"La materia ha sido asignada al profesor";
    }

}
?>

