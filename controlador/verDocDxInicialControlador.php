<?php
//Se requiere el archivo que contiene la clase usuarios, con la ruta para llamarlo desde la vista
require_once('../../modelo/empresasDx1.php');

$id=$_GET['id'];

//Se instancia la clase usuarios
  $objEmpresa=new EmpresasDx1;

//Se invoca la función litarusuarios
$listar=$objEmpresa->verDocDxInicial($id);

$respuesta = $listar->fetch_assoc();

// echo "<pre>";
// print_r($respuesta);
// echo "</pre>";
// die();



 ?>
