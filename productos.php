<?php
$tractor = $_REQUEST['tractor'];
$vagoneta = $_REQUEST['vagoneta'];
$draga = $_REQUEST['draga'];
$compactadora = $_REQUEST['compactadora'];
$tractor_precio = 120000;
$vagoneta_precio = 200000;
$draga_precio = 245000;
$compactadora_precio = 120000;
if($tractor = 1){
    $usuario = "root";
    $contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
    $servidor = "localhost";
    $basededatos = "maquinaria";

    $conexion = mysqli_connect( $servidor, $usuario, $contrasena, $basededatos) or die ("No se ha podido conectar al servidor de Base de datos");

    mysqli_set_charset($conexion,"utf8");

    //$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
    $sql = "SELECT * FROM productos WHERE producto = '".$tractor."' AND estado = 1 ";
    $resultado = mysqli_query( $conexion, $sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    $resultado = mysqli_fetch_assoc($resultado);
    if ($resultado == true) {
        echo 'Producto disponibble';
    }else if($resultado == false){
        echo 'Producto no disponible';
    }
    $_SESSION["MYSQL"] = $conexion;
    $estado = 2;
    $sql = "UPDATE productos SET producto = '".$tractor."', precio = '".$tractor_precio."', estado = '".$estado."' WHERE producto = 1";
    $resultado = mysqli_query( $conexion, $sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    if ($resultado === true) {
            echo 'guardado exitosamente';
    }else{
            echo 'no guardo los datos ';
    }
};
if($vagoneta = 2){
    $usuario = "root";
    $contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
    $servidor = "localhost";
    $basededatos = "maquinaria";

    $conexion = mysqli_connect( $servidor, $usuario, $contrasena, $basededatos) or die ("No se ha podido conectar al servidor de Base de datos");

    mysqli_set_charset($conexion,"utf8");

    //$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
    $sql = "SELECT * FROM productos WHERE producto = '".$vagoneta."' AND estado = 1 ";
    $resultado = mysqli_query( $conexion, $sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    $resultado = mysqli_fetch_assoc($resultado);
    if ($resultado == true) {
        echo 'Producto disponibble';
    }else if($resultado == false){
        echo 'Producto no disponible';
    }
    $_SESSION["MYSQL"] = $conexion;
    $estado = 2;
    $sql = "UPDATE productos SET producto = '".$vagoneta."', precio = '".$vagoneta_precio."', estado = '".$estado."' WHERE producto = 2";
    $resultado = mysqli_query( $conexion, $sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    if ($resultado === true) {
            echo 'guardado exitosamente';
    }else{
            echo 'no guardo los datos ';
    }
};
if($draga = 3){
    $usuario = "root";
    $contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
    $servidor = "localhost";
    $basededatos = "maquinaria";

    $conexion = mysqli_connect( $servidor, $usuario, $contrasena, $basededatos) or die ("No se ha podido conectar al servidor de Base de datos");

    mysqli_set_charset($conexion,"utf8");

    //$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
    $sql = "SELECT * FROM productos WHERE producto = '".$draga."' AND estado = 1 ";
    $resultado = mysqli_query( $conexion, $sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    $resultado = mysqli_fetch_assoc($resultado);
    if ($resultado == true) {
        echo 'Producto disponibble';
    }else if($resultado == false){
        echo 'Producto no disponible';
    }
    $_SESSION["MYSQL"] = $conexion;
    $estado = 2;
    $sql = "UPDATE productos SET producto = '".$draga."', precio = '".$draga_precio."', estado = '".$estado."' WHERE producto = 3";
    $resultado = mysqli_query( $conexion, $sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    if ($resultado === true) {
            echo 'guardado exitosamente';
    }else{
            echo 'no guardo los datos ';
    }
};
if($compactadora = 4){
    $usuario = "root";
    $contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
    $servidor = "localhost";
    $basededatos = "maquinaria";

    $conexion = mysqli_connect( $servidor, $usuario, $contrasena, $basededatos) or die ("No se ha podido conectar al servidor de Base de datos");

    mysqli_set_charset($conexion,"utf8");

    //$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
    $sql = "SELECT * FROM productos WHERE producto = '".$compactadora."' AND estado = 1 ";
    $resultado = mysqli_query( $conexion, $sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    $resultado = mysqli_fetch_assoc($resultado);
    if ($resultado == true) {
        echo 'Producto disponibble';
    }else if($resultado == false){
        echo 'Producto no disponible';
    }
    $_SESSION["MYSQL"] = $conexion;
    $estado = 2;
    $sql = "UPDATE productos SET producto = '".$compactadora."', precio = '".$compactadora_precio."', estado = '".$estado."' WHERE producto = 4";
    $resultado = mysqli_query( $conexion, $sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    if ($resultado === true) {
            echo 'guardado exitosamente';
    }else{
            echo 'no guardo los datos ';
    }
};
?>