<?php
//Se requiere el archivo que contiene la clase empresas, con la ruta para llamarlo desde la vista
require_once('../../modelo/resultadoDx1.php');

$id;

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    
//Se instancia la clase empresas
$objResultado=new ResultadosDx1;

//Se invoca la función consultarNit
$consultar=$objResultado->obtenerResultado($id);
$respuesta=$consultar->fetch_assoc();
// echo "<pre>";
// print_r($respuesta);
// echo "</pre>";
// die();

//Se reciben todos los valores del resultado en variables 
$nombreEmpresa=$respuesta['empresas_dx_ini_nombre'];
$fechaDx=$respuesta['empresas_fecha'];
$nit=$respuesta['empresas_nit'];
$empresas_3_1_1=$respuesta['empresas_3.1.1'];
$empresas_3_2_1=$respuesta['empresas_3.2.1'];
$empresas_3_3_1=$respuesta['empresas_3.3.1'];
$empresas_3_4_1=$respuesta['empresas_3.4.1'];
$empresas_3_5_1=$respuesta['empresas_3.5.1'];
$empresas_3_6_1=$respuesta['empresas_3.6.1'];
$empresas_4_1_1=$respuesta['empresas_4.1.1'];
$empresas_4_3_1=$respuesta['empresas_4.3.1'];
$empresas_4_4_1=$respuesta['empresas_4.4.1'];
$empresas_4_5_1=$respuesta['empresas_4.5.1'];
$empresas_4_6_1=$respuesta['empresas_4.6.1'];
$empresas_5_2_1=$respuesta['empresas_5.2.1'];
$empresas_5_3_1=$respuesta['empresas_5.3.1'];
$empresas_5_4_1=$respuesta['empresas_5.4.1'];
$empresas_5_5_1=$respuesta['empresas_5.5.1'];
$ventasMensuales=$respuesta['empresas_ventasMensuales'];
$empresas_4_2_1=$respuesta['empresas_4.2.1'];
$empresas_5_1_1=$respuesta['empresas_5.1.1'];
$empresas_7_1_3=$respuesta['empresas_7.1.3'];
$empresas_7_2_3=$respuesta['empresas_7.2.3'];
$empresas_7_3_3=$respuesta['empresas_7.3.3'];
$empresas_7_4_3=$respuesta['empresas_7.4.3'];
$empresas_7_5_3=$respuesta['empresas_7.5.3'];

$rutaI_1;
$rutaI_2;
$rutaI_3;
$rutaI_4;
$rutaI_5;

if ($empresas_7_1_3 == "Ninguna") {
    $rutaI_1 = "Ninguna";
}elseif ($empresas_7_1_3 == "Identificación de oportunidad") {
    $rutaI_1 = "Identificación";
}elseif ($empresas_7_1_3 == "Ideación") {
    $rutaI_1 = "Ideación";
}elseif ($empresas_7_1_3 == "Desarrollo de prototipo (infografía, diseño en software, molde, maqueta, otro)") {
    $rutaI_1 = "Prototipo";
}elseif ($empresas_7_1_3 == "Diseño de un producto o servicio mínimo viable") {
    $rutaI_1 = "Diseño";
}elseif ($empresas_7_1_3 == "Validación inicial de mercado") {
    $rutaI_1 = "Validación";
}elseif ($empresas_7_1_3 == "Escalabilidad de la innovación") {
    $rutaI_1 = "Escalabilidad";
}elseif ($empresas_7_1_3 == "Comercialización") {
    $rutaI_1 = "Comercialización";
}else{
    $rutaI_1 = "";
}


if ($empresas_7_2_3 == "Ninguna") {
    $rutaI_2 = "Ninguna";
}elseif ($empresas_7_2_3 == "Identificación de oportunidad") {
    $rutaI_2 = "Identificación";
}elseif ($empresas_7_2_3 == "Ideación") {
    $rutaI_2 = "Ideación";
}elseif ($empresas_7_2_3 == "Desarrollo de prototipo (infografía, diseño en software, molde, maqueta, otro)") {
    $rutaI_2 = "Prototipo";
}elseif ($empresas_7_2_3 == "Diseño de un producto o servicio mínimo viable") {
    $rutaI_2 = "Diseño";
}elseif ($empresas_7_2_3 == "Validación inicial de mercado") {
    $rutaI_2 = "Validación";
}elseif ($empresas_7_2_3 == "Escalabilidad de la innovación") {
    $rutaI_2 = "Escalabilidad";
}elseif ($empresas_7_2_3 == "Comercialización") {
    $rutaI_2 = "Comercialización";
}else{
    $rutaI_2 = "";
}


