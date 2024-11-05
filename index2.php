<?php
$server = "localhost";
$user = "root";
$pass = "";
$bd = "maquinaria";

$conexion = mysqli_connect($server, $user, $pass, $bd) or die("Error de conexion en base de datos");
//DELETE
//SELECT
$sql = "SELECT id, producto, precio, estado FROM productos ";
$resultado = mysqli_query($conexion, $sql);
$productos = array();
while ($row = mysqli_fetch_assoc($resultado)) {
    $productos[] = array(
        "ID" => $row["id"], 
        "PRODUCTO" => $row["producto"],
        "PRECIO" => $row["precio"], 
        "ESTADO" => $row["estado"]);
}

$json_string = json_encode($productos);
//echo $json_string;
$archivo = "productos.json";
file_put_contents($archivo, $json_string);
?>