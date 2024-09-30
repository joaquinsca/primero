const formLogin = document.querySelector("#formLogin")
formLogin.addEventListener('submit', event => {
  event.preventDefault()
  if (Usuario.value == "" || Contraseña.value == "") {
    alert("Completa todos los campos...")
    return false
  }
  //alerta para que rellenes los campos
  const form = new FormData(formLogin)
  form.append("function", "login")
  fetch("data/users.php", {
    method: "POST",
    body: form
  })
    .then(response => response.json())
    .then(json => {
      if (!json) {
        alert("No has podido iniciar sesión")
        return false
      }
      //alerta que no pudiste iniciar sesion
      sessionStorage.setItem("user", JSON.stringify(json))
      window.location.href = "./APRINCIPAL.php";
    })
})

document.querySelector("#formRegister").addEventListener('submit', event => {
  event.preventDefault()
  //revisa que todos los campos estan llenos
  if (UsuarioRegistro.value == "" || ContraseñaRegistro.value == "") {
    alert("Completa todos los campos...")
    return false
  }
  const form = new FormData(formLogin)
  form.append("function", "login")
  console.log(form);
  fetch("data/registro.php", {
    method: "POST",
    body: form
  })
    .then(response => {
      alert("REGISTRADO!")
    })
    //confirma que todos los datos estan  ingresados y te tira una alerta para avisarte
})