<?php
require ("Usuario.php");
session_start();
$usuario=new Usuario($_POST["user"],$_POST["password"],2);
if (empty($usuario->getName()) or empty($usuario->getClave())) {
    $_SESSION['error'] = "Debe ingresar un nombre y constraseña".$usuario->getName();
    header("Location:" . $_GET["continue"]);
} elseif (strlen($usuario->getClave()) < 5) {
    $_SESSION['error'] = "La clave debe tener mas de 5 caracteres";
    header("Location:" . $_GET["continue"]);
} else {
    $_SESSION['cuenta']=$usuario;
    require("crearCuenta.php");
}
