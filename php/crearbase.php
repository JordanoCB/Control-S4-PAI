<?php

//Conexion con Servidor

//Campos de la conexion
$usuario = "root";
$contraseña = "root"; 
$servidor = "localhost";

//Creando conexion
$conexion = mysqli_connect($servidor, $usuario, $contraseña);

//Validamos si la conexion es correcta
if($conexion-> connect_error){
    die("Conexión Fallida: ".$conexion-> connect_error);
}else{
    echo "Conexion Exitosa al Servidor";
}

echo "<br>";

//Creacion Base de Datos
$createdb = "CREATE DATABASE tienda_limpieza";
if($conexion->query($createdb) === true){
    echo "Base de datos creada correctamente";
}else{
    die("Error al crear la base de datos: ".$conexion->error);
}

?>