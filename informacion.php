<?php
$id = $_REQUEST['id'];
$info = $_REQUEST['info'];
$usuario = "root";
$contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
$servidor = "localhost";
$basededatos = "maquinaria";

$conexion = mysqli_connect( $servidor, $usuario, $contrasena, $basededatos) or die ("No se ha podido conectar al servidor de Base de datos");

mysqli_set_charset($conexion,"utf8");

//$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
$_SESSION["MYSQL"] = $conexion;
$sql = "INSERT INTO administrador_info (id, comentario) VALUES ('".$id."', '".$info."')";
$resultado = mysqli_query( $conexion, $sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
if ($resultado === true) {
        echo 'guardado exitosamente';
}else{
        echo 'no guardo los datos ';
}
?>