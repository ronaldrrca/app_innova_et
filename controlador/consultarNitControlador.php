<?php
//Se requiere el archivo que contiene la clase empresas, con la ruta para llamarlo desde la vista
require_once('../modelo/empresasDx1.php');
require_once('../modelo/diagnostico2.php');


$nit = $_POST['nit'];

//Se instancia la clase empresas
$objEmpresa=new EmpresasDx1;


//Se invoca la función consultarNit
$consultar=$objEmpresa->consultarNit($nit);
$respuesta=$consultar->fetch_assoc();
// echo "<pre>";
// print_r($respuesta);
// echo "</pre>";

// echo($respuesta["empresas_dx_ini_nombre"]);

    


if ($respuesta) {
    $objDx2 = new Diagnostico2;
    $consultaDx2=$objDx2->consultarNit($nit);
    $respuestaDx2=$consultaDx2->fetch_assoc();

    
    if ($respuestaDx2) {
        echo '<script> alert ("Usted ya cuenta con diagnóstico inicial y final"); </script>';
        echo "<meta http-equiv='refresh' content='0;../vista/html/inicio.php' />";
    }else {
        $idDxInicial = $respuesta['id_empresas_dx_ini'];
        $nombreEmpresa = $respuesta["empresas_dx_ini_nombre"];
        $sectorEconomico = $respuesta["empresas_sectorEconomico"];
        $representante = $respuesta["empresas_representante"];
        $email = $respuesta["empresas_email"];
        $telefono = $respuesta["empresas_numeroContacto"];
        $paginaWeb = $respuesta["empresas_paginaWeb"];
        $plataformaInnovacion = $respuesta["empresas_plataformaInnovacion"];
        $camaraComercio = $respuesta["empresas_registroCamaraComercio"];
        
    
        echo "<meta http-equiv='refresh' content='0;../vista/html/diagnosticoFinal.php?nit=$nit&idDxInicial=$idDxInicial&empresa=$nombreEmpresa
        &representante=$representante&email=$email&telefono=$telefono&sectorEconomico=$sectorEconomico&paginaWeb=$paginaWeb
        &plataformaInnovacion=$plataformaInnovacion&idDxInicial=$idDxInicial' />";
    }

       

}else{
    echo "<meta http-equiv='refresh' content='0;../vista/html/diagnosticoInicial.php?nit=$nit'  />";
}



    
 ?>
