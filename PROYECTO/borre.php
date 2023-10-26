<?php
include('funciones.php');

$nom = $_GET['NOM'];
$cla = $_GET['CLA'];

echo borrarUNO($correo, $cla);
?>