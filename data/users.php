<?php

require("sistema.php");


try {
  $username = $_POST["username"];
  $pass = $_POST["pass"];
  $query = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = :username AND contraseña = :pass");
  $query->execute(["username" => $username, ":pass" => $pass]);
  $result = $query->fetch(PDO::FETCH_ASSOC);
  $_SESSION["estado"] = true;
  echo json_encode($result);
} catch (PDOException $e) {
  echo "Hubo un error: " . $e->getMessage();

}