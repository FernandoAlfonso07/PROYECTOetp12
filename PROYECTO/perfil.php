<?php
include('funciones.php');

$correo = $_GET['CORR'];
$cla = $_GET['CLA'];

echo consultarUNO($correo, $cla);
echo "<a href='seccion-mostrarCon.php'> Navegar entre contenidos </a>";

?>

<a href="menu.php">Volver</a>