if ($empresas_7_3_3 == "Ninguna") {
    $rutaI_3 = "Ninguna";
}elseif ($empresas_7_3_3 == "Identificación de oportunidad") {
    $rutaI_3 = "Identificación";
}elseif ($empresas_7_3_3 == "Ideación") {
    $rutaI_3 = "Ideación";
}elseif ($empresas_7_3_3 == "Desarrollo de prototipo (infografía, diseño en software, molde, maqueta, otro)") {
    $rutaI_3 = "Prototipo";
}elseif ($empresas_7_3_3 == "Diseño de un producto o servicio mínimo viable") {
    $rutaI_3 = "Diseño";
}elseif ($empresas_7_3_3 == "Validación inicial de mercado") {
    $rutaI_3 = "Validación";
}elseif ($empresas_7_3_3 == "Escalabilidad de la innovación") {
    $rutaI_3 = "Escalabilidad";
}elseif ($empresas_7_3_3 == "Comercialización") {
    $rutaI_3 = "Comercialización";
}else{
    $rutaI_3 = "";
}


if ($empresas_7_4_3 == "Ninguna") {
    $rutaI_4 = "Ninguna";
}elseif ($empresas_7_4_3 == "Identificación de oportunidad") {
    $rutaI_4 = "Identificación";
}elseif ($empresas_7_4_3 == "Ideación") {
    $rutaI_4 = "Ideación";
}elseif ($empresas_7_4_3 == "Desarrollo de prototipo (infografía, diseño en software, molde, maqueta, otro)") {
    $rutaI_4 = "Prototipo";
}elseif ($empresas_7_4_3 == "Diseño de un producto o servicio mínimo viable") {
    $rutaI_4 = "Diseño";
}elseif ($empresas_7_4_3 == "Validación inicial de mercado") {
    $rutaI_4 = "Validación";
}elseif ($empresas_7_4_3 == "Escalabilidad de la innovación") {
    $rutaI_4 = "Escalabilidad";
}elseif ($empresas_7_4_3 == "Comercialización") {
    $rutaI_4 = "Comercialización";
}else{
    $rutaI_4 = "";
}

if ($empresas_7_5_3 == "Ninguna") {
    $rutaI_5 = "Ninguna";
}elseif ($empresas_7_5_3 == "Identificación de oportunidad") {
    $rutaI_5 = "Identificación";
}elseif ($empresas_7_5_3 == "Ideación") {
    $rutaI_5 = "Ideación";
}elseif ($empresas_7_5_3 == "Desarrollo de prototipo (infografía, diseño en software, molde, maqueta, otro)") {
    $rutaI_5 = "Prototipo";
}elseif ($empresas_7_5_3 == "Diseño de un producto o servicio mínimo viable") {
    $rutaI_5 = "Diseño";
}elseif ($empresas_7_5_3 == "Validación inicial de mercado") {
    $rutaI_5 = "Validación";
}elseif ($empresas_7_5_3 == "Escalabilidad de la innovación") {
    $rutaI_5 = "Escalabilidad";
}elseif ($empresas_7_5_3 == "Comercialización") {
    $rutaI_5 = "Comercialización";
}else{
    $rutaI_5 = "";
}


//Variables para recuentos
$estrategia_contar_muy_bajo=0;
$estrategia_contar_bajo=0;
$estrategia_contar_medio=0;
$estrategia_contar_medio_alto=0;
$estrategia_contar_alto=0;

$gestion_contar_muy_bajo=0;
$gestion_contar_bajo=0;
$gestion_contar_medio=0;
$gestion_contar_medio_alto=0;
$gestion_contar_alto=0;

$equipo_contar_muy_bajo=0;
$equipo_contar_bajo=0;
$equipo_contar_medio=0;
$equipo_contar_medio_alto=0;
$equipo_contar_alto=0;


//Variables con porcentajes
$porcentaje_muy_bajo=10;
$porcentaje_bajo=30;
$porcentaje_medio=50;
$porcentaje_medio_alto=70;
$porcentaje_alto=100;

