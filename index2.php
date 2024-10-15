<?php $no_login = true; require("./data/sistema.php");  ?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style3.css">
  <link rel="shortcut icon" href="imagenes/icono.png" type="image/x-icon">
  <title>inicio de sesion</title>
</head>

<body>
  
  <div class="conteiner">
  <form action="#" id="formLogin">
    <div>
      <strong><label for="username">Usuario</label></strong>
      <input type="text" name="username" id="username">
    </div>
    <div>
   <strong><label for="pass">Contraseña</label></strong>
      <input type="password" name="pass" id="pass">
    </div>
    <div class="inicio_sesion">
      <button type="button" id="btnLogin">Iniciar sesión</button>
    </div>
    <div class="registrarse">
      <button type="button" id="btnregister">registrarse</button>
    </div>
  </form>
  </div>
  <script src="js/index.js"></script>
</body>
</html>