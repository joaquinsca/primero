const formLogin = document.querySelector("#formregistro")
btnLogin.addEventListener('click', event => {
  event.preventDefault()
  if (username.value == "" || pass.value == "") {
    alert("Completa todos los campos...")
    return false
  }
  const form = new FormData(formLogin)
  form.append("function", "login")
  fetch("data/registro.php", {
    method: "POST",
    body: form
  })
    .then(response => response.json())
    .then(json => {
      if (!json) {
        alert("No has podido registrarte")
        return false
      }
      sessionStorage.setItem("registro", JSON.stringify(json))
      window.location.href = "./index.php";
    })
})