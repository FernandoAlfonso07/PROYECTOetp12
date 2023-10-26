<?php
 include("funciones.php");	

 $nom = $_GET['NOM'];
$correo = $_GET['CORR'];
$cla = $_GET['CLA'];

$grabacion = 0;     
$grabacion = registrar($nom, $correo, $cla);