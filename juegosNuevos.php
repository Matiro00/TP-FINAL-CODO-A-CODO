<?php

require("config.php");

$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
if (!$conn) {
    die("No se encuentra una conexion: " . mysqli_connect_error());
}
else{
    $query = mysqli_query($conn, "SELECT * FROM `juego` WHERE id<=(SELECT MAX(id) FROM `juego`) order by id desc LIMIT 3");
    while($juego=mysqli_fetch_array($query)){
        echo '<div class="col-sm col-juegos">
                        <div class="card">
                            <img class="card-img-top" src='.$juego['imagen'].' alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">'.$juego['nombre'].'</h5>
                                <p class="card-text">$'.$juego['precio'].'</p>
                                <a href="#" class="btn btn-games">Consultar</a>
                            </div>
                        </div>
                    </div>';
    }
}