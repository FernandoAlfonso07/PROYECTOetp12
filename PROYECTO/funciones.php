<?php

function consultarUNO($correo, $cla)
{
    include("connect.php");

    $salida = "";

    $conexion = mysqli_connect($servidor, $usuario, $clave, $base_datos);
    $sql  = "select * from usuario where Correo_electronico = '$correo' and clave = '$cla'";
    $resultado = $conexion->query($sql);
    //echo $sql;

    while ($fila = mysqli_fetch_array($resultado)) {
        $salida .= 'ID USUARIO :' . $fila[0] . '<br>';
        $salida .= 'HOLA.. ' . $fila[1] . '<br>';
        $salida .= 'TU CORREO ES: ' . $fila[2] . '<br>';
        $salida .= 'ESTAS SUSCRITO:' . $fila[3] . '<br>';
        $salida .= 'TIPO DE PLAN :' . $fila[4] . '<br>';
        $salida .= 'CONTRASEÑA :' . $fila[5] . '<br>';
    }

    return $salida;
}
function borrarUNO($nom, $cla)
{
    include("connect.php");

    $salida = "";

    $conexion = mysqli_connect($servidor, $usuario, $clave, $base_datos);
    $sql  = "delete from usuario where Nombre = '$nom' and clave = '$cla'";
    $resultado = $conexion->query($sql);
    //echo $sql;

    while ($fila = mysqli_fetch_array($resultado)) {
        $salida .= 'Borrado con Exito';
    }

    return $salida;
}


function registrar($nom, $correo, $clava)
{
    $salida = '';
    include("connect.php");
    $conexion = mysqli_connect($servidor, $usuario, $clave, $base_datos);

    $sql = "insert into usuario (Nombre, Correo_electronico, clave) values ('$nom','$correo','$clava') ";
    $resultado = $conexion->query($sql);

    try {
        $resultado = $conexion->query($sql);
    } catch (mysqli_sql_exception $e) {


        if ($conexion->affected_rows > 0) {
            $salida = 1;
        } else {
            $salida = 0;
        }
    }

    $conexion->close();
    return $salida;
}


function mostrarContenido()
{
    include("connect.php");

    $salida = "";

    $conexion = mysqli_connect($servidor, $usuario, $clave, $base_datos);
    $sql  = "select Nombre, descripcion, link from contenido, usuario where usuario.id_usuario = contenido.Id_usuario; ";
    $resultado = $conexion->query($sql);
    //echo $sql;

    while ($fila = mysqli_fetch_array($resultado)) {
        $salida .= $fila[0] . '<br>';
        $salida .= $fila[1];
        $salida .= $fila[2] . '<br>';
    }

    return $salida;
}
