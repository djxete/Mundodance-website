// Menu desplegable

let enlacesHeader = document.querySelectorAll(".enlaces-header")[0];
let nav1 = document.querySelectorAll(".navigation__i")[0];
let nav2 = document.querySelectorAll(".navigation__iQ")[0];


(nav1 || nav2).addEventListener("click", function () {
    enlacesHeader.classList.toggle("menudos");
});



//Formulario

let formName = document.getElementById("form__label-name").value;

let formSurnames = document.getElementById("form__label-surname").value;
let formEmail = document.getElementById("form__label-email");
let formTelefono = document.getElementById("form__label-telefono").value;

// Validar nombre y apellidos

document.getElementById("myForm").addEventListener("submit", function () {

    let formName = document.querySelectorAll(".form__input")[0].value;
    
    if (formName === "" || formName.lenght === 0 || !(isNaN(formName)) ) {
        document.getElementById("form__label-name").classList.add("claseNueva");
       
    }else{
        formEmail.setCustomValidity("Bien");
    }

})


/*if( !(/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)/.test(formEmail)) ) {
    return false;
  }*/


// Validar email

/*formEmail.addEventListener("input", function (event) {
    if (formEmail.validity.typeMismatch) {
        formEmail.setCustomValidity("Escriba un email correcto");
    } else {
        formEmail.setCustomValidity("");
    }
});*/


// Validar teléfono 9 números y sin espacios


/*formTelefono.addEventListener("input", function (event) {

    if (!(/^\d{9}$/.test(formTelefono))) {
        formTelefono.setCustomValidity("");
    } else {
        formTelefono.setCustomValidity("Introduce un número móvil correcto");
    };

}); */