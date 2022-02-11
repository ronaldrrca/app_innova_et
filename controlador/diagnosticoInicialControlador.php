<?php
require_once '../modelo/empresasDx1.php';
//Este archivo va a recibir todos los daros y redireccionar a los resultados
$extensionista = $_POST['extensionista'];
$nombreEmpresa = $_POST['nombreEmpresa'];
$nit = $_POST['nit'];
$sectorEconomico = $_POST['sectorEconomico'];
$nombreRepresentante = $_POST['nombreRepresentante'];
$telefonoContacto = $_POST['telefonoContacto'];
$email = $_POST['email'];
$paginaWeb = $_POST['paginaWeb'];
$plataformaInnovacion = $_POST['plataformaInnovacion'];
$camaraComercio = $_POST['camaraComercio'];
$numeroTrabajadores = $_POST['numeroTrabajadores'];
$ventasMensuales = $_POST['ventasMensuales'];
$descripcionEmpresa = $_POST['descripcionEmpresa'];
$intensidadProcesosIDI = $_POST['intensidadProcesosIDI'];
$tres_uno_uno = $_POST['tres_uno_uno']; 
$tres_uno_dos = $_POST['tres_uno_dos']; 
$tres_dos_uno = $_POST['tres_dos_uno']; 
$tres_dos_dos = $_POST['tres_dos_dos']; 
$tres_tres_uno = $_POST['tres_tres_uno']; 
$tres_tres_dos = $_POST['tres_tres_dos']; 
$tres_cuatro_uno = $_POST['tres_cuatro_uno']; 
$tres_cuatro_dos = $_POST['tres_cuatro_dos']; 
$tres_cinco_uno = $_POST['tres_cinco_uno']; 
$tres_cinco_dos= $_POST['tres_cinco_dos']; 
$tres_seis_uno = $_POST['tres_seis_uno']; 
$tres_seis_dos = $_POST['tres_seis_dos']; 

$cuatro_uno_uno = $_POST['cuatro_uno_uno']; 
$cuatro_uno_dos = $_POST['cuatro_uno_dos']; 
$cuatro_dos_uno = $_POST['cuatro_dos_uno']; 
$cuatro_dos_dos = $_POST['cuatro_dos_dos']; 
$cuatro_tres_uno = $_POST['cuatro_tres_uno']; 
$cuatro_tres_dos = $_POST['cuatro_tres_dos']; 
$cuatro_cuatro_uno = $_POST['cuatro_cuatro_uno']; 
$cuatro_cuatro_dos = $_POST['cuatro_cuatro_dos']; 
$cuatro_cinco_uno = $_POST['cuatro_cinco_uno']; 
$cuatro_cinco_dos= $_POST['cuatro_cinco_dos']; 
$cuatro_seis_uno = $_POST['cuatro_seis_uno']; 
$cuatro_seis_dos = $_POST['cuatro_seis_dos']; 

$cinco_uno_uno = $_POST['cinco_uno_uno']; 
$cinco_uno_dos = $_POST['cinco_uno_dos']; 
$cinco_dos_uno = $_POST['cinco_dos_uno']; 
$cinco_dos_dos = $_POST['cinco_dos_dos']; 
$cinco_tres_uno = $_POST['cinco_tres_uno']; 
$cinco_tres_dos = $_POST['cinco_tres_dos']; 
$cinco_cuatro_uno = $_POST['cinco_cuatro_uno']; 
$cinco_cuatro_dos = $_POST['cinco_cuatro_dos']; 
$cinco_cinco_uno = $_POST['cinco_cinco_uno']; 
$cinco_cinco_dos= $_POST['cinco_cinco_dos']; 

$seis_uno = $_POST['seis_uno']; 
$seis_dos = $_POST['seis_dos']; 
$seis_tres = $_POST['seis_tres']; 
$seis_cuatro = $_POST['seis_cuatro']; 
$seis_cinco = $_POST['seis_cinco']; 
$seis_seis = $_POST['seis_seis']; 
$seis_siete = $_POST['seis_siete']; 
$seis_ocho = $_POST['seis_ocho']; 

$siete_uno_uno = $_POST['siete_uno_uno'];
$siete_uno_dos = $_POST['siete_uno_dos'];
$siete_uno_tres = $_POST['siete_uno_tres'];
$siete_dos_uno = $_POST['siete_dos_uno'];
$siete_dos_dos = $_POST['siete_dos_dos'];
$siete_dos_tres = $_POST['siete_dos_tres'];
$siete_tres_uno = $_POST['siete_tres_uno'];
$siete_tres_dos = $_POST['siete_tres_dos'];
$siete_tres_tres = $_POST['siete_tres_tres'];
$siete_cuatro_uno = $_POST['siete_cuatro_uno'];
$siete_cuatro_dos = $_POST['siete_cuatro_dos'];
$siete_cuatro_tres = $_POST['siete_cuatro_tres'];
$siete_cinco_uno = $_POST['siete_cinco_uno'];
$siete_cinco_dos = $_POST['siete_cinco_dos'];
$siete_cinco_tres = $_POST['siete_cinco_tres'];

