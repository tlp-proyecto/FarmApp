let getAlert = document.getElementById("alert");

usuarios = [];

usuarios.push(["Juan David", "juandavid@gmail.com"]);
usuarios.push(["Juniors Ferreira", "juniors90@gmail.com"]);

// VALIDAR NOMBRE
function validarNombre(nombre) {
  if (nombre.lenght == 0) return false;
  if (nombre.lenght > 50) return false;
  if (!/^[\u00F1A-Za-z _]*[\u00F1A-Za-z][\u00F1A-Za-z _]*$/.test(nombre))
    return false;
  return true;
}

// VALIDAR EMAIL
function validarCorreo(email) {
  if (email.lenght == 0) return false;
  if (!/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/.test(email))
    return false;
  return true;
}

function getHtmlAlert(tipo, header, mensaje) {
  return `<div class="ui ${tipo} message transition">
                 <i class="close icon" onclick="ocultar()"></i>
                 <div class="header">${header}</div>
                 <p>${mensaje}</p>
            </div>`;
}

/*function getHtmlAlert(tipo, header, mensaje) {
  return `<div class="ui ${tipo} message transition">
                 <i class="close icon" onclick="$(this).closest(".message").transition("fade");"></i>
                 <div class="header">${header}</div>
                 <p>${mensaje}</p>
            </div>`;
}*/

// FUNCIÓN DE ALERTA
function showAlert(tipo, header, mensaje, divElement) {
  divElement.innerHTML = getHtmlAlert(tipo, header, mensaje);
}
// FUNCIÓN
function existeCorreo(email) {
  return usuariosRegister.find(function (item) {
    return item.correo == email;
  });
}

function validarSuscriptor() {
  let nombre = document.getElementById("nombre").value;
  let email = document.getElementById("e-mail").value;

  if (!validarNombre(nombre)) {
    showAlert(
      "error", // tipo
      "ERROR EN EL NOMBRE", // header
      "El nombre de usuario es incorrecto", // mensaje
      getAlert
    );
    return false;
  } else if (!validarCorreo(email)) {
    showAlert(
      "error", // tipo
      "ERROR EN EL E-MAIL", // header
      "El email es incorrecto", // mensaje
      getAlert
    );
    return false // tipo
  } else if (existeCorreo(email)) {
    showAlert(
      "error",
      "ERROR EN EL E-MAIL",
      "El email es ya existe!",
      getAlert
    );
    return false;
  } else {
    usuariosRegister.push([nombre, email]);
    showAlert(
      "info",
      "Ingreso en forma correcta",
      "Bienvenido usuario",
      getAlert
    );
  }
}

