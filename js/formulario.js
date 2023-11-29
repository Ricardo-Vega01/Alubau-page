(() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('#contacto')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
    })
})()

const expresiones = {
    usuarios: /^[a-zA-Z]{1,30}/,
    ubicacion:/^[a-zA-ZÁ-ÿ0-9\s]/,
    telefono:/^[0-9]\d{1,10}$/,
    mensaje:/^[a-zA-ZÁ-ÿ0-9\s]/,
    email:/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/
}

const formulario = document.getElementById('contacto');
const entrada = document.querySelectorAll('#contacto input');
const campos = (expresion, input, campo) =>{
    if (expresion.test(input.value)) {
        document.querySelector(`#${campo} .text-error`).classList.remove("d-block");
        document.querySelector(`#${campo} .text-error`).classList.add("d-none");
        document.querySelector(`#${campo} input`).classList.add("is-valid");
        document.querySelector(`#${campo} input`).classList.remove("is-invalid");
        datos[campo] = true;
    }else{
        document.querySelector(`#${campo} .text-error`).classList.remove("d-none");
        document.querySelector(`#${campo} .text-error`).classList.add("d-block");
        document.querySelector(`#${campo} input`).classList.remove("is-valid");
        document.querySelector(`#${campo} input`).classList.add("is-invalid");
        datos[campo] = false;
    }
}
const validacion = (e) =>{
    switch(e.target.name){
        case "cliente":
            campos(expresiones.usuarios,e.target,'cliente');
            break;
        case "direction":
            campos(expresiones.ubicacion,e.target,'direction');
            break;
        case "noTel":
            campos(expresiones.telefono,e.target,'noTel');
            break;
        case "mail":
            campos(expresiones.email,e.target,'mail');
            break;
    }
}

entrada.forEach((input)=>{
    input.addEventListener('keyup', validacion);
    input.addEventListener('blur', validacion);
});

const datos = {
    cliente :false,
    direction :false,
    noTel :false,
    mail :false
}

formulario.addEventListener('submit', (e)=>{
    if (datos.cliente && datos.direction && datos.noTel && datos.mail) {
        alert("¡Tu información se envio con exito!. Nos comunicaremos contigo lo antes posible.");
    }else{
        alert("¡Por favor lleva el formulario!. Aun hay campos vacios.");
    }
}) 
