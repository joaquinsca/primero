<?php require("../data/sistema.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pianito</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="texto"><p>cada tecla tiene su letra correspondiente <br>si apretas en el teclado suena el piano</p></div>
    <ul class="set">
        <li class="white e" id="DO"><h1 class="blanco" >A</h1></li>
        <li class="black ds" id="DOS"><h2 class="negro" >W</h2></li>
        <li class="white d" id="RE"><h1 class="blanco" >S</h1></li>
        <li class="black cs" id="RES"><h2 class="negro" >E</h2></li>
        <li class="white c" id="MI"><h1 class="blanco" >D</h1></li>
        <li class="white b" id="FA"><h1 class="blanco" >F</h1></li>
        <li class="black as" id="FAS"><h2 class="negro" >T</h2></li>
        <li class="white a" id="SOL"><h1 class="blanco" >G</h1></li>
        <li class="black gs" id="SOLS"><h2 class="negro" >Y</h2></li>
        <li class="white g" id="LA"><h1 class="blanco" >H</h1></li>
        <li class="black fs" id="LAS"><h2 class="negro" >U</h2></li>
        <li class="white f" id="SI"><h1 class="blanco" >J</h1></li>
        

    </ul>

    <main>    
    <center><button class="btn" onclick="window.location.href='../APRINCIPAL.php'"><strong>volver</strong></button></center>
</main>

</body>
<script src="piano.js"></script>
</html>