//Array que itera valores de estartegia para contarlos  
$array_estrategia=[$empresas_3_1_1, $empresas_3_2_1, $empresas_3_3_1, $empresas_3_4_1, $empresas_3_5_1, $empresas_3_6_1];
foreach ($array_estrategia as $key => $value) {
    if ($value == "Muy bajo") {
        $estrategia_contar_muy_bajo++; 
    }elseif ($value == "Bajo") {
        $estrategia_contar_bajo++;
    }elseif ($value == "Medio") {
        $estrategia_contar_medio++;
    }elseif ($value == "Medio alto") {
        $estrategia_contar_medio_alto++;
    }elseif ($value == "Alto") {
        $estrategia_contar_alto++;
    }else{}
}

//Array que itera valores de gestión para contarlos  
$array_gestion=[$empresas_4_1_1, $empresas_4_3_1, $empresas_4_4_1, $empresas_4_5_1, $empresas_4_6_1];
foreach ($array_gestion as $key => $value) {
    if ($value == "Muy bajo") {
        $gestion_contar_muy_bajo++; 
    }elseif ($value == "Bajo") {
        $gestion_contar_bajo++;
    }elseif ($value == "Medio") {
        $gestion_contar_medio++;
    }elseif ($value == "Medio alto") {
        $gestion_contar_medio_alto++;
    }elseif ($value == "Alto") {
        $gestion_contar_alto++;
    }else{}
}


//Array que itera valores de equipo para contarlos  
$array_equipo=[$empresas_5_2_1, $empresas_5_3_1, $empresas_5_4_1, $empresas_5_5_1];
foreach ($array_equipo as $key => $value) {
    if ($value == "Muy bajo") {
        $equipo_contar_muy_bajo++; 
    }elseif ($value == "Bajo") {
        $equipo_contar_bajo++;
    }elseif ($value == "Medio") {
        $equipo_contar_medio++;
    }elseif ($value == "Medio alto") {
        $equipo_contar_medio_alto++;
    }elseif ($value == "Alto") {
        $equipo_contar_alto++;
    }else{}
}


// echo "mb" .$equipo_contar_muy_bajo . "<br>" .
// "bajo".$equipo_contar_bajo . "<br>" .
// "medio".$equipo_contar_medio . "<br>" .
// "ma".$equipo_contar_medio_alto . "<br>" .
// "al".$equipo_contar_alto;
// die();

//Formaula para calcular el valor de la estrategia
$estrategia = ($estrategia_contar_muy_bajo * $porcentaje_muy_bajo + $estrategia_contar_bajo * $porcentaje_bajo + $estrategia_contar_medio * $porcentaje_medio + ($estrategia_contar_medio_alto * $porcentaje_medio_alto + $estrategia_contar_alto * $porcentaje_alto)) / 100;

//Formaula para calcular el valor de la gestión
$gestion = (($gestion_contar_muy_bajo * $porcentaje_muy_bajo) + ($gestion_contar_bajo * $porcentaje_bajo) + ($gestion_contar_medio * $porcentaje_medio) + ($gestion_contar_medio_alto * $porcentaje_medio_alto) + ($gestion_contar_alto * $porcentaje_alto) ) / 100 +1;

//Formaula para calcular el valor del equipo de trabajo
$equipo = (($equipo_contar_muy_bajo * $porcentaje_muy_bajo) + ($equipo_contar_bajo * $porcentaje_bajo) + ($equipo_contar_medio * $porcentaje_medio) + ($equipo_contar_medio_alto * $porcentaje_medio_alto) + ($equipo_contar_alto * $porcentaje_alto) ) / 100 + 2;

//Variables de crecimiento: crecimientoA = ventas mensuales. 
$crecimientoA; 

if ($ventasMensuales == "0 a 10.000.000") {
    $crecimientoA = 25;
}elseif ($ventasMensuales == "10.000.000 a 20.000.000") {
    $crecimientoA = 50;
}elseif ($ventasMensuales == "20.000.000 a 50.000.000") {
    $crecimientoA = 75;
}elseif ($ventasMensuales == "Más de 50.000.000") {
    $crecimientoA = 100;
}else {
    # code...
}

//crecimientoB = asiignación anual para procesos de innovación
$crecimientoB;

