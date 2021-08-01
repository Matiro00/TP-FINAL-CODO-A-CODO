<?php

require("config.php");
session_start();
$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
if (!$conn) {
    die("No se encuentra una conexion: " . mysqli_connect_error());
}
else{

    $query = mysqli_query($conn, "INSERT INTO juego (nombre,descripcion,precio,imagen) VALUES ('".$juego->getNombre()."','".$juego->getDescripcion()."','".$juego->getPrecio()."','".$juego->getImagen()."')");
    if (mysqli_error($conn)) {
        $_SESSION['errorFormulario'] = "Error inesperado. Intente mas tarde";
        header("Location:" . $_GET["continue"]);
    } else {
        $_SESSION['confirmarFormulario'] = "Usuario creado con exito";
        header("Location:" . $_GET["continue"]);
    }



}