<?php require("../data/sistema.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="guitarra.css">
</head>
<header>
    <h1 id="title">afinador de guitarra</h1>
    <main>
      <div class="boton"> 
      <button class="btn" onclick="window.location.href='../APRINCIPAL.php'"><strong>volver</strong></button>
      </div>   
      </main>
  </header>
    <section id="guitarBody">
    <button onmouseover="pickString(this.id)" onclick="clickString(this.id)" class="string" id="s6"></button>
    <button onmouseover="pickString(this.id)" onclick="clickString(this.id)" class="string" id="s5"></button>
    <button onmouseover="pickString(this.id)" onclick="clickString(this.id)" class="string" id="s4"></button>
    <button onmouseover="pickString(this.id)" onclick="clickString(this.id)" class="string" id="s3"></button>
    <button onmouseover="pickString(this.id)" onclick="clickString(this.id)" class="string" id="s2"></button>
    <button onmouseover="pickString(this.id)" onclick="clickString(this.id)" class="string" id="s1"></button>
    <div class="notes">
      <span class="lightOff" id="s6Note">E<span class="notas">MI</span></span>
      <span class="lightOff" id="s5Note">A<span class="notas">LA</span></span>
      <span class="lightOff" id="s4Note">D<span class="notas">RE</span></span>
      <span class="lightOff" id="s3Note">G<span class="notas">SOL</span></span>
      <span class="lightOff" id="s2Note">B<span class="notas">SI</span></span>
      <span class="lightOff" id="s1Note">E<span class="notas">MI</span></span>
    </div>
    
  </section>
  
  <footer>
    
    <button onclick="stopStrings()" class="inactive" id="btnStop">STOP</button>
    <button onclick="usePick()" class="inactive" id="btnPick">PICK</button>
    <button onclick="holdSound()" class="inactive" id="btnHold">HOLD</button>
  </footer>
  <script src="guitarra.js"></script>
  

</html>