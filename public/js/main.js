// Menu

let enlacesHeader = document.querySelectorAll(".enlaces-header")[0];
let nav1= document.querySelectorAll(".navigation__i")[0];
let nav2= document.querySelectorAll(".navigation__iQ")[0];

/*let nav2= document.querySelectorAll(".header__grid-navigationQ")[0];*/


(nav1 || nav2).addEventListener("click", function () {
    enlacesHeader.classList.toggle("menudos");
});