$ocho_uno = $_POST['ocho_uno'];

$nueve_uno = $_POST['nueve_uno'];

$diez_uno_uno = $_POST['diez_uno_uno'];
$diez_uno_dos = $_POST['diez_uno_dos'];
$diez_dos_uno = $_POST['diez_dos_uno'];
$diez_dos_dos = $_POST['diez_dos_dos'];
$diez_tres_uno = $_POST['diez_tres_uno'];
$diez_tres_dos = $_POST['diez_tres_dos'];
$diez_cuatro_uno = $_POST['diez_cuatro_uno'];
$diez_cuatro_dos = $_POST['diez_cuatro_dos'];
$diez_cinco_uno = $_POST['diez_cinco_uno'];
$diez_cinco_dos = $_POST['diez_cinco_dos'];
$diez_seis_uno = $_POST['diez_seis_uno'];
$diez_seis_dos = $_POST['diez_seis_dos'];
$diez_siete_uno = $_POST['diez_siete_uno'];
$diez_siete_dos = $_POST['diez_siete_dos'];
$diez_ocho_uno = $_POST['diez_ocho_uno'];
$diez_ocho_dos = $_POST['diez_ocho_dos'];
$diez_nueve_uno = $_POST['diez_nueve_uno'];
$diez_nueve_dos = $_POST['diez_nueve_dos'];

$once_uno = $_POST['once_uno'];
$once_dos = $_POST['once_dos'];
$once_tres = $_POST['once_tres'];
$once_cuatro = $_POST['once_cuatro'];
$once_cinco = $_POST['once_cinco'];

$doce_uno = $_POST['doce_uno'];
$doce_dos = $_POST['doce_dos'];
$doce_tres = $_POST['doce_tres'];
$doce_cuatro = $_POST['doce_cuatro'];
$doce_cinco = $_POST['doce_cinco'];
$doce_seis = $_POST['doce_seis'];
$doce_siete = $_POST['doce_siete'];
$doce_ocho = $_POST['doce_ocho'];
$doce_nueve = $_POST['doce_nueve'];





//     echo "Empresa: " . $nombreEmpresa . " " . "<br>" 
// . "Nit: " . $nit . " " . "<br>"
// . "Sector económico: " . $sectorEconomico . " " . "<br>"
// . "Representante: " . $nombreRepresentante . " " . "<br>"
// . "Teléfono contacto: " . $telefonoContacto . " " . "<br>"
// . "Correo elctrónico: " . $email . " " . "<br>"
// . "Página web: " . $paginaWeb . " " . "<br>"
// . "Plataforma de innovación: " . $plataformaInnovacion . " " . "<br>" 
// . "Registro CC: " . $camaraComercio . " " . "<br>"
// . "Número de trabajadores" . $numeroTrabajadores . " " . "<br>"
// . "Ventas mensuales" . $ventasMensuales . " " . "<br>"
// . "Descripción empresa: " . $descripcionEmpresa . " " . "<br>"
// . "IDI: " . $intensidadProcesosIDI . " " . "<br>"
// . "tres_uno_uno: " . $tres_uno_uno .  " " . "<br>"
// . "tres_uno_dos: " . $tres_uno_dos .  " " . "<br>"
// . "tres_dos_uno: " . $tres_dos_uno .  " " . "<br>"
// . "tres_dos:dos: " . $tres_dos_dos .  " " . "<br>"
// . "tres_tres_uno: " . $tres_tres_uno .  " " . "<br>"
// . "tres_tres_dos: " . $tres_tres_dos .  " " . "<br>"
// . "tres_cuatro_uno: " . $tres_cuatro_uno .  " " . "<br>"
// . "tres_cuatro_dos: " . $tres_cuatro_dos .  " " . "<br>"
// . "tres_cinco_uno: " . $tres_cinco_uno .  " " . "<br>"
// . "tres_cinco_dos: " . $tres_cinco_dos .  " " . "<br>"
// . "tres_seis_uno: " . $tres_seis_uno . " " . "<br>"
// . "tres_seis_dos: " . $tres_seis_dos. " " . "<br>"

