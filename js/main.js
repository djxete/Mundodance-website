//----------- Menu desplegable

let enlacesHeader = document.querySelectorAll(".enlaces-header")[0];
let nav1 = document.querySelectorAll(".navigation__i")[0];
let nav2 = document.querySelectorAll(".navigation__iQ")[0];


(nav1 || nav2).addEventListener("click", function () {
    enlacesHeader.classList.toggle("menudos");
});


//---------- Blog1 y blog2

// let blog1 = window.location.href;
// let blog2 = window.location.href;
// console.log(blog2)

// if( blog1 = "http://localhost/pagina%20mundodance/blog1.html"){
//     document.getElementById("blog1").style.background = "grey";
//     document.getElementById("blog1").style.color = "grey";

// }

// if ( blog2 = "http://localhost/pagina%20mundodance/blog2.html"){
//         document.getElementById("blog2").style.background = "grey";
//         document.getElementById("blog2").style.color = "grey";
//     }

//---------- Formulario


const formulario = document.getElementById("myForm");
const inputs = document.querySelectorAll("#myForm input"); //accedemos a todos los inputs del formulario


const expresiones = {
    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    apellidos: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    telefono: /^\d{7,14}$/ // 7 a 14 numeros.

}

const campos = {
    nombre: false,
    apellidos: false,
    correo: false,
    telefono: false
}



const validarFormulario = (e) => {

    switch (e.target.name) {
        case "nombre":
            validarCampo(expresiones.nombre, e.target, "nombre");

            break;
        case "apellidos":
            validarCampo(expresiones.apellidos, e.target, "apellidos");

            break;
        case "correo":
            validarCampo(expresiones.correo, e.target, "correo");

            break;
        case "telefono":
            validarCampo(expresiones.telefono, e.target, "telefono");

            break;

        default:
            break;
    }

}


const validarCampo = (expresion, input, campo) => {
    if (expresion.test(input.value)) {
        document.getElementById(`grupo__${campo}`).classList.add("formulario__grupo-correcto");
        document.getElementById(`grupo__${campo}`).classList.remove("formulario__grupo-incorrecto");
        document.querySelector(`#grupo__${campo} i`).classList.remove("fa-times-circle");
        document.querySelector(`#grupo__${campo} i`).classList.add("fa-check-circle");

        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove("formulario__input-error-activo");

        campos[campo] = true;

    } else {

        document.getElementById(`grupo__${campo}`).classList.add("formulario__grupo-incorrecto");
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.add("fa-times-circle");
        document.querySelector(`#grupo__${campo} i`).classList.remove("fa-check-circle");



        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add("formulario__input-error-activo");

        campos[campo] = false;
    }
}


inputs.forEach((input) => {
    input.addEventListener("keyup", validarFormulario); //en cada input cada vez que levante la tecla se ejecuta la función validarFormulario
    input.addEventListener("blur", validarFormulario); //en cada input cada vez que le de con el ratón fuera de los inputs se ejecute la función validarFormulario

}) // por cada input me ejecutas una función






//------------ Validar formulario


//formulario.addEventListener("submit", (e) => {


            //e.preventDefault();

            const terminos = document.getElementById("terminos");


            if (campos.nombre && campos.apellidos && campos.correo && campos.telefono && terminos.checked) {

                
                formulario.reset();

                document.getElementById("formulario__mensaje-exito").classList.add("formulario__mensaje-exito-activo");
                setTimeout(() => {
                    document.getElementById("formulario__mensaje-exito").classList.remove("formulario__mensaje-exito-activo");
                }, 5000);

                document.querySelectorAll(".formulario__grupo-correcto").forEach((icono) => {
                    icono.classList.remove("formulario__grupo-correcto");
                });

                document.querySelector(".formulario__mensaje-p").classList.remove("formulario__mensaje-p-activo");

             


            } else {

                event.preventDefault();

                document.querySelector(".formulario__mensaje-p").classList.add("formulario__mensaje-p-activo");


                // setTimeout(() => {
                //     document.querySelector(".formulario__mensaje-p").classList.remove("formulario__mensaje-p-activo");

                // }, 5000);


            }

        

 //       });

    
