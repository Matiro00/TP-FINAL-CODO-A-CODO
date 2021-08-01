<?php 
session_start();
if (isset($_SESSION['name'])) {
    $sesion = $_SESSION['name'];
} else {
    $sesion = NULL;
}

$link = "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];