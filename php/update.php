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

//Campos dinamicos que utilizaremos para la consulta "UPDATE"
$codprod = $_POST["codprod"];
$stock = $_POST["stock"];

// Actualizar registro de nuestra tabla
if(empty($codprod)){
    echo "Favor ingresar codigo de producto y un campo para modificar";
}else{
    $update = "UPDATE `articulos_de_limpieza` SET `cantidad_en_stock`='$stock' WHERE `codigo_del_producto`='$codprod';";
    $actualizarRegistros = mysqli_query($conexion, $update);

    //Validamos si el dato se actualizo correctamente, en caso que si mostramos el dato, en caso contrario enviamos un mensaje de error
    if($actualizarRegistros){
        echo "Dato actualizado";
        echo "<br>";
        echo $codprod;
        echo $stock;
    }else{
        echo "Ha ocurrido un problema, favor ingresar campos validos";
    }
}

?>