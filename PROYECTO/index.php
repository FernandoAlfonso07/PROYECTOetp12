<?php
include('funciones.php');

$correo = $_GET['CORR'];
$cla = $_GET['CLA'];

echo "<a href='perfil.php?CORR=$correo&CLA=$cla'> INGRESAR </a>";


