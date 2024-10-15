<?php

$db = "jscarano";
$host = "localhost";
$user = "phpmyadmin";
$password = "RedesInformaticas";

$conexion = new PDO("mysql:host=$host;dbname=$db", $user, $password);

session_start();

if(!isset($no_login)){
    if(!isset($_SESSION["estado"]) AND $_SESSION["estado"] != true){
        header("Location: ../iniciodesesion.php");
    }
}