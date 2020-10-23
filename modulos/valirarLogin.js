let getAlert = document.getElementById("alert");

// VALIDAR NOMBRE
function validarPassword(password) {
  if (password.lenght == 0) return false;
  if (password.lenght > 50) return false;
  /* if (!/^[\u00F1A-Za-z _]*[\u00F1A-Za-z][\u00F1A-Za-z _]*$/.test(nombre))
    return false; */
  return true;
}

// VALIDAR EMAIL
function validarCorreo(email) {
  if (email.lenght == 0) return false;
  if (!/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/.test(email))
    return false;
  return true;
}
// mensaje de alerta
function getHtmlAlert(tipo, header, mensaje) {
  return `<div class="ui ${tipo} message transition">
                 <i class="close icon" onclick="ocultar()"></i>
                 <div class="header">${header}</div>
                 <p>${mensaje}</p>
            </div>`;
}

// FUNCIÓN DE ALERTA
function showAlert(tipo, header, mensaje, divElement) {
  divElement.innerHTML = getHtmlAlert(tipo, header, mensaje);
}

function validarUsuario() {
  let email = document.getElementById("email").value;
  let password = document.getElementById("password").value;

  if (!validarPassword(password)) {
    showAlert(
      "error", // tipo
      "ERROR EN PASSWORD", // header
      "El password es incorrecto", // mensaje
      getAlert
    );
    return false;
  } else if (!validarCorreo(password)) {
    showAlert(
      "error", // tipo
      "ERROR EN EL E-MAIL", // header
      "El email es incorrecto", // mensaje
      getAlert
    );
    return false; // tipo
  } else if (existeCorreo(email)) {
    showAlert(
      "error",
      "ERROR EN EL E-MAIL",
      "El email es ya existe!",
      getAlert
    );
    return false;
  } else {
    return true;
  }
}
