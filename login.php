<?php
require ("Usuario.php");
session_start();
require("config.php");

$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
if (!$conn) {
    die("No se encuentra una conexion: " . mysqli_connect_error());
}

$usuario=new Usuario($_POST["user"],$_POST["password"],null);

$consulta = mysqli_query($conn, "SELECT * FROM usuarios WHERE nombre='" . $usuario->getName() . "' AND clave='" . $usuario->getClave() . "'");

$encontrado = mysqli_num_rows($consulta);

if ($encontrado == 1) {
    $_SESSION['name'] = $usuario->getName();
    $query=mysqli_fetch_array($consulta);
    $_SESSION['prioridad']=$query['prioridad'];
    header("Location:" . $_GET["continue"]);
} else {
    $_SESSION['error'] = "Usuario o clave incorrectos";
    header("Location:" . $_GET["continue"]);
}
