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

echo "<br>"."<br>";

//Campos dinamicos que utilizaremos para la consulta "INSERT"
$codprod = $_POST["codprod"];
$descripcion = $_POST["descripcion"];
$precio = $_POST["precio"];
$stock = $_POST["stock"];

// Insertar registros a nuestra tabla
$insert = "INSERT INTO `articulos_de_limpieza`
(`codigo_del_producto`, `descripcion`, `precio`, `cantidad_en_stock`)
VALUES ('$codprod', '$descripcion', '$precio', '$stock')" ;
$instrarRegistros = mysqli_query($conexion, $insert);

//Validamos si el dato se inserto correctamente, en caso que si mostramos el dato, en caso contrario enviamos un mensaje de error
if($instrarRegistros){
    echo "Dato insertado";
    echo "<br>";
    echo $codprod;
    echo $descripcion;
    echo $precio;
    echo $stock;
}else{
    echo "Ha ocurrido un problema, favor ingresar todos los campos";
}

?>