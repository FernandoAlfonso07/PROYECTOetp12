<?php
/* CODE :

 {

	$salida = 0;

	$conexion = mysqli_connect("localhost", "root", "root", "bd_solo_registro");

	$sql  = "insert into tb_registro( documento, nombre, fecha_nac )";

	$sql .= "values( '$documento', '$nombre', '$fecha_nac' )";

	try {

		$resultado = $conexion->query($sql);
	} catch (mysqli_sql_exception $e) {
		//var_dump( $e );
		//echo $e->getMessage(); //Imprimie el error.
	}

	if ($conexion->affected_rows > 0) {

		//echo "Grabado grabado hola";
		$salida = 1;
	} else {

		//echo "Error error";
		$salida = 0;
	}

	$conexion->close();

	return $salida;
}
 

nclude("funciones.php");	

$nom = $_GET['NOM'];
$correo = $_GET['CORR'];
$cla = $_GET['CLA'];

echo "<a href='registrar.php?NOM=$nom&CORR=$correo&CLA=$cla'> registrarme </a>";

echo registrar($nom, $correo, $cla);
 */

include("funciones.php");

$nom = $_GET['NOM'];
$correo = $_GET['CORR'];
$cla = $_GET['CLA'];

header('location:seccion-registrado.php?NOM=$nom&CORR=$correo&CLA=$cla');
