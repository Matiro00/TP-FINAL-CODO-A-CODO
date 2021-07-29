<?php
session_start();
if (isset($_SESSION['name'])) {
    $sesion = $_SESSION['name'];
} else {
    $sesion = NULL;
}

$link = "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>TIENDA XYAR</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <?php include "basic_structs/header.php" ?>
    <div class="container contenidoPrincipal">
        <div class="container container-subtitulos">
            <h3 class="subtitulos">
                Nuevos lanzamientos
            </h3>
            <div class="container container-juegos">
                <div class="row">
                    <div class="col-sm col-juegos">
                        <div class="card">
                            <img class="card-img-top" src="./img/oddysey.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Assasin's creed: Oddysey</h5>
                                <p class="card-text">$1900</p>
                                <a href="#" class="btn btn-games">Consultar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card">
                            <img class="card-img-top" src="./img/images.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">ARK: Survival Evolved</h5>
                                <p class="card-text">$2100</p>
                                <a href="#" class="btn btn-games">Consultar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card">
                            <img class="card-img-top" src="./img/Valhalla.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Assasin's creed: Valhalla</h5>
                                <p class="card-text">$3100</p>
                                <a href="#" class="btn btn-games">Consultar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container  container-subtitulos">
            <h3 class="subtitulos">
                Lo mas populares
            </h3>
            <div class="container container-juegos">
                <div class="row">
                    <div class="col-sm">
                        <div class="card">
                            <img class="card-img-top" src="./img/COUTINHO.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">PES 2019</h5>
                                <p class="card-text">$1200</p>
                                <a href="#" class="btn btn-games">Consultar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card">
                            <img class="card-img-top" src="./img/5110p1eLHcL.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Days gone</h5>
                                <p class="card-text">$2300</p>
                                <a href="#" class="btn btn-games">Consultar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card">
                            <img class="card-img-top" src="./img/Subnautica-Below-Zero-300x375.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Subnautica: Below Zero</h5>
                                <p class="card-text">$2100</p>
                                <a href="#" class="btn btn-games">Consultar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container-subtitulos">
            <h3 class="subtitulos">
                Ventas Online y consultas generales
            </h3>
            <div class="container">
                <p class="text">
                    De lunes a viernes de 10:00 a 23:00
                </p>
            </div>
        </div>
    </div>
    <?php include "basic_structs/footer.html" ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
</body>

</html>