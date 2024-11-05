<?php
$cancelaciones_producto = $_REQUEST['cancelaciones_producto'];
$id = $_REQUEST['id'];
echo ($cancelaciones_producto);
$usuario = "root";
$contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
$servidor = "localhost";
$basededatos = "maquinaria";

$conexion = mysqli_connect( $servidor, $usuario, $contrasena, $basededatos) or die ("No se ha podido conectar al servidor de Base de datos");

mysqli_set_charset($conexion,"utf8");

//$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
$_SESSION["MYSQL"] = $conexion;
$sql = "UPDATE productos SET id = '".$id."', producto =  '".$cancelaciones_producto."', estado = 1 WHERE producto = $cancelaciones_producto";
$resultado = mysqli_query( $conexion, $sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
if ($resultado === true) {
        echo 'cancelado exitosamente';
}else{
        echo 'no cancelo los datos ';
}
?>