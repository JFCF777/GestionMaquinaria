<?php
$usuario_login = $_REQUEST['usuario'];
$contrasena_login = $_REQUEST['contrasena'];
$tip_usuario = $_REQUEST['tip_usuario'];
/*coneccion mysql*/
$usuario = "root";
$contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
$servidor = "localhost";
$basededatos = "maquinaria";

$conexion = mysqli_connect( $servidor, $usuario, $contrasena, $basededatos) or die ("No se ha podido conectar al servidor de Base de datos");

mysqli_set_charset($conexion,"utf8");

//$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

$_SESSION["MYSQL"] = $conexion;
$sql = "SELECT * FROM usuarios WHERE perfil = ".$tip_usuario." AND id = '".$usuario_login."' AND contrasena = '".$contrasena_login."' ";
$resultado = mysqli_query( $conexion, $sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
$resultado = mysqli_fetch_assoc($resultado);

if ($resultado["perfil"] == 1) {
        echo '1';
}else if($resultado["perfil"] == 2){
        echo '2';
}else{
        echo "Datos incorrectos";
}
?>