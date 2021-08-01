<?php
include "./Juego.php";
session_start();
$supported_image = array('jpg','jpeg','png');
$carpetaImg = "./img/";
$img = basename($_FILES["imagen"]["name"]);
if (empty($img)) {
    $_SESSION['errorFormulario'] = "Debe ingresar una imagen";
    header("Location:" . $_GET["continue"]);
} else {
    $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
    if (in_array($ext, $supported_image)) {
        $path = $carpetaImg . $img;
        move_uploaded_file($_FILES['imagen']['tmp_name'], $path);
        $juego = new Juego($_POST["nombre"], $_POST["descripcion"], $_POST["precio"], $path);
        if (empty($juego->getNombre()) or empty($juego->getPrecio())) {
            $_SESSION['errorFormulario'] = "Debe ingresar un nombre y/o precio";
            header("Location:" . $_GET["continue"]);
        } elseif ($juego->getPrecio() <= 0) {
            $_SESSION['errorFormulario'] = "El precio debe ser mayor a 0";
            header("Location:" . $_GET["continue"]);
        } else {
            require("crearJuego.php");
        }
    } else {
        $_SESSION['errorFormulario'] = "Debe ingresar una imagen con formato jpeg, jpg o png";
        header("Location:" . $_GET["continue"]);
    }
}
