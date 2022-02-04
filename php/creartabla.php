<?php

//Conexion con Servidor

//Campos de la conexion
$usuario = "root";
$contraseña = "root"; 
$servidor = "localhost";
$basededatos = "tienda_limpieza";

//Creando conexion
$conexion = mysqli_connect($servidor, $usuario, $contraseña, $basededatos);

//Validamos si la conexion es correcta
if($conexion-> connect_error){
    die("Conexión Fallida: ".$conexion-> connect_error);
}else{
    echo "Conexion Exitosa al Servidor";
}

echo "<br>";

//Creacion Tabla
$createTable = "CREATE TABLE articulos_de_limpieza(
codigo_del_producto VARCHAR(20) PRIMARY KEY,
descripcion VARCHAR(70) NOT NULL,
precio INT(10) NOT NULL,
cantidad_en_stock INT(10) NOT NULL
)";
if($conexion->query($createTable) === true){
    echo "tabla creada correctamente";
}else{
    die("Error al crear la tabla: ".$conexion->error);
}

?>