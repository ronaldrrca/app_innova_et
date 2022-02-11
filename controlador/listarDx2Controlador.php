<?php
//Se requiere el archivo que contiene la clase usuarios, con la ruta para llamarlo desde la vista
require_once('../../modelo/diagnostico2.php');

//Se instancia la clase usuarios
  $objDiagnostico2=new Diagnostico2;

//Se invoca la función litarusuarios
$listarDx=$objDiagnostico2->listarDx();

$resultadosDx2 = array();

while ($resul = $listarDx->fetch_object()) {
  array_push($resultadosDx2, $resul->dxFinal_nit) ;
}








 ?>