// . "cuatro_uno_uno: " . $cuatro_uno_uno .  " " . "<br>"
// . "cuatro_uno_dos: " . $cuatro_uno_dos .  " " . "<br>"
// . "cuatro_dos_uno: " . $cuatro_dos_uno .  " " . "<br>"
// . "cuatro_dos_dos: " . $cuatro_dos_dos .  " " . "<br>"
// . "cuatro_tres_uno: " . $cuatro_tres_uno .  " " . "<br>"
// . "cuatro_tres_dos: " . $cuatro_tres_dos .  " " . "<br>"
// . "cuatro_cuatro_uno: " . $cuatro_cuatro_uno .  " " . "<br>"
// . "cuatro_cuatro_dos: " . $cuatro_cuatro_dos .  " " . "<br>"
// . "cuatro_cinco_uno: " . $cuatro_cinco_uno .  " " . "<br>"
// . "cuatro_cinco_dos: " . $cuatro_cinco_dos .  " " . "<br>"
// . "cuatro_seis_uno: " . $cuatro_seis_uno .  " " . "<br>"
// . "cuatro_seis_dos: " . $cuatro_seis_dos .  " " . "<br>"

// . "cinco_uno_uno: " . $cinco_uno_uno .  " " . "<br>"
// . "cinco_uno_dos: " . $cinco_uno_dos .  " " . "<br>"
// . "cinco_dos_uno: " . $cinco_dos_uno .  " " . "<br>"
// . "cinco_dos_dos: " . $cinco_dos_dos .  " " . "<br>"
// . "cinco_tres_uno: " . $cinco_tres_uno .  " " . "<br>"
// . "cinco_tres_dos: " . $cinco_tres_dos .  " " . "<br>"
// . "cinco_cuatro_uno: " . $cinco_cuatro_uno .  " " . "<br>"
// . "cinco_cuatro_dos: " . $cinco_cuatro_dos .  " " . "<br>"
// . "cinco_cinco_uno: " . $cinco_cinco_uno .  " " . "<br>"
// . "cinco_cinco_dos: " . $cinco_cinco_dos .  " " . "<br>"

// . "seis_uno: " . $seis_uno .  " " . "<br>"
// . "seis_dos: " . $seis_dos .  " " . "<br>"
// . "seis_tres: " . $seis_tres .  " " . "<br>"
// . "seis_cuatro: " . $seis_cuatro .  " " . "<br>"
// . "seis_cinco: " . $seis_cinco .  " " . "<br>"
// . "seis_seis: " . $seis_seis .  " " . "<br>"
// . "seis_siete: " . $seis_siete .  " " . "<br>"
// . "seis_ocho: " . $seis_ocho .  " " . "<br>"

// . "siete_uno_uno: " . $siete_uno_uno .  " " . "<br>"
// . "siete_uno_dos: " . $siete_uno_dos .  " " . "<br>"
// . "siete_uno_tres: " . $siete_uno_tres .  " " . "<br>"
// . "siete_dos_uno: " . $siete_dos_uno .  " " . "<br>"
// . "siete_dos_dos: " . $siete_dos_dos .  " " . "<br>"
// . "siete_dos_tres: " . $siete_dos_tres .  " " . "<br>"
// . "siete_tres_uno: " . $siete_tres_uno .  " " . "<br>"
// . "siete_tres_dos: " . $siete_tres_dos .  " " . "<br>"
// . "siete_tres_tres: " . $siete_tres_tres .  " " . "<br>"
// . "siete_cuatro_uno: " . $siete_cuatro_uno .  " " . "<br>"
// . "siete_cuatro_dos: " . $siete_cuatro_dos .  " " . "<br>"
// . "siete_cuatro_tres: " . $siete_cuatro_tres .  " " . "<br>"
// . "siete_cinco_uno: " . $siete_cinco_uno .  " " . "<br>"
// . "siete_cinco_dos: " . $siete_cinco_dos .  " " . "<br>"
// . "siete_cinco_tres: " . $siete_cinco_tres .  " " . "<br>"

// . "ocho_uno: " . $ocho_uno .  " " . "<br>" .  " " . "<br>"
// . "nueve_uno: " . $nueve_uno .  " " . "<br>" .  " " . "<br>"

// . "diez_uno_uno: " . $diez_uno_uno.  " " . "<br>" 
// . "diez_uno_dos: " . $diez_uno_dos.  " " . "<br>" 
// . "diez_dos_uno: " . $diez_dos_uno.  " " . "<br>" 
// . "diez_dos_dos: " . $diez_dos_dos.  " " . "<br>" 
// . "diez_tres_uno: " . $diez_tres_uno.  " " . "<br>" 
// . "diez_tres_dos: " . $diez_tres_dos.  " " . "<br>" 
// . "diez_cuatro_uno: " . $diez_cuatro_uno.  " " . "<br>" 
// . "diez_cuatro_dos: " . $diez_cuatro_dos.  " " . "<br>" 
// . "diez_cinco_uno: " . $diez_cinco_uno.  " " . "<br>" 
// . "diez_cinco_dos: " . $diez_cinco_dos.  " " . "<br>" 
// . "diez_seis_uno: " . $diez_seis_uno.  " " . "<br>" 
// . "diez_seis_dos: " . $diez_seis_dos.  " " . "<br>" 
// . "diez_siete_uno: " . $diez_siete_uno.  " " . "<br>" 
// . "diez_siete_dos: " . $diez_siete_dos.  " " . "<br>" 
// . "diez_ocho_uno: " . $diez_ocho_uno.  " " . "<br>"
// . "diez_ocho_dos: " . $diez_ocho_dos.  " " . "<br>" 
// . "diez_nueve_uno: " . $diez_nueve_uno.  " " . "<br>" 
// . "diez_nueve_dos: " . $diez_nueve_dos.  " " . "<br>" 