if ($empresas_4_2_1 == "0 a 1.000.000") {
    $crecimientoB = 33;
}elseif ($empresas_4_2_1 == "1.000.000 a 10.000.000") {
    $crecimientoB = 66;
}elseif ($empresas_4_2_1 == "Más de 10.000.000") {
    $crecimientoB = 100;
}else {
    # code...
}

//crecimientoB = Núnero de colaboradores para el proceso de innovación
$crecimientoC;

if ($empresas_5_1_1 == "Entre 1 y 3 colaboradores") {
    $crecimientoC = 33;
}elseif ($empresas_5_1_1 == "Entre 3 y 5 colaboradores") {
    $crecimientoC = 66;
}elseif ($empresas_5_1_1 == "Más de 5 colaboradores") {
    $crecimientoC = 100;
}

$potencialCrecimiento = round((($crecimientoA + $crecimientoB + $crecimientoC) / 3) * 6 / 100, 1) ;
$promedioMedidores = round(($estrategia + $gestion + $equipo + $potencialCrecimiento) / 4, 1); //Se redondea el valor de la variable a un número flotante con un solo decimal.
$perfil;


//Calculando el perfil
if ($promedioMedidores < 1.5) {
    $perfil = "Principiante";
}elseif ($promedioMedidores > 1.5 && $promedioMedidores < 3 ) {
    $perfil = "Gestor";
}elseif ($promedioMedidores > 3 && $promedioMedidores < 4.5 ) {
    $perfil = "Ejecutivo";
}elseif ($promedioMedidores >= 4.5) {
    $perfil = "Transformador";
}



$bmv;
$bmp;
$bmt;
$bmux;
$bmps;
//Calculando la rura de / Innovación oferta de valor BMV (Business, Model Value)
if ($empresas_7_1_3 == "" || $empresas_7_1_3 == "Ninguna") {
    $bmv = 0;
}elseif ($empresas_7_1_3 == "Identificación de oportunidad") {
    $bmv = 1;
}elseif ($empresas_7_1_3 == "Ideación") {
    $bmv = 2;
}elseif ($empresas_7_1_3 == "Desarrollo de prototipo (infografía, diseño en software, molde, maqueta, otro)") {
    $bmv = 3;
}elseif ($empresas_7_1_3 == "Diseño de un producto o servicio mínimo viable") {
    $bmv = 4;
}elseif ($empresas_7_1_3 == "Validación Inicial de Mercado") {
    $bmv = 5;
}elseif ($empresas_7_1_3 == "Escalabilidad de la innovación") {
    $bmv = 6;
}
elseif ($empresas_7_1_3 == "Comercialización") {
    $bmv = 7;
}else {
    # code...
}


//Calculando la rura de / Innovación mejora de producto BMP (Business Model Product)
if ($empresas_7_2_3 == "" || $empresas_7_2_3 == "Ninguna") {
    $bmp = 0;
}elseif ($empresas_7_2_3 == "Identificación de oportunidad") {
    $bmp = 1;
}elseif ($empresas_7_2_3 == "Ideación") {
    $bmp = 2;
}elseif ($empresas_7_2_3 == "Desarrollo de prototipo (infografía, diseño en software, molde, maqueta, otro)") {
    $bmp = 3;
}elseif ($empresas_7_2_3 == "Diseño de un producto o servicio mínimo viable") {
    $bmp = 4;
}elseif ($empresas_7_2_3 == "Validación Inicial de Mercado") {
    $bmp = 5;
}elseif ($empresas_7_2_3 == "Escalabilidad de la innovación") {
    $bmp = 6;
}
elseif ($empresas_7_2_3 == "Comercialización") {
    $bmp = 7;
}else {
    # code...
}

//Calculando la rura de / Innovación tecnología de mercado BMT (Business Model Technology)
if ($empresas_7_3_3 == "" || $empresas_7_3_3 == "Ninguna") {
    $bmt = 0;
}elseif ($empresas_7_3_3 == "Identificación de oportunidad") {
    $bmt = 1;
}elseif ($empresas_7_3_3 == "Ideación") {
    $bmt = 2;
}elseif ($empresas_7_3_3 == "Desarrollo de prototipo (infografía, diseño en software, molde, maqueta, otro)") {
    $bmt = 3;
}elseif ($empresas_7_3_3 == "Diseño de un producto o servicio mínimo viable") {
    $bmt = 4;
}elseif ($empresas_7_3_3 == "Validación Inicial de Mercado") {
    $bmt = 5;
}elseif ($empresas_7_3_3 == "Escalabilidad de la innovación") {
    $bmt = 6;
}
elseif ($empresas_7_3_3 == "Comercialización") {
    $bmt = 7;
}else {
    # code...
}

