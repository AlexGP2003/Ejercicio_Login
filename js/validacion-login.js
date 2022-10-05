var validaFormulario = function() {
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    var validacion = true;
    if (email.value == null || email.value.length == 0 || /^\s+$/.test(email.value)) {
        alert('[ERROR] Tienes que rellenar el campo email');

        validacion = false;
    } else if (email.value == null || email.value.length == 0 || !(/\S+@\S+\.\S+/.test(email.value))) {
        alert('[ERROR] "Email" El email se tiene que completar de la forma correcta ejemplo@ejemplo.com');
        validacion = false
    }
    else if (password.value === null || password.value === '') {
        alert('[ERROR] Tienes que rellenar el campo password');
        validacion = false;
    }

    if (!validacion) {
        return false;
    }


}