<?php
require ("Usuario.php");
session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "xyar";

$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
if (!$conn) {
    die("No se encuentra una conexion: " . mysqli_connect_error());
}

$usuario=new Usuario($_POST["user"],$_POST["password"]);

$consulta = mysqli_query($conn, "SELECT * FROM usuarios WHERE nombre='" . $usuario->getName() . "' AND clave='" . $usuario->getClave() . "'");

$encontrado = mysqli_num_rows($consulta);

if ($encontrado == 1) {
    $_SESSION['name'] = $usuario->getName();
    header("Location:" . $_GET["continue"]);
} else {
    $_SESSION['error'] = "Usuario o clave incorrectos";
    header("Location:" . $_GET["continue"]);
}
