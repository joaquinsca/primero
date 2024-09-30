<?php


require("sistema.php");

try {
  $username = $_POST["username"];
  $pass = $_POST["pass"];

  $query = $conexion->prepare("INSERT INTO `usuarios`(`usuario`, `contraseña`) VALUES (:username,:pass)");
  $query->execute([":username" => $username, ":pass" => $pass]);
  $result = $query->fetch(PDO::FETCH_ASSOC);
  echo "ok222";
} catch (PDOException $e) {
  echo "Hubo un error: " . $e->getMessage();
}