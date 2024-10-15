
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
    <link rel="stylesheet" href="APRINCIPAL.CSS">
    <link rel="shortcut icon" href="imagenes/icono.png" type="image/x-icon">
</head>
<body>
<?php
            session_start();
                if ($_SESSION['estado']!=true){
                    echo "<center><button class=\"btn\" onclick=\"window.location.href='iniciodesesion.php'\"><strong>Iniciar</strong></button></center>
                    ";
                }


            ?>

<?php
            session_start();
                if ($_SESSION['estado']===true){
                    echo "<center><button class=\"btn\" onclick=\"window.location.href='data/cerrar_sesion.php'\"><strong>cerrar sesion</strong></button></center>
                    ";
                }

            ?>
   <center><div  class="presentacion">
        <h1>Para utilizar el piano se debe iniciar sesion </h1>
    </div></center>
    <div class="sip">
        <ul>
            
            <li class="g"><a href="Apagina_principalG.php">Acordes en guitarra</a></li>
            <li class="p"><a href="AApagina_principalP.php">Acordes en piano</a></li>
            <li class="A"><a href="piano/piano.php"> 
            <?php 
                session_start();
            
                if ($_SESSION['estado'] !=true){
                echo " <strong>Sesion no iniciada</strong> ";} else{
                echo "piano";}
            ?>  
            </a></li>
        
        </ul>
    </div>

</body>
</html>