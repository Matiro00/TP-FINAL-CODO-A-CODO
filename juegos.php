<?php include "settingWeb.php" ?>
<!DOCTYPE html>
<html lang="en">

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
    <div class="container contenidoPrincipal ">
        <div class="searchContainer container-underline">
            <form action="./juegosBuscados.php" method="get" class="form-inline searchBarGroup">
                <input type="text" name="buscar" placeholder="Buscar.." class="searchBar__input">
                <button type="submit" class="searchBar__submit"><img src="./img/search.svg" alt="Search" class="search_icon"></button>
            </form>
        </div>
        <div class="container container-juegos">
            <div class="row">
                <?php
                require("config.php");

                $conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
                if (!$conn) {
                    die("No se encuentra una conexion: " . mysqli_connect_error());
                } else {
                    $query = mysqli_query($conn, "SELECT * FROM `juego` ORDER BY nombre asc");
                    $cont = 0;
                    $aux = 0;
                    while ($juego = mysqli_fetch_array($query)) {
                        if ($cont == 3) {
                            echo '<div class="row">';
                            $cont = 0;
                            $aux++;
                        }
                        echo '<div class="col-4 col-juegos">
                                    <div class="card card-games">
                                        <img class="card-img-top" src=' . $juego['imagen'] . ' alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">' . $juego['nombre'] . '</h5>
                                                <p class="card-text">$' . $juego['precio'] . '</p>
                                                <a href="#" class="btn btn-games">Consultar</a>';
                        if (isset($prioridad) and $prioridad == 0) { ?>
                            <a class="btn btn-gestion" href="./eliminarJuego.php?id= <?php echo $juego['id'] ?>&continue=<?php echo $link?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg></a>
                    <?php                   }
                        echo                '</div>
                                    </div>
                                </div>';
                        $cont++;
                    }
                    while ($aux != 0) {
                        echo '</div>';
                        $aux--;
                    }
                } ?>
            </div>
        </div>
    </div>
    <?php include "basic_structs/footer.html" ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
</body>

</html>