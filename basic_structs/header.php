<header>
    <div class="container">
        <nav class="navbar navbar-custom navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.php"><img src="./img/Logo_XYarJuegosdigitales.png" alt="xYarLogo" srcset="" class="d-inline-block"><span class="hidden">xYAR</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="toggleMobileMenu">
                    <ul class="navbar-nav text-center">
                        <li class="nav-item">
                            <a class="nav-link" href="./index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./juegos.php">Juegos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./contactos.php">Nosotros</a>
                        </li>
                        <?php if (isset($prioridad) and $prioridad == 0) { ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Gestionar
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item dropdown-manager-items" href="#">Ingresar juego</a></li>
                                </ul>
                            </li>
                        <?php } ?>
                    </ul>
                </div>

            </div>
            <?php if (!isset($sesion)) { ?>
                <div class="container container-form">
                    <form class="rounded text-center" method="POST">
                        <?php if (isset($_SESSION['confirmar'])) {
                        ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Felicidades: </strong> <?= $_SESSION['confirmar']; ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                            unset($_SESSION['confirmar']);
                        } ?>
                        <div class="form-row ">
                            <div class="col-12 col-top-spacing">
                                <input type="text" class="form-control" placeholder="Usuario" name="user">
                            </div>
                            <div class="col-12 col-top-spacing">
                                <input type="password" class="form-control" placeholder="Contraseña" name="password">
                                <?php if (isset($_SESSION['error'])) { ?>
                                    <div class="error-text">
                                        <strong>Error: </strong> <?= $_SESSION['error']; ?>
                                    </div>
                                <?php unset($_SESSION['error']);
                                } ?>
                            </div>
                            <div class="row">
                                <div class="col-6 col-top-spacing">
                                    <button class="rounded btn btn-games " type="submit" formaction="login.php?continue=<?php echo $link; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                        </svg></button>
                                </div>
                                <div class="col-6 col-top-spacing">
                                    <button class="rounded btn btn-games " type="submit" formaction="verificarCuenta.php?continue=<?php echo $link; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                                        </svg></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            <?php } else { ?>
                <div class="welcome-text welcome">
                    <p>BIENVENDIO <?= $sesion ?></p>
                    <a href="./logout.php?continue=<?php echo $link; ?>" class="btn btn-games"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-dash-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11 7.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z" />
                            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg></a>
                </div>
            <?php } ?>
        </nav>
    </div>
</header>