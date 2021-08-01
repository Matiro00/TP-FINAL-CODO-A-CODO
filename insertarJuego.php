<?php include "settingWeb.php" ?>
<?php

if (!isset($sesion)){
    header("Location:./index.php");
}
else{?>
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
    <div class="container contenidoPrincipal">
        <div class="container container-create-game">
            <form method="post" enctype="multipart/form-data">
                <?php
                if(isset($_SESSION['errorFormulario'])){?>
                    <div class="error-text">
                        <strong>Error: </strong> <?= $_SESSION['errorFormulario']; ?>
                    </div>
                <?php unset ($_SESSION['errorFormulario']) ;}?>
                <?php if(isset($_SESSION['confirmarFormulario'])){?>
                    <div class="confirm-text">
                        <strong>Felicitaciones: </strong> <?= $_SESSION['confirmarFormulario']; ?>
                    </div>
                <?php unset ($_SESSION['confirmarFormulario']) ;}?>
                <div class="row">
                    <span class="form-title">Nombre</span>
                    <input class="form-item form-text" type="text" name="nombre">
                </div>
                <div class="row">
                    <span class="form-title">Descripcion</span>
                    <textarea class="form-item form-text" name="descripcion" rows="5" cols="40"></textarea>
                </div>
                <div class="row">
                    <span class="form-title">Precio</span>
                    <input class="form-item form-text form-price" type="number" name="precio">
                </div>
                <div class="row">
                    <span class="form-title">Imagen</span>
                    <input class="form-item form-img" type="file" name="imagen">
                </div>
                <div class="row">
                    <div class="col-6">

                        <button class=" rounded btn btn-confirm" type="submit" formaction="verificarJuego.php?continue=<?php echo $link?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z" />
                            </svg></a>
                    </div>
                    <div class="col-6">
                        <button class=" rounded btn btn-cancel" type="submit" formaction="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z" />
                            </svg></a>
                    </div>
                </div>


            </form>
        </div>
    </div>
    <?php include "basic_structs/footer.html" ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
</body>

</html>
<?php }?>