<?php
$draga = $_REQUEST['draga'];
$id = $_REQUEST['id'];
$draga_precio = 245000;
if($draga = 3){
    $usuario = "root";
    $contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
    $servidor = "localhost";
    $basededatos = "maquinaria";

    $conexion = mysqli_connect( $servidor, $usuario, $contrasena, $basededatos) or die ("No se ha podido conectar al servidor de Base de datos");

    mysqli_set_charset($conexion,"utf8");
    $_SESSION["MYSQL"] = $conexion;
    $estado = 2;
    //$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
    $sql = "SELECT * FROM productos WHERE producto = '".$draga."' AND estado = 1 ";
    $resultado = mysqli_query( $conexion, $sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    $resultado = mysqli_fetch_assoc($resultado);
    if ($resultado == true) {
        echo 'Producto disponibble';
        $sql = "UPDATE productos SET id = '".$id."', producto = '".$draga."', precio = '".$draga_precio."', estado = '".$estado."' WHERE producto = 3";
        $resultado = mysqli_query( $conexion, $sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        if ($resultado === true) {
            echo 'guardado exitosamente';
        }else{
            echo 'no guardo los datos ';
        }
    }else if($resultado == false){
        echo 'Producto no disponible';
    }
    $_SESSION["MYSQL"] = $conexion;
    $estado = 2;
};
?>