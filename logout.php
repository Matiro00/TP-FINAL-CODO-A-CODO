<?php

session_start();
unset($_SESSION['name']);
unset($_SESSION['prioridad']);
header("Location:" . $_GET["continue"]);