// . "once_uno: " . $once_uno.  " " . "<br>"
// . "once_uno: " . $once_dos.  " " . "<br>"
// . "once_uno: " . $once_tres.  " " . "<br>"
// . "once_uno: " . $once_cuatro.  " " . "<br>"
// . "once_uno: " . $once_cinco.  " " . "<br>" 

// . "doce_uno: " . $doce_uno.  " " . "<br>" 
// . "doce_dos: " . $doce_dos.  " " . "<br>" 
// . "doce_tres: " . $doce_tres.  " " . "<br>" 
// . "doce_cuatro: " . $doce_cuatro.  " " . "<br>" 
// . "doce_cinco: " . $doce_cinco.  " " . "<br>" 
// . "doce_seis: " . $doce_seis.  " " . "<br>" 
// . "doce_siete: " . $doce_siete.  " " . "<br>" 
// . "doce_ocho: " . $doce_ocho.  " " . "<br>" 
// . "doce_nueve: " . $doce_nueve.  " " . "<br>" 

// ;

// die();


$objEmpresasDx1 = new EmpresasDx1();
$crear = $objEmpresasDx1->crearDx1($extensionista, $nombreEmpresa, $nit, $sectorEconomico, $nombreRepresentante, $email,  
$telefonoContacto, $paginaWeb, $plataformaInnovacion, $camaraComercio, $numeroTrabajadores, $ventasMensuales, 
$descripcionEmpresa, $intensidadProcesosIDI, $tres_uno_uno, $tres_uno_dos, $tres_dos_uno, $tres_dos_dos, 
$tres_tres_uno, $tres_tres_dos, $tres_cuatro_uno, $tres_cuatro_dos, $tres_cinco_uno, $tres_cinco_dos, $tres_seis_uno,
$tres_seis_dos, $cuatro_uno_uno, $cuatro_uno_dos, $cuatro_dos_uno, $cuatro_dos_dos, $cuatro_tres_uno, $cuatro_tres_dos, 
$cuatro_cuatro_uno, $cuatro_cuatro_dos, $cuatro_cinco_uno, $cuatro_cinco_dos, $cuatro_seis_uno, $cuatro_seis_dos,
$cinco_uno_uno, $cinco_uno_dos, $cinco_dos_uno, $cinco_dos_dos, $cinco_tres_uno, $cinco_tres_dos, $cinco_cuatro_uno, 
$cinco_cuatro_dos, $cinco_cinco_uno, $cinco_cinco_dos, $seis_uno, $seis_dos, $seis_tres, $seis_cuatro, $seis_cinco,
$seis_seis, $seis_siete, $seis_ocho, $siete_uno_uno, $siete_uno_dos, $siete_uno_tres, $siete_dos_uno, $siete_dos_dos, 
$siete_dos_tres, $siete_tres_uno, $siete_tres_dos, $siete_tres_tres, $siete_cuatro_uno, $siete_cuatro_dos, $siete_cuatro_tres, 
$siete_cinco_uno, $siete_cinco_dos, $siete_cinco_tres, $ocho_uno, $nueve_uno, $diez_uno_uno, $diez_uno_dos, $diez_dos_uno, 
$diez_dos_dos, $diez_tres_uno, $diez_tres_dos, $diez_cuatro_uno, $diez_cuatro_dos, $diez_cinco_uno, $diez_cinco_dos,
$diez_seis_uno, $diez_seis_dos, $diez_siete_uno, $diez_siete_dos, $diez_ocho_uno, $diez_ocho_dos, $diez_nueve_uno,
$diez_nueve_dos, $once_uno, $once_dos, $once_tres, $once_cuatro, $once_cinco, $doce_uno, $doce_dos, $doce_tres, $doce_cuatro,
$doce_cinco, $doce_seis, $doce_siete, $doce_ocho, $doce_nueve);

if ($crear) {
  echo "<script type='text/javascript'>alert('El diagnóstico fue guardado con éxito');</script>";
  echo "<meta http-equiv='refresh' content='0;../vista/html/inicio.php' />";
  }else {
    echo "<script type='text/javascript'>alert('Ocurrió un error, por favor póngase en contacto con el administrador del sitio');</script>";
    header('location:../vista/html/inicio.php');
  }



  

  







?>