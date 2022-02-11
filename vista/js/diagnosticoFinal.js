const si7_1 = document.getElementById("si7_1_dx2");
const no7_1 = document.getElementById("no7_1_dx2");
const si7_2 = document.getElementById("si7_2_dx2");
const no7_2 = document.getElementById("no7_2_dx2");
const si7_3 = document.getElementById("si7_3_dx2");
const no7_3 = document.getElementById("no7_3_dx2");
const si7_4 = document.getElementById("si7_4_dx2");
const no7_4 = document.getElementById("no7_4_dx2");
const si7_5 = document.getElementById("si7_5_dx2");
const no7_5 = document.getElementById("no7_5_dx2");


const siete_uno_dos=document.getElementById("siete_uno_dos_dx2");
const siete_uno_tres=document.getElementById("siete_uno_tres_dx2");
const siete_dos_dos=document.getElementById("siete_dos_dos_dx2");
const siete_dos_tres=document.getElementById("siete_dos_tres_dx2");
const siete_tres_dos=document.getElementById("siete_tres_dos_dx2");
const siete_tres_tres=document.getElementById("siete_tres_tres_dx2");
const siete_cuatro_dos=document.getElementById("siete_cuatro_dos_dx2");
const siete_cuatro_tres=document.getElementById("siete_cuatro_tres_dx2");
const siete_cinco_dos=document.getElementById("siete_cinco_dos_dx2");
const siete_cinco_tres=document.getElementById("siete_cinco_tres_dx2");

// Agregando eventos click, para mostrar u ocultar opciones 2 y 3 en cada pregunta de la sesión 7
si7_1.addEventListener("click", function(){
    siete_uno_dos.style.display="block"
    siete_uno_dos.setAttribute("required", "");
    siete_uno_tres.style.display="block"
    siete_uno_tres.setAttribute("required", "");
})

no7_1.addEventListener("click", function(){
    siete_uno_dos.style.display="none"
    siete_uno_dos.removeAttribute("required");
    siete_uno_tres.style.display="none"
    siete_uno_tres.removeAttribute("required");
})



si7_2.addEventListener("click", function(){
    siete_dos_dos.style.display="block"
    siete_dos_dos.setAttribute("required", "");
    siete_dos_tres.style.display="block"
    siete_dos_tres.setAttribute("required", "");
})

no7_2.addEventListener("click", function(){
    siete_dos_dos.style.display="none"
    siete_dos_dos.removeAttribute("required");
    siete_dos_tres.style.display="none"
    siete_dos_tres.removeAttribute("required");
})



si7_3.addEventListener("click", function(){
    siete_tres_dos.setAttribute("required", "");
    siete_tres_dos.style.display="block"
    siete_tres_tres.setAttribute("required", "");
    siete_tres_tres.style.display="block"
})

no7_3.addEventListener("click", function(){
    siete_tres_dos.style.display="none"
    siete_tres_dos.removeAttribute("required");
    siete_tres_tres.style.display="none"
    siete_tres_tres.removeAttribute("required");
})



si7_4.addEventListener("click", function(){
    siete_cuatro_dos.style.display="block"
    siete_cuatro_dos.setAttribute("required", "");
    siete_cuatro_tres.style.display="block"
    siete_cuatro_tres.setAttribute("required", "");
})

no7_4.addEventListener("click", function(){
    siete_cuatro_dos.style.display="none"
    siete_cuatro_dos.removeAttribute("required");
    siete_cuatro_tres.style.display="none"
    siete_cuatro_tres.removeAttribute("required");
})



si7_5.addEventListener("click", function(){
    siete_cinco_dos.style.display="block"
    siete_cinco_dos.setAttribute("required", "");
    siete_cinco_tres.style.display="block"
    siete_cinco_tres.setAttribute("required", "");
})

no7_5.addEventListener("click", function(){
    siete_cinco_dos.style.display="none"
    siete_cinco_dos.removeAttribute("required");
    siete_cinco_tres.style.display="none"
    siete_cinco_tres.removeAttribute("required");
})