//Calculando la rura de / Innovación en experiencia de usuario BMUx (Business Model Usuario experience)
if ($empresas_7_4_3 == "" || $empresas_7_4_3 == "Ninguna") {
    $bmux = 0;
}elseif ($empresas_7_4_3 == "Identificación de oportunidad") {
    $bmux = 1;
}elseif ($empresas_7_4_3 == "Ideación") {
    $bmux = 2;
}elseif ($empresas_7_4_3 == "Desarrollo de prototipo (infografía, diseño en software, molde, maqueta, otro)") {
    $bmux = 3;
}elseif ($empresas_7_4_3 == "Diseño de un producto o servicio mínimo viable") {
    $bmux = 4;
}elseif ($empresas_7_4_3 == "Validación Inicial de Mercado") {
    $bmux = 5;
}elseif ($empresas_7_4_3 == "Escalabilidad de la innovación") {
    $bmux = 6;
}
elseif ($empresas_7_4_3 == "Comercialización") {
    $bmux = 7;
}else {
    # code...
}


//Calculando la rura de / Innovación mejora de proceso BMPs (Business Model Procces)
if ($empresas_7_5_3 == "" || $empresas_7_5_3 == "Ninguna") {
    $bmps = 0;
}elseif ($empresas_7_5_3 == "Identificación de oportunidad") {
    $bmps = 1;
}elseif ($empresas_7_5_3 == "Ideación") {
    $bmps = 2;
}elseif ($empresas_7_5_3 == "Desarrollo de prototipo (infografía, diseño en software, molde, maqueta, otro)") {
    $bmps = 3;
}elseif ($empresas_7_5_3 == "Diseño de un producto o servicio mínimo viable") {
    $bmps = 4;
}elseif ($empresas_7_5_3 == "Validación Inicial de Mercado") {
    $bmps = 5;
}elseif ($empresas_7_5_3 == "Escalabilidad de la innovación") {
    $bmps = 6;
}
elseif ($empresas_7_5_3 == "Comercialización") {
    $bmps = 7;
}else {
    # code...
}
}else {
    
}







// echo "estrategia_muy bajo: " . $estrategia_contar_muy_bajo . "<br>";
// echo "estrategia_bajo: " .  $estrategia_contar_bajo . "<br>";
// echo "estrategia_medio: " . $estrategia_contar_medio . "<br>";
// echo "estrategia_medio_alto: " . $estrategia_contar_medio_alto . "<br>";
// echo "estrategia_alto: " . $estrategia_contar_alto . "<br>"; 

// echo "gestion_muy bajo: " . $gestion_contar_muy_bajo . "<br>";
// echo "gestion_bajo: " .  $gestion_contar_bajo . "<br>";
// echo "gestion_medio: " . $gestion_contar_medio . "<br>";
// echo "gestion_medio_alto: " . $gestion_contar_medio_alto . "<br>";
// echo "gestion_alto: " . $gestion_contar_alto . "<br>"; 

// echo "equipo_muy bajo: " . $equipo_contar_muy_bajo . "<br>";
// echo "equipo_bajo: " .  $equipo_contar_bajo . "<br>";
// echo "equipo_medio: " . $equipo_contar_medio . "<br>";
// echo "equipo_medio_alto: " . $equipo_contar_medio_alto . "<br>";
// echo "equipo_alto: " . $equipo_contar_alto . "<br>"; 



// echo "estrategia: " . $estrategia . "<br>";
// echo "gestion: " . $gestion . "<br>";
// echo "equipo: " . $equipo  . "<br>";
// echo "potencia crecimiento: " . $potencialCrecimiento . "<br>";
// echo "promedio : " . $promedioMedidores. "<br>";
// echo "perfil: " . $perfil;
// die();





// if ($respuesta) {
//     echo "<meta http-equiv='refresh' content='0;../vista/html/diagnosticoFinal.php' />";
// }else{
//     echo "<meta http-equiv='refresh' content='0;../vista/html/diagnosticoInicial.php' />";
// }



 ?>
