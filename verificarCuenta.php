<?php
require ("Usuario.php");
session_start();
$usuario=new Usuario($_POST["user"],$_POST["password"],2);
if (empty($usuario->getName()) or empty($usuario->getClave())) {
    $_SESSION['errorCuenta'] = "Debe ingresar un nombre y constraseña";
    header("Location:" . $_GET["continue"]);
} elseif (strlen($usuario->getClave()) < 5) {
    $_SESSION['errorCuenta'] = "La clave debe tener mas de 5 caracteres";
    header("Location:" . $_GET["continue"]);
} else {
    require("crearCuenta.php");
}
