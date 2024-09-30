<?php $no_login = true; require("./data/sistema.php");  ?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>inicio de sesion</title>
</head>
<body>
<div class="wrapper">
        <div class="card-switch">
            <label class="switch">
               <input type="checkbox" class="toggle">
               <span class="slider"></span>
               <span class="card-side"></span>
               <div class="flip-card__inner">
                  <div class="flip-card__front">
                     <div class="title">Inicio de sesion</div>
                     <form class="flip-card__form" id="formLogin">
                        <input class="flip-card__input" name="username" placeholder="Usuario" id="Usuario" type="text">
                        <input class="flip-card__input" name="pass" placeholder="Contraseña" id="Contraseña" type="password">
                        <button class="flip-card__btn" type="submit">Iniciar</button>
                     </form>
                  </div>
                  <div class="flip-card__back">
                     <div class="title">Registro</div>
                     <form class="flip-card__form" id="formRegister">
                     
                        <input class="flip-card__input" name="username" placeholder="Usuario" id="UsuarioRegistro" type="text">
                        <input class="flip-card__input" name="pass" placeholder="Contraseña" id="ContraseñaRegistro" type="password">
                        <button class="flip-card__btn" type="submit">Registrar</button>
                     </form>
                  </div>
               </div>
            </label>
        </div>   
   </div>
   <script src="js/index.js"></script>
</body>

</html>