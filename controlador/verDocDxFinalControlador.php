<?php
//Se requiere el archivo que contiene la clase usuarios, con la ruta para llamarlo desde la vista
require_once('../../modelo/diagnostico2.php');

$nit=$_GET['nit'];


//Se instancia la clase usuarios
  $objEmpresa=new Diagnostico2;

//Se invoca la función litarusuarios
$listar=$objEmpresa->verDocDxFinal($nit);

$respuesta = $listar->fetch_assoc();

// echo "<pre>";
// print_r($respuesta);
// echo "</pre>";
// die();



 ?>
