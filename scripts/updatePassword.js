
const updatePassword = () => {
  const email = document.getElementById('email').value;
  const password = document.getElementById('old-password').value;
  const newpassword = document.getElementById('new-password').value;

  fetch('http://localhost:3000/api/password/', {
    method: 'PUT',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({
      email,
      password,
      newpassword
    })
  })
  .then(response => response.json())
  .then(data => console.log(data))
  .catch(error => console.error(error));
}


/*function cambiarContrasena() {
  const email = document.getElementById("email").value;
  const contrasenaAnterior = document.getElementById("contrasena-anterior").value;
  const contrasenaNueva = document.getElementById("contrasena-nueva").value;

  fetch("http://localhost:3000/api/password/", {
    method: "PUT",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      email: email,
      contrasenaAnterior: contrasenaAnterior,
      contrasenaNueva: contrasenaNueva,
    }),
  })
    .then((response) => response.json())
    .then((data) => {
      console.log(data);
      alert("La contraseña se ha actualizado correctamente");
    })
    .catch((error) => {
      console.error("Error:", error);
      alert("Ha ocurrido un error al actualizar la contraseña");
    });
}*/