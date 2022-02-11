const icono_menu = document.getElementById("icono-menu");
const menu = document.getElementById("menu");
const cerrar_menu = document.getElementById("cerrar-menu");


icono_menu.addEventListener("click", function(){
   if (menu.style.display == "block") {
    menu.style.display = "none";
   }else{
    menu.style.display = "block";
   }
    
});


cerrar_menu.addEventListener("click", function(){
    menu.style.display = "none";
})