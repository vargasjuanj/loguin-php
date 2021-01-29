//validación del lado del cliente

const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('.input');

const expresiones = {
    email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    pass: /^.{5,12}$/, // 5 a 12 digitos.
}

const campos = {
    email: false,
    pass: false
}


const validarInput = (e) => {
    switch (e.target.name) {
        case "pass":
            validarCampo(expresiones.pass, e.target, 'pass');
            break;
        case "email":
            validarCampo(expresiones.email, e.target, 'email');
            break;
    }
}

inputs.forEach((input) => {
    input.addEventListener('keyup', validarInput); //al soltar la tecla
    input.addEventListener('blur', validarInput); //al hacer click afuera
});
const validarCampo = (expresion, input, campo) => {

    if (expresion.test(input.value)) { //test() devuelve true si se cumple el patrón
        document.getElementById(`${campo}`).classList.remove('input_incorrecto');
        document.getElementById(`${campo}`).classList.add('input_correcto');
        document.querySelector(`#error_${campo}`).classList.remove('mostrar_error');
        document.querySelector(`#error_${campo}`).classList.add('ocultar_error');
        campos[campo] = true;
    } else {
        document.getElementById(`${campo}`).classList.add('input_incorrecto');
        document.getElementById(`${campo}`).classList.remove('input_correcto');
        document.querySelector(`#error_${campo}`).classList.remove('ocultar_error');
        document.querySelector(`#error_${campo}`).classList.add('mostrar_error');
        campos[campo] = false;
    }
}




formulario.addEventListener('submit', (e) => {

    if (campos.pass && campos.email) {
        //formulario.reset(); //si se resetea envia a php vacio el form
        document.getElementById('email').classList.remove('input_correcto');
        document.getElementById('pass').classList.remove('input_correcto');

        /*
                        document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
                        setTimeout(() => {
                            document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
                        }, 5000);
*/

        //Desde este punto se envia el formulario a php
    } else {
        e.preventDefault(); //evita que se envie el formulario, comportamiento por defecto

        document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');

        setTimeout(() => {
            document.getElementById('formulario__mensaje').classList.remove('formulario__mensaje-activo');
        }, 3000)

    }

});