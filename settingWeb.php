<?php 
session_start();
if (isset($_SESSION['name'])) {
    $sesion = $_SESSION['name'];
    $prioridad=$_SESSION['prioridad'];
} else {
    $sesion = NULL;
    $prioridad= NULL;
}

$link = "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];