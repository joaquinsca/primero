
document.getElementById("DO").addEventListener("click", function(){
    var audio = new Audio('./audios/DO.mp3');
    document.getElementById("DO").classList.add("activo");
    setTimeout(() => {
        document.getElementById("DO").classList.remove("activo");
    }, 100);
    audio.play();
})
document.getElementById("DOS").addEventListener("click", function(){
    var audio = new Audio('./audios/DOS.mp3');
    document.getElementById("DOS").classList.add("activo");
    setTimeout(() => {
        document.getElementById("DOS").classList.remove("activo");
    }, 100);
    audio.play();
})
document.getElementById("RE").addEventListener("click", function(){
    var audio = new Audio('./audios/RE.mp3');
    document.getElementById("RE").classList.add("activo");
    setTimeout(() => {
        document.getElementById("RE").classList.remove("activo");
    }, 100);
    audio.play();
})
document.getElementById("RES").addEventListener("click", function(){
    var audio = new Audio('./audios/RES.mp3');
    document.getElementById("RES").classList.add("activo");
    setTimeout(() => {
        document.getElementById("RES").classList.remove("activo");
    }, 100);
    audio.play();
})
document.getElementById("MI").addEventListener("click", function(){
    var audio = new Audio('./audios/MI.mp3');
    document.getElementById("MI").classList.add("activo");
    setTimeout(() => {
        document.getElementById("MI").classList.remove("activo");
    }, 100);
    audio.play();
})
document.getElementById("FA").addEventListener("click", function(){
    var audio = new Audio('./audios/FA.mp3');
    document.getElementById("FA").classList.add("activo");
    setTimeout(() => {
        document.getElementById("FA").classList.remove("activo");
    }, 100);
    audio.play();
})
document.getElementById("FAS").addEventListener("click", function(){
    var audio = new Audio('./audios/FAS.mp3');
    document.getElementById("FAS").classList.add("activo");
    setTimeout(() => {
        document.getElementById("FAS").classList.remove("activo");
    }, 100);
    audio.play();
})
document.getElementById("SOL").addEventListener("click", function(){
    var audio = new Audio('./audios/SOL.mp3');
    document.getElementById("SOL").classList.add("activo");
    setTimeout(() => {
        document.getElementById("SOL").classList.remove("activo");
    }, 100);
    audio.play();
})
document.getElementById("SOLS").addEventListener("click", function(){
    var audio = new Audio('./audios/SOLS.mp3');
    document.getElementById("SOLS").classList.add("activo");
    setTimeout(() => {
        document.getElementById("SOLS").classList.remove("activo");
    }, 100);
    audio.play();
})
document.getElementById("LA").addEventListener("click", function(){
    var audio = new Audio('./audios/LA.mp3');
    document.getElementById("LA").classList.add("activo");
    setTimeout(() => {
        document.getElementById("LA").classList.remove("activo");
    }, 100);
    audio.play();
})
document.getElementById("LAS").addEventListener("click", function(){
    var audio = new Audio('./audios/LAS.mp3');
    document.getElementById("LAS").classList.add("activo");
    setTimeout(() => {
        document.getElementById("LAS").classList.remove("activo");
    }, 100);
    audio.play();
})
document.getElementById("SI").addEventListener("click", function(){
    var audio = new Audio('./audios/SI.mp3');
    document.getElementById("SI").classList.add("activo");
    setTimeout(() => {
        document.getElementById("SI").classList.remove("activo");
    }, 100);
    audio.play();
})


document.addEventListener("keyup", (event) => {
    console.log(event["key"]);
    switch(event["key"]){
        case "a":
            document.getElementById("DO").click();
            
            break
        case "w":
            document.getElementById("DOS").click();
            
            break
        case "s":
            document.getElementById("RE").click();
            
            break
        case "e":
                document.getElementById("RES").click();
                
                break
        case "d":
            document.getElementById("MI").click();
            
            break
        case "f":
            document.getElementById("FA").click();
            
            break
        case "t":
            document.getElementById("FAS").click();
            
            break
        case "g":
            document.getElementById("SOL").click();
            
            break
        case "y":
            document.getElementById("SOLS").click();
            
            break
        case "h":
            document.getElementById("LA").click();
            
            break
        case "u":
            document.getElementById("LAS").click();
            
            break
        case "j":
            document.getElementById("SI").click();
            
            break

    }
})
