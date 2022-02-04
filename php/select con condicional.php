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

//Campos dinamicos que utilizaremos para condicionar la busqueda
$minimo = $_POST["preciominimo"];
$maximo = $_POST["preciomaximo"];

if( (empty($minimo)) && (empty($maximo)) ){
    echo "Favor ingresar al menos un de precio mayor a 0";
} elseif(empty($minimo)) {
    // Select, para traer todo los registros de la tabla
    $select = "SELECT * FROM `articulos_de_limpieza` WHERE precio<$maximo;";
    $registros = mysqli_query($conexion, $select);
    $cantidadRegistros = mysqli_num_rows($registros);

    echo $cantidadRegistros;

    echo "<br>";

    if($cantidadRegistros > 0){
        while($fila = mysqli_fetch_assoc($registros)){
            echo $fila["codigo_del_producto"];
            echo $fila["descripcion"];
            echo "<br>";
        }
    }
} elseif(empty($maximo)){
    // Select, para traer todo los registros de la tabla
    $select = "SELECT * FROM `articulos_de_limpieza` WHERE precio>$minimo;";
    $registros = mysqli_query($conexion, $select);
    $cantidadRegistros = mysqli_num_rows($registros);

    echo $cantidadRegistros;

    echo "<br>";

    if($cantidadRegistros > 0){
        while($fila = mysqli_fetch_assoc($registros)){
            echo $fila["codigo_del_producto"];
            echo $fila["descripcion"];
            echo $fila["precio"];
            echo $fila["cantidad_en_stock"];
            echo "<br>";
        }
    }
}else{
    // Select, para traer todo los registros de la tabla
    $select = "SELECT * FROM `articulos_de_limpieza` WHERE precio>$minimo AND precio<$maximo;";
    $registros = mysqli_query($conexion, $select);
    $cantidadRegistros = mysqli_num_rows($registros);

    echo $cantidadRegistros;

    echo "<br>";

    if($cantidadRegistros > 0){
        while($fila = mysqli_fetch_assoc($registros)){
            echo $fila["codigo_del_producto"];
            echo " ";
            echo $fila["descripcion"];
            echo " ";
            echo $fila["precio"];
            echo " ";
            echo $fila["cantidad_en_stock"];
            echo "<br>";
        }
    }
}

?>