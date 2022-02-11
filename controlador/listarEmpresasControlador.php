<?php
session_start();
//Se requiere el archivo que contiene la clase usuarios, con la ruta para llamarlo desde la vista
require_once('../../modelo/empresasDx1.php');

$listar;
$idUsuario; 

//Se instancia la clase usuarios
$objEmpresa=new EmpresasDx1;

if (isset($_SESSION['Admin'])) {
       
  //Se invoca la función litarusuarios
  $listar=$objEmpresa->listarEmpresas();
}else {
  $idUsuario=$_SESSION['Extensionista'];
  //Se invoca la función litarusuarios
  $listar=$objEmpresa->listarEmpresasPorUsuario($idUsuario);
}


 ?>
