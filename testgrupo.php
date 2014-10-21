<?php
include_once ("grupo.php");
require('header.php');

$grupo = new Grupo();

$grupo->Showalumno();



require('footer.php');
?>