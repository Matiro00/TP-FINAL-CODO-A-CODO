<?php
require("config.php");

$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
if (!$conn) {
    die("No se encuentra una conexion: " . mysqli_connect_error());
}
else{
    $id=$_GET['id'];
    $query=mysqli_query($conn,"DELETE FROM juego WHERE ID=".$id);
    echo "
    <script>
        alert('Se elimino el producto con exito!');
        window.location.href='./juegos.php';
    </script>";
}?>