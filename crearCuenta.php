<?php
require("config.php");

$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
if (!$conn) {
    die("No se encuentra una conexion: " . mysqli_connect_error());
}
else{
$query = mysqli_query($conn, "INSERT INTO usuarios (nombre,clave,prioridad) VALUES ('" . $usuario->getName() . "','" . $usuario->getClave() ."','".$usuario->getPrioridad(). "')");
    if (mysqli_error($conn)) {
        $_SESSION['errorCuenta'] = "Error inesperado. Intente mas tarde";
        header("Location:" . $_GET["continue"]);
    } else {
        $_SESSION['confirmar'] = "Usuario creado con exito";
        header("Location:" . $_GET["continue"]);
    }
}