$brechaEstrategia = document.getElementById("brecha-estrategia").innerHTML;
$brechaGestion = document.getElementById("brecha-gestion").innerHTML;
$brechaEquipo = document.getElementById("brecha-equipo").innerHTML;
$brechaPotencial = document.getElementById("brecha-potencial").innerHTML;
$brechaPromedio = document.getElementById("brecha-promedio").innerHTML;

if ($brechaEstrategia < 0) {
    document.getElementById("brecha-estrategia").style.color="red";
}else if ($brechaEstrategia > 0){
    document.getElementById("brecha-estrategia").style.color="green";
}


if ($brechaGestion < 0) {
    document.getElementById("brecha-gestion").style.color="red";
}else if ($brechaGestion > 0){
    document.getElementById("brecha-gestion").style.color="green";
}


if ($brechaEquipo < 0) {
    document.getElementById("brecha-equipo").style.color="red";
}else if ($brechaEquipo > 0){
    document.getElementById("brecha-equipo").style.color="green";
}


if ($brechaPotencial < 0) {
    document.getElementById("brecha-potencial").style.color="red";
}else if ($brechaPotencial > 0){
    document.getElementById("brecha-potencial").style.color="green";
}


if ($brechaPromedio < 0) {
    document.getElementById("brecha-promedio").style.color="red";
}else if ($brechaPromedio > 0){
    document.getElementById("brecha-promedio").style.color="green